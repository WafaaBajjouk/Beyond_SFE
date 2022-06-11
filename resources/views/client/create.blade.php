@extends('layouts.master')

@section('title')

  Admin Dashboard


@endsection


@section('content')

{{-- Create client form --}}
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
              <i class="now-ui-icons users_single-02"> </i> Nouveau client</h4>
        </div>
        <div class="card-body">


   <form action="{{ url('client')}}" method="POST">


                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text"  name="nom" class="form-control">
                    </div>

                    {{-- <div class="form-group">
                        <label for="">Prénom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div> --}}

                    <div class="form-group">
                        <label for="">Address Email</label>
                        <input type="text"  name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" name="telephone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Entrepsire</label>
                        <input type="text" name="entreprise" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Poste</label>
                        <input type="text" name="poste" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Ville</label>
                        <input type="text" name="ville" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Addresse</label>
                        <input type="text" name="addresse" class="form-control">
                    </div>


                      <input type="submit" value="Erengistrer" class="btn btn-primary">
                        <input type="reset" value="Annuler" class="btn btn-danger">


                </form>




@endsection



@section('scripts')

@endsection
