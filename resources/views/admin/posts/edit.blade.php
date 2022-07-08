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
        <div class="form-group">
            <h3 class="col-sm-2">Tag</h3>
            <div class="col-sm-10">
              <div class="form-check">
                @foreach ($tags as $tag)
                    <input type="checkbox" id="gridCheck1">
                    <label for="gridCheck1">
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>
        </div>
        <div>
            <label for="category_id">Categoria</label>
            <select name="category_id" name="category_id">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category &&  old('category_id', $post->category->id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" id="content" name="content" value="{{ old('content') ? old('content') : $post->content }}">
        </div>
        <button type="submit">Modifica</button>
    </form>
@endsection