@extends('layout.single', ['titleSection' => 'Nossa frota'])

@section('title', 'Nossa frota')

@section('single')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @for($i = 1; $i < 10; $i++)
            <img src="{{ asset('assets/gallery/' . $i . '.png') }}" alt="" class="w-full h-96 object-cover object-top rounded-xl border border-default-100 animate">
        @endfor
    </div>
@endsection
