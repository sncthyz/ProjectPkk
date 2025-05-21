@extends('components.layouts')

@section('content')

    <head>
        <style>
            /* Reset dasar */
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: "Segoe UI", sans-serif;
            }

            body {
                display: flex;
                height: 100vh;
                overflow: hidden;
                /* Biar scroll cuma konten aja */
                background-color: #f3f4f6;
            }

            /* Sidebar kiri */


            /* Tombol premium di bawah sidebar */
            .premium-btn {
                margin-top: auto;
                padding: 12px;
                background-color: black;
                color: white;
                border-radius: 12px;
                text-align: center;
                cursor: pointer;
            }

            .premium-btn:hover {
                background-color: #333;
            }

            /* Bagian utama (navbar + konten) */
            .main {
                flex: 1;
                display: flex;
                flex-direction: column;
                height: 100vh;
                overflow: hidden;
            }

            /* Table Edit */

            .card-edit  {
                text-align: center;
                padding: 20px 40px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .card-container-edit {
                display: flex;
                justify-content: center;
                padding: 20px;
                margin-top: 150px;
            }


            .card h2 {
                margin-bottom: 20px;
                font-size: 24px;
            }

            .buttons {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            .buttons button {
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                border-radius: 6px;
                color: white;
                cursor: pointer;
            }

            .btn-diskusi {
                background-color: #32cd32;
                /* Lime Green */
            }

            .btn-produk {
                background-color: #ff3333;
                /* Red */
            }
        </style>
    </head>
    <div class="card-container-edit">
        <div class="card-edit">
            <h2>Buat Post</h2>
            <div class="buttons">
<a href="{{URL('postdiskusi')}}" class="btn btn-danger">Post Diskusi</a>
                <button class="btn-produk">Post Produk</button>
            </div>
        </div>
    </div>
@endsection
