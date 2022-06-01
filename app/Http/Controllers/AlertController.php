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


        return view('alert.index' , ['alert'=> $alertList]);

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


        $client = Client::where('nom',$name)->first();

        // echo $client

        $alert->id_client=$client->id;


        // $alert->id_client=
            $alert->save();

            return redirect('alert');



    }


    public function edit($id){
        $alert = Alert::find($id);
        $clientList = Client::all();


        return view('alert.edit', ['alert' => $alert], ['clientList'=>$clientList]);



    }

    public function update($id, Request $request){
        $alert = Alert::find($id);


        $alert->text=$request->input('text');
        $alert->titre=$request->input('titre');
        $alert->client_name=$request->input('client_name');
        // $alert->client_id=;

        $alert->save();

        return redirect('alert');
    }

    public function destroy(Request $request,$id){
        $alert = Alert::find($id);

        $alert->delete();

        return redirect('alert');
    }

    public function clientList(){

        $clientList = Client::all();

        return view('alert.client' , ['client' => $clientList]);
    }

    public function alertForm($id){
        $client = Client::find($id);

        return view('alert.create', ['client' => $client]);
    }

    public function addAlert($id, Request $request){

        $client = Client::find($id);
        $alert= new Alert();

        $alert->text= $request->input('text');
        $alert->client_name=$client->nom;

        $alert->titre= $request->input('titre');

        $client->alerts()->save($alert);


        return redirect('alert');
    }

}
