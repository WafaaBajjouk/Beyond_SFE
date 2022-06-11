@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12" >
    <div class="card" >
      <div class="card-body">
        <div class="card-header">
   <div ><h4><i class="now-ui-icons business_chart-bar-32"></i> Analyse des clients</h4></div>

        </div>



        <div >
          {!! $chart->html() !!}
        </div>
        <div class="card-header">
            <div ><h4><i class="now-ui-icons business_chart-bar-32"></i> Analyse des Textes Reglementaires</h4></div>

                 </div>
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
