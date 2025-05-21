@extends('components.layouts')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $post->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="imagePath" class="form-label">Gambar Baru (opsional)</label>
            <input type="file" class="form-control" id="imagePath" name="imagePath" accept="image/*">
        </div>

        @if($post->imagePath)
            <div class="mb-3">
                <p>Gambar Saat Ini:</p>
                <img src="{{ asset('storage/' . $post->imagePath) }}" alt="Gambar Saat Ini" class="img-fluid rounded" style="max-width: 300px;">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
