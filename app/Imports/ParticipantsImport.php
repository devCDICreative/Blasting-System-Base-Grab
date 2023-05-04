<?php

namespace App\Imports;

use App\Participant;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participant([
            'name'     => $row[0],
            'company'     => $row[1],
            'email'    => $row[2],
            'position'    => $row[3],
            'status'    => $row[4],
            'session'    => $row[5],
        ]);
    }
}
