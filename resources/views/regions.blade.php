@extends('layout.single', ['titleSection' => 'Regiões Atendidas'])

@section('title', 'Regiões')

@section('single')
    <x-organisms.regions.cities />
    <x-organisms.regions.faq />
    <x-molecules.regions.footer-information />
@endsection
