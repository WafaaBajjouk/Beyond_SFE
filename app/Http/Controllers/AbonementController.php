<?php

namespace App\Http\Controllers;

use App\Abonement;
use App\Client;
use Illuminate\Http\Request;

class AbonementController extends Controller
{
    //

    public function index(){

        $abonlist = Abonement::all();
        $clientList = Client::all();


        return view('abonement.index' , ['abon' => $abonlist],['client' => $clientList]);


    }


    public function destroy(Request $request, $id){
        // return $request->all();

        $abon = Abonement::find($id);

        $abon->delete();

        return redirect('abonement');

    }

       // get abonement data & fill the edit form
       public function edit($id){
        $abon = Abonement::find($id);

        return view('abonement.edit', ['abon' => $abon]);
    }

    // update the client
    public function update($id ,Request $request){
            $abon = Abonement::find($id);

            $abon->payed= $request->input('payed');
            // $client->prenom= $request->input('prenom');
            $abon->montant= $request->input('montant');

            $abon->date= $request->input('date');


            $abon->save();
            return redirect('abonement');

    }

    public function clientList(){

        $clientList = Client::all();

        return view('abonement.client' , ['client' => $clientList]);
    }

    public function abonForm($id){
        $client = Client::find($id);

        return view('abonement.create', ['client' => $client]);
    }

    public function addAbon($id, Request $request){

        $client = Client::find($id);
        $abon= new Abonement();

        $abon->payed= $request->input('payed');
        $abon->id_client=$id;

        $abon->montant= $request->input('montant');
        $abon->date= $request->input('date');

        $client->alerts()->save($abon);


        return redirect('abonement');
    }





}
