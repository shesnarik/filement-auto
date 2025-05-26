@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="list-group">
        @forelse($posts as $post)
            <div class="list-group-item">
                <div class="d-flex justify-content-between">
                    <h5>{{ $post->title }}</h5>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
                <p class="mb-1">{{ $post->content }}</p>
                <small>Created at: {{ $post->created_at->format('d.m.Y H:i') }}</small>
            </div>
        @empty
            <div class="alert alert-info">No posts found</div>
        @endforelse
    </div>
@endsection
