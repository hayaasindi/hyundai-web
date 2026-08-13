<!DOCTYPE html>
<html>
<head>

    <title>Hyundai Web</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen flex flex-col">


@include('components.header')


<main class="flex-grow">

    @yield('content')

</main>


@include('components.footer')


@stack('scripts')


</body>
</html>