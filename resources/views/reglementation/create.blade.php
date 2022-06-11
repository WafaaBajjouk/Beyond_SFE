@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">  <i class="now-ui-icons ui-2_settings-90"></i>Déclarer une nouvelle réglementation</h4>
        </div>
        <div class="card-body">
            {{-- @foreach ($client as $client) --}}


            <form action="{{url('/addreg/submit/'.$client->id)}}" method="POST">
                {{-- <form action="{{ url('client')}}" method="POST"> --}}
                    {{-- <form action="{{ url('client')}}" method="POST"> --}}


                {{-- pour generer le token  --}}

                {{ csrf_field()}}



              <div class="form-group">
                  <label for="">Client</label>
                  <input disabled="" name="clientname" value="{{ $client->nom}}" />
                  {{-- <select disabled=""  name="client_name">
  <option value="{{ $client->nom}}">{{ $client->nom}}</option>


</select> --}}

              </div>

              <div class="form-group">
                  <label for="">Text</label>
                  <select  name="text">
                    @foreach ($text as $text)


                    <option class="form-control" >{{$text->libellee}}</option>

                    @endforeach
                    </select>
<br><br>
                  <label for="">Status</label>
                <select  name="status" >
                        <option>conforme C </option>
                        <option>Sans Objet SO</option>
                        <option>non Conforme NC</option>

                </select>
                 {{-- <br> <textarea name="text"  class="form-control"  cols="40" rows="5"></textarea> --}}
              </div>



                      <input type="submit" value="Erengistrer" class="btn btn-primary">
                      <input type="reset" value="Annuler" class="btn btn-danger">


          </form>
{{-- @endforeach --}}

        </div></div></div>



@endsection



@section('scripts')

@endsection
