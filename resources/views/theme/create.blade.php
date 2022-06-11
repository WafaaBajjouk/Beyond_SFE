@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                <form enctype="multipart/form-data" action="{{ route('theme.create')}}" method="POST">


                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}
                    <label> Theme </label>
                    <input class="form-control" name="titre" type="text" id="">

                    <label> Sous Theme </label>


                    <select name="soustheme">
                    @foreach ($soustheme as $soustheme)


                        <option class="form-control"  >{{ $soustheme->titre}}</option>

                        @endforeach
                    </select>


<br>
                      <input type="submit" name="Erengistrer" class="btn btn-primary">
                      <input type="reset" name="Annuler" class="btn btn-danger">


          </form>



      </div>
   </div>

</div>


@endsection


