<div class="form-contact" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="pleca">
                    <a href="/">
                        <img src="{{ asset('images/logo.svg') }}" alt="Jacana" class="img-fluid">
                    </a>
                </div>
                <h2 class="font-outfit">{{ __('contact_module.title') }}</h2>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
                @endif
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3">
                                <input name="name" type="text" class="form-control" id="name"
                                    placeholder="{{ __('contact_module.name') }}" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="{{ __('contact_module.phone') }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{ __('contact_module.email') }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <textarea name="message" id="message" class="form-control"
                                    placeholder="{{ __('contact_module.message') }}" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-5 offset-lg-7">
                                    <button type="submit" class="btn btn-brown">{{ __('contact_module.send') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>