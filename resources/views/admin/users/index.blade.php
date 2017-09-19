@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
        
   <div class="col-md-9">
   	<h2>Users</h2>
   	@if($users)
   <table class="table">
    <thead>
      <tr>
      	<th>Id</th>
      	<th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Create on</th>
        <th>Updated on</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td><img height="60" src="{{ $user->photo ? $user->photo->file : 'http://via.placeholder.com/450X450' }}"></td>
        <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role->name }}</td>
        <td>{{ $user->is_active == 1 ? "Active" : "Not Active" }}</td>
        <td>{{ $user->created_at->diffForHumans() }}</td>
        <td>{{ $user->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
       </div>
    </div>
</div>
@endsection