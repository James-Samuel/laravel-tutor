<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ninjas Network | Home</title>
    </head>

    <body>
        <h2>Current Available Ninjas</h2>
        <p>{{$greeting}}</p>

        <!-- Blade Directive -->

        <ul>
            @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['id'] }}">View Detail</a>
            </li>
         @endforeach
        </ul>
    </body>

</html>