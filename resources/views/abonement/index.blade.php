@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">     <i class="now-ui-icons shopping_credit-card"></i> Situation des abonnements</h4>
        </div>

        <form action="{{ url('client/create')}}" method="POST">
            <div class="pull-right">
        <a style="margin-right:10px;"   href="{{ url('clientAbon')}}" class="btn btn-success"> <i class="now-ui-icons ui-1_simple-add"></i>
            Nouveau abonnement</a>
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

                            <a href="{{url('abonement/edit/'.$abon->id)}}" class="btn btn-primary">                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                                Modifier</a><br><br>
                            <a href="{{url('clientInfo/'.$abon->id_client)}}" class="btn btn-default"><i class="now-ui-icons travel_info"></i>Client</a><br><br>

                            <button type="submit" class="btn btn-danger"><i class="now-ui-icons ui-1_simple-delete"></i>Supprimmer</button>

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
