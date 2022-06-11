@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" >               <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
             Les textes règlementaires</h4>
        </div>

        {{-- <form action="{{ url('client/create')}}" method="POST">

        <button style="margin-left: 920px;margin-right:10px;"  type="submit" class="btn btn-success">Ajouter Un nouveau Client</button>

        </form> --}}

        {{-- <div class="pull-right">
            <a style="margin-right:10px;"   href="{{ url('client/create')}}" class="btn btn-success">Nouveau Client</a>


        </div> --}}

        <div class="container mt-5 text-center">
            <h2 class="mb-4">
            </h2>
            <form enctype="multipart/form-data" action="{{ route('import') }}" method="POST" >
                @csrf
                <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                    </div>
                </div>
                <button class="btn btn-primary"><i class="now-ui-icons arrows-1_cloud-upload-94"></i>Importer des données</button>
                <a class="btn btn-success" href="{{ route('export') }}"> <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    Exporter des données</a>
            </form>
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                    <th>N BO</th>
                    <th>libelle </th>
                    <th>Thème</th>
                    <th>Sous-thème</th>
                    <th>fichier</th>
                    {{-- <th>Temps</th> --}}
                    <th>Action</th>

                </tr>


              </thead>
              <tbody>
                @foreach ($data as $data)

                <tr>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->libellee}}</td>
                    <td>{{ $data->theme}}</td>
                    <td>{{ $data->soustheme}}</td>
                    <td>{{ $data->texte}}</td>
                    {{-- <td>{{ $data->created_at}}</td> --}}


                    <td>

                        <form action="{{ url('textreg/'.$data->id)}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}


                            <button type="submit" class="btn btn-danger"> <i class="now-ui-icons ui-1_simple-delete"></i>Supprimmer</button> <br><br>
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
