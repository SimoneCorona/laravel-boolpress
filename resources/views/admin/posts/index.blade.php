@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Post:</h1>
    <div class="row row-cols-3">
        
        @foreach ($posts as $post)
        <div class="col">
            <div class="card mb-3">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">Info post</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection