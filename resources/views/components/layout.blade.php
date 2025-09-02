<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Ninja Network</title>
    </head>

    <body class="text-center px-8 text-sm">
        <header>
            <nav class="uppercase">
                <h1 class="text-sm">Ninja Network</h1>
                <a href="/ninjas">All Ninjas</a>
                <a href="/ninjas/create">Create New Ninja</a>
            </nav>
        </header>
        <main class="container">
            {{$slot}}
        </main>
    </body>

</html>