<?php

namespace App\Imports;

use App\m_Calender;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CalenderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new m_Calender([
           "id" => $row[0],
            "calender_date" => $row[1],
            "category" => $row[2]
        ]);
    }
}
