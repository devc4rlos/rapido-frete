@extends('layout.page')

@section('title', 'Home')

@section('content')
    <x-templates.home.hero />
    <x-templates.home.line-information />
    <x-templates.home.about />
    <x-templates.home.services />
    <x-templates.home.timeline />
    <x-templates.home.fleet />
    <x-cities />
    <x-gallery />
    <x-comments />
    <x-faq />
    <x-contact />
@endsection
