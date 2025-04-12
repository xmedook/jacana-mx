<div class="banner">
    <div class="banner__content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-1">
                    <div class="title-main">
                        <h1 class="font-outfit">
                            JACANA
                            <span>OCEAN LIFE</span>
                        </h1>
                        <p>{{ __('home_section.banner-description') }}</p>
                    </div>
                    <div class="banner__price mt-2 font-outfit">
                        <span>{{ __('home_section.from') }}</span>
                        <p class="price">{!! __('home_section.price') !!}</p>
                    </div>
                    <div class="buttons d-flex justify-content-between">
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/departamentos"
                            class="btn btn-beige w-50 me-1">{{ __('home_section.explore') }}</a>
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto" class="btn btn-beige w-50 ms-1">{{
                            __('home_section.inquire') }}</a>
                    </div>
                    <div class="buttons mt-2">
                        <a href="https://panoraven.com/es/embed/KMQ7FMOfbI" class="btn btn-beige w-100" target="_blank">{{
                            __('home_section.tour-360') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
