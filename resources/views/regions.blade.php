@extends('layout.single', ['titleSection' => 'Regiões Atendidas'])

@section('title', 'Rápido Frete | Regiões Atendidas em SP, RJ, MG, PR e Mais')
@section('description', 'Atendemos diversas cidades em São Paulo, Rio de Janeiro, Minas Gerais, Paraná e outros estados. Veja a lista completa e solicite seu orçamento com a Rápido Frete.')

@section('single')
    <x-organisms.regions.cities />
    <x-organisms.regions.faq />
    <x-molecules.regions.footer-information />
@endsection
