<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Early_participant;
use Illuminate\Support\Facades\Crypt;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\QRMail;
use App\Exports\EarlyParticipantExport;
use Maatwebsite\Excel\Facades\Excel;
class EarlyParticipantController extends Controller
{
    // public function createQR($participant){
    //     $appUrl = config('app.url');
    //     $encryptedEmail=Crypt::encryptString($participant->email);
    //     $url = $appUrl.'/early-participant-qrcode/'.$encryptedEmail;
    //     $qrCode = QrCode::format('png')->size(500)->generate($url);
    //     $fileName = 'early-participant-qr/'.$encryptedEmail.'.jpg';
    //     Storage::put('public/'.$fileName, $qrCode);
    //     return $fileName;
    // }
    // public function deleteQR($participant){
    //     $url=explode("storage",$participant->qr);
    //     Storage::delete('public/'.$url[1]);
    // }

    public function index(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $participants = Early_participant::where('name', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->orWhere('phone', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $participants = Early_participant::paginate(10);
        }
        return view('admin.early-participants.index', ['participants'=> $participants,'search'=>$search]);
    }
    public function create(){
        return view('admin.early-participants.create');
    }
    public function store(Request $request){

        $inputs = request()->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'location'=> 'required',
        ]);
    
        $participant = Early_participant::create([
            'name'=>$inputs['name'],
            'phone'=>$inputs['phone'],
            'location'=>$inputs['location'],
        ]);

            // $fileName = EarlyParticipantController::createQR($participant);
            // $participant->qr = $fileName;
        $participant->save();

        session()->flash('early-participant-created-message', 'Early Participant with name '.$inputs['name'].' was created ');

        return redirect()->route('early-participant.index');

    }

    public function edit(Early_participant $early_participant){
        return view('admin.early-participants.edit', ['participant'=> $early_participant]);
    }

    public function update(Early_participant $early_participant){
        $inputs = request()->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'location'=>'required',
        ]);
        // $isEmailChanged=$early_participant->email!== $inputs['email'];

       //email change or status reject or status changed to approved will delete qr
    //    if($isEmailChanged ){
    //     EarlyParticipantController::deleteQR($early_participant);
    //     if($isEmailChanged){
    //         $early_participant->is_sent=0;
    //     }
    //     }

        $early_participant->name = $inputs['name'];
        $early_participant->phone = $inputs['phone'];
        $early_participant->location = $inputs['location'];

        // if($isEmailChanged){
        //     $fileName = EarlyParticipantController::createQR($early_participant);
        //     $early_participant->qr = $fileName;
        // }
        $early_participant->save();

        session()->flash('early-participant-updated-message', 'Early Participant with name '.$inputs['name'].' was updated');
        return redirect()->route('early-participant.index');
    }

    public function destroy(Early_participant $early_participant ,Request $request){
        // EarlyParticipantController::deleteQR($early_participant);
        $early_participant->delete();
        $request->session()->flash('message', 'Early Participant was deleted');
        return back();
    }

    // public function send(Early_participant $early_participant){
    //     try{
    //         $name=$early_participant->name;
    //         $email=$early_participant->email;
    //         $qr=$early_participant->qr;
          
    //         Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'Early Participant']));

    //         session()->flash('early-participant-qr-message', 'QR for '.$name.' was sent');
    //         $early_participant->is_sent=1;
    //         $early_participant->save();

    //         return redirect()->route('early-participant.index');
    //     }catch (\Throwable $th) {
    //         return response()->json([
    //             'status'  => false,
    //             'message' => $th->getMessage()
    //         ]);
    //     }
    // }
    // public function qrCheck($email)
    // {
    //     $decryptedEmail=Crypt::decryptString($email);
    //     $participant = Early_participant::where('email', $decryptedEmail)->first();
    //     return view('home.early-participants.index', ['participant'=> $participant]);
    // }
    // public function qrPresent(Early_participant $early_participant)
    // {
    //     $early_participant->is_present=1;
    //     $early_participant->save();
    //     return back();
    // }

     public function earlyParticipantForm($location)
    {
        $locations = [
            'swarna-grande' => 'Swarna Grande',
            'kartika-residence' => 'Kartika Residence',
            'tembong-city'=> 'Tembong City'
          ];

        if (array_key_exists($location, $locations)) {
        //     $url='https://citraswarna.stagingpurpose.online/early-participant/'.$location;
        //     $qrCode = QrCode::format('png')->size(500)->generate($url);
        // $fileName = 'early-participant-qr/'.$location.'.jpg';
        // Storage::put('public/'.$fileName, $qrCode);
        // return $fileName;
        return view('home.early-participants.index', ['location'=> $locations[$location]]);
        }else{
            abort(404);
        }
  
    }
    public function register(Request $request){

        $inputs = request()->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'location'=> 'required',
        ]);

        $participant = Early_participant::create([
            'name'=>$inputs['name'],
            'phone'=>$inputs['phone'],
            'location'=>$inputs['location'],
        ]);

        $participant->save();

        session()->flash('early-participant-created-message', 'Success');

        return back();

    }
    public function export_excel()
	{
		return Excel::download(new EarlyParticipantExport, 'early-participant.xlsx');
	}
}
