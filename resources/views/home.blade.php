@extends('layout.main')

@section('title', 'Home')

@section('body')
    <x-header.top-bar.index />
    <x-header.index />
    <x-home.index />
    <x-line-information.index />
    <x-about />
    <x-services.index />
    <x-list-step.index />
    <x-fleet />
    <x-cities />
    <x-gallery />
    <x-comments />
    <x-faq />
@endsection
