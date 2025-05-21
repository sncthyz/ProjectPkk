@extends('components.layouts')

@section('content')
    <div class="container">
        <h2 class="mb-4">Detail Post</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <p class="text-muted mb-0">Ditulis oleh: <strong>{{ $post->user->name }}</strong></p>
                <p class="text-muted">Dibuat pada: {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y, H:i') }}</p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
@endsection
