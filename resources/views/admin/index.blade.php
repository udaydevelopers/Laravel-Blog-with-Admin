@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <!-- Sidebar -->
      @include('layouts.sidebar')
        <!-- /#sidebar-wrapper -->
        </div>
        
        <div class="col-md-8">
          Admin Dashbard
        </div>
    </div>
</div>
@endsection