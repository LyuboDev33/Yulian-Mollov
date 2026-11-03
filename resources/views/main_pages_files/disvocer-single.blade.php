<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicons Icons -->
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/vendors/careox-icons/style.css?v=<?php echo time(); ?>" />
    
    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/careox.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/assets/css/custom.css?v=<?php echo time(); ?>" />


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

 
    <!-- End Meta Pixel Code -->

    <!-- Dynamic Meta SEO Tags -->
    <meta name="description" content="{{ Str::limit(strip_tags($single_cause->cause_description), 160, '...') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $single_cause->cause_name }}">
    <meta property="og:description"
        content="{{ Str::limit(strip_tags($single_cause->cause_description), 160, '...') }}">
    <meta property="og:image"
        content="{{ asset('/assets_dashboard/images/main_images/' . $single_cause->cause_main_image) }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Yulian Mollov">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $single_cause->cause_name }}">
    <meta name="twitter:description"
        content="{{ Str::limit(strip_tags($single_cause->cause_description), 160, '...') }}">
    <meta name="twitter:image"
        content="{{ asset('/assets_dashboard/images/main_images/' . $single_cause->cause_main_image) }}">

    <!-- Favicon -->
    <link rel="icon" href="https://yulianmollov.bg/assets/images/dr.%20yuli%20icons/logo-yulian-mollov-2.png"
        type="image/png">

    <title>{{ $single_cause->cause_name }}</title>
</head>


<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('main_pages_files.inc.header')

        @php
            if (!empty($single_cause->cause_youtube_video)) {
                $embedLink = null;
                $arrayLink = explode('v=', $single_cause->cause_youtube_video);
                if ($arrayLink) {
                    $embedLink = $arrayLink[1];
                }
            }
            $arrayImages = [];
            if (!empty($single_cause->cause_gallery)) {
                $arrayImages = explode(' | ', $single_cause->cause_gallery);
            }
        @endphp

        <section class="blog-details">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-7">
                        <h3 class="blog-details__title">{{ $single_cause->cause_name }}</h3>

                        @if ($single_cause->video_status !== 'off')
                            @if (!empty($embedLink))
                                <iframe class="responsive-video"
                                    src="https://www.youtube.com/embed/{{ $embedLink }}" frameborder="0"
                                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            @endif
                        @endif
                        <div class="blog-details__content">
                            <div class="blog-details__image">
                                @if ($single_cause->gallery_status !== 'off' && !empty($single_cause->cause_gallery))
                                    <div style="height: 400px; width: 100%;">
                                        <div class="donationImages">
                                            <div class="swiper-wrapper">

                                                @foreach ($arrayImages as $image)
                                                    <div class="swiper-slide">
                                                        <!-- Frame around the image -->
                                                        <div
                                                            style="width: 100%; height: 400px; display: flex; justify-content: center; align-items: center; border: 2px solid #ddd; box-sizing: border-box; position: relative; overflow: hidden;">
                                                            <!-- Background with blur -->
                                                            <div
                                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('/assets_dashboard/images/gallery_images/{{ $image }}'); background-size: cover; background-position: center; filter: blur(5px); z-index: 1;">
                                                            </div>
                                                            <!-- Foreground image -->
                                                            <img src="/assets_dashboard/images/gallery_images/{{ $image }}"
                                                                alt="{{ $image }}"
                                                                style="max-width: 100%; max-height: 100%; object-fit: contain; position: relative; z-index: 2;">
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                @endif

                            </div><!-- /.blog-card__image -->

                            <p class="blog-details__text">
                                {!! $single_cause->cause_description !!}
                            </p><!-- /.blog-details__text -->

                        </div><!-- /.blog-details -->


                    </div><!-- /.col-lg-8 -->

                    <div class="col-lg-5 donation_form shadow">
                        <span id="spanTop"></span>

                        <div class="donations-one__item__bottom">
                            {{-- <div class="donations-one__item__bottom__shape" style="background-image: url(assets/images/shapes/d-shape-1.png);"></div> --}}
                            <div class="donations-one__item__bottom__progress">
                                <div class="donations-one__item__bottom__progress__inner count-bar"
                                    data-percent="{{ number_format(((float) $single_cause->cause_amount_collected * 100) / (float) $single_cause->cause_desired_amount, 0) }}%">
                                    <div class="donations-one__item__bottom__progress__number count-text">
                                        {{ number_format((float) ($single_cause->cause_amount_collected * 100) / (float) $single_cause->cause_desired_amount, 0) }}%
                                    </div>
                                </div>
                            </div><!-- /.progress-box -->
                            <div class="donations-one__item__bottom__text">
                                <span>{!! __('messages.discover_donated') !!}: <br>
                                    {{ $amount_cause }}
                                    EUR</span>
                                <span>{!! __('messages.discover_desired_amount') !!}: <br>
                                    {{ number_format((float) $single_cause->cause_desired_amount, 2, '.') ?? '0' }}
                                    EUR</span>
                            </div>
                        </div><!-- /.donations-one__item__bottom -->
                        <hr>
                        <div class="paymentSwitch banner-text-wrapper mb-40">
                            <h3 class="text-center mt-20">{!! __('messages.discover_choose_payment') !!}</h3>
                            <p class="text-center">
                                Credit/Debit card, ApplePay, GooglePay, Revolut, Paypal , IBAN

                            </p>
                            <div class="btn__wrapper_payment shadow d-flex">
                                <a class="first__btn active" role="link">
                                    {!! __('messages.discover_pay_with_card') !!}
                                </a>
                                <a class="second__btn" role="link">
                                    IBAN
                                </a>
                            </div>
                        </div>
                        <hr>

                        <div id="iban" class="form-one">
                            <div class="iban-box">
                                <div>
                                    <h5 class="h5 fw-bold"> {!! __('messages.discover_bank') !!}:</h5>
                                    <p>Unicredit Bulbank</p>
                                </div>
                            </div>
                            <div class="iban-box">
                                <div>
                                    <h5 class="h5 fw-bold">IBAN</h5>
                                    <p>BG91UNCR70001525684078</p>
                                </div>
                            </div>
                            <div class="iban-box">
                                <div>
                                    <h5 class="h5 fw-bold">BIC</h5>
                                    <p>UNCRBGSF</p>
                                </div>

                            </div>
                            <div class="iban-box">
                                <div>
                                    <h5 class="h5 fw-bold">{!! __('messages.discover_receiver') !!}:</h5>
                                    <p>
                                       {!! __('messages.discover_foundation') !!}
                                    </p>
                                </div>

                            </div>
                            <div class="iban-box">
                                <div>
                                    <h5 class="h5 fw-bold"> {!! __('messages.discover_reason') !!}:</h5>
                                    <p>{{ $campaign_reason }}</p>
                                </div>

                            </div>

                            <p class="mt-3">
                                {!! __('messages.discover_accept_terms') !!}
                            </p>

                            {{-- <p><b>ВАЖНО!</b> Дарявате 5% от сумата, постъпваща по банкова сметка, в полза на платформата. В случай, че не сте съгласни с това, моля използвайте другите методи за дарение.</p> --}}
                        </div>

                        <div id="customPaymentMethod" class="contact-one__form contact-form-validated form-one">
                            <form id="payment-form-old">
                                @csrf
                                <div id="inputFieldsPart" class="form-one__group"> <!-- Start of input fields part -->

                                    <div class="form-one__control form-one__control--full">
                                        <label for="names"> {!! __('messages.discover_label_names') !!} <span
                                                class="redStart">*</span></label>
                                        <input class="inputFields" type="text" id="names" name="names"
                                            placeholder="{!! __('messages.discover_placeholder_names') !!}">
                                        <p class="inputError d-none">
                                            {!! __('validation.required') !!}
                                        </p>
                                    </div><!-- /.form-one__control -->

                                    <div class="form-one__control form-one__control--full">
                                        {!! __('messages.discover_label_email') !!} <span class="redStart">*</span>
                                        <input class="inputFields" type="email" id="email" name="email"
                                            placeholder="{!! __('messages.discover_placeholder_email') !!}">
                                        <p class="inputError d-none">
                                            {!! __('validation.required') !!}
                                        </p>
                                    </div><!-- /.form-one__control -->

                                    <div class="form-one__control form-one__control--full">

                                        <label for="amount">{!! __('messages.discover_label_amount') !!} (EUR) <span
                                                class="redStart">*</span></label>
                                        <input id="amount" min="1" max="5000" class="inputFields"
                                            type="tel" name="amount" placeholder="{!! __('messages.discover_placeholder_amount') !!}"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0 || 
                                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
                                        <p class="inputError d-none">
                                            {!! __('validation.required') !!}
                                        </p>
                                          <p class="inputError minAmount d-none">
                                            {!! __('validation.min-amount') !!}
                                        </p>
                                        <p class="maxAmountError d-none">
                                             {!! __('validation.max-amount') !!}
                                        </p>
                                    </div><!-- /.form-one__control -->


                                    <div class="form-one__control form-one__control--full">
                                        <h4> {!! __('messages.discover_support_the_platform') !!} </h4>

                                        <div class='range'>
                                            <input type="range" min='0' max='30' step='5' />
                                            <span class="percentageDonate">15%</span>

                                            <p class="text-centered">  
                                                {!! __('messages.discover_support_tax_message') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- End of input fields part -->

                                <div class="form-one__control form-one__control--full">
                                    <div class="right-side">
                                        <div class="receipt">
                                            <h2 class="receipt-heading"> {!! __('messages.discover_your_donation') !!}</h2>
                                            <div>
                                                <table class="table">
                                                    <tr>
                                                        <td>{!! __('messages.discover_for_the_campaign') !!}</td>
                                                        <td class="campaignPrice">0 EUR</td>
                                                    </tr>
                                                    <hr>
                                                    <tr>
                                                        <td>{!! __('messages.discover_for_the_platform') !!}</td>
                                                        <td class="platformPrice">0 EUR</td>
                                                    </tr>

                                                    <tr>
                                                        <td>{!! __('messages.discover_you_will_pay') !!}</td>
                                                        <td class="frontEndTotal">0 EUR</td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>


                                        <div class="checkbox-wrapper-33">
                                            <label class="checkbox">
                                                <input class="checkbox__trigger visuallyhidden" type="checkbox" />
                                                <span class="checkbox__symbol">
                                                    <svg aria-hidden="true" class="icon-checkbox" width="28px"
                                                        height="28px" viewBox="0 0 28 28" version="1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 14l8 7L24 7"></path>
                                                    </svg>
                                                </span>
                                                <p class="checkbox__textwrapper">
                                                    {!! __('messages.discover_anonoymous_donation') !!}
                                                </p>
                                            </label>
                                        </div>

                                        <div id="makeDonationBtn"
                                            class="form-one__control form-one__control--full w-100">
                                            <button type="submit" class="careox-btn w-100">
                                                <span>
                                                    {!! __('messages.discover_make_donation') !!}
                                                </span>
                                            </button>

                                            <button onclick="$('#modalShare').css('display', 'flex')"
                                                id="shareBtn" 
                                                type="button"
                                                class="careox-btn bg-black mt-20 w-100">
                                                    <span>
                                                        {!! __('messages.discover_share') !!}
                                                    </span>
                                                </button>
                                        </div>




                                    </div>
                                </div>
                        </div><!-- /.form-one__control -->



                        <!-- Hidden input to store paymentMethodId -->
                        <input type="hidden" name="payment_method_id" id="payment_method_id">
                        <input type="hidden" name="hiddenID" id="hiddenID" value="{{ $single_cause->id }}">
                        </form>

                        <form id="payment-form">
                            <div id="payment-element">
                                <!--Stripe.js injects the Payment Element-->
                            </div>
                            <button class="d-none careox-btn w-100 mt-30 w-100" id="submit">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text"> {!! __('messages.discover_pay') !!}</span>
                            </button>

                            <div id="payment-message" class="hidden"></div>
                        </form>


                    </div><!-- /.form-one__group -->



                </div>



            </div> <!--col-lg4-->
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.blog-details -->


    <div class="container mb-50">
        <hr>
        <h4 class="mb-20 mt-20"> {!! __('messages.discover_top_donators') !!}</h4>

        <div class="d-flex flex-column flex-lg-row">
            <div class="d-flex flex-column flex-md-row w-100 gap-4 col-lg-flex-2">
                @foreach ($all_people_donations as $person)
                    <div class="product-details__comment">
                        <!--Start Comment Box-->
                        <div class="product-details__comment-box">
                            <figure class="product-details__comment-box__thumb">
                                <img src="/assets/images/donors.png" alt="{{ $person->person_name }}">
                            </figure><!-- comment-image -->
                            <div>
                                <h4 class="product-details__comment-box__meta">{{ $person->person_name }}
                                </h4>
                                <P>{!! __('messages.discover_top_donators_donated_amount') !!}: {{ number_format($person->person_amount, 2, '.') }} EUR</P>
                            </div>
                            <!-- comment-meta -->
                        </div>
                        <!--End Comment Box-->
                    </div>
                @endforeach
            </div>

            <div class="col-lg-flex-1">
                <p>{!! __('messages.discover_total_donators') !!}: ({{ count($all_collected_paymanets) }})</p>
                <a href="/discover/all-donations/{{ $single_cause->id }}" type="submit" class="careox-btn">

                    {!! __('messages.discover_list_of_all_donators') !!}

                </a>
            </div>

        </div>

    </div>
    </div><!-- /.page-wrapper -->


    <?php $currentUrl = urlencode("https://yulianmollov.bg" . $_SERVER['REQUEST_URI']); ?>

    <div id="modalShare" class="modal-body">
        <div class="custom-modal-dialog">
            <div class="d-flex justify-content-between">
                <h4 class="text-center">{!! __('messages.discover_help_by_sharing') !!}</h4>
                <button onclick="this.closest('#modalShare').style.display='none'"
                type="button" 
                class="btn-close"></button>
            </div>

            <div class="share-body-modal mb-3 d-flex">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentUrl; ?>"
                    class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center" data-gtm-event-name="Share"
                    data-gtm-param-method="facebook" data-gtm-param-content-type="campaign" data-gtm-param-item-id=""
                    data-gtm-param-step-name="donation-form">
                    <span>Facebook</span>
                    <img src="/assets/images/icons/facebook_2504903.png" alt="Fecabook">
                </a>

                <a href="fb-messenger://share/?link=<?php echo $currentUrl; ?>&app_id=1110988012664095"
                    class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center" data-gtm-event-name="Share"
                    data-gtm-param-method="fb-messenger" data-gtm-param-content-type="campaign"
                    data-gtm-param-item-id="" data-gtm-param-step-name="donation-form">
                    <span>Messenger</span>
                    <img src="/assets/images/icons/messenger_3536483.png" alt="Messenger">
                </a>

                <a href="viber://forward?text=<?php echo $currentUrl; ?>" class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center"
                    data-gtm-event-name="Share" data-gtm-param-method="viber" data-gtm-param-content-type="campaign"
                    data-gtm-param-item-id="" data-gtm-param-step-name="donation-form">
                    <span>Viber</span>
                    <img src="/assets/images/icons/viber_3670059.png" alt="Viber">
                </a>
            </div>

            <div class="share-body-modal mb-5 d-flex">
                <a href="https://twitter.com/intent/tweet?text=<?php echo $currentUrl; ?>"
                    class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center" data-gtm-event-name="Share"
                    data-gtm-param-method="twitter" data-gtm-param-content-type="campaign"
                    data-gtm-param-item-id="" data-gtm-param-step-name="donation-form">
                    <span>TwitterX</span>
                    <img src="/assets/images/icons/twitter_5968830.png" alt="Twitter">
                </a>

                <a href="https://wa.me/?text=<?php echo $currentUrl; ?>"
                    class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center" data-gtm-event-name="Share"
                    data-gtm-param-method="whats-app" data-gtm-param-content-type="campaign"
                    data-gtm-param-item-id="" data-gtm-param-step-name="donation-form">
                    <span>WhatsApp</span>
                    <img src="/assets/images/icons/whatsapp_3536445.png" alt="WhatsApp">
                </a>

                <a href="https://t.me/share/url?url=<?php echo $currentUrl; ?>"
                    class="share-icon btn gtm-cutom-click-event-selector text-center d-flex flex-column align-items-center" data-gtm-event-name="Share"
                    data-gtm-param-method="telegram" data-gtm-param-content-type="campaign"
                    data-gtm-param-item-id="" data-gtm-param-step-name="donation-form">
                    <span>Telegram</span>
                    <img src="/assets/images/icons/telegram_2111646.png" alt="Telegram">
                </a>
            </div>

            <p>{!! __('messages.discover_direct_link') !!}</p>
            <form class="share-form mb-4">
                <input id="shareLinkValue" type="text" class="form-control" value="https://yulianmollov.bg<?php echo $_SERVER['REQUEST_URI']; ?>">
                <a onclick="navigator.clipboard.writeText(document.getElementById('shareLinkValue').value)" class="btn btn-primary btn-sm mt-20">
                    {!! __('messages.discover_copy_link') !!}
                </a>
            </form>
        </div>
    </div>


    <div id="preloader">
        <div id="loader" class="animate__animated animate__fadeInUp">
            <img class="dr-molov-img" src="/assets/images/dr. yuli icons/logo-yulian-mollov-1.png"
                alt="Снимка д-р Молов">

            <div id="waitingMessage">
                <img class="loader-gif" src="/assets/images/dr. yuli icons/Circle-Loader.gif" alt="Въртящ се кръг">
                <p>{!! __('messages.discover_processing') !!}</p>
                <p>{!! __('messages.discover_seconds') !!}</p>
            </div>

            <div id="successMessage">
                <p>{!! __('messages.discover_success1') !!}</p>
                <p>{!! __('messages.discover_success2') !!}</p>
                <img class="success_gif" src="/assets/images/dr. yuli icons/success-gif.gif" alt="Снимка д-р Молов">
                <div id="countdown"></div>
                <button class="reloadBtn">{!! __('messages.discover_reload') !!}</button>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--{{-- <script src="/assets/javascript/stripeCheckout.js"></script> --}}-->

    <script src="https://js.stripe.com/v3/"></script>
    <script src="/assets/javascript/expressCheckout.js?v=1.0.1"></script>

    @include('main_pages_files.inc.footer')

    <script>
        let swiperDonationImages = new Swiper(".donationImages", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>

</body>

</html>
