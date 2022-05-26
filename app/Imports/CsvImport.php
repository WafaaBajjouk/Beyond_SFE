<?php

namespace App\Imports;

use App\textReg;
use Maatwebsite\Excel\Concerns\ToModel;




class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new textReg([
            'Libellée' => $row["Libellée"],
            'Thème' => $row["Thème"],
            'SousThème' => $row["SousThème"],
            'N°BO' => $row["N°BO"],
            'Texte' => $row["Texte"],
            'Fichedaudit' => $row["Fichedaudit"],
            'Fichedelecture' => $row["Fichedelecture"],



            //
        ]);
    }
}
