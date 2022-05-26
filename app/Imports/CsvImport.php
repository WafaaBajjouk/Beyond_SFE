<?php

namespace App\Imports;

use App\textReg;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;





class CsvImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new textReg([
            'theme' => $row["theme"],
            'soustheme' => $row["soustheme"],
            'libellee' => $row["libellee"],
            'nbo' => $row["nbo"],
            'texte' => $row["texte"],
            'fichedaudit' => $row["fichedaudit"],
            'fichedelecture' => $row["fichedelecture"],



            //
        ]);
    }
}
