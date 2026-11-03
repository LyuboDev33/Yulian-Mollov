<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- favicons Icons -->
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('main_pages_files.inc.head')

  

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

    <title>Всички плащания - {{ $single_cause->cause_name }}</title>
</head>


<body>

    <!-- /.preloader -->
    <div class="page-wrapper mt-120">
        @include('main_pages_files.inc.header')


        <div class="container">
    
            <a href="/discover/{{ $single_cause->id }}" class="careox-btn w-100 mt-30 w-100">
             {!! __('messages.discover_go_back') !!}
            </a>

            <div class="d-flex flex-column  w-100 gap-4 col-lg-flex-2">
                @foreach ($all_collected_paymanets as $person)
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

        </div>


    </div><!-- /.page-wrapper -->


    

    @include('main_pages_files.inc.footer')

   

</body>

</html>
