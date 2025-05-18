<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.sidebar')
    
    <div class="main">
        @include('components.navbar')

        <div class="container">
            @yield('content')
        </div>
    </div>
    
</body>
</html>