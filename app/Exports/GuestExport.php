<?php

namespace App\Exports;

use App\Guest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class GuestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Guest::all();

        $guest=DB::table('guests')
        ->join('categories', 'guests.category_id', '=', 'categories.id')
        ->select('guests.id','guests.name','categories.name AS category_name','guests.qr')
        ->get();
        return $guest;
    }
}
