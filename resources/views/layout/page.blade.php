@extends('layout.main')

@section('head')
    @yield('styles')
    @stack('styles')
@endsection

@section('body')
    <x-templates.top-bar />
    <x-header.index />

    @yield('content')

    <x-popup-whatsapp />
    <x-footer />

    @yield('scripts')
    @stack('scripts')
@endsection
