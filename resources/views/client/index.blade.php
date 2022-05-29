@extends('layouts.sidebar')
    <!-- Content -->

                            <table class="table">
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

                        @endforeach

                     </body>
                    </table>


    </main>
    </div>
