@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Inserisci un nuovo post</h1>
    <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="category_id">Categoria</label>
            <select name="category_id" name="category_id">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category && $category->id == $category->id ? 'selected' : ''}}> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <h3 class="col-sm-2">Tag</h3>
            <div class="col-sm-10">
              <div class="form-check">
                @foreach ($tags as $tag)
                    <input type="checkbox" name="{{$tag->name}}" id="{{$tag->id}}">
                    <label for="{{$tag->id}}">
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>
        </div>
        <div>
            <label for="content">Contenuto</label>
            <input type="text" id="content" name="content">
        </div>
        <div>
            <label for="image">Inserisci un immagine</label>
            <input type="file" id="image" name="image">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
