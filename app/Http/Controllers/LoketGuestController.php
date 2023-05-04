<?php

namespace App\Http\Controllers;

use App\Imports\LoketGuestsImport;
use App\Loket_guest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LoketGuestController extends Controller
{
    //
    public function index(Request $request){

        $search = $request->query('search');
        if (!empty($search)) {
            $guests = Loket_guest::where('name', 'like', '%'.$search.'%')
            ->orWhere('barcode_id', 'like', '%'.$search.'%')
            ->orWhere('category', 'like', '%'.$search.'%')
            ->paginate(10);
        } else {
            $guests = Loket_guest::paginate(10);
        }

        return view('admin.loket.index', ['guests'=> $guests,'search'=>$search]);
    }
    public function create(){
        return view('admin.loket.create');
    }
    public function store(Request $request){
        Loket_guest::truncate();
        request()->validate([
            'file'=> 'file',
        ]);

        try {
            $array = Excel::toArray(new LoketGuestsImport,request('file') );
            $name='';
            foreach ($array[0] as $key=>$col) {
                //skip 2 rows
                if($key>1){
                    // dd($col);
                    if($name!==$col[2] && $col[2]!==null){
                        $name=$col[2];
                    }
                    Loket_Guest::insert([
                        'name'=>$name,
                        'category'=>$col[6],
                        'barcode_id'=>$col[5],
                    ]);
                }
            }
            session()->flash('guest-created-message', 'Guest generated successfully');
            return redirect()->route('loket-guest.index');
        } catch (\Exception $e) {
            session()->flash('message', 'Please try again');
            return redirect()->route('loket-guest.create');
        }
    }
}
