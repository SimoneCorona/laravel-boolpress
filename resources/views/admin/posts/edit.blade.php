@extends('layouts.dashboard')

@section('content')
<h1>Nuovo Post</h1>
<form action="{{ route('admin.posts.store') }}" method="post">
    @method('POST')
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
        <label for="content">Serie</label>
        <input type="text" id="content" name="content">
    </div>
    <button type="submit">Submit</button>
</form>
@endsection