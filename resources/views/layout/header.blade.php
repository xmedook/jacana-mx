@php
$prefix = app()->getLocale() == 'en' ? '/en' : '';
@endphp
<header class="header" id="header">
    <div class="pleca">
        <button class="btn-menu-mobile" title="Icon Menu Mobile">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="bg-blue">
        <div class="bg-item"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3 offset-8 col-md-2 offset-md-9 col-xl-2 offset-xl-0 text-center">
                <div class="logo">
                    <a href="{{ $prefix }}/">
                        <img src="{{ asset('images/logo.svg') }}" alt="Jacana" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 d-none d-xl-flex">
                <ul>
                    <li>
                        <a href="{{ $prefix }}/departamentos">
                            {{ __('header.departments') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ $prefix }}/amenidades">
                            {{ __('header.amenities') }}
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=iGuwZTA9mPg" class="header-progress">
                            {{ __('header.progress') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ $prefix }}/contacto">
                            {{ __('header.contact') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-2 col-lg-2 offset-lg-1 d-none d-xl-flex">
                @if(app()->getLocale() == 'es')
                <a href="/en" class="btn btn-lang">English</a>
                @else
                <a href="/" class="btn btn-lang">Español</a>
                @endif
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu-content">
    <a href="#" class="btn-close-mobile">
        <img src="{{ asset('images/close-icon.svg') }}" alt="Close" class="img-fluid close">
    </a>
    <div class="menu-items">
        <div class="logo">
            <a href="{{ $prefix }}/">
                <img src="{{ asset('images/logo.svg') }}" alt="Jacana" class="img-fluid">
            </a>
        </div>
        <ul>
            <li>
                <a href="{{ $prefix }}/departamentos" class="font-outfit">
                    {{ __('header.departments') }}
                </a>
            </li>
            <li>
                <a href="{{ $prefix }}/amenidades" class="font-outfit">
                    {{ __('header.amenities') }}
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/watch?v=iGuwZTA9mPg" class="header-progress font-outfit">
                    {{ __('header.progress') }}
                </a>
            </li>
            <li class="wrap-button font-outfit">
                <a href="{{ $prefix }}/contacto" class="text-uppercase">
                    {{ __('header.contact') }}
                </a>
            </li>
            <li class="wrap-button font-outfit">
                @if(app()->getLocale() == 'es')
                <a href="/en" class="">English</a>
                @else
                <a href="/" class="">Español</a>
                @endif
            </li>
        </ul>
    </div>
</div>