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
        <td>{{ $category->name }}</td>
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
@endsection