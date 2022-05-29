<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    // Lister les clients
    public function index(){

        $userList = User::all();

        return view('users.index' , ['user' => $userList]);


    }

    // // Display client form
    // public function create(){
    //     // we call the form view
    //     return view('client.create');
    // }

    // // save a new client = persistance
    // public function store(Request $request){
    //         $client = new Client();

    //         $client->nom= $request->input('nom');
    //         $client->prenom= $request->input('prenom');
    //         $client->poste= $request->input('poste');
    //         $client->email= $request->input('email');
    //         $client->telephone= $request->input('telephone');
    //         $client->entreprise= $request->input('entreprise');

    //         $client->save();

    //         return redirect('user');
    // }

    // get user data & fill the edit form
    public function edit($id){
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    // update the user
    public function update($id ,Request $request){
            $user = User::find($id);

            $user->name= $request->input('name');
            $user->email= $request->input('email');
            $user->role= $request->input('role');
            $user->permissions= $request->input('permissions');


            $user->save();
            return redirect('user');

    }

    public function destroy(Request $request, $id){
        // return $request->all();

        $user = User::find($id);

        $user->delete();

        return redirect('user');

    }
}
