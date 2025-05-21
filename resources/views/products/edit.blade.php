@extends('components.layouts')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Produk</h2>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Nama Produk</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="imagePath" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="imagePath" class="form-control">
            @if ($product->imagePath)
                <img src="{{ asset('storage/' . $product->imagePath) }}" alt="Gambar Produk" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
