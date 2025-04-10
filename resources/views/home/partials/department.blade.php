<div class="single-model">
    <div class="model-header">
        <div class="title font-outfit {{ (($index + 1) % 2 == 0) ? 'light' : '' }}">{{ __('apartment_section.model') }}
            {{ $department->model }}
        </div>
        <figure>
            <a href="{{ app()->getLocale() == 'en' ? " /en" : "" }}/departamentos?model={{ $index }}">
                <img src="/storage/{{ $department->image }}" alt="Departamento 1" class="img-fluid" />
            </a>
        </figure>
    </div>
    <div class="model-body">
        <a href="{{ app()->getLocale() == 'en' ? " /en" : "" }}/departamentos?model={{ $index }}">
            <h3 class="font-outfit">
                {!! (app()->getLocale() == 'en') ? $department->title_en : $department->title_es !!}
            </h3>
        </a>

        <div class="details">
            <p class="mts">{{__('home_section.from')}} {{ $department->meters }} m2</p>
            <strong class="units">{{ $department->units }} {{ __('apartment_section.units') }}
                | {{ $department->units_available }} {{__('home_section.vacancies')}}
            </strong>
            <div class="content">
                {!! (app()->getLocale() == 'en') ? $department->content_en : $department->content_es !!}
            </div>
        </div>
    </div>
</div>