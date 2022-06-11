<?php

namespace App\Http\Controllers;

use App\Reglementation;
use App\Client;
use App\textReg;
use Illuminate\Http\Request;

class ReglementationController extends Controller
{
    //
    public function index(){
        $reg = Reglementation::all();


        return view('reglementation.client' , ['reg'=> $reg]);

    }

    public function clientList(){

        $clientList = Client::all();

        return view('reglementation.clientlist' , ['client' => $clientList]);
    }

    public function regForm($id){
        $client = Client::find($id);
        $text=textReg::all();

        return view('reglementation.create', ['client' => $client],['text' => $text]);
    }

    public function addreg($id, Request $request){

        $client = Client::find($id);
        // $text=textReg::find($idt);
        $reg= new Reglementation();

        $reg->text= $request->input('text');
        $reg->clientname=$client->nom;
        // $reg->idtext=$text->id;
        $reg->status= $request->input('status');

        // $reg->idclient=$client->id;


        $reg->save();
        return redirect('reglementation');
    }

    public function edit($id){
        $reg = Reglementation::find($id);
        $clientList = Client::first();
        $text=textReg::all();



        // return view('reglementation.edit',['clientList'=>$clientList], ['text' => $text],['reg' => $reg],);
        return view('reglementation.edit')->with(['clientList'=>$clientList,'text'=>$text,'reg'=>$reg]);


    }

    public function update($id, Request $request){
        $reg = Reglementation::find($id);


        $reg->text= $request->input('text');
        $reg->clientname=$reg->clientname;
        $reg->status= $request->input('status');

        $reg->save();

        return redirect('reglementation');
    }
}
