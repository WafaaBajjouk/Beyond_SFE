@extends('layouts.sidebar')
                                <div class="page-title-actions">

                                    <div class="d-inline-block dropdown">

                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Titre</th>
                                                {{-- <th>Client Id</th> --}}
                                                <th>Client </th>
                                                <th>Text</th>

                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                {{-- <td class="text-center text-muted">#345</td> --}}
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">

                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                {{-- <div class="widget-heading">John Doe</div>
                                                                <div class="widget-subheading opacity-7">Web Developer</div> --}}

                                                                @foreach ($alert as $alert)

                                                                <tr>
                                                                   <td>{{ $alert->id}}</td>
                                                                   <td>{{ $alert->titre}}</td>
                                                                   {{-- <td>{{ $alert->id_client}}</td> --}}
                                                                   <td>{{ $alert->client_name}}</td>
                                                                   <td>{{ $alert->text}}</td>

                                                                   {{-- <td>{{ $client->created_at}}</td> --}}
                                                                   <td>

                                                                       <form action="{{ url('alert/'.$alert->id )}}" method="POST">
                                                                           {{ csrf_field() }}

                                                                           {{ method_field('DELETE')}}

                                                                           <a href="" class="btn btn-primary">Afficher</a>
                                                                           {{-- <a href="{{url('alert/'.$alert->id.'/edit')}}" class="btn btn-danger">Alert</a> --}}

                                                                           <button type="submit" class="btn btn-danger">Supprimmer</button>

                                                                       </form>

                                                                   </td>

                                                            </div>
                                                        {{-- </div>
                                                    </div>
                                                </td> --}}
                                    @endforeach
                                            </table>
