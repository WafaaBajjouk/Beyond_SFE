<?php

namespace App\Http\Controllers;

use App\Alert;
use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
    // Lister les clients
    public function index(){

        $clientList = Client::all();

        return view('client.index' , ['client' => $clientList]);


    }

    // Display client form
    public function create(){
        // we call the form view
        return view('client.create');
    }

    // save a new client = persistance
    public function store(Request $request){
            $client = new Client();

            $client->nom= $request->input('nom');
            // $client->prenom= $request->input('prenom');
            $client->poste= $request->input('poste');
            $client->email= $request->input('email');
            $client->telephone= $request->input('telephone');
            $client->entreprise= $request->input('entreprise');
            $client->ville= $request->input('ville');
            $client->addresse= $request->input('addresse');

            $client->save();

            return redirect('client');
    }





    // get client data & fill the edit form
    public function edit($id){
        $client = Client::find($id);
        $clientList = Client::all();


        return view('edit', ['client' => $client] , ['clientlist' => $clientList]);
    }

    // update the client
    public function update($id ,Request $request){
            $client = Client::find($id);


            $client->nom= $request->input('nom');
            // $client->prenom= $request->input('prenom');
            $client->poste= $request->input('poste');

            $client->email= $request->input('email');
            $client->telephone= $request->input('telephone');
            $client->entreprise= $request->input('entreprise');
            $client->ville= $request->input('ville');
            $client->addresse= $request->input('addresse');

            $client->save();
            return redirect('client');

    }

    public function destroy(Request $request, $id){
        // return $request->all();

        $client = Client::find($id);

        $client->delete();

        return redirect('client');

    }

    public function info($id){
        $client = Client::find($id);

        return view('client.info', ['client' => $client]);
    }


    public function getAlertByClient($id){

        // //les alerts du client x
        // $client = Client::find($id);
        // // return  $alert = Alert::find($id);

        // return dd($client->alerts);


            //les client d alert x
            $alert = Alert::find($id);
            // return  $alert = Alert::find($id);

            return dd($alert->client);
    }



}
