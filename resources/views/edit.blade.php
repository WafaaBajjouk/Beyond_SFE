@extends('layouts.master')


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-body">




                <form action="{{ url('client/'.$client->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">



                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text"  name="nom" class="form-control" value="{{ $client->nom}}">
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
                        <label for="">Ville</label>
                        <input type="text" name="ville" class="form-control" value="{{ $client->ville}}">
                    </div>

                    <div class="form-group">
                        <label for="">Entrepsire</label>
                        <input type="text" name="entreprise" class="form-control" value="{{ $client->entreprise}}">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="addresse" class="form-control" value="{{ $client->addresse}}">
                    </div>

                    <div class="form-group">
                        <label for="">Poste</label>
                        <input type="text" name="poste" class="form-control" value="{{ $client->poste}}">
                    </div>


                            <input type="submit" value="Modifier" class="btn btn-warning">
                            <input type="reset" value="Annuler" class="btn btn-danger">


                </form>



            </div>
         </div>

    </div>


@endsection

