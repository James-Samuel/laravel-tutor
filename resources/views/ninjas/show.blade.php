<x-layout>
    <h2 class="uppercase">{{$ninja->name}}</h2>
    <div class="bg-gray-200 p-8 rounded">
        <p><strong>Skill Level:</strong>{{$ninja->skil}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$ninja->bio}}</p>
    </div>

    <!-- dojo info -->
    <div class="border-2 border-dashed bg-white px-4 my-4 rounded">
        <h3>Dojo Infomation</h3>
        <p><strong>Dojo name:</strong>{{$ninja->dojo->name}}</p>
        <p><strong>Location:</strong>{{$ninja->dojo->location}}</p>
        <p><strong>About the Dojo:</strong></p>
        <p>{{$ninja->dojo->description}}</p>
    </div>

</x-layout>