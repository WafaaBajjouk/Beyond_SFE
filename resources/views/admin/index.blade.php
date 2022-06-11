@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12" >
    <div class="card" >
      <div class="card-body">


        <div >Analyse des clients</div>

        <div >
          {!! $chart->html() !!}
        </div>
        <div >Analyse des textes</div>

        <div >
            {!! $texts->html() !!}
          </div>
      </div>
    </div>
  </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! Charts::scripts() !!}
{!! $texts->script() !!}
@endsection
