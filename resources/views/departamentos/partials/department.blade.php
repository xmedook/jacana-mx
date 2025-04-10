<div class="single-model">
    <a href="#" data-slide="{{ $index }}">
        <div class="model-header">
            <div class="title font-outfit {{ (($index + 1) % 2 == 0) ? 'light' : '' }}">
                {{ __('apartment_section.model') }} {{ $department->model }}
            </div>
            <figure>
                <img src="/storage/{{ $department->image }}" alt="Departamento 1" loading="lazy" class="img-fluid" />
            </figure>
        </div>
    </a>
</div>