@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




                <form action="{{ url('user/'.$user->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">



                      {{-- pour generer le token  --}}

                      {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text"  name="name" class="form-control" value="{{ $user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" name="role" class="form-control" value="{{ $user->role}}">
                    </div>

                    <div class="form-group">
                        <label for="">Address Email</label>
                        <input type="text"  name="email" class="form-control" value="{{ $user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="">Persmissions</label>
                        <input type="text" name="permissions" class="form-control" value="{{ $user->permissions}}">
                    </div>



                            <input type="submit" name="Modifier" class="btn btn-warning">
                            <input type="reset" name="Annuler" class="btn btn-danger">


                </form>



            </div>
         </div>

    </div>


@endsection
