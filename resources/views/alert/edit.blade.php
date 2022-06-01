@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-body">

            <form action="{{ url('alert/'.$alert->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">



                  {{-- pour generer le token  --}}

                  {{ csrf_field()}}

                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text"  name="titre" class="form-control" value="{{ $alert->titre}}">
                </div>
{{--
                <div class="form-group">
                    <label for="">Id du client</label>
                    <input type="text"   name="client_id" class="form-control" value="{{ $alert->client_id}}">
                </div> --}}

                <div class="form-group">
                    <label for="">Nom du client</label>

                    <select name="client_name">
@foreach ($clientList as $clientList)


                        <option class="form-control"  >{{ $clientList->nom}}</option>

                        @endforeach
                    </select>
                    {{-- <input type="text"  name="client_name" class="form-control" value="{{ $alert->client_name}}"> --}}
                </div>

                <div class="form-group">
                    <label for="">Texte</label>
                    <input type="text"  name="text" class="form-control" value="{{ $alert->text}} "/></textarea>
                </div>




                        <input type="submit" value="Modifier" class="btn btn-warning">
                        <input type="reset" value="Annuler" class="btn btn-danger">


            </form>








        </div></div></div>
</div>


@endsection



@section('scripts')

@endsection
