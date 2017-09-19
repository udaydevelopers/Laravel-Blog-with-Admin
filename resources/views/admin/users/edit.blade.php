@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
        
   <div class="col-sm-9">
   	<div class="row">
   		   	<h2>Edit User</h2>
   	<div class="col-sm-3">
   		<img src="{{ $user->photo ? $user->photo->file : 'http://via.placeholder.com/400x400'}}" class="img-responsive img-rounded">
   	</div>
   	<div class="col-sm-9">
   	
   	{!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
    <div class="form-group">
		{!! Form::label('role_id', 'Role:') !!}
		{!! Form::select('role_id', array('' => 'Select Type') + $roles, null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('is_active', 'Status:') !!}
		{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('photo_id', 'Upload Picture:') !!}
		{!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password:') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
	</div>
     {!! Form::close() !!}

     @include('includes.form-error')
    </div>

    </div>
  </div>
</div>
@endsection