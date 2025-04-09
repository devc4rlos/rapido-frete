@extends('layout.single', ['titleSection' => 'Nossa frota'])

@section('title', 'Nossa frota')

@section('single')
    <x-molecules.gallery
        :images="array_map(fn($i) => asset('assets/gallery/'. $i .'.png'), range(1, 9))"
    />
@endsection
