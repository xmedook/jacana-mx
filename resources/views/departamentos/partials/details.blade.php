<div class="slider-details">
    <figure>
        <div class="title-img d-block d-lg-none">
            <h2 class="font-outfit">{{ __('apartment_section.model') }} {{ $department->model }}</h2>
            <span class="type">{{ (app()->getLocale() == 'en') ? $department->type_en :
                $department->type_es }}</span>
            <p class="mts">{{ $department->meters }} m2</p>
        </div>
        <img src="/storage/{{ $department->big_image }}" alt="{{ $department->title_es}}" loading="lazy"
            class="img-fluid" />
    </figure>
    <div class="department-info">
        <div class="d-none d-lg-block">
            <h2 class="font-outfit">{{ __('apartment_section.model') }} {{ $department->model }}</h2>
            <span class="type text-uppercase">{{ (app()->getLocale() == 'en') ? $department->type_en :
                $department->type_es }}</span>
            <p class="mts">{{ $department->meters }} m2</p>
        </div>
        <h3 class="font-outfit">{!! (app()->getLocale() == 'en')? $department->title_en : $department->title_es !!}</h3>
        <div class="line"></div>
        <div>{{ $department->units }} {{ __('apartment_section.units') }} | {{ $department->units_available}}
            {{ __('apartment_section.vacancies') }}</div>

        <div class="content">
            {!! (app()->getLocale() == 'en') ? $department->content_en : $department->content_es !!}
        </div>

        <a href="{{ (app()->getLocale() == 'en') ? " /en" : "" }}/contacto" class="btn btn-darkblue">{{
            __('apartment_section.inquire') }}</a>
    </div>
</div>