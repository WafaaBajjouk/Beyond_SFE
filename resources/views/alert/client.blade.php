@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">    <i class="now-ui-icons ui-1_bell-53"></i>La liste des clients</h4>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Nom</th>
                {{-- <th>Prenom</th> --}}
                <th>Email</th>
                <th>Telephone</th>
                <th>Entrepsire</th>
                <th>Poste</th>
                <th>Date</th>
                <th>Action</th>

              </thead>
              <tbody>
                @foreach ($client as $client)

                <tr>
                    <td>{{ $client->id}}</td>
                    <td>{{ $client->nom}}</td>
                    {{-- <td>{{ $client->prenom}}</td> --}}
                    <td>{{ $client->email}}</td>
                    <td>{{ $client->telephone}}</td>
                    <td>{{ $client->entreprise}}</td>
                    <td>{{ $client->poste}}</td>
                    <td>{{ $client->created_at}}</td>

                    <td>

                        <form action="{{ url('client/'.$client->id )}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}

                            <a href="{{url('addAlert/'.$client->id)}}" class="btn btn-primary"> <i class="now-ui-icons ui-1_send"></i>Alerter</a><br><br>
                            <a href="{{url('clientInfo/'.$client->id)}}" class="btn btn-default"><i class="now-ui-icons travel_info"></i>details</a><br><br>

                        </form>

                    </td>


                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection



@section('scripts')

@endsection
