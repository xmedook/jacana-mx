@extends('master')

@section('title', 'Amenidades')

@section('content')
<div id="amenidades">
    <div class="banner">
        <div class="shadow"></div>
        <div class="banner-content">
            <h3>{{__('amenidades_section.banner-description')}}</h3>
            <h1 class="font-outfit">{{__('amenidades_section.amar-sea')}}</h1>
            <h2 class="font-outfit">{{__('amenidades_section.together')}}</h2>
            <p>{{__('amenidades_section.amar-sea-2')}}</p>
        </div>
    </div>
    <div class="planta-alta">
        <div class="container">
            <div class="row">
                <x-amenidades.title>{{__('amenidades_section.planta-alta')}}</x-amenidades.title>
                <x-amenidades.place :places="$places->where('place','terraza')" place="terraza" :invertido="false"
                    description="{{__('amenidades_section.terraza-1')}}" title="{{__('amenidades_section.terraza')}}" />
                <x-amenidades.place :places="$places->where('place','social')" place="social" :invertido="true"
                    description="{{__('amenidades_section.social')}}" title="SOCIAL" />
                <x-amenidades.place :places="$places->where('place','wellness')" place="wellness" :invertido="false"
                    description="" title="WELLNESS" />
            </div>
        </div>
    </div>
    <div class="segunda-planta">
        <div class="container">
            <div class="row">
                <x-amenidades.title>{{__('amenidades_section.segunda-planta')}}</x-amenidades.title>
                <x-amenidades.place :places="$places->where('place','familiar')" place="familiar"
                    :subtitle="__('amenidades_section.family-zone')" :invertido="true"
                    :description="__('amenidades_section.family-zone-2')"
                    :title="__('amenidades_section.family-zone-1')" />
            </div>
        </div>
    </div>
    <div class="planta-baja">
        <div class="container">
            <div class="row patio">
                <x-amenidades.title>{{__('amenidades_section.planta-baja')}}</x-amenidades.title>
                <x-amenidades.place :places="$places->where('place','patio')" place="patio"
                    :subtitle="__('amenidades_section.naturaleza')" :invertido="false"
                    :description="__('amenidades_section.naturaleza-2')"
                    :title="__('amenidades_section.naturaleza-1')" />
                <x-amenidades.place :places="$places->where('place','lobby')" place="lobby"
                    :subtitle="__('amenidades_section.recibidor')" :invertido="true"
                    :description="__('amenidades_section.recibidor-2')" :title="__('amenidades_section.recibidor-1')" />
            </div>
        </div>
    </div>
    <div class="subterráneo">
        <div class="container">
            <div class="row estacionamiento">
                <x-amenidades.title>{{__('amenidades_section.subterraneo')}}</x-amenidades.title>
                <x-amenidades.place :places="$places->where('place','estacionamiento')" place="estacionamiento"
                    :subtitle="__('amenidades_section.sotano')" :invertido="false"
                    :description="__('amenidades_section.parking-1')" :title="__('amenidades_section.parking')" />
            </div>
        </div>
    </div>
    <div class="departamentos-en-venta bg-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <h2>{{__('amenidades_section.amar-sentir')}}</h2>
                    <h1 class="font-outfit">{!!__('amenidades_section.amar-sentir-1')!!}</h1>
                    <p>{{__('amenidades_section.amar-sentir-2')}}</p>
                    <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/departamentos"
                        class="btn btn-brown">{{__('amenidades_section.ver-departamentos')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="informes">
        <div class="banner-content">
            <h2 class="font-outfit">{!!__('amenidades_section.informes')!!}</h1>
                <p>{{__('amenidades_section.informes-1')}}</p>
                <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto"
                    class="btn btn-brown">{{__('amenidades_section.contact')}}</a>
        </div>
    </div>
</div>
@include('layout.contactForm')
@endsection