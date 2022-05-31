<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Client;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

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


        $client = Client::where('nom',$name)->first();

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

        // $admindata = [
        //     'fullname' => jjo$request->input('fullname'),
        //     'phone' => $request->input('lastname'),
        //     'email' => $request->input('email'),
        //     'subject' => $request->input('subject'),
        //     'message' => $request->input('message'),
        // ];

        // Mail::to($client->email)->send(new ContactMailable($admindata));

        return redirect('alert');
    }

}
