@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Nouveau client</h4>
        </div>
        <div class="card-body">

            <form action="{{url('addAlert/'.$client->id)}}" method="POST">


                {{-- pour generer le token  --}}

                {{ csrf_field()}}

              <div class="form-group">
                  <label for="">Titre</label>
                  <input type="text"  name="titre" class="form-control">
              </div>

              <div class="form-group">
                  <label for="">Client</label>
                  <input disabled="" name="client_name" value="{{ $client->nom}}" />
                  {{-- <select disabled=""  name="client_name">
  <option value="{{ $client->nom}}">{{ $client->nom}}</option>


</select> --}}

              </div>

              <div class="form-group">
                  <label for="">Text</label>
                  <textarea name="text" cols="40" rows="5"></textarea>
              </div>



                      <input type="submit" name="Erengistrer" class="btn btn-primary">
                      <input type="reset" name="Annuler" class="btn btn-danger">


          </form>


        </div></div></div>



@endsection



@section('scripts')

@endsection
