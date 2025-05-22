@extends('components.layouts')

@section('content')
    <div class="product-detail-box" class="mt-5">
        <div class="product-image">
            @if ($product->imagePath)
                <img src="{{ asset('storage/' . $product->imagePath) }}" alt="{{ $product->title }}">
            @else
                <img src="{{ asset('img/default.png') }}" alt="Default Image">
            @endif
        </div>

        <div class="middle-section">
            <div class="product-info">
                <h2>{{ $product->title }}</h2>
                <p class="store-info">Oleh {{ $product->user->name }} •
                    {{ \Carbon\Carbon::parse($product->created_at)->format('d M Y, H:i') }}</p>
                <p>{{ $product->description }}</p>
            </div>

            <div class="quantity-section">
                <label for="qty">Jumlah Produk</label>
                <div class="quantity">
                    <button onclick="decreaseQty()">-</button>
                    <span id="qty">1</span>
                    <button onclick="increaseQty()">+</button>
                </div>
            </div>
        </div>

        <div class="price-buy">
            <div class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
            <a href="{{ route('products.receipt', $product->id) }}" class="btn btn-primary">Lihat Struk</a>
        </div>

        <div class="action-buttons">
            <a href="{{ route('products.index') }}" class="btn-back">Kembali</a>
            <a href="{{ route('products.edit', $product) }}" class="btn-edit">Edit</a>
        </div>
    </div>

    <style>
        .product-detail-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            width: 100%;
            max-width: 900px;
            font-family: 'Segoe UI', sans-serif;
        }

        .product-image img {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .middle-section {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-top: 20px;
            align-items: flex-start;
            width: 100%;
        }

        .product-info {
            max-width: 350px;
        }

        .product-info h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .store-info {
            color: #888;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .quantity-section label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity button {
            width: 30px;
            height: 30px;
            font-size: 18px;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .quantity span {
            min-width: 20px;
            text-align: center;
            font-weight: bold;
        }

        .price-buy {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
            width: 100%;
        }

        .price {
            font-size: 22px;
            font-weight: 600;
        }

        .buy-now {
            background-color: #28d45c;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .buy-now:hover {
            background-color: #21b64c;
        }

        .action-buttons {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .action-buttons a {
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
        }

        .btn-edit {
            background-color: #ffc107;
            color: black;
        }

        @media (max-width: 768px) {
            .middle-section {
                flex-direction: column;
                gap: 20px;
            }

            .price-buy {
                flex-direction: column;
                align-items: flex-start;
            }

            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .action-buttons a {
                text-align: center;
            }
        }
    </style>

    <script>
        let qty = 1;
        const qtyEl = document.getElementById('qty');

        function increaseQty() {
            qty++;
            qtyEl.textContent = qty;
        }

        function decreaseQty() {
            if (qty > 1) {
                qty--;
                qtyEl.textContent = qty;
            }
        }
    </script>
@endsection
