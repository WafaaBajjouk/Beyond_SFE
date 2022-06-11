@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">     <i class="now-ui-icons shopping_credit-card"></i> Modification d'abonnement du client : {{ $abon->id_client }}</h4>
          </div>

        <div class="card-body">

            <form action="{{ url('/abonement/'.$abon->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">



                  {{-- pour generer le token  --}}

                  {{ csrf_field()}}

                <div class="form-group">
                   <label for="">Payee</label>
                   {{--   <input type="text"  name="paye" class="form-control" value="{{ $abon->payed}}"> --}}
                    <select  value="{{ $abon->payed}}" class="form-control" type="text"  name="payed" class="form-control">

                        <option>True</option>
                        <option>False</option>
                      </select>
                </div>
{{--
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" name="prenom" class="form-control" value="{{ $client->prenom}}">
                </div> --}}

                <div class="form-group">
                    <label for="">montant</label>
                    <input type="text"  name="montant" class="form-control" value="{{ $abon->montant}}">
                </div>

                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" name="date" class="form-control" value="{{ $abon->date}}">
                </div>



                        <input type="submit" value="Modifier" class="btn btn-warning">
                        <input type="reset" value="Annuler" class="btn btn-danger">


            </form>








        </div></div></div>
</div>


@endsection



@section('scripts')

@endsection
