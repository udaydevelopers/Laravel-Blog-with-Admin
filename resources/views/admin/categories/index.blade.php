@extends("layouts.admin")

@section('content')

<div class="container">
    <div class="row">
    	
        <div class="col-md-3">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
    
       	<h1>Cateogries</h1>   
   <div class="col-md-9">
   	@if(Session::has('deleted_category'))
    <p class="bg bg-danger">{{ session('deleted_category') }}</p>
    @endif
   	<div class="col-sm-5">
	{!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Category Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
		<div class="form-group">
		{!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
	</div>
     {!! Form::close() !!}
   	</div>
   	<div class="col-sm-7">
 
	  	@if($categories)
<table class="table">
    <thead>
      <tr>
      	<th>Id</th>
        <th>Name</th>
        <th>Create on</th>
        <th>Updated on</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a></td>
        <td>{{ $category->created_at->diffForHumans() }}</td>
        <td>{{ $category->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
</div>
    </div>
</div>
@endsection