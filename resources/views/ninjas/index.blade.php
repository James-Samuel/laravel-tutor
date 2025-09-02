<x-layout>
    <h2>Current Available Ninjas</h2>
    <p>{{$greeting}}</p>

    <!-- Blade Directive -->

    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="/ninjas/{{ $ninja['id'] }}">
                <h3>{{ $ninja['name'] }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>