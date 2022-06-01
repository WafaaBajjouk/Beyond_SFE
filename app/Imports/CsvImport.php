<?php

namespace App\Imports;

use App\textReg;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Theme;
use App\Soustheme;

class CsvImport implements ToModel ,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

//  return new SousTheme([
//             // 'theme' => $row["theme"],
//             'titre' => $row["soustheme"],
//         ]);
        // return new Theme([
        //     'theme' => $row["theme"],
        //     'soustheme' => $row["soustheme"],
        // ]);
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
