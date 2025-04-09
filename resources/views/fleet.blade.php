@extends('layout.single', ['titleSection' => 'Nossa frota'])

@section('title', 'Rápido Frete | Frota Moderna e Segura para Todos os Tipos de Mudança')
@section('description', 'Conheça a frota da Rápido Frete: veículos modernos, seguros e preparados para atender desde pequenos fretes até grandes mudanças com total eficiência.')

@section('single')
    <x-molecules.gallery
        :images="array_map(fn($i) => asset('assets/gallery/'. $i .'.png'), range(1, 9))"
    />
@endsection
