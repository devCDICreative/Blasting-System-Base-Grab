<?php

namespace App\Exports;

use App\Early_participant;
use Maatwebsite\Excel\Concerns\FromCollection;

class EarlyParticipantExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Early_participant::all();
    }
}
