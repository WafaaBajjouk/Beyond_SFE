@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Situation des abonnements</h4>
        </div>

        <form action="{{ url('client/create')}}" method="POST">
            <div class="pull-right">
        {{-- <button style="margin-left: 920px;margin-right:10px;"  type="submit" class="btn btn-success">Abonnee un noveau Client</button> --}}
        <a style="margin-right:10px;"   href="{{ url('clientAbon')}}" class="btn btn-success">Nouvelle abonement</a>
            </div>
        </form>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Status</th>
                {{-- <th>Prenom</th> --}}
                <th>Montant en MAD</th>
                <th>Date</th>
                <th>Ref du Client</th>

                <th>Action</th>

              </thead>
              <tbody>
                @foreach ($abon as $abon)

                <tr>
                    <td>{{ $abon->id}}</td>
                    <td>{{ $abon->payed}}</td>
                    {{-- <td>{{ $client->prenom}}</td> --}}
                    <td>{{ $abon->montant}}</td>
                    <td>{{ $abon->date}}</td>

                    <td>{{ $abon->id_client}}</td>

                    <td>

                        <form action="{{ url('abonement/'.$abon->id )}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}

                            <a href="{{url('abonement/edit/'.$abon->id)}}" class="btn btn-primary">Modifier</a><br><br>
                            <a href="{{url('clientInfo/'.$abon->id_client)}}" class="btn btn-default">Client</a><br><br>

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
