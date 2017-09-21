@extends("layouts.admin")

@section('content')

<div class="container">
    <div class="row">
    	
        <div class="col-md-3">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
        
   <div class="col-md-9">
   	<h1>Cateogries</h1>
   	<div class="col-sm-5">
	{!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Category Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
	</div>
     {!! Form::close() !!}


	{!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}
     <div class="form-group">
		{!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-6']) !!}
	</div>
   	</div>
	<div class="col-sm-7">
	   	
		  	
	</div>
</div>
    </div>
</div>
@endsection