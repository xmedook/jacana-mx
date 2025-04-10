@extends('master')

@section('title', 'Contacto')

@section('content')
<div id="contacto">
    <div class="banner">
        <div class="shadow"></div>
        <div class="banner-content">
            <h3>{{ __('contact_section.contact-us') }}</h3>
            <h1 class="font-outfit">{{ __('contact_section.title1') }}</h1>
            <h2 class="font-outfit">{{ __('contact_section.title2') }}</h2>
            <p>{{ __('contact_section.text') }}</p>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xxl-8 offset-xxl-2 position-relative">
                    <div class="contact-box">
                        <form action="/save-contact" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-12 col-lg-6 mb-3">
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="{{ __('contact_section.name') }}" required>
                                    @error('name')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <input name="lastname" type="text" class="form-control" id="lastname"
                                        placeholder="{{ __('contact_section.lastname') }}" required>
                                    @error('lastname')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" name="phone" id="telefono"
                                        placeholder="{{ __('contact_section.phone') }}" required>
                                    @error('phone')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" name="email" id="correo"
                                        placeholder="{{ __('contact_section.email') }}" required>
                                    @error('email')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="radio-box col-12 mb-3">
                                    <strong>{{ __('contact_section.medio') }}</strong>
                                    <div class="options">
                                        <label for="medio-telefono">
                                            <input type="radio" id="medio-telefono" name="medio" value="telefono"
                                                checked>
                                            {{ __('contact_section.medio_phone') }}
                                        </label>
                                        <label for="medio-email">
                                            <input type="radio" id="medio-email" name="medio" value="email"> {{
                                            __('contact_section.medio_email') }}
                                        </label>
                                        <label for="medio-whatsapp">
                                            <input type="radio" id="medio-whatsapp" name="medio" value="whatsapp">
                                            WhatsApp
                                        </label>
                                    </div>
                                    @error('medio')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="radio-box col-12 mb-3">
                                    <strong>{{ __('contact_section.interested') }}</strong>
                                    <div class="options">
                                        <label for="interested-ventas">
                                            <input type="radio" id="interested-ventas" name="interested" value="ventas"
                                                checked>
                                            {{ __('contact_section.sales') }}
                                        </label>
                                        <label for="interested-informacion">
                                            <input type="radio" id="interested-informacion" name="interested"
                                                value="informacion"> {{ __('contact_section.information') }}
                                        </label>
                                    </div>
                                    @error('interested')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="message" id="mensaje"
                                        placeholder="{{ __('contact_section.message') }}" rows="10"></textarea>
                                    @error('message')
                                    <span class="badge bg-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <input type="submit" class="btn btn-brown text-uppercase"
                                value="{{ __('contact_section.send') }}">
                    </div>
                    </form>

                    <div class="message text-center">
                        @if(Session::has('success'))
                        <h6 class="font-outfit text-uppercase">{!! __('contact_section.success') !!}</h6>
                        <p>{{ __('contact_section.success_message') }}</p>
                        @endif
                        @if(Session::has('error'))
                        <h6 class="font-outfit text-uppercase">{{ __('contact_section.sorry') }}</h6>
                        <p>{{ __('contact_section.sorry_message') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection