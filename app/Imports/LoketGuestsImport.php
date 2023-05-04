<?php

namespace App\Imports;

use App\Loket_Guest;
use Maatwebsite\Excel\Concerns\ToModel;

class LoketGuestsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Loket_Guest([
            'name'     => $row[0],
            'email'    => $row[1], 
        ]);
    }
}
