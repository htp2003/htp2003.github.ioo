
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>

</head>
<body>

    @include('includes.header')

    <main id="main">
        @yield('content')

    </main>

    @include('includes.footer')


</body>
</html>
