<footer class="main-footer background-black">
    <div class="main-footer__bg background-black"></div>

    <div class="container">
        <div class="row">
            <!-- ABOUT -->
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="footer-widget footer-widget--about">
                    <a href="/contact" class="footer-widget__logo">
                        <img src="/assets/images/dr. yuli icons/logo-yulian-mollov-2.png" alt="Лого уебсайт">
                    </a>

                    <p class="footer-widget__text">
                        <!-- {{ __('messages.we_help_people') }} -->
                        Помагаме на хората, които имат нужда от помощ.
                    </p>

                    <p class="footer-widget__text">
                        <!-- {{ __('messages.every_person_matters') }} -->
                        Всеки човек има значение
                    </p>

                    <div class="footer-widget__box">
                        <div class="footer-widget__box__icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <p class="footer-widget__box__text">
                            <a href="tel:+359895962610">+359 895 96 26 10</a>
                        </p>
                    </div>
                </div>
            </div>


            <!-- HELPFUL LINKS -->
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="footer-widget footer-widget--links-two">
                    <h2 class="footer-widget__title">
                        <!-- {{ __('messages.footer_helpful_links') }} -->
                        Полезни линкове
                    </h2>

                    <ul class="list-unstyled footer-widget__links">
                        <li>
                            <a href="/about">
                                <!-- {{ __('messages.footer_about_us') }} -->
                                За мен
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <!-- {{ __('messages.footer_contact_us') }} -->
                                Контакти
                            </a>
                        </li>
                        <li>
                            <a href="/obshti-usloviq">
                                <!-- {{ __('messages.footer_terms_and_conditions') }} -->
                                Общи условия
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CONTACT -->
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="250ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">
                        <!-- {{ __('messages.footer_work_time') }} -->
                        Работно време
                    </h2>

                    <ul class="list-unstyled footer-widget__info">
                        <li style="--accent-color: #ffa415;">
                            <span class="footer-widget__info__icon">
                                <i class="icofont-clock-time"></i>
                            </span>
                            <!-- {{ __('messages.footer_workweek') }} -->
                            Понеделник – Петък: 8:00 – 18:00
                        </li>

                        <li style="--accent-color: #ff5528;">
                            <span class="footer-widget__info__icon">
                                <i class="icofont-location-pin"></i>
                            </span>
                            <!-- {{ __('messages.footer_city') }} -->
                            София, България
                        </li>

                        <li style="--accent-color: #8139e7;">
                            <span class="footer-widget__info__icon">
                                <i class="icofont-email"></i>
                            </span>
                            <a href="mailto:ofis@yulianmollov.bg">ofis@yulianmollov.bg</a>
                        </li>
                    </ul>

                    <div class="footer-widget__social">
                        <a target="_blank" href="https://www.facebook.com/Doctor.Yulian.Mollov"
                            style="--accent-color: #1396f0;">
                            <i class="fab fa-facebook-f"></i>
                            <span class="sr-only">Facebook</span>
                        </a>

                        <a target="_blank" href="https://www.instagram.com/dryulianmollov"
                            style="--accent-color: #f502d0;">
                            <i class="fab fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM -->
    <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    <!-- {{ __('messages.footer_all_rights_reserved') }} -->
                    © Всички права запазени <span class="dynamic-year"></span>
                </p>
            </div>
        </div>
    </div>
</footer>


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">

            <a href="/"><img src="/assets/images/dr. yuli icons/logo-yulian-mollov-2.png" alt="Лого уебсайт"></a>
        </div>

        <div class="mobile-nav__container">

            {{-- <div class="nav-wrapper">
                <div class="sl-nav">

                    @switch(Session::get('locale', 'bg'))
                        @case('bg')
                            Език:
                        @break

                        @case('tr')
                            Dil:
                        @break

                        @case('en')
                            Language:
                        @break

                        @default
                            Език:
                    @endswitch
                    @php
                        $languages = ['en' => 'English', 
                                      'bg' => 'Български',
                                      'tr' => 'Türkçe'
                                    ];
                        $locale = Session::get('locale');
                        $locale = array_key_exists($locale, $languages) ? $locale : 'bg';
                    @endphp
                    <ul>
                        <li><b>
                                {{ $languages[$locale] }}
                            </b>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>

                            <ul>
                                <li>
                                    <a href="{{ route('change-language', ['lang' => 'bg']) }}">
                                        <img src="/assets/images/icons/bulgaria.png" />
                                        <span class="active">Български</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('change-language', ['lang' => 'en']) }}">
                                        <img src="/assets/images/icons/united-kingdom.png" />
                                        <span>English</span>
                                    </a>
                                </li>

                                   <li>
                                    <a href="{{ route('change-language', ['lang' => 'tr']) }}">
                                        <img src="/assets/images/icons/turkey.png" />
                                        <span>Türkçe</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div> --}}

            <hr class="w-100">

            @include('main_pages_files.inc.menuList')
        </div>

        <div class="mobile-nav__social">
            <a href="https://www.facebook.com/Doctor.Yulian.Mollov" target="_blank" style="--accent-color: #ffa415;">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                {{-- <span class="sr-only">Facebook</span> --}}
            </a>

            <a target="_blank" href="https://www.instagram.com/dryulianmollov" style="--accent-color: #44c895;">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                {{-- <span class="sr-only">Instagram</span> --}}
            </a>
        </div><!-- /.mobile-nav__social -->






        {{-- <div class="mobile__btns">
            <a href="/campaign" class="careox-btn">
                <span><i class="icofont-heart"></i>
                {{ __('messages.create_campaign') }}
                </span>
            </a>
            <a href="/login" class="careox-btn"> {{ __('messages.global_login') }}</span></a>
        </div> --}}

    </div>
    <!-- /.mobile-nav__content -->
</div>

{{-- <div class="backgroundSuccess">
    <div class="modalSuccess animate__animated animate__fadeInUp">
        <img src="/assets/images/email_animation.gif" alt="Имейл Gif">
        <p>{{ __('messages.global_success') }}</p>
        <p>{{ __('messages.newsletter_subscribe_success') }}</p>
        <img onclick="this.parentElement.parentElement.style.display =  'none'" class="imgCloseX"
            src="/assets/images/closeX.png" alt="Бутон затвори">
    </div>
</div> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/jarallax/jarallax.min.js?v=<?php echo time(); ?>"></script>

<script src="/assets/vendors/jquery-appear/jquery.appear.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/jquery-validate/jquery.validate.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/nouislider/nouislider.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/tiny-slider/tiny-slider.js?v=<?php echo time(); ?>"></script>
{{-- <script src="/assets/vendors/wnumb/wNumb.min.js"></script> --}}
<script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/wow/wow.js?v=<?php echo time(); ?>"></script>
<script src="/assets/vendors/imagesloaded/imagesloaded.min.js?v=<?php echo time(); ?>"></script>

<script src="/assets/js/careox.js?v=<?php echo time(); ?>"></script>
<script src="/javascript/ajax/contact-form.js?v=<?php echo time(); ?>"></script>
<script src="/javascript/ajax/newsletter.js?v=<?php echo time(); ?>"></script>
