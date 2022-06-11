@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-header">
            <h4 class="card-title">  <i class="now-ui-icons ui-2_settings-90"></i>Qualification du réglementation du client : {{ $reg->clientname }}</h4>
          </div>
        <div class="card-body">

            <form action="{{ url('edit/'.$reg->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">

                  {{ csrf_field()}}

                <label for="">Texte</label>

                <select  value="{{ $reg->text}}" name="text">
                    @foreach ($text as $text)


                    <option class="form-control" >{{$text->libellee}}</option>

                    @endforeach
                    </select>
<br><br>
                <div class="form-group">
                    <label for="">Nom du client</label>

                    <input type="text" class="form-control" disabled="" value="{{$reg->clientname}}" name="clientname" >


                </div>



<br>
{{-- <br> --}}
                <label for="">Status</label>
                <select value="{{$reg->status}}" name="status" >
                        <option>conforme C </option>
                        <option>Sans Objet SO</option>
                        <option>non Conforme NC</option>

                </select>
<br><br>
                        <input type="submit" value="Modifier" class="btn btn-warning">
                        <input type="reset" value="Annuler" class="btn btn-danger">


            </form>








        </div></div></div>
</div>


@endsection



@section('scripts')

@endsection
