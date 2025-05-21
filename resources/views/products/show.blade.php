@extends('components.layouts')

@section('content')
    <div class="container">
        <h2 class="mb-4">Detail Produk</h2>
        <div class="card">
            @if ($product->imagePath)
                <img src="{{ asset('storage/' . $product->imagePath) }}" class="card-img-top" alt="Gambar Produk">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="card-text">{{ $product->description }}</p>
                <p class="text-muted mb-1">Dibuat oleh: <strong>{{ $product->user->name }}</strong></p>
                <p class="text-muted">Dibuat pada: {{ \Carbon\Carbon::parse($product->created_at)->format('d M Y, H:i') }}
                </p>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
@endsection
