<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Rizki Blog | {{ $tittle }}</title>
</head>

<body>
    @include('components.navbar')
    <div class="container mt-4 mx-auto max-w-screen-xl">
        @yield('container')
    </div>


</body>

</html>
