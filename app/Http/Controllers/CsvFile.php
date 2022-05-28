<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\DataTables;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use App\textReg;
// use Yajra\DataTables\Facades\DataTables;
// use DB;
use DataTables;
use App\Imports\CsvImport;
use App\Exports\CsvExport;

// use ;

// use App\Http\Controllers\datatables;
use Maatwebsite\Excel\Facades\Excel;


class CsvFile extends Controller
{
    //
    function index(Request $request ){
        $data = textReg::latest()->paginate(500);
                 return view('csv_pagi' , compact('data'))
                                 ->with('i',(request()->input('page',1)-1)*500);
    //                             //
    //                             if(request()->ajax())
    //  {
    //             if(!empty($request->filter_theme))
    //             {
    //             $data = DB::table('tbl_customer')
    //                 ->select('libellee', 'theme', 'sousTheme', 'texte')
    //                 ->where('theme', $request->filter_theme)
    //                 ->get();
    //             }
    //             else
    //             {
    //             $data = DB::table('tbl_customer')
    //             ->select('libellee', 'theme', 'sousTheme', 'texte')
    //             ->get();
    //             }
    //             return DataTables()->of($data)->make(true);
    //         }

                // return view('custom_search', compact('country_name'));


                // if(Input::get ( "search" )!=null){
                //     $search = Input::get ( "search" );
                //     $data = textReg::where ( 'theme', 'LIKE', '%' . $search . '%' )->orWhere ( 'soustheme', 'LIKE', '%' . $search . '%' )->get ();
                //     if (count ( $data ) > 0)
                //     return view ( 'csv_pagi' )->withDetails ( $data )->withQuery ( $search );
                //     else
                //     return view ( 'csv_pagi' )->withMessage ( 'No Details found. Try to search again !' );
    // }
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


    // public function findSearch()
    //                 {

    //             $data = textReg::all();
    //         if(Input::get ( "search" )!=null){
    //             $search = Input::get ( "search" );
    //             $data = textReg::where ( 'theme', 'LIKE', '%' . $search . '%' )->orWhere ( 'soustheme', 'LIKE', '%' . $search . '%' )->get ();
    //             if (count ( $data ) > 0)
    //             return view ( 'csv_pagi' )->withDetails ( $data )->withQuery ( $search );
    //             else
    //             return view ( 'csv_pagi' )->withMessage ( 'No Details found. Try to search again !' );}
    //             // else
    //             }
}

