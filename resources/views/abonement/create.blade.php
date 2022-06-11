@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">     <i class="now-ui-icons shopping_credit-card"></i> Abonne un client</h4>
        </div>
        <div class="card-body">
            {{-- @foreach ($client as $client) --}}


            <form action="{{url('/addabon/submit/'.$client->id)}}" method="POST">
                {{-- <form action="{{ url('client')}}" method="POST"> --}}
                    {{-- <form action="{{ url('client')}}" method="POST"> --}}


                {{-- pour generer le token  --}}

                {{ csrf_field()}}

              <div class="form-group">
                  <label for="">Payee</label>
                  <select  class="form-control" type="text"  name="payed" class="form-control">

                    <option>True</option>
                    <option>False</option>
                  </select>
                  {{-- <input type="text"  name="titre" class="form-control"> --}}
              </div>

              <div class="form-group">
                  <label for="">Client</label>
                  <input disabled="" name="id_client" value="{{ $client->id}}" />
                  {{-- <select disabled=""  name="client_name">
  <option value="{{ $client->nom}}">{{ $client->nom}}</option>


</select> --}}

              </div>

              <div class="form-group">
                  <label for="">Nom du client</label>
                 <br> <input type="text" class="form-control"  value="{{ $client->nom}}" cols="40" rows="5">
              </div>

              <div class="form-group">
                <label for="">Montant</label>
               <br> <input type="text" name="montant"  class="form-control"  cols="40" rows="5">
            </div>

              <div class="form-group">
                <label for="">Date</label>
               <br> <input type="date" name="date"  class="form-control"  cols="40" rows="5">
            </div>



                      <input type="submit" value="Erengistrer" class="btn btn-primary">
                      <input type="reset" value="Annuler" class="btn btn-danger">


          </form>
{{-- @endforeach --}}

        </div></div></div>



@endsection



@section('scripts')

@endsection
