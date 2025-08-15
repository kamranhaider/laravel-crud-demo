@extends('layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead><tr><th>ID</th><th>Title</th><th width="150"></th></tr></thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td class="text-end">
                    <a href="{{ route('posts.edit',$post) }}" class="btn btn-sm btn-secondary">Edit</a>
                    <form action="{{ route('posts.destroy',$post) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
