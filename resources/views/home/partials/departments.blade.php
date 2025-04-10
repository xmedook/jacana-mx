<div class="departments">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center bg-white">
                <h2>
                    {!!__('home_section.titulo-elige')!!}
                </h2>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>
    <div class="wrap-carousel">
        <div class="carousel">
            @foreach($departments as $index => $department)
            @include('home.partials.department')
            @endforeach
        </div>
    </div>
</div>