<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Illuminate\Support\Facades\Mail;
use App\Mail\QRMail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ParticipantsImport;
use App\Jobs\ProcessMail;
use File;
use App\Exports\ParticipantExport;

class ParticipantController extends Controller
{
    //
    public function createQR($participant){
        $appUrl = config('app.url');
        $encryptedEmail=Crypt::encryptString($participant->email);
        $url = $appUrl.'/participant-qrcode/'.$encryptedEmail;
        $qrCode = QrCode::format('png')->size(500)->generate($url);
        $fileName = 'participant-qr/'.$encryptedEmail.'.jpg';
        Storage::put('public/'.$fileName, $qrCode);
        return $fileName;
    }
    public function deleteQR($participant){
        $url=explode("storage",$participant->qr);
        Storage::delete('public/'.$url[1]);
    }

    public function index(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $participants = Participant::orderBy('id','desc')->where('name', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $participants = Participant::orderBy('id','desc')->paginate(10);
        }
        $waiting=Participant::where('is_sent',false)->count();
        // dd($waiting);
        return view('admin.participants.index', ['participants'=> $participants,'search'=>$search,'waiting'=>$waiting]);
    }

    public function bt1(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $participants = Participant::whereNotNull('presence1')->where('name', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $participants = Participant::whereNotNull('presence1')->paginate(10);
        }
        return view('admin.participants.bt1', ['participants'=> $participants,'search'=>$search]);
    }
    public function bt2(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $participants = Participant::whereNotNull('presence2')->where('name', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $participants = Participant::whereNotNull('presence2')->paginate(10);
        }
        return view('admin.participants.bt2', ['participants'=> $participants,'search'=>$search]);
    }
    public function bt3(Request $request){
        $search = $request->query('search');
        if (!empty($search)) {
            $participants = Participant::whereNotNull('presence3')->where('name', 'like', '%'.$search.'%')
            ->orWhere('id', 'like', '%'.$search.'%')
            ->orWhere('email', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $participants = Participant::whereNotNull('presence3')->paginate(10);
        }
        return view('admin.participants.bt3', ['participants'=> $participants,'search'=>$search]);
    }

    public function create(){
        // $this->authorize('create', Participant::class);
        return view('admin.participants.create');
    }

    public function store(Request $request){

        $inputs = request()->validate([
            'name'=> 'required',
            'email'=> ['required', 'email', 'max:255'],
            'company'=> 'required',
            'position' => 'required',
            'ef'=>'required_if:bt,==,""',
            'bt'=>'required_if:ef,==,""',
            'session'=>'required_if:bt,==,"BT"',
            'status'=>'required',
        ]);
        $ef= array_key_exists('ef', $inputs);
        $bt= array_key_exists('bt', $inputs);
        $position= array_key_exists('position', $inputs);
        $category=$ef && $bt ? 'all' : ($ef ? $inputs['ef'] : $inputs['bt']);
        $status=$inputs['status'];
        $participant = Participant::create([
            'name'=>$inputs['name'],
            'email'=>$inputs['email'],
            'company'=>$inputs['company'],
            'position'=>$position?$inputs['position']:'',
            'category'=>$category,
            'registered_session'=>$bt?$inputs['session']:'',
            'status'=>$status,
        ]);

        if($status==="approved"){
            $fileName = ParticipantController::createQR($participant);
            $participant->qr = $fileName;
            $participant->save();
        }

        session()->flash('participant-created-message', 'Participant with name '.$inputs['name'].' was created ');

        return redirect()->route('participant.index');

    }

    public function storeMultiple(Request $request){
        // Participant::truncate();
        // dd('asd');
        $emptyArray = []; 
        request()->validate([
            'file'=> ['required','file'],
            'name'=>'required',
            'company'=>'required',
            'email'=>'required',
            'position'=>'required',
            // 'session'=>'required', ef if empty
            'status'=>'required',
        ]);

        $skip=$request['row']?(int)$request['row']-1:0;
        $name=$request['name']?(int)$request['name']-1:null;
        $company=$request['company']?(int)$request['company']-1:null;
        $email=$request['email']?(int)$request['email']-1:null;
        $position=$request['position']?(int)$request['position']-1:null;
        $session=$request['session']?(int)$request['session']-1:null;
        $status=$request['status']?(int)$request['status']-1:null;

     

        $array = Excel::toArray(new ParticipantsImport,request('file') );
            foreach ($array[0] as $key=>$col) {
                //skip 1 row by default
                // dd($array[0]);
                if($key>$skip){
                        // array_push($emptyArray,str_replace(" ","",strtolower($col[$email])));
                    
                        $isNameValid=$col[$name];
                        $isCompanyValid=$col[$company] && $col[$company]!== "-" && strtolower($col[$company])!=="n/a";
                        $isEmailValid=$col[$email] && $col[$email]!=="-" && strtolower($col[$email])!=="n/a" && strpos($col[$email],"@");
                        $isPositionValid=$col[$position] && $col[$position]!=="-" && strtolower($col[$position])!=="n/a";
                        $isSessionValid=$session ? $col[$session] : true;
                        $isStatusValid=$col[$status];

                        if($isNameValid  && $isEmailValid && $isSessionValid && $isStatusValid){
                            $participant=Participant::where('email',str_replace(" ","",strtolower($col[$email])))->first();
                    

                            if($participant){
                                $oldCategory=$participant->category;
                                $inputCategory=$session ? "BT" : "EF";
                                $newCategory=$oldCategory==="EF"||$oldCategory==="all" ? 'EF': $inputCategory;

                                $participant->name=$col[$name];
                                $participant->email=str_replace(" ","",strtolower($col[$email]));
                                $participant->company=$isCompanyValid?$col[$company]:"Tidak disebutkan";
                                $participant->position=$isPositionValid?$col[$position]:"Tidak disebutkan";
                                $participant->category= $newCategory;
                                $participant->registered_session=$session? substr($col[$session],0,16):"";
                                $participant->status=strtolower($col[$status]);
                                $participant->is_sent=0;
                                if(strtolower($col[$status])==="approved"){
                                    $fileName = ParticipantController::createQR($participant);
                                    $participant->qr = $fileName;
                                }
                                $participant->save();

                            }else{
                                $newParticipant=Participant::create([
                                    'name'=>$col[$name],
                                    'email'=>str_replace(" ","",strtolower($col[$email])),
                                    'company'=>$isCompanyValid?$col[$company]:"Tidak disebutkan",
                                    'position'=>$isPositionValid?$col[$position]:"Tidak disebutkan",
                                    'category'=> $session ? "BT" : "EF",
                                    'registered_session'=>$session? substr($col[$session],0,16):"",
                                    'status'=>strtolower($col[$status]),
                                ]);
                                if(strtolower($col[$status])==="approved"){
                                    echo $newParticipant->email;
                                    $fileName = ParticipantController::createQR($newParticipant);
                                    $newParticipant->qr = $fileName;
                                    $newParticipant->save();
                                }
                            }
                          
                        }else{
                            array_push($emptyArray,$col[$email].' '.'not passed validations');
                        }
                }
            }

        //    dd($emptyArray);
            session()->flash('participant-created-message', 'participant generated successfully');
            return redirect()->route('participant.index');
    }

    public function edit(Participant $participant){
        return view('admin.participants.edit', ['participant'=> $participant]);
    }

    public function update(Participant $participant){
        $inputs = request()->validate([
            'name'=> 'required',
            'email'=> ['required', 'email', 'max:255'],
            'company'=> 'required',
            'position' => 'required',
            'ef'=>'required_if:bt,==,""',
            'bt'=>'required_if:ef,==,""',
            'session'=>'required_if:bt,==,"BT"',
            'status'=>'required',
        ]);
        $isEmailChanged=$participant->email!== $inputs['email'];
        $isStatusChanged=$participant->status!== $inputs['status'];

       //email change or status reject or status changed to approved will delete qr
       if($isEmailChanged || $inputs['status'] ==='rejected'||$isStatusChanged && $inputs['status']==='approved'){
        ParticipantController::deleteQR($participant);
        if($isEmailChanged){
            $participant->is_sent=0;
        }
        }

        $ef= array_key_exists('ef', $inputs);
        $bt= array_key_exists('bt', $inputs);
        $position= array_key_exists('position', $inputs);
        $category=$ef && $bt ? 'all' : ($ef ? $inputs['ef'] : $inputs['bt']);
    

        $participant->name = $inputs['name'];
        $participant->email = $inputs['email'];
        $participant->company = $inputs['company'];
        $participant->position = $position?$inputs['position']:'';
        $participant->category = $category;
        $participant->registered_session = $bt?$inputs['session']:'';
        $participant->status = $inputs['status'];

        if($inputs['status']==="approved" && $isStatusChanged || $isEmailChanged && $inputs['status']==="approved" ){
            $fileName = ParticipantController::createQR($participant);
            $participant->qr = $fileName;
        }
        $participant->save();

        session()->flash('participant-updated-message', 'Participant with name '.$inputs['name'].' was updated');
        return redirect()->route('participant.index');
    }

    public function destroy(Participant $participant ,Request $request){
        ParticipantController::deleteQR($participant);
        $participant->delete();
        $request->session()->flash('message', 'Participant was deleted');
        return back();
    }

    public function send(Participant $participant){
        try{
            $name=$participant->name;
            $email=$participant->email;
            $qr=$participant->qr;
            $status=$participant->status;
            $category=$participant->category;
            $is_sent=$participant->is_sent;

            if($status==='approved'){
                if($category==='EF' && !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'EF Approved']));
                    $participant->is_sent=1;
                    $participant->save();
                }else if($category==='BT' && !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'BT Approved']));
                    $participant->is_sent=1;
                    $participant->save();
                }
                else if($category==='all'&& !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'EF Approved']));
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'BT Approved']));
                    $participant->is_sent=1;
                    $participant->save();
                }
            }else{
                if($category==='EF' && !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'EF Rejected']));
                    $participant->is_sent=1;
                    $participant->save();
                }else if($category==='BT' && !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'BT Rejected']));
                    $participant->is_sent=1;
                    $participant->save();
                }
                else if($category==='all'&& !$is_sent){
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'EF Rejected']));
                    Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'BT Rejected']));
                    $participant->is_sent=1;
                    $participant->save();
                }
            }
            session()->flash('participant-qr-message', 'Email for '.$name.' was sent');
            
            return redirect()->route('participant.index');
        }catch (\Throwable $th) {
            return response()->json([
                'status'  => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function sendAll(){
        // $participants=Participant::get();

        $participants=Participant::get();

        foreach ($participants as $participant) {

            $id=$participant->id;
            $category=$participant->category;
            $email=$participant->email;
            $name=$participant->name;
            $qr=$participant->qr;
            $is_sent=$participant->is_sent;
            $status=$participant->status;
            


            if($status==='approved'){
                if($category==='EF' && !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'EF Approved']);
                }else if($category==='BT' && !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'BT Approved']);
                }
                else if($category==='all'&& !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'EF Approved']);
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'qr'=>$qr,'status'=>'BT Approved']);
                }
            }else{
                //rejected
                if($category==='EF' && !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'status'=>'EF Rejected']);
                    // Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'EF Rejected']));
                }else if($category==='BT' && !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'status'=>'BT Rejected']);
                    // Mail::to($email)->send(new QRMail(['name' => $name, 'email' => $email,'status'=>'BT Rejected']));
                }
                else if($category==='all'&& !$is_sent){
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'status'=>'BT Rejected']);
                    ProcessMail::dispatch(['id'=>$id, 'name' => $name, 'email' => $email,'status'=>'EF Rejected']);

                }
            }
        }
        session()->flash('participant-qr-message', 'Success sent email');

        return redirect()->route('participant.index');

    }

    public function qrCheck($email)
    {
        $decryptedEmail=Crypt::decryptString($email);
        $participant = Participant::where('email', $decryptedEmail)->first();
        return view('home.participants.index', ['participant'=> $participant]);
    }
    public function qrPresent(Participant $participant)
    {
        $participant->is_present=1;
        $participant->save();
        return back();
    }
    public function qrRoom(Request $request,Participant $participant)
    {
        $presence=$request['presence'];
        $session=$request['session'];

        $participant->$presence=$session.' | '.Carbon::now()->toDateTimeString();
        $participant->save();
      
        return back();
    }

    public function download()
    {
        $zip = new \ZipArchive();
        $fileName = 'participantsqr.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('storage/participant-qr'));
            foreach ($files as $key => $value){
               $encryptedEmail=str_replace(".jpg","",basename($value));
               $decryptedEmail=Crypt::decryptString($encryptedEmail);
               $rename=$decryptedEmail.'.jpg';

               $zip->addFile($value, $rename);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName));

    }
    public function export_excel()
	{
		return Excel::download(new ParticipantExport, 'participant.xlsx');
	}
}
