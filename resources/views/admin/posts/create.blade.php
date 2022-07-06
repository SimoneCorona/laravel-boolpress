@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Inserisci un nuovo post</h1>
    <form action="{{ route('admin.posts.store') }}" method="post">
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
            <label for="content">Contenuto</label>
            <input type="text" id="content" name="content">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
