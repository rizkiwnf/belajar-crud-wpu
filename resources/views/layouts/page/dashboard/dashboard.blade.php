<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('storage/img/favicon.png') }}" />
    <title>Rizki's Website</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('storage/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('storage/css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

    @include('components.dashboard.sidebar')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('components.dashboard.navbar')


        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            <!-- row 1 -->
            @include('components.dashboard.cards-first-row')
            <!-- row 2 -->
            @include('components.dashboard.cards-second-row')
            <!-- row 3 -->
            @include('components.dashboard.cards-third-row')
            <!-- row 4 -->
            @include('components.dashboard.cards-fourth-row')
        </div>  
        {{-- footer --}}
        @include('components.dashboard.footer')
        </div>
        <!-- end cards -->
    </main>
</body>
<!-- plugin for charts  -->
<script src="{{ asset('storage/js/plugins/chartjs.min.js') }}" async></script>
<script src="{{ asset('storage/js/dropdown.js') }}" async></script>
<script src="{{ asset('storage/js/chart-1.js') }}" async></script>
<script src="{{ asset('storage/js/chart-2.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('storage/js/perfect-scrollbar.min.js') }}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{ asset('storage/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>

</html>
