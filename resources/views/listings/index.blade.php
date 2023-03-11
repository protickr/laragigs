{{-- php syntax --}}
{{--<h1><?php echo $heading; ?></h1>--}}
{{--<?php foreach ($listings as $listing): ?>--}}
{{--<h2> <?php echo $listing['id'].' '.$listing['title'] ?></h2>--}}
{{--<p> <?php echo $listing['description'] ?> </p>--}}
{{--<?php endforeach; ?>--}}

{{-- Blade syntax / directives --}}
@extends('layout')
@section('content')
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @if(count($listings) == 0)
            <p>No listings found !</p>
        @endif
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>
@endsection
