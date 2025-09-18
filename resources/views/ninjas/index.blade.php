<x-layout>
    <h2 class="uppercase">Current Available Ninjas</h2>

    <!-- Blade Directive -->

    <ul>
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninjas.show',$ninja->id) }}" :highlight="$ninja['skill'] > 70">
                <h3>{{ $ninja->name}}</h3>
            </x-card>
        </li>
        @endforeach
    </ul>

    <div>
        {{$ninjas->links()}}
    </div>
</x-layout>