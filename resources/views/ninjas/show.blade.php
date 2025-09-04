<x-layout>
    <h2 class="uppercase">{{$ninja->name}}</h2>
    <div class="bg-gray-200 p-8 rounded">
        <p><strong>Skill Level:</strong>{{$ninja->skil}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$ninja->bio}}</p>
    </div>
</x-layout>