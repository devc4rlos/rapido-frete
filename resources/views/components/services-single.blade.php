@props([
    'title' => '',
    'href' => '#',
])

@extends('layout.single', ['titleSection' => $title])

@section('title', $title)

@section('single')
    {{ $slot }}
    <div class="flex justify-between">
        <x-link-main :href="$href">Solicitar orçamento</x-link-main>
        <a href="{{ route('services.index') }}" class="text-brand-400 hover:text-brand-600">Ver outros serviços</a>
    </div>
@endsection
