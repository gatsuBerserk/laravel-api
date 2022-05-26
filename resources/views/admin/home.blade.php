@extends('layouts.app')

@section('content')
<div class="container w-50 m-auto d-flex justify-content-around">
    <a class="btn btn-dark" href="{{route("admin.posts.index")}}">Posts</a>
    <a class="btn btn-dark" href="{{route("admin.categories.index")}}">Categories</a>
</div>
    

@endsection