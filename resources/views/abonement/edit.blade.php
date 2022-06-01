@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-body">

            <form action="{{ url('client/'.$abon->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">



                  {{-- pour generer le token  --}}

                  {{ csrf_field()}}

                <div class="form-group">
                    <label for="">Payee</label>
                    <input type="text"  name="paye" class="form-control" value="{{ $abon->payed}}">
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



                        <input type="submit" name="Modifier" class="btn btn-warning">
                        <input type="reset" name="Annuler" class="btn btn-danger">


            </form>








        </div></div></div>
</div>


@endsection



@section('scripts')

@endsection
