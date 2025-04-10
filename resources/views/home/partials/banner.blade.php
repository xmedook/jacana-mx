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
                        <p class="price">$350,000 <span>USD</span></p>
                        <p class="price">$7,000,000 <span>MXN</span></p>
                    </div>
                    <div class="buttons">
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/departamentos"
                            class="btn btn-beige">{{ __('home_section.explore') }}</a>
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto" class="btn btn-beige">{{
                            __('home_section.inquire') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>