@extends('master')

@section('title', 'Departamentos')

@section('content')
<div id="departamentos">
    <div class="banner">
        <img class="img-fluid" src="/images/departamentos/banner-departamentos.jpg" />
        <div class="banner-content">
            <h3>{{ __('apartment_section.banner-txt1') }}</h3>
            <h1 class="font-outfit">{{ __('apartment_section.banner-txt2') }}</h1>
            <h2 class="font-outfit">{{ __('apartment_section.banner-txt3') }}</h2>
            <p>{{ __('apartment_section.banner-txt4') }}</p>

            <div class="details">
                <div class="item font-outfit">
                    <div class="number">140</div>
                    <p>{{ __('header.departments') }}</p>
                </div>
                <div class="item font-outfit">
                    <div class="number font-outfit">7</div>
                    <p>{{ __('apartment_section.stories') }}</p>
                </div>
                <div class="item font-outfit">
                    <div class="number font-outfit">8</div>
                    <p>{{ __('apartment_section.models') }}</p>
                </div>
                {{-- <div class="item font-outfit">
                    <div class="number font-outfit">28</div>
                    <p>{!! __('apartment_section.units-ocean') !!}</p>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="part-beige small-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-outfit">{!! __('apartment_section.pre-sale') !!}</h2>
                    <p>{{ __('apartment_section.select-model') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-carousel">
        <div class="carousel">
            @foreach($departments as $index => $department)
            @include('departamentos.partials.department')
            @endforeach
        </div>
    </div>
    <div class="wrap-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-details-items">
                        @foreach($departments as $index => $department)
                        @include('departamentos.partials.details')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <h6 class="font-outfit">{{ __('apartment_section.gallery') }}</h6>
        <div class="items">
            <img src="/images/departamentos/gallery/gallery-1.jpg" alt="Galería" loading="lazy" />
            <img src="/images/departamentos/gallery/gallery-2.jpg" alt="Galería" loading="lazy" />
            <img src="/images/departamentos/gallery/gallery-3.jpg" alt="Galería" loading="lazy" />
            <img src="/images/departamentos/gallery/gallery-4.jpg" alt="Galería" loading="lazy" />
            <img src="/images/departamentos/gallery/gallery-5.jpg" alt="Galería" loading="lazy" />
        </div>
    </div>
    <div class="box-blue">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h3 class="font-outfit">{!! __('apartment_section.title2') !!}</h3>
                    <p>{{ __('apartment_section.text2') }}</p>
                    <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto" class="btn btn-brown">{{
                        __('apartment_section.contact-us') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="lifes">
        <div class="life-item">
            <img src="/images/gallery/vida-activa-1.jpg" loading="lazy" alt="Amar vivir" />
            <h5 class="font-outfit">{!! __('apartment_section.active-life') !!}</h5>
        </div>
        <div class="life-item">
            <img src="/images/gallery/vida-social-1.jpg" loading="lazy" alt="Amar vivir" />
            <h5 class="font-outfit">{!! __('apartment_section.social-life') !!}</h5>
        </div>
        <div class="life-item">
            <img src="/images/gallery/vida-familiar-1.jpg" loading="lazy" alt="Amar vivir" />
            <h5 class="font-outfit">{!! __('apartment_section.family-life') !!}</h5>
        </div>
        <div class="life-item">
            <img src="/images/gallery/vida-playa-1.jpg" loading="lazy" alt="Amar vivir" />
            <h5 class="font-outfit">{!! __('apartment_section.beach-life') !!}</h5>
        </div>
    </div>
    <div class="part-beige">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 col-xxl-6 offset-xxl-3">
                    <h2 class="font-outfit"><strong>{{ __('apartment_section.luxury-amenities') }}</strong></h2>
                    <p>{{ __('apartment_section.luxury-text') }}</p>

                    <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/amenidades" class="btn btn-brown">{{
                        __('apartment_section.explore') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.contactForm')
@endsection