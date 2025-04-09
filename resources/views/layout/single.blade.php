@extends('layout.page')

@section('content')
    <x-organisms.container-with-title title="{{ $titleSection }}">
        <x-organisms.single class="animate">
            @yield('single')
        </x-organisms.single>
    </x-organisms.container-with-title>
@endsection
