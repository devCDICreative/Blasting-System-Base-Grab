<?php

namespace App\Exports;

use App\Log;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class LogExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $log=DB::table('logs')
        ->join('guests', 'logs.guest_id', '=', 'guests.id')
        ->select('logs.id', 'guests.name','logs.status','logs.created_at')
        ->get();
        return $log;
    }
}
