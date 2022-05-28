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


        <form action="{{url('/csv_file/search')}}" method="POST" role="search">
            {{csrf_field()}}
            <div class="input-group">
              <input type="text" name="q" placeholder="Search for"><span class="input-group-btn">
                <select name="q" >
                    <option value="Environnement">Environnement</option>
                    <option value="Santé et sécurité au travail">Santé et sécurité au travail</option>
                    {{-- <option value="Environnement">Environnement</option> --}}

                </select>

                <button type="submit" class="btn btn-info">
           <i class="fas fa-search fa-sm"></i> Search
          </button>
              </span>

            </div>
          </form>
    </div>


    <table class="table">
 @if(isset($data))
        <head>
        <tr>
            <th>NBO</th>

            <th>Titre</th>
            <th>Theme</th>
            <th>Sous Theme</th>
            <th>TempS</th>

            <th>Text</th>
            <th>Fich de lecture</th>
            <th>fiche d audit</th>

        </tr>
        </head>
     <body>

        @foreach ($data as $data)

         <tr>
            <td>{{ $data->nbo}}</td>
            <td>{{ $data->libellee}}</td>
            <td>{{ $data->theme}}</td>
            <td>{{ $data->soustheme}}</td>
            <td>{{ $data->datedecreation}}</td>
            <td>{{ $data->texte}}</td>
            <td>{{ $data->fichedelecture}}</td>
            <td>{{ $data->fichedaudit}}</td>




            <td>


            </td>

        </tr>

        @endforeach
    </tbody>
    </table>
    {{-- {!! $data->render() !!} --}}
    @else{{$message}}
    @endif
</div>

</body>
</html>
