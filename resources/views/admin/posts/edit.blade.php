@extends('layouts.dashboard')

@section('content')
<h1>Modifica Post</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{ old('title') ? old('title') : $post->title }}">
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" id="content" name="content" value="{{ old('content') ? old('content') : $post->content }}">
        </div>
        <button type="submit">Modifica</button>
    </form>
@endsection