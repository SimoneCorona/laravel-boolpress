@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <div>
        <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>

        <form action="{{ route('admin.posts.destroy', ['post' => $post->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>
    </div>
</div>
@endsection