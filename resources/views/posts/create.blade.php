@extends('components.layouts')

@section('content')
<head>
    <style>
        .form-wrapper {
    max-width: 600px;
    margin: 40px auto;
    padding: 24px;
    background-color: #f9f9f9;
    border-radius: 10px;
    font-family: sans-serif;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.form-title {
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
}

.form-group {
    margin-bottom: 16px;
}

.form-label-custom {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
}

.input-custom {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    box-sizing: border-box;
}

.textarea-custom {
    resize: vertical;
    min-height: 100px;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn-custom {
    padding: 10px 20px;
    border: none;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
}

.btn-save {
    background-color: #28a745;
    color: white;
}

.btn-cancel {
    background-color: #6c757d;
    color: white;
}

.alert-box {
    background-color: #ffe5e5;
    color: #cc0000;
    border: 1px solid #cc0000;
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 16px;
}

.alert-list {
    margin: 0;
    padding-left: 20px;
}

    </style>
</head>
<div class="form-wrapper">
    <h2 class="form-title">Tambah Post</h2>

    @if ($errors->any())
        <div class="alert-box">
            <strong>Terjadi kesalahan!</strong>
            <ul class="alert-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="form-label-custom">Judul</label>
            <input type="text" class="input-custom" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="description" class="form-label-custom">Deskripsi</label>
            <textarea class="input-custom textarea-custom" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="imagePath" class="form-label-custom">Gambar (opsional)</label>
            <input type="file" class="input-custom" id="imagePath" name="imagePath" accept="image/*">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-custom btn-save">Simpan</button>
            <a href="{{ route('posts.index') }}" class="btn-custom btn-cancel">Kembali</a>
        </div>
    </form>
</div>
@endsection
