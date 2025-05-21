@extends('components.layouts')

@section('content')
<div class="custom-container">
    <h2 class="detail-title">Detail Postingan Dari {{ auth()->user()->name }}</h2>

    <div class="full-post-card">
        @if ($post->imagePath)
            <img src="{{ asset('storage/' . $post->imagePath) }}" alt="Gambar Produk" class="post-image">
        @endif

        <div class="post-content">
            <h3 class="post-title">{{ $post->title }}</h3>
            <p class="post-description">{{ $post->description }}</p>
            <p class="post-meta">Ditulis oleh: <strong>{{ $post->user->name }}</strong></p>
            <p class="post-meta">Dibuat pada: {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y, H:i') }}</p>
        </div>

        <div class="post-actions">
            <a href="{{ route('posts.index') }}" class="custom-btn custom-btn-secondary">Kembali</a>
            <a href="{{ route('posts.edit', $post) }}" class="custom-btn custom-btn-warning">Edit</a>
        </div>
    </div>
</div>

<style>
    .custom-container {
        width: 100%;
        margin: 0 auto;
        padding: 30px 20px;
        font-family: 'Segoe UI', sans-serif;
    }

    .detail-title {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 24px;
        text-align: center;
    }

    .full-post-card {
        background-color: #fff;
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .post-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 10px;
    }

    .post-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .post-description {
        font-size: 16px;
        color: #444;
        line-height: 1.6;
    }

    .post-meta {
        font-size: 14px;
        color: #777;
    }

    .post-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 10px;
    }

    .custom-btn {
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        color: white;
        text-align: center;
        cursor: pointer;
    }

    .custom-btn-secondary {
        background-color: #6c757d;
    }

    .custom-btn-warning {
        background-color: #ffc107;
        color: black;
    }

    /* Responsive */
    @media (max-width: 600px) {
        .post-title {
            font-size: 20px;
        }
        .detail-title {
            font-size: 24px;
        }
    }
</style>
@endsection
