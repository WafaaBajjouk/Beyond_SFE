@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Liste des Themes</h4>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                {{-- <th>Id</th> --}}
                <th>Theme</th>
                {{-- <th>Client Id</th> --}}
                <th>Sous Theme </th>


                {{-- <th>Action</th> --}}

              </thead>
              <tbody>
                @foreach ($data as $data)
                <tr>
                    {{-- <td>{{ $text->id}}</td> --}}
                    {{-- <td>{{ $text->titre}}</td> --}}
                    {{-- <td>{{ $data->id}}</td> --}}
                    {{-- <td>{{ $data->libellee}}</td> --}}
                    <td>{{ $data->theme}}</td>
                    <td>{{ $data->soustheme}}</td>
                    {{-- <td>{{ $data->texte}}</td> --}}
                    {{-- <td>{{ $data->created_at}}</td> --}}

                    <td>
                        <form action="{{ url('text/'.$data->id)}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}


                            <button type="submit" class="btn btn-danger">Supprimmer</button> <br><br>
                            <button type="submit" class="btn btn-primary">Modidfer</button>


                        </form>


                    </td>


                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection



@section('scripts')

@endsection
