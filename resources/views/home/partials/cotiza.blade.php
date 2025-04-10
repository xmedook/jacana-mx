<div class="cotiza">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-5 offset-lg-0 no-bordes">
                <figure>
                    <img src="/images/home/cotiza.jpg" alt="Cotiza tu departamento" class="img-fluid" />
                </figure>
            </div>
            <div class="col-12 col-md-10 offset-md-1 col-lg-7 offset-lg-0 main-content">
                <div class="row">
                    <div class="col-10 offset-1">
                        <h3 class="font-outfit">
                            {!!__('home_section.cotiza')!!}
                        </h3>
                        <p>{{__('home_section.our-consultants')}}</p>
                        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto"
                            class="btn btn-brown">{{__('home_section.speak')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>