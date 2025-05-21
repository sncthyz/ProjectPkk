@extends('components.layouts') {{-- Ganti kalau kamu pakai layout lain --}}

@section('content')
    <div class="text-center mb-3">
        <h2 class="mb-12">Daftar Post</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Tambah Post</a>
    </div>
    <div class="row"></div>
    {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif --}}

    <div class="row g-3">
        @forelse($posts as $post)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    @if ($post->imagePath)
                        <img src="{{ asset('storage/' . $post->imagePath) }}" class="card-img-top" alt="Gambar Post">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                        <small class="text-muted">Oleh {{ $post->user->name }}</small>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between gap-1">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info w-100">Lihat</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning w-100">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus?')" class="w-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger w-100">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary text-center">
                    Belum ada post.
                </div>
            </div>
        @endforelse
    </div>
@endsection
