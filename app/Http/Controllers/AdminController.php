<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\textReg;
use Illuminate\Support\Facades\DB as FacadesDB;

// use Illuminate\Http\Request;
use Charts;

class AdminController extends Controller
{
    //


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = Client::where(FacadesDB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Utilisateurs du registre mensuel")
			      ->elementLabel("Totale")
			      ->dimensions(1000, 500)
			      ->responsive(false)
			      ->groupByMonth(date('Y'), true);


                  $texts = textReg::where(FacadesDB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                  ->get();
      $texts = Charts::database($texts, 'bar', 'highcharts')
                ->title("Utilisateurs du registre mensuel")
                ->elementLabel("Totale")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByMonth(date('Y'), true);


        return view('admin.chart',compact('chart'), compact('texts'));
        return view('admin.chart');
    }
}
