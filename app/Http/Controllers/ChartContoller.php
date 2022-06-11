<?php

namespace App\Http\Controllers;

use App\Client;
use App\textReg;
use DB;

use Illuminate\Http\Request;
use Charts;

use Illuminate\Support\Facades\DB as FacadesDB;

class ChartContoller extends Controller
{
    //

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
                ->title("Les textes réglementaires chargees")
                ->elementLabel("Totale")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByMonth(date('Y'), true);


        return view('admin.chart',compact('chart'), compact('texts'));
    }
}
