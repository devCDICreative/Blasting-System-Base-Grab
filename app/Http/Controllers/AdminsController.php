<?php

namespace App\Http\Controllers;
use App\Log;

use Illuminate\Http\Request;
use App\Exports\LogExport;
use App\Participant;
use App\Early_participant;
use Maatwebsite\Excel\Facades\Excel;
class AdminsController extends Controller
{
    //
    public function index(Request $request){
        $search = $request->query('filter');
        if (!empty($search)) {
            $logs = Log::whereHas('guest',  function ($query) use($search) {
                $query->where('name', 'like', '%'.$search.'%');
            })
            ->orWhere('created_at', 'like', '%'.$search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        } else {
            $logs = Log::orderBy('created_at', 'desc')->paginate(10);
        }
        // $logs = Log::all();
        // $total = Log::distinct()->count('guest_id');
        $total = Log::count();

        $totalEarlyParticipant=Early_participant::count();
        $earlyParticipantPresent=Early_participant::where('is_present',true)->count();

        $totalParticipant=Participant::where('status','approved')->count();
        $totalPresent=Participant::where('status','approved')->where('is_present',true)->count();

        $totalExecutive=Participant::where('status','approved')->where('category','EF')->count();
        $executivePresent=Participant::where('status','approved')->where('is_present',true)
        ->where('category','EF')->count();
        
        $totalBusiness=Participant::where('status','approved')->where('category','BT')->count();
        // $totalBusiness1=Participant::where('status','approved')->where('category','all')->orWhere('category','BT')->count();
        $business1Present=Participant::where('status','approved')->where('is_present',true)->whereNotNull('presence1')
        ->where('category','BT')->count();

        // $totalBusiness2=Participant::where('status','approved')->where('category','all')->orWhere('category','BT')->count();
        $business2Present=Participant::where('status','approved')->where('is_present',true)->whereNotNull('presence2')
        ->where('category','BT')->count();

        // $totalBusiness3=Participant::where('status','approved')->where('category','all')->orWhere('category','BT')->count();
        $business3Present=Participant::where('status','approved')->where('is_present',true)->whereNotNull('presence3')
        ->where('category','BT')->count();

        return view('admin.index',[
            'logs'=>$logs,'total'=>$total,
            'search'=>$search,
            'total_early_participant'=>$totalEarlyParticipant,
            'early_participant_present'=>$earlyParticipantPresent,
            'total_participant'=>$totalParticipant,
            'total_present'=>$totalPresent,
            'total_executive'=>$totalExecutive,
            'executive_present'=>$executivePresent,
            'total_business'=>$totalBusiness,
            // 'total_business1'=>$totalBusiness1,
            'business1_present'=>$business1Present,
            // 'total_business2'=>$totalBusiness2,
            'business2_present'=>$business2Present,
            // 'total_business3'=>$totalBusiness3,
            'business3_present'=>$business3Present,
        ]);
    }
    public function export_excel()
	{
		return Excel::download(new LogExport, 'guest.xlsx');
	}
 
}
