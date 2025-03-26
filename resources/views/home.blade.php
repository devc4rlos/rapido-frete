@extends('layout.main')

@section('title', 'Home')

@section('body')
    <x-header.top-bar.index />
    <x-header.index />
    <x-home.index />
@endsection
