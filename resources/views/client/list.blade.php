@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="table-responsive-sm">

            <h1>Clients List</h1>

        <div class="pull-right">
            <a href="{{ url('client/create')}}" class="btn btn-success">Nouveau Client</a>


        </div>
  

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Entrepsire</th>
                            <th>Poste</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center text-muted">#345</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            {{-- <div class="widget-heading">John Doe</div>
                                            <div class="widget-subheading opacity-7">Web Developer</div> --}}

                                            @foreach ($client as $client)
                    
                                            <tr>
                                               <td>{{ $client->id}}</td>
                                               <td>{{ $client->nom}}</td>
                                               <td>{{ $client->prenom}}</td>
                                               <td>{{ $client->email}}</td>
                                               <td>{{ $client->telephone}}</td>
                                               <td>{{ $client->entreprise}}</td>
                                               <td>{{ $client->poste}}</td>
                                               <td>{{ $client->created_at}}</td>
                                               <td>
                                               
                                                   <form action="{{ url('client/'.$client->id )}}" method="POST">
                                                       {{ csrf_field() }}
                           
                                                       {{ method_field('DELETE')}}
                           
                                                       <a href="" class="btn btn-primary">Afficher</a>
                                                       <a href="{{url('client/'.$client->id.'/edit')}}" class="btn btn-default">Modifier</a>
                               
                                                       <button type="submit" class="btn btn-danger">Supprimmer</button>
                           
                                                   </form>
                           
                                               </td>
                           
                                        </div>
                                    {{-- </div>
                                </div>
                            </td> --}}
                @endforeach

             </body>
            </table>
        </div>
    </div>
</div>

@endsection