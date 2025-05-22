@extends('components.layouts')

@section('content')



<head>
    
    
    <style>

        /* TABLE SETTING LE */

        .settings-container {
            text-align: center;
            padding: 40px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .settings-container h2 {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .settings-options {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .option {
            text-align: center;
            width: 180px;
            padding: 20px;
            transition: transform 0.3s;
        }

        .option i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .option h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .option p {
            font-size: 14px;
            color: #777;
        }

        .option:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    

        <!-- ISI -->

        <div class="settings-container">
            <h2>Settings</h2>
            <a href="editprofile.html" style="text-decoration: none;">
                <div class="settings-options">
                    <div class="option">
                        <i class="fas fa-user-circle"></i>
                        <h3>Edit Profile</h3>
                        <p>Ubah Foto, Ubah Display nama</p>
                    </div>
            </a>
            <a href="changeaccount.html" style="text-decoration: none;">
                <div class="option">
                    <i class="fas fa-users-cog"></i>
                    <h3>Change Account</h3>
                    <p>Ganti Akun</p>
                </div>
            </a>
            <a href="laporbug.html" style="text-decoration: none;">
                <div class="option">
                    <i class="fas fa-info-circle"></i>
                    <h3>Lapor Bug</h3>
                    <p>Laporkan Bug</p>
                </div>
            </a>
        </div>
    </div>



</body>

</html>



@endsection