@extends('master')

@section('title', 'Departamentos de la Zona Dorada de Bucerías')

@section('social')
<meta property="og:url" content="/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Jacana Ocean Life" />
<meta property="og:description" content="Departamentos de la Zona Dorada de Bucerías" />
<meta property="og:image" content="/build/assets/banner-762d532e.jpg" />
@endsection

@section('content')
<div id="home">
    @include('home.partials.banner')
    @include('home.partials.amar-vivir')
    @include('home.partials.video')
    @include('home.partials.preventa')
    @include('home.partials.departments')
    @include('home.partials.cotiza')
    @include('home.partials.amar')
    @include('home.partials.gallery')
    @include('home.partials.ocean-life')
    @include('home.partials.amar-estar-aqui')
    @include('home.partials.blog')
    @include('home.partials.brisas-del-mar')
    @include('home.partials.map')
    @include('layout.contactForm')
</div>
@endsection