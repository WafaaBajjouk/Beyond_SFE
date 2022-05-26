<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\textReg;
use App\Imports\CsvImport;
use App\Exports\CsvExport;

use Maatwebsite\Excel\Facades\Excel;


class CsvFile extends Controller
{
    //
    function index(){
        $data = textReg::latest()->paginate(10);
                 return view('texts.csv_file_pagi' , compact('data'))
                                 ->with('i',(request()->input('page',1)-1)*10);
    }


    public function csv_export(){
        return Excel::download(new CsvExport,'sample.csv');

    }

    public function csv_import(){
        Excel::import(new CsvImport, request()->file('file'));
        return back();
    }
}
