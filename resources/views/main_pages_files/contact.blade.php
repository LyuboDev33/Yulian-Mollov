
<x-app-layout>

    @section('SEO')
        <title>Контакти | Фондация д-р Юлиян Моллов</title>

        <meta name="description"
            content="Свържете се с Фондация д-р Юлиян Моллов. Имате въпроси относно нашите благотворителни кампании и инициативи? Потърсете ни на телефон +359 895 96 26 10.">

        <meta name="keywords"
            content="Фондация д-р Юлиян Моллов, контакти, телефон, дарения, благотворителност, кампании, каузи, подкрепа">

        <meta name="author"
            content="Фондация д-р Юлиян Моллов">

        <meta name="robots" content="index,follow">

        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph --}}
        <meta property="og:title"
            content="Контакти | Фондация д-р Юлиян Моллов">

        <meta property="og:description"
            content="Свържете се с Фондация д-р Юлиян Моллов за информация относно благотворителни кампании, инициативи и дарения.">

        <meta property="og:type" content="website">

        <meta property="og:url"
            content="{{ url()->current() }}">

        <meta property="og:image"
            content="{{ asset('assets/images/facebook-seo.png') }}">

        <meta property="og:site_name"
            content="Фондация д-р Юлиян Моллов">

        <meta property="og:locale" content="bg_BG">

        {{-- Twitter --}}
        <meta name="twitter:card"
            content="summary_large_image">

        <meta name="twitter:title"
            content="Контакти | Фондация д-р Юлиян Моллов">

        <meta name="twitter:description"
            content="Свържете се с Фондация д-р Юлиян Моллов за информация относно благотворителните ни инициативи.">

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

                        <img src="/assets/images/contact.jpg"
                            alt="Контакти с Фондация д-р Юлиян Моллов">

                    </div>

                </div>
                <!-- Contact Image End -->


                <!-- Contact Content -->
                <div class="col-xl-7 d-flex align-items-center justify-content-center">

                    <form id="contact_form"
                        class="contact-one__form form-one wow fadeInUp"
                        data-wow-duration="1500ms">

                        @csrf

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

                            <h3>
                                <a href="tel:+359895962610">
                                    +359 895 96 26 10
                                </a>
                            </h3>

                        </div>

                    </form>

                </div>
                <!-- Contact Content End -->

            </div>

        </div>

    </section>
    <!-- Contact Section End -->

</x-app-layout>
