<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Category;
use App\Events\LogCreated;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\Exports\GuestExport;
use App\Loket_guest;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use App\Events\LogEvent;

// use RealRashid\SweetAlert\Facades\Alert;
// use Alert;

class GuestController extends Controller
{
    public function createQR($guest,$lastNumber){
        $appUrl = config('app.url');
       
        $id=$guest->id;
        $encryptedId=Crypt::encryptString($id);

        $url = $appUrl.'/guest-qrcode/'.$encryptedId;
        $qrCode = QrCode::format('png')->size(500)->generate($url);
        $category=$guest->category->slug;

        $name=explode(" ",$category)[0].'-'.str_pad($lastNumber,4,'0',STR_PAD_LEFT);
        $fileName = 'guest-qr/'.$name.'.jpg';
        Storage::put('public/'.$fileName, $qrCode);
        return $fileName;
    }
    
    public function deleteQR($guest){
        $url=explode("storage",$guest->qr);
        Storage::delete('public/'.$url[1]);
    }

    public function index(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $guests = Guest::where('name', 'like', '%'.$search.'%')
            ->orWhere('qr', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $guests = Guest::paginate(10);
        }

        return view('admin.guests.index', ['guests'=> $guests,'search'=>$search]);
    }

    // public function search(Request $request){
    //     $search = $request->get('search');
    //     if($search){
    //         $guests = Guest::where('name', 'like', '%'.$search.'%')
    //         ->orWhere('qr', 'like', '%'.$search.'%')
    //         ->paginate(20);
    //         return redirect()->route('guest.index')->with( ['guests'=> $guests,'search'=>$search] );
    //         // return back()->with(['guests'=> $guests,'search'=>$search]);
    //     }
    //     return back();
    // }
    // public function indexSorting(){
    //     $guests = Guest::sortable()->paginate(20);

    //     return view('admin.guests.index', ['guests'=> $guests]);
    // }

    public function create(){
        $categories = Category::all();
        return view('admin.guests.create',['categories'=>$categories]);
    }

    public function store(Request $request){
        try{
            DB::beginTransaction();
            $inputs = request()->validate([
                'name'=> 'required',
                'category_id'=> 'required',
            ]);
            $category= Category::where('id', $inputs['category_id'])->first();
            $lastUpdate= $category->updated_at;

            //create guest
            $guest = Guest::create([
                'name'=>$inputs['name'],
                'category_id'=>$inputs['category_id'],
            ]);
        

            $newCategory= Category::where('id', $inputs['category_id'])->first();
            $newLastUpdate= $newCategory->updated_at;

            if($newLastUpdate->eq($lastUpdate)){
                $newCategory->total_guest+=1;
                $newCategory->save();
                $lastNumber= $newCategory->total_guest;
                //generate qr url
                $fileName=GuestController::createQR($guest,$lastNumber);
                $guest->qr = $fileName;
                $guest->save();

                DB::commit();
                session()->flash('Guest-created-message', 'Guest was created ');
                return redirect()->route('guest.index');
            }else{
                abort();
            }
        }catch (\Throwable $th) {
            DB::rollback();
            //throw $th;
            session()->flash('message', 'Please try again');
            return redirect()->route('guest.create');

        }
    }

    public function edit(Guest $guest){
        return view('admin.guests.edit', ['guest'=> $guest]);
    }

    public function updateName(Guest $guest){
        $inputs = request()->validate([
            'name'=> 'required',
        ]);

        $guest->name = $inputs['name'];
        $guest->save();
        session()->flash('guest-updated-message', 'Guest with name '.$inputs['name'].' was updated');
        return back();
    }
    public function updateBarcodeId(Guest $guest){
        try{
            $inputs = request()->validate([
                'barcode_id'=> 'required',
            ]);
            $loketGuest=Loket_guest::where('barcode_id', $inputs['barcode_id'])->first();
            if($loketGuest===null){
                // session()->flash('message', 'Not Found');
                abort(500,'Not Found');
            }
            if($loketGuest->category!==$guest->category->name){
                // session()->flash('message', 'Unmatched Ticket Type '.$guest->category->name.' with '.$loketGuest->category);
                abort(500,'Unmatched Ticket Type '.$guest->category->name.' with '.$loketGuest->category);
            }
            $guest->name = $loketGuest->name;
            $guest->loket_guest_id = $loketGuest->id;
            $guest->save();
            session()->flash('success-message', 'Scan Success');
            return back();
        }catch(\Throwable $th){
            if($th->getCode()==="23000"){
                session()->flash('message', 'Duplicated');
            }else{
                session()->flash('message', $th->getMessage());
            }
            return back();
        }
    }

    public function update(Guest $guest){

        $inputs = request()->validate([
            'name'=> 'required',
        ]);
        $guest->name = $inputs['name'];
        $guest->save();
        session()->flash('guest-updated-message', 'Guest with name '.$inputs['name'].' was updated');
        return redirect()->route('guest.index');
    }

    public function destroy(Guest $guest ,Request $request){
        GuestController::deleteQR($guest);
        $guest->delete();
        $request->session()->flash('message', 'Guest was deleted');
        return back();
    }

    public function qrCheck($text)
    {
       
        if($text==="start"){
            return view('home.guests.index', ['guest'=> null,'lastStatus'=>null]);
        }

        $id=Crypt::decryptString($text);
        $guest = Guest::where('id', $id)->first();

        // $logs=$guest->logs()->get();
        // $length=sizeof($logs);
     
        // $lastStatus=$length===0?"out":$logs[$length-1]->status;
        return view('home.guests.index', ['guest'=> $guest]);
    }

    public function guestIn(Guest $guest)
    {
        $log=$guest->logs()->create([
            "status"=>'in',
        ])->save();
        // dd($log);
        // $object = new \stdClass();
        // $object->log= $log;
        // $object->guest_name= $guest->name;
        // broadcast(new LogCreated($object));

        session()->flash('log-success-message', 'Log Success');
        return back();
    }
    // public function guestOut(Guest $guest)
    // {
    //     $guest->logs()->create([
    //         "status"=>'out',
    //     ])->save();
      
    //     return back();
    // }

    public function logs(Guest $guest){
        $logs=$guest->logs()->get();
        return view('admin.guests.logs', ['logs'=> $logs,'guest'=>$guest]);

    }
    
    public function export_excel()
	{
		return Excel::download(new GuestExport, 'guest.xlsx');
	}
}
