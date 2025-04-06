@props([
    'title' => '',
])

@extends('layout.single', ['titleSection' => $title])

@section('title', $title)

@section('single')
    {{ $slot }}
    <div class="flex justify-between items-center">
        <x-link-main :href="$getLink()" target="_blank">Solicitar orçamento</x-link-main>
        <a href="{{ route('services.index') }}" class="text-brand-400 hover:text-brand-600">Ver outros serviços</a>
    </div>
@endsection
