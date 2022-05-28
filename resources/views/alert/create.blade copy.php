@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                <form action="{{ url('alert')}}" method="POST">


                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text"  name="titre" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Client</label>
                        <select name="client_name">
    @foreach($client as $client)
        <option value="{{ $client->nom}}">{{ $client->nom}}</option>
    @endforeach
</select>

                    </div>

                    <div class="form-group">
                        <label for="">Text</label>
                        <textarea name="text" cols="40" rows="5"></textarea>
                    </div>



                            <input type="submit" name="Erengistrer" class="btn btn-primary">
                            <input type="reset" name="Annuler" class="btn btn-danger">


                </form>



            </div>
         </div>

    </div>


@endsection
