@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            {{-- <i class="now-ui-icons ui-2_settings-90"></i> --}}

          <h4 class="card-title"> <i class="now-ui-icons ui-2_settings-90"></i> La liste des textes associer aux clients</h4>
        </div>

        <div class="pull-right">
            <a style="margin-right:10px;"   href="{{ url('clientreg')}}" class="btn btn-success">                             <i class="now-ui-icons ui-1_simple-add"></i>
                Nouvelle Reglementation</a>


        </div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Client</th>

                <th>Texte</th>
                <th>Status</th>
                <th>Action</th>

              </thead>
              <tbody>
                @foreach ($reg as $reg)

                <tr>
                    <td>{{ $reg->id}}</td>

                    <td>{{ $reg->clientname}}</td>
                    <td>{{ $reg->text}}</td>
                    <td>{{ $reg->status}}</td>

                    <td>

                        <form action="{{ url('reg/'.$reg->id )}}" method="POST">
                            {{ csrf_field() }}

                            {{ method_field('DELETE')}}

                            <a href="{{url('editreg/'.$reg->id)}}" class="btn btn-primary"> <i class="now-ui-icons gestures_tap-01"></i> Qualifier</a><br><br>
                            <a href="{{url('clientInfo/'.$reg->idclient)}}" class="btn btn-default"> <i class="now-ui-icons design_bullet-list-67"></i> details</a><br><br>


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
