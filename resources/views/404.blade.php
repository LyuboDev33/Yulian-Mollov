<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Тази страница не е намерена</title>
    <!-- favicons Icons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @include('main_pages_files.inc.head')

</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('main_pages_files.inc.header')

        <section class="error-404">
            <div class="container">
                <div class="error-404__image"><img src="/assets/images/error-404.jpg" alt="404"></div><!-- /.error-404__title -->
                <h3 class="error-404__title"> {{ __('messages.404_page_not_found') }}</h3><!-- /.error-404__title -->              
                <div class="error-404__btns">
                    <a href="/" class="careox-btn careox-btn--base error-404__btn">
                        <span>
                       {{ __('messages.404_go_to_home_page') }}
                    </span>
                </a>
                </div><!-- /.error-404__btns -->
            </div><!-- /.container -->
        </section><!-- /.error-404 -->


        @include('main_pages_files.inc.footer')
    </div><!-- /.page-wrapper -->


</body>

</html>