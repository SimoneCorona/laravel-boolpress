@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Categoria: {{$category ? $category->name : 'nessuna'}}</p>
    <h2>Tags</h2>
    <ul>
        @forelse ($post->tags as $tag)
            <li>{{ $tag->name }}</li>
            @empty
            <li>nessuno</li>
        @endforelse
    </ul>

    <div>
        <form action="{{ route('admin.posts.edit', ['post' => $post->id ]) }}">
            <button type="submit">Modifica</button>
        </form>
        
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>
    </div>
</div>
@endsection