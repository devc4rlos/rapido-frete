@extends('layout.page')

@section('content')
    <x-container-with-title title="{{ $titleSection }}">
        <x-single class="animate">
            @yield('single')
        </x-single>
    </x-container-with-title>
@endsection
