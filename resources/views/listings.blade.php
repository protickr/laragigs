{{-- php syntax --}}
{{--<h1><?php echo $heading; ?></h1>--}}
{{--<?php foreach ($listings as $listing): ?>--}}
{{--<h2> <?php echo $listing['id'].' '.$listing['title'] ?></h2>--}}
{{--<p> <?php echo $listing['description'] ?> </p>--}}
{{--<?php endforeach; ?>--}}

{{-- Blade syntax / directives --}}
<h1>{{ $heading }}</h1>
@if(count($listings) == 0)
    <p>No listings found !</p>
@endif
@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">
            {{$listing['title']}}
        </a>
    </h2>
    <p> {{$listing['description']}} </p>
@endforeach

