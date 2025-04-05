@extends('layout.main')

@section('head')
    @yield('styles')
    @stack('styles')
@endsection

@section('body')
    <x-header.top-bar.index />
    <x-header.index />

    @yield('content')

    <x-popup-whatsapp />
    <x-footer />

    @yield('scripts')
    @stack('scripts')
@endsection
