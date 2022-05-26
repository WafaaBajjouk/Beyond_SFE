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
                 return view('csv_pagi' , compact('data'))
                                 ->with('i',(request()->input('page',1)-1)*10);
    }


    public function csv_export(){
        return Excel::download(new CsvExport,'sample.csv');

    }

    public function csv_import(Request $request){
        // Excel::import(new CsvImport, request()->file('file')->getRealPath());

        // $path1 = $request->file('file')->store('temp');
        // $path=storage_path('app').'/'.$path1;
        // $data = Excel::import(new CsvImport,$path);


        Excel::import(new CsvImport, $request->file('file')->store('temp'));
        // return back();
        return back();
    }
}
