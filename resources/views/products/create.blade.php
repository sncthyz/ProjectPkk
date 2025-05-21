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
    background-color: #3490dc;
    color: white;
}

.btn-cancel {
    background-color: #6c757d;
    color: white;
}

    </style>
</head>
<div class="form-wrapper">
    <h2 class="form-title">Tambah Produk</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="form-label-custom">Nama Produk</label>
            <input type="text" name="title" class="input-custom" required>
        </div>

        <div class="form-group">
            <label for="price" class="form-label-custom">Harga</label>
            <input type="number" name="price" class="input-custom" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description" class="form-label-custom">Deskripsi</label>
            <textarea name="description" class="input-custom textarea-custom" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagePath" class="form-label-custom">Gambar</label>
            <input type="file" name="image" class="input-custom" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-custom btn-save">Simpan</button>
            <a href="{{ route('products.index') }}" class="btn-custom btn-cancel">Batal</a>
        </div>
    </form>
</div>
@endsection
