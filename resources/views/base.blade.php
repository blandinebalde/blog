<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title',config('app.name'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->

</head>
<body class="py-6 flex flex-col justify-between min-h-screen items-center">

    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>


</body>

<footer>
    <p class="text-grey-400">&copy; Copyrigth 2021 @yield('footer')</p>
</footer>
</html>
