<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{-- {{ __('messages.title_about_us') }}  --}}
        За д-р Моллов
    </title>

    @include('main_pages_files.inc.head')

</head>

<body>



    <div class="page-wrapper">
        @include('main_pages_files.inc.header')

        <section class="about-one about-one--about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div>
                            <div class="about-one__image__one">
                                <img src="/assets/images/main-pages/hands-together.jpg" alt="Задружност">
                            </div>
                            <div class="about-one__image__two">
                                <a href="/contact" class="about-one__image__video text-center">
                                    {{-- {{ __('messages.title_discover_page') }} --}} Услуги от д-р Моллов
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__content text-center">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">
                                    <span class="sec-title__tagline__border"></span>
                                    {{-- {{ __('messages.about_us') }} --}} За д-р Моллов
                                </h6>

                                <h3 class="sec-title__title">
                                    {{-- {{ __('messages.about_who_are_we') }} --}} Медицински услуги и грижа
                                </h3>
                            </div>

                            <p class="about-one__content__text centered">
                                {{-- {{ __('messages.about_description') }} --}} Д-р Моллов предлага професионални медицински прегледи, кавитетни
                                манипулации, вземане на биологичен материал за изследвания, експресни тестове,
                                инструментална диагностика и хирургични процедури. Всички услуги се извършват с внимание
                                към пациента и висок стандарт на медицинска грижа.
                            </p>

                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ffa415;">
                                        <div class="about-one__content__box__top">
                                            {{-- <div class="about-one__content__box__icon"><span class="icon-zakat"></span></div> --}}
                                            <h5 class="about-one__content__box__title">
                                                {{-- {{ __('messages.about_financial_support') }} --}} Прегледи и консултации
                                            </h5>
                                        </div>
                                        <p>• Първичен и вторичен преглед<br>• Онлайн консултация с турски специалист (с
                                            превод и съдействие от д-р Моллов)</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ff5528;">
                                        <div class="about-one__content__box__top">
                                            {{-- <div class="about-one__content__box__icon"><span class="icon-charity"></span></div> --}}
                                            <h5 class="about-one__content__box__title">
                                                {{-- {{ __('messages.about_treatment_turkey') }} --}} Манипулации и процедури
                                            </h5>
                                        </div>
                                        <p>• Поставяне/смяна на катетри<br>• Венозни линии, инфузии и инжекции<br>•
                                            Апликации, сонди, инхалации<br>• Домашни посещения за палиативни грижи</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div class="about-one__content__border"></div>

        <div class="about-one__text wow fadeInUp">
            <span>#</span> {{ __('messages.every_person_matters') }} Всяка грижа има значение
            <a href="/discover" class="careox-btn"><span>{{ __('messages.donate_now') }} Научи повече</span></a>
        </div> --}}
            </div>
        </section>





        <section class="video-one video-one--about">
            <div class="video-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
                style="background-image: url(/assets/images/main-pages/about-help.jpg)">
            </div>
            <div class="container">

                <h5 class="video-one__sub-title">
                    Обадете се когато имате нужда от помощ
                    {{-- {{ __('messages.about_become_part') }}         --}}
                </h5>
                <h2 class="video-one__title">
                    Обадете се
                    {{-- {{ __('messages.about_become_monthly_member') }}  --}}
                </h2><!-- /.video-one__title -->
                <a href="/contact" class="careox-btn">
                    <span>
                        Контакти на д-р Моллов
                        {{-- {{ __('messages.about_about_the_platform') }} --}}
                    </span>
                </a>
            </div><!-- /.container -->
        </section><!-- /.video-one -->

        {{-- Section Who is Dr. Mollov? --}}
        @include('main_pages_files.inc.who-is-dr-mollov')
        {{-- Section Who is Dr. Mollov? --}}


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                                    {{ __('messages.about_dr_mollov') }}
                                </h3><!-- /.sec-title__title -->
                            </div>
                            <div class="about-one__content__text centered_fully">
                                {{ __('messages.about_dr_mollov2') }}
                                <br><br>
                                {{ __('messages.about_dr_mollov3') }}
                                <br><br>
                                {{ __('messages.about_dr_mollov4') }}
                                <br><br>
                                {{ __('messages.about_dr_mollov5') }}
                            </div>
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                                    {{ __('messages.about_multilingualism') }}
                                </h3><!-- /.sec-title__title -->
                            </div>
                            <div class="about-one__content__text centered_fully">
                                {{ __('messages.about_known_languages') }}
                                <br><br>
                                {{ __('messages.about_known_languages2') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                                    {{ __('messages.about_education') }}
                                </h3><!-- /.sec-title__title -->
                            </div>
                            <div class="about-one__content__text centered_fully">
                                <ul>
                                    <li> {{ __('messages.about_education1') }} </li>
                                    <li>{{ __('messages.about_education2') }} </li>
                                    <li>{{ __('messages.about_education3') }}</li>
                                    <li>{{ __('messages.about_education4') }}</li>
                                </ul>
                            </div>
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                                    {{ __('messages.about_experience') }}
                                </h3><!-- /.sec-title__title -->
                            </div>
                            <div class="about-one__content__text centered_fully">
                                <p>
                                    {{ __('messages.about_experience1') }}
                                </p>
                                <ul>
                                    <li>
                                        {{ __('messages.about_experience2') }}
                                    </li>
                                    <li>
                                        {{ __('messages.about_experience3') }}
                                    </li>
                                    <li>
                                        {{ __('messages.about_experience4') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <div class="about-one__content centered_fully">
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                                    {{ __('messages.about_personal_interests') }}
                                </h3><!-- /.sec-title__title -->
                            </div>
                            <p class="about-one__content__text">
                                {!! __('messages.about_personal_interests2') !!}
                            </p>
                        </div>
                    </div>

                </div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        @include('main_pages_files.inc.footer')

    </div>


</body>

</html>
