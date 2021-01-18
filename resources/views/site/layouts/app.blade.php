<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
