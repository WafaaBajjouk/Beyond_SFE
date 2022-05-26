@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        



                <form action="{{ url('client')}}" method="POST">
                    

                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text"  name="nom" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Prénom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>

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


                            <input type="submit" name="Erengistrer" class="btn btn-primary">
                            <input type="reset" name="Annuler" class="btn btn-danger">


                </form>



            </div>
         </div>

    </div>


@endsection