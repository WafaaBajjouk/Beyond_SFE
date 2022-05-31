@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Liste des Alerts</h4>
        </div>

        <div class="pull-right">
            <a style="margin-right:10px;"   href="{{ url('clientAlert')}}" class="btn btn-success">Nouvelle alerte</a>


        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Titre</th>
                {{-- <th>Client Id</th> --}}
                <th>Client </th>
                <th>Text</th>

                <th>Action</th>

              </thead>
              <tbody>
                @foreach ($alert as $alert)

                <tr>
                    <td>{{ $alert->id}}</td>
                    <td>{{ $alert->titre}}</td>
                    {{-- <td>{{ $alert->id_client}}</td> --}}
                    <td>{{ $alert->client_name}}</td>
                    <td>{{ $alert->text}}</td>

                    <td>

                        <form action="{{ url('alert/'.$alert->id )}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}

                            <a href="" class="btn btn-primary">Afficher</a>
                            {{-- <a href="{{url('alert/'.$alert->id.'/edit')}}" class="btn btn-danger">Alert</a> --}}

                            <button type="submit" class="btn btn-danger">Supprimmer</button>

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
