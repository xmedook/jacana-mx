<div class="col-12">
    @php
    $ban = 0;
    @endphp
    <div class="row {{ $place }}">
        <div class="col-12 col-lg-6 pe-0 ps-0 {{ $invertido ? 'order-lg-2' : ''}}">
            <div class="carousel-{{$place}}">
                @foreach($places as $p)
                <img class="img-fluid" src="{{ asset('storage/'.$p->image) }}" alt="{{ $p->title}}" loading="lazy">
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-6 ps-0 pe-0">
            <div class="bg-beige {{ ($invertido) ? 'text-lg-end' : ''}}">
                @isset($subtitle)
                <p>{{$subtitle}}</p>
                @endisset
                <h2 class="font-outfit {{ $place == 'estacionamiento' ? 'title-small' : ''}}">{{ $title }}</h2>
                <p>{{ $description }}</p>
                <ul class="{{ $invertido ? 'list-middle' : ''}}">
                    @foreach($places as $p)
                    <li>
                        <a href="#" class="item-{{$place}}" data-id="{{ $ban }}">{{ $p->title }}</a>
                    </li>
                    @php $ban++; @endphp
                    @endforeach
                </ul>
                @if(count($places) > 1)
                <div class="arrows">
                    <a href="#" class="arrow-prev {{ $place }}-prev"></a>
                    <a href="#" class="arrow-next {{$place }}-next"></a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>