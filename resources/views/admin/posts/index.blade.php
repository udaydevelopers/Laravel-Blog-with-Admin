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
   	@if($posts)
<h1>Posts</h1>
<table class="table">
    <thead>
      <tr>
      	<th>Id</th>
      	<th>Photo</th>
      	<th>Title</th>
      	<th>Body</th>
      	<th>Category</th>
        <th>User</th>
        <th>Create on</th>
        <th>Updated on</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td><img height="60" src="{{ $post->photo_id ? $post->photo->file : 'http://via.placeholder.com/450X450' }}"></td>
        <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->title }}</a></td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->category ? $post->category->name : 'Un Categorized'}}</td>
        <td>{{ $post->user->name }}</td>
        <td>{{ $post->created_at->diffForHumans() }}</td>
        <td>{{ $post->updated_at->diffForHumans() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
</div>
    </div>
</div>
@endsection