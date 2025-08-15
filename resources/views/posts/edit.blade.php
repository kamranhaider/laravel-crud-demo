@extends('layout')

@section('content')
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update',$post) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" rows="5" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
