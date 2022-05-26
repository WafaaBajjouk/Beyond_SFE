<?php

namespace App\Exports;

use App\textReg;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    //function to export all data
    public function collection()
    {
        return textReg::all();
    }
}
