<div class="preventa">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 text-center">
                <h2 class="font-outfit">
                    {!! __('apartment_section.pre-sale') !!}
                </h2>
                <p>{{ __('home_section.pre-sale-txt1') }}</p>
                <div class="models font-outfit">
                    <p>
                        <span>8 {{ __('home_section.pre-sale-txt2') }}</span>
                        <strong>{{ __('home_section.pre-sale-txt3') }}</strong>
                    </p>
                    <p>
                        <span>140</span>
                        <strong> {{__('home_section.units')}}</strong>
                    </p>
                </div>
                <div class="action text-center d-md-flex">
                    <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/departamentos"
                        class="btn btn-brown">{{__('home_section.explore')}}</a>
                    <button class="btn btn-brown see3d">{{ __('home_section.ver3d') }}</button>
                </div>
            </div>
        </div>
        <div class="renderBox">
            <div class="renderFrame">
                <span class="closerender">x</span>
                <div class="sketchfab-embed-wrapper"> <iframe title="AVANCE 11-03 REVIT" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/5e99375a757348ccb0405fc4d42e4aed/embed"> </iframe> </div>
            </div>
        </div>
    </div>
</div>