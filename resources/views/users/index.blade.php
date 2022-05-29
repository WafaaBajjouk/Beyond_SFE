{{-- @extends('layouts.sidebar') --}}

{{-- @section('content') --}}

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Email</th>
        {{-- <th>Telephone</th> --}}
        <th>Role</th>
        <th>Permissions</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>


                        @foreach ($user as $user)

                        <tr>
                           <td>{{ $user->id}}</td>
                           <td>{{ $user->name}}</td>
                           <td>{{ $user->email}}</td>
                           {{-- <td>{{ $user->telephone}}</td> --}}
                           <td>{{ $user->role}}</td>
                           <td>{{ $user->permissions}}</td>
                           <td>{{ $user->created_at}}</td>
                           <td>

                               <form action="{{ url('user/'.$user->id )}}" method="POST">
                                   {{ csrf_field() }}

                                   {{ method_field('DELETE')}}

                                   <a href="" class="btn btn-primary">Afficher</a>
                                   <a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-default">Modifier</a>

                                   <button type="submit" class="btn btn-danger">Supprimmer</button>

                               </form>

                           </td>

                    </div>

@endforeach

</body>
</table>


</main>
</div>


{{-- @endsection --}}
