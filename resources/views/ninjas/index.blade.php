<x-layout>
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
</x-layout>