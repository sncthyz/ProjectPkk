@extends('components.layouts')

@section('content')

    <style>
        .receipt-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .receipt-card {
            width: 500px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            font-family: 'Courier New', monospace;
            border: 2px dashed #000;
            text-align: center;
        }

        .receipt-header {
            font-size: 22px;
            font-weight: bold;
            border-bottom: 2px dashed #000;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .receipt-content p {
            margin: 8px 0;
            font-size: 18px;
        }

        .receipt-footer {
            border-top: 2px dashed #000;
            padding-top: 15px;
            margin-top: 15px;
            font-size: 16px;
        }

        .receipt-img {
            display: block;
            margin: 15px auto;
            width: 120px;
        }

        .btn-confirm {
            font-size: 18px;
            padding: 12px;
        }
    </style>

    <div class="receipt-wrapper">
        <div class="receipt-card">
            <div class="receipt-header">Struk Pembelian</div>
            <img src="{{ asset('storage/' . $product->imagePath) }}" alt="Product Image" class="receipt-img">
            <div class="receipt-content">
                <p><strong>Nama Produk: </strong>{{ $product->title }}</p>
                <p><strong>Deskripsi: </strong>{{ $product->description }}</p>
                <p><strong>Harga: </strong>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
            <div class="receipt-footer"></div>
            <form action="" method="POST" id="transactionForm">
                @csrf
                <input type="hidden" name="item_id" value="{{ $product->id }}">
                <button type="submit" class="btn btn-success w-100 btn-confirm">Konfirmasi Pembelian</button>
            </form>
            <div id="thankYouMessage"
                style="display: none; text-align: center; margin-top: 20px; font-weight: bold; color: green; font-size: 18px;">
                Terima kasih telah berbelanja!
            </div>
        </div>
    </div>

    <script>
        document.getElementById("transactionForm").addEventListener("submit", function (event) {
            event.preventDefault();
            this.style.display = "none";
            document.getElementById("thankYouMessage").style.display = "block";

            setTimeout(function () {
                window.location.href = "{{ route('products.index') }}";
            }, 5000);
        });
    </script>

@endsection
