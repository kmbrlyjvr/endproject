@extends('layouts.masterAdmin')
@section('container')

<div class="area">      
        <h2 class="title2">Welcome, admin!  </h2>

        <div class="adminlist">
            <a href="{{ route('admin.user.index') }}"><h2 class="title0">Users</h2></a>
            <a href="{{ route('admin.order.index') }}"><h2 class="title0">Orders</h2></a>
            <a href="{{ route('admin.blogpost') }}"><h2 class="title0">Blogs</h2></a>
         </div>
    </div>
    

@endsection

