<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Client;

class AlertController extends Controller
{
    //

    public function index(){
        $alertList = Alert::all();
        $clientList = Client::all();


        return view('alert.index' , ['alert'=> $alertList] , ['client'=>$clientList]);

    }

    public function create(){
        $clientList = Client::all();

        return view('alert.create',['client'=>$clientList]);
    }

    public function store(Request $request ){
        $alert = new Alert();

        $alert->text=$request->input('text');
        $alert->titre=$request->input('titre');

        $name=$alert->client_name=$request->input('client_name');


        $client = Client::where('nom',$name)->get();

        // echo $client

        $alert->id_client=$client->id;


        // $alert->id_client=
            $alert->save();

            return redirect('alert');



    }


    public function edit($id){
        $alert = Alert::find($id);

        return view('alert.edit', ['alert' => $alert]);



    }

    public function update($id, Request $request){
        $alert = Alert::find($id);


        $alert->text=$request->input('text');
        $alert->client_name=$request->input('client_name');

        $alert->save();

        return redirect('alert');
    }

    public function destroy(Request $request,$id){
        $alert = Alert::find($id);

        $alert->delete();

        return redirect('alert');
    }
}
