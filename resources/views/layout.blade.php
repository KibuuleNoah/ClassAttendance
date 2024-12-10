<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hello, Bootstrap and jQuery!</h1>
        @yield('content')
    </div>
    <b id="ff"></b>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>

        $("#ff").html("Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.")

    </script>
</body>
</html>

