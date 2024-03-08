<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/volt.css') }}">

    @stack('style')
</head>
<body>
    <x-sidebar/>

    <main class="content">
        <x-navbar/>

        <div class="row" style="min-height: 70vh;">
            {{ $slot }}
        </div>

        <x-footer/>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/volt.js') }}"></script>

    <x-vendor.sweetalert/>

    @stack('script')
</body>
</html>
