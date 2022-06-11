@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">   <i class="now-ui-icons files_single-copy-04"></i> Liste des fichiers</h4>
        </div>


        {{-- FUNICULÌ FUNICULÀ  --}}

        <div class="pull-right">
            <a style="margin-right:10px;"   href="{{ url('text/create')}}" class="btn btn-success"><i class="now-ui-icons arrows-1_cloud-upload-94"></i>Charger un fichier </a>


        </div>



        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                {{-- <th>Id</th> --}}
                <th>Titre</th>
                <th>Theme</th>
                <th>Sous Theme</th>
                <th>fichier</th>
                <th>Temps</th>
                <th>Action</th>


              </thead>
              <tbody>
                @foreach ($text as $text)

                <tr>
                    {{-- <td>{{ $text->id}}</td> --}}
                    <td>{{ $text->titre}}</td>
                    <td>{{ $text->Theme}}</td>
                    <td>{{ $text->Sous_Theme}}</td>
                    {{-- <td>{{ $text->file}}</td> --}}
                   <td> <a href={{ asset('/storage/'.$text->file) }}>text</a></td>
                    <td>{{ $text->created_at}}</td>

                    <td>

                        <form action="{{ url('text/'.$text->id)}}" method="POST">
                            {{-- {{ csrf_field() }}

                            {{ method_field('DELETE')}} --}}

                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"><i class="now-ui-icons ui-1_simple-delete"></i>Supprimmer</button> <br><br>
                            {{-- <button type="submit" class="btn btn-primary">Telecharger</button> --}}


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
