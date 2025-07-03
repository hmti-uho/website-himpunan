@extends('layouts.app')

@section('content')
    @include('components.home.hero-section')


    <div class="container mx-auto px-4 py-24">
        <div class="space-y-24 md:space-y-32">
            @include('components.home.about-section')
            @include('components.home.divition-section')
            @include('components.home.event-section')
            @include('components.home.achievment-section')
            @include('components.home.gallery-section')
            @include('components.home.news-section')

        </div>
    </div>
@endsection