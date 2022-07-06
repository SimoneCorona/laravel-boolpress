@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Post:</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h3>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p>{{ $post->content }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection