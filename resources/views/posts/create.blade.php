@extends('layout')

@section('content')
    <h2>Create Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" rows="5" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@endsection
