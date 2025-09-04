<x-layout>
    <h2>Current Available Ninjas</h2>

    <!-- Blade Directive -->

    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 70">
                <h3>{{ $ninja['name'] }}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>
</x-layout>