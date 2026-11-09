
<x-app-layout>

    @section('SEO')
        <title>Контакти | Фондация д-р Юлиян Моллов</title>

        <meta name="description"
            content="Свържете се с Фондация д-р Юлиян Моллов. Имате въпроси относно нашите благотворителни кампании и инициативи? Потърсете ни на телефон +359 895 96 26 10 или имейл dr.yulian.mollov@gmail.com.">

        <meta name="keywords"
            content="Фондация д-р Юлиян Моллов, контакти, телефон, имейл, WhatsApp, Viber, дарения, благотворителност, кампании, каузи, подкрепа">

        <meta name="author" content="Фондация д-р Юлиян Моллов">

        <meta name="robots" content="index,follow">

        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph --}}
        <meta property="og:title"
            content="Контакти | Фондация д-р Юлиян Моллов">

        <meta property="og:description"
            content="Свържете се с Фондация д-р Юлиян Моллов по телефон, имейл, WhatsApp или Viber.">

        <meta property="og:type" content="website">

        <meta property="og:url" content="{{ url()->current() }}">

        <meta property="og:image"
            content="{{ asset('assets/images/facebook-seo.png') }}">

        <meta property="og:site_name"
            content="Фондация д-р Юлиян Моллов">

        <meta property="og:locale" content="bg_BG">

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">

        <meta name="twitter:title"
            content="Контакти | Фондация д-р Юлиян Моллов">

        <meta name="twitter:description"
            content="Свържете се с Фондация д-р Юлиян Моллов по телефон, имейл, WhatsApp или Viber.">

        <meta name="twitter:image"
            content="{{ asset('assets/images/facebook-seo.png') }}">
    @endsection


    <!-- Contact Section Start -->
    <section class="contact-one contact-one--page">

        <div class="contact-one__shape"
            style="background-image: url('/assets/images/shapes/contact-1-shape-2.png');">
        </div>

        <div class="container">

            <div class="row">

                <!-- Contact Image -->
                <div class="col-xl-5">

                    <div class="contact-one__image d-none d-md-block">

                        <img src="/assets/images/669362b0-7882-4c96-82e9-2b5dee02be82.jpg"
                            alt="Контакти с Фондация д-р Юлиян Моллов">

                    </div>

                </div>
                <!-- Contact Image End -->


                <!-- Contact Content -->
                <div class="col-xl-7 d-flex align-items-center justify-content-center">

                    <div class="contact-one__form form-one wow fadeInUp w-100"
                        data-wow-duration="1500ms">

                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline">
                                <span class="sec-title__tagline__border"></span>
                                Контакти
                            </h6>

                            <h3 class="sec-title__title">
                                Имате въпрос?
                                <br>
                                Свържете се
                            </h3>

                        </div>

                        <!-- Phone -->
                        <div class="mb-4">

                            <h4 class="mb-2">
                                <i class="fa-solid fa-phone me-2"></i>
                                Телефон
                            </h4>

                            <a href="tel:+359895962610">
                                +359 895 96 26 10
                            </a>

                        </div>

                        <!-- Email -->
                        <div class="mb-4">

                            <h4 class="mb-2">
                                <i class="fa-solid fa-envelope me-2"></i>
                                Имейл
                            </h4>

                            <a href="mailto:dr.yulian.mollov@gmail.com">
                                dr.yulian.mollov@gmail.com
                            </a>

                        </div>

                        <!-- Messaging Applications -->
                        <div class="mb-4">

                            <h4 class="mb-3">
                                Свържете се чрез приложение
                            </h4>

                            <div class="d-flex flex-wrap gap-3">

                                <!-- WhatsApp -->
                                <a href="https://wa.me/359895962610"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="d-inline-flex align-items-center gap-2"
                                    style="background-color: #25D366; color: #fff; padding: 13px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">

                                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    WhatsApp

                                </a>

                                <!-- Viber -->
                                <a href="viber://chat?number=%2B359895962610"
                                    class="d-inline-flex align-items-center gap-2"
                                    style="background-color: #7360F2; color: #fff; padding: 13px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">

                                    <i class="fa-brands fa-viber fa-lg"></i>
                                    Viber

                                </a>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Contact Content End -->

            </div>

        </div>

    </section>
    <!-- Contact Section End -->

</x-app-layout>
