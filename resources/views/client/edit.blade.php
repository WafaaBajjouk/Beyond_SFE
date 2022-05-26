@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        



                <form action="{{ url('client/'.$client->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">

                    

                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text"  name="nom" class="form-control" value="{{ $client->nom}}">
                    </div>

                    <div class="form-group">
                        <label for="">Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="{{ $client->prenom}}">
                    </div>

                    <div class="form-group">
                        <label for="">Address Email</label>
                        <input type="text"  name="email" class="form-control" value="{{ $client->email}}">
                    </div>

                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" name="telephone" class="form-control" value="{{ $client->telephone}}">
                    </div>

                    <div class="form-group">
                        <label for="">Entrepsire</label>
                        <input type="text" name="entreprise" class="form-control" value="{{ $client->entreprise}}">
                    </div>

                    <div class="form-group">
                        <label for="">Poste</label>
                        <input type="text" name="poste" class="form-control" value="{{ $client->poste}}">
                    </div>


                            <input type="submit" name="Modifier" class="btn btn-warning">
                            <input type="reset" name="Annuler" class="btn btn-danger">


                </form>



            </div>
         </div>

    </div>


@endsection