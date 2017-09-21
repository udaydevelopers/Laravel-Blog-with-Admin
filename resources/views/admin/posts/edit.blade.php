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
	<div class="col-sm-4">
		<br><br><br>
		<img width="250" src="{{ $post->photo->file }}">
	</div>
	<div class="col-sm-8">
<h1>Edit Post</h1>
	{!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('cateogry_id', 'Category:') !!}
		{!! Form::select('category_id', array('' => 'UnCategorized') + $categories, null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('photo_id', 'Photo:') !!}
		{!! Form::file('photo_id', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Description:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control', 'rows'=> 10]) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Update Post', ['class' => 'btn btn-primary col-sm-6']) !!}
	</div>
     {!! Form::close() !!}
	{!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}
     <div class="form-group">
		{!! Form::submit('Delete Post', ['class' => 'btn btn-danger col-sm-6']) !!}
	</div>
     @include('includes.form-error')
    </div>

    </div>
</div>
</div>
@endsection