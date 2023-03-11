{{-- Blade syntax / directives --}}
<h1>Single listing</h1>
@if($listing)
    <h2> {{$listing['id'].' '.$listing['title']}}</h2>
    <p> {{$listing['description']}} </p>
@else
    <p>Listing not found !</p>
@endif

