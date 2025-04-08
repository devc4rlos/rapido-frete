@extends('layout.main')

@section('head')
    @yield('styles')
    @stack('styles')
@endsection

@section('body')
    <x-templates.top-bar />
    <x-templates.header />

    @yield('content')

    <x-organisms.popup-whatsapp />
    <x-templates.footer />

    @yield('scripts')
    @stack('scripts')
@endsection
