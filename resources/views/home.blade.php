@extends('layout.page')

@section('title', 'Home')

@section('content')
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
    <x-contact />
@endsection
