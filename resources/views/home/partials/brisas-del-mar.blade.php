<div class="brisas-del-mar">
    <div class="container">
        <div class="row bg-beige">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="center-items">
                    <h2 class="font-outfit">{!!__('home_section.brisa-mar')!!}</h2>
                    <span class="font-outfit">{{__('home_section.brisa-mar-2')}}</span>
                    <p class="description">{{__('home_section.brisa-mar-3')}}</p>
                    <div class="actions">
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto"
                            class="btn btn-brown">{{__('home_section.brisa-mar-4')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-0 order-1 order-lg-2">
                <img src="{{ asset('/images/home/brisas-del-mar.jpg')}}" alt="Brisa del mar" class="img-fluid">
            </div>
        </div>
    </div>
</div>