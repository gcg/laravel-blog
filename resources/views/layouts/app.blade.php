<html>
    <head>
        <title>@yield('title', 'Laravel Blog')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="flex justify-center">
        <div class="w-9/12">

            @yield('content')
        </div>
    </body>
</html>
