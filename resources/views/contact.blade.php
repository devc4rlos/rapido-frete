@extends('layout.single', ['titleSection' => 'Contato'])

@section('title', 'Contato')

@section('single')
    <x-contact.index />
@endsection

@pushonce('scripts')
    @vite('resources/js/components/contact.js')
@endpushonce
