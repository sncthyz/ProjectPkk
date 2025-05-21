@extends('components.authlayouts')

@section('authcontent')

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

            /* Bagian utama (navbar + konten) */
            .main {
                flex: 1;
                display: flex;
                flex-direction: column;
                height: 100vh;
                overflow: hidden;
            }


            /* LOGIN ISI */

            body {
                margin: 0;
                font-family: 'Segoe UI', sans-serif;
            }

            .login-container {
                display: flex;
                height: 100vh;
                width: 100vw;
                overflow: hidden;
            }

            .left-section {
                flex: 1;
                background: #eee;
                overflow: hidden;
                border-bottom-left-radius: 15px;
            }

            .left-section img {
                width: 107%;
                height: 150%;
                object-fit: cover;
            }

            .right-section {
                flex: 1;
                padding: 60px 40px;
                background: linear-gradient(to bottom, #ffffff, #eaeaea);
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .right-section h1 {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .right-section p {
                color: #444;
                margin-bottom: 30px;
            }

            form input {
                width: 100%;
                padding: 12px;
                margin-bottom: 15px;
                border-radius: 8px;
                border: 1px solid #ccc;
                font-size: 14px;
            }

            .forgot {
                display: block;
                margin-bottom: 20px;
                color: #1e90ff;
                font-size: 13px;
                text-decoration: none;
            }

            .remember {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .switch {
                position: relative;
                display: inline-block;
                width: 44px;
                height: 24px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                background-color: #ccc;
                transition: .4s;
                border-radius: 34px;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 18px;
                width: 18px;
                left: 3px;
                bottom: 3px;
                background-color: white;
                transition: .4s;
                border-radius: 50%;
            }

            input:checked+.slider {
                background-color: #1e90ff;
            }

            input:checked+.slider:before {
                transform: translateX(20px);
            }

            .login-btn {
                width: 100%;
                padding: 12px;
                background-color: #1e90ff;
                color: white;
                border: none;
                border-radius: 20px;
                font-size: 16px;
                cursor: pointer;
                margin-bottom: 20px;
            }

            .separator {
                display: flex;
                align-items: center;
                text-align: center;
                gap: 10px;
            }

            .separator span {
                flex: 1;
                height: 1px;
                background: #ccc;
            }

            .separator p {
                margin: 0;
                color: #999;
            }
        </style>
    </head>
    <div class="login-container">
        <div class="left-section">
            <img class="image-custom" src="{{ asset('img/LoginBg.jpg') }}" alt="Login Illustration">
        </div>
        <div class="right-section">
            <h1>Welcome to Mind Loop</h1>
            <p>Platform diskusi yang dirancang untuk mempermudah berbagi dan bertukar pikiran.</p>

            <!-- resources/views/auth/register.blade.php -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input name="name" placeholder="Nama">
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button class="login-btn" type="submit">Daftar</button>
                <p>Belum punya akun? <span><a href="{{ route('register') }}"  style="color: rgb(0, 42, 255)">Daftar</a></span> sekarang</p>
            </form>

        </div>
    </div>
@endsection
