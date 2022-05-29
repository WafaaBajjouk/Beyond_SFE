@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Liste des fichiers</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
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
                    <td>{{ $text->id}}</td>
                    <td>{{ $text->titre}}</td>
                    <td>{{ $text->Theme}}</td>
                    <td>{{ $text->Sous_Theme}}</td>
                    <td>{{ $text->file}}</td>
                    <td>{{ $text->created_at}}</td>

                    <td>

                        <form action="{{ url('text/'.$text->id)}}" method="POST">
                            {{-- {{ csrf_field() }}

                            {{ method_field('DELETE')}} --}}

                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Supprimmer</button> <br><br>
                            <button type="submit" class="btn btn-primary">Telecharger</button>


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
