@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        



                <form enctype="multipart/form-data" action="{{ route('upload.file')}}" method="POST">
                    

                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    {{-- <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text"  name="titre" class="form-control">
                    </div> --}}
                    <label> Theme </label>
                    <input class="form-control" name="theme" type="text" id="">

                    <label> Sous Theme </label>
                    <input class="form-control" name="stheme" type="text" id="">
                        

                        <label> file input </label>
                        <input class="form-control" name="file" type="file" id="formFile">





<br>
                      <input type="submit" name="Erengistrer" class="btn btn-primary">
                      <input type="reset" name="Annuler" class="btn btn-danger">


          </form>



      </div>
   </div>

</div>


@endsection


