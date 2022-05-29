@extends('layouts.master')

@section('title')

    Admin Dashboard


@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                {{-- <th>Telephone</th> --}}
                <th>Role</th>
                <th>Permissions</th>
                <th>Date</th>
                    <th>Action</th>

              </thead>
              <tbody>
                @foreach ($user as $user)

                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    {{-- <td>{{ $user->telephone}}</td> --}}
                    <td>{{ $user->role}}</td>
                    <td>{{ $user->permissions}}</td>
                    <td>{{ $user->created_at}}</td>
                    <td></td>

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
