<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV to Database in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
        </h2>
        <form enctype="multipart/form-data" action="{{ route('import') }}" method="POST" >
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('export') }}">Export data</a>
        </form>
    </div>









    <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_theme" id="filter_gender" class="form-control" required>
                            <option value="">Select Theme</option>
                            <option value="Environnement">Environnement</option>
                            <option value="Santé et sécurité au travail">Santé et sécurité au travail</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <select name="filter_country" id="filter_country" class="form-control" required>
                            <option value="">Select Country</option>
                            @foreach($country_name as $country)

                            <option value="{{ $country->Country }}">{{ $country->Country }}</option>

                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />

            {{-- ======================================= --}}


    <table class="table">
        <head>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Theme</th>
            <th>Sous Theme</th>
            <th>fichier</th>
            <th>Temps</th>
            <th>Action</th>

        </tr>
        </head>
     <body>

        @foreach ($data as $data)

         <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->libellee}}</td>
            <td>{{ $data->theme}}</td>
            <td>{{ $data->sousTheme}}</td>
            <td>{{ $data->texte}}</td>
            <td>{{ $data->created_at}}</td>
            <td>

                <form action="{{ url('text/'.$data->id)}}" method="POST">
                    {{ csrf_field() }}

                    {{ method_field('DELETE')}}


                    <button type="submit" class="btn btn-danger">Supprimmer</button> <br><br>
                    <button type="submit" class="btn btn-primary">Telecharger</button>


                </form>

            </td>

        </tr>
        @endforeach

     </body>
    </table>
</body>
</html>
