@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
   <div class="col-sm-1"> </div>    
   <div class="col-sm-8">
   	<h2>Create Post</h2>
   	{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('cateogry_id', 'Category:') !!}
		{!! Form::select('category_id', array('' => 'Select Category') + $categories, null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('photo_id', 'Photo:') !!}
		{!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Description:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control', 'rows'=> 10]) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
	</div>
     {!! Form::close() !!}

     @include('includes.form-error')
    </div>

    </div>

</div>
@endsection