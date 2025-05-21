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


            /* Bagian utama (navbar + konten) */
            .main {
                flex: 1;
                display: flex;
                flex-direction: column;
                height: 100vh;
                overflow: hidden;
            }


            .content-wrapper {
                overflow-y: auto;
                padding: 20px;
                flex: 1;
            }

            .welcome {
                background-image: url("{{ asset('img/fotkel.jpg') }}");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 0px -250px;
                background-color: #2f2f2f;
                /* Fallback warna */
                color: white;
                padding: 100px 20px;
                border-radius: 16px;
                margin-bottom: 20px;
                text-align: center;
            }

            .stats {
                display: flex;
                gap: 20px;
                margin-bottom: 20px;
            }

            .stats div {
                padding: 20px;
                border-radius: 12px;
                color: black;
                font-weight: bold;
            }

            .politics {
                background-color: #ff6b6b;
                color: white;
            }

            .rplg {
                background-color: #b2f2bb;
            }

            .cyber {
                background-color: #ffff99;
            }

            .post {
                background-color: #e0e0e0;
                border-radius: 10px;
                padding: 15px;
                margin-bottom: 15px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .post-content {
                flex: 1;
            }

            .post-title {
                font-weight: bold;
                color: blue;
                margin-bottom: 4px;
            }

            .actions {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .toggle {
                display: flex;
                align-items: center;
                gap: 6px;
            }

            .switch {
                position: relative;
                display: inline-block;
                width: 40px;
                height: 20px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                border-radius: 20px;
                cursor: pointer;
                transition: 0.4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 16px;
                width: 16px;
                left: 2px;
                bottom: 2px;
                background-color: white;
                border-radius: 50%;
                transition: 0.4s;
            }

            input:checked+.slider {
                background-color: #4caf50;
            }

            input:checked+.slider:before {
                transform: translateX(20px);
            }

            .icon-btn {
                background: none;
                border: none;
                cursor: pointer;
                font-size: 16px;
            }
        </style>
    </head>
    <!-- Konten scrollable -->
    <div class="content-wrapper">
        <!-- Welcome dan deskripsi -->
        <div class="welcome">
            <h2>Hi, XI PPLG 1</h2>
            <p>Website ini dibuat untuk mempermudah akses informasi</p>
        </div>

        <!-- Statistik kategori -->
        <div class="stats">
            <div class="politics">90% Politik</div>
            <div class="rplg">80% RPLG</div>
            <div class="cyber">75% Cyber</div>
        </div>

        <!-- List post -->
        <div class="post">
            <div class="post-content">
                <div class="post-title">
                    Kenapa Front end lebih seru dari Back end?
                </div>
                <div>Topik seputar pengembangan tampilan user interface</div>
            </div>
            <div class="actions">
                <div class="toggle">
                    <label class="switch">
                        <input type="checkbox" checked />
                        <span class="slider"></span>
                    </label>
                    <span>Public</span>
                </div>
                <button class="icon-btn">✏️</button>
                <button class="icon-btn">🗑️</button>
            </div>
        </div>

        <div class="post">
            <div class="post-content">
                <div class="post-title">
                    Kenapa Back end lebih seru dari Front end?
                </div>
                <div>Pembahasan server-side dan manajemen data</div>
            </div>
            <div class="actions">
                <div class="toggle">
                    <label class="switch">
                        <input type="checkbox" />
                        <span class="slider"></span>
                    </label>
                    <span>Private</span>
                </div>
                <button class="icon-btn">✏️</button>
                <button class="icon-btn">🗑️</button>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript buat toggle Public/Private -->
    <script>
        // Ambil semua toggle switch
        document.querySelectorAll(".toggle input").forEach((input) => {
            input.addEventListener("change", function() {
                // Ubah teks samping toggle sesuai statusnya
                const label = this.parentElement.nextElementSibling;
                label.textContent = this.checked ? "Public" : "Private";
            });
        });
    </script>
@endsection
