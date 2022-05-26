@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    @foreach ($posts as $post)
    
        <div class="col-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                    <img  src="{{$post->image_url}}" class="img-fluid rounded-start" alt="{{$post->title}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{$post->created_at}}</small></p>
                    <a class="btn btn-success" href="{{route("admin.posts.show", $post->id)}}">Continua a leggere...</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
    
    @endforeach
</div>
</div>
    
@endsection