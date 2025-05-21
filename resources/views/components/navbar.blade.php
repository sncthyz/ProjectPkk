<div class="navbar">
    <!-- Kiri: logo dan judul -->
    <div class="navbar-left">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('img/Mind_Loop-removebg-preview.png') }}" alt="Logo" /></a>
        <strong>Mind Loop</strong>
    </div>

    <!-- Tengah: tanggal -->
    <div class="navbar-center"><b>Rabu</b>, 13 January 2008</div>

    <!-- Kanan: search, notif, akun -->
    <div class="navbar-right">
        <div class="date-search">
            <input type="text" placeholder="Search..." />
        </div>
        <span>🔔</span>
        <button class="rounded-2 p-1">👤 Create</button>

        <div class="row">
            <h1 class="h6" style="margin-top: 6px;">Selamat Datang, {{ auth()->user()->name }}</h1>
        </div>
        <form class="pe-3" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>

    </div>
</div>
