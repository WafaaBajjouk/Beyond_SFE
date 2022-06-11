@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')


<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title"><i class="now-ui-icons users_single-02"> </i> détail du client : {{ $client->nom}}</h4>
          </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-5 pr-1">
                <div class="form-group">
                  <label>ID </label>
                  <input type="text" class="form-control" disabled="" placeholder="Company" value="{{ $client->id}}">
                </div>
              </div>
              <div class="col-md-3 px-1">
                <div class="form-group">
                  <label>Nom</label>
                  <input type="text" class="form-control" disabled="" placeholder="Username" value="{{ $client->nom}}">
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email" value="{{ $client->email}}" disabled="" >
                </div>
              </div>
            </div>
            <div class="row">
              {{-- <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" disabled="" placeholder="Username" value="{{ $client->nom}}">
                </div>
              </div> --}}
              {{-- <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                </div>
              </div> --}}
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control"disabled="" value="{{ $client->addresse}}"  >
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label>Entreprise</label>
                  <input type="email" class="form-control" value="{{ $client->entreprise}}" disabled="" >
                </div>
              </div>


              <div class="col-md-4 px-1">
                <div class="form-group">
                  {{-- <label>Ville</label>
                  <input type="email" class="form-control"  value="{{ $client->ville}}" disabled="" > --}}
                  <label>Poste</label>
                  <input type="email" class="form-control" value="{{ $client->poste}}" disabled="" >
                </div>
              </div>
              <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label>Ville</label>
                    <input type="email" class="form-control"  value="{{ $client->ville}}" disabled="" >
                </div>
              </div>

                        {{-- <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label>Addresse</label>
                    <input type="email" class="form-control"  value="{{ $client->addresse}}" disabled="" >
                </div>
              </div> --}}

            </div>
            <div class="row">
              <div class="col-md-12">
                {{-- <div class="form-group">
                  <label>About Me</label>
                  <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                </div> --}}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="../assets/img/bg5.jpg" alt="...">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/bg5.jpeg" alt="...">
              <h5 class="title">{{$client->entreprise }}</h5>
            </a>
            <p class="description">
              michael24
            </p>
          </div>
          <p class="description text-center">
            {{$client->nom }}<br>
            {{$client->ville }} <br>
            {{$client->addresse }}
          </p>
        </div>
        <hr>
        <div class="button-container">
          {{-- <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button> --}}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection



@section('scripts')

@endsection
