<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-4 col-lg-2 order-2 order-lg-1">
                            <ul class="social-media">
                                <li>
                                    <a href="https://www.facebook.com/jacanaoceanlife/" target="_blank">
                                        <img src="/images/facebook.svg" alt="Jacana Facebook" class="img-fluid" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/jacanaoceanlife/" target="_blank">
                                        <img src="/images/instagram.svg" alt="Jacana Instagram" class="img-fluid" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-6 offset-xl-1 order-1 order-lg-2">
                            <p>{!! __('footer_section.txt1') !!}</p>

                            <p>
                                {{-- <a href="">{{ __('footer_section.terms') }}</a> - --}}
                                <a href="{{ app()->getLocale() == 'en' ? 'en' : '' }}/aviso-de-privacidad">{{
                                    __('footer_section.privacy') }}</a>
                            </p>
                        </div>
                        <div class="col-3 offset-5 col-lg-2 offset-lg-0 offset-xl-1 text-center order-3">
                            <img src="/images/brayco.svg" alt="Brayco Corporation" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>