<div class="card">
    {{$slot}}
    <!-- passing href attributes  -->
    <!-- <a href="{{$attributes->get('href')}}" class="btn uppercase text-sm">View Details</a> -->
    <!-- easy way to pass href attribute -->
    <a {{$attributes}} class=" btn uppercase text-sm">View Details</a>
</div>