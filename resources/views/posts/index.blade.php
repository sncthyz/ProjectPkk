@extends('components.layouts')

@section('content')
    <div class="custom-container">
        <div class="custom-header">
            <h2>DAFTAR POST</h2>
        </div>

        <div class="custom-grid">
            @forelse($posts as $post)
                <div class="post-card">
                    @if ($post->imagePath)
                        <img src="{{ asset('storage/' . $post->imagePath) }}" alt="Gambar Post" class="post-img">
                    @endif
                    <div class="post-content">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <p class="post-desc">{{ Str::limit($post->description, 100) }}</p>
                        <small class="post-author">Oleh {{ $post->user->name }}</small>
                    </div>
                    <div class="post-actions">
                        <a href="{{ route('posts.show', $post) }}" class="custom-btn custom-btn-info">Lihat</a>
                        <a href="{{ route('posts.edit', $post) }}" class="custom-btn custom-btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="custom-btn custom-btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="no-posts">Belum ada post.</div>
            @endforelse
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .custom-container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .custom-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .custom-btn {
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            text-align: center;
            display: inline-block;
        }

        .custom-btn-primary { background-color: #1e90ff; }
        .custom-btn-info { background-color: #17a2b8; }
        .custom-btn-warning { background-color: #ffc107; color: black; }
        .custom-btn-danger { background-color: #dc3545; }

        .custom-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .post-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .post-card:hover {
            transform: translateY(-4px);
        }

        .post-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .post-content {
            padding: 15px;
            flex: 1;
        }

        .post-title {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .post-desc {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .post-author {
            font-size: 12px;
            color: #999;
        }

        .post-actions {
            display: flex;
            gap: 8px;
            padding: 10px 15px 15px;
        }

        .post-actions form {
            margin: 0;
            flex: 1;
        }

        .post-actions a,
        .post-actions button {
            flex: 1;
        }

        .no-posts {
            text-align: center;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 8px;
        }
    </style>
@endsection
