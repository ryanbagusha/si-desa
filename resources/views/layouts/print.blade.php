@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ? "{$title} - " : null }} {{ config('filament.brand') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @livewireStyles

    @vite('resources/css/filament.css')

    @stack('styles')

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

</head>

<body>

    {{ $slot }}

    @livewireScripts

    @vite('resources/js/public.js')

    @stack('scripts')

    <script>
        window.print();
    </script>

</body>

</html>
