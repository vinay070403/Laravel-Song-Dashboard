@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Song Dashboard</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('songs.store') }}" class="mb-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Song Title" required>
        </div>
        <div class="mb-3">
            <input type="url" name="url" class="form-control" placeholder="Song URL" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Song</button>
    </form>

    <ul class="list-group">
        @foreach($songs as $song)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $song->title }}</strong> - 
                    <a href="{{ $song->url }}" target="_blank">Open</a>
                </div>
                <form method="POST" action="{{ route('songs.destroy', $song->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
