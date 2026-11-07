<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ __('messages.title_news_page') }}</title>



    @include('main_pages_files.inc.head')


</head>

<body class="custom-cursor">

    <!-- /.preloader -->
    <div class="page-wrapper">


        @include('main_pages_files.inc.header')

        {{-- @include('main_pages_files.inc.who-is-dr-mollov') --}}

        <hr>

        <section class="donations-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline bw-split-in-right">
                        <span class="sec-title__tagline__border"></span>
                           {{ __('messages.news') }}
                    </h6>
                    <h3 class="sec-title__title bw-split-in-left">
                          {{ __('messages.news_related_to_mollov') }}
                    </h3>
                </div>

                <div class="row">

                    {{-- <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #ffa415;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/yuli1.webp" alt="careox">
                                <a target="_blank" target="_blank" href="https://lechenie-turcia.com/galeriya-i-video" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://lechenie-turcia.com/galeriya-i-video/">Галерия на д-р Моллов</a></h3>
                                <p class="donations-one__item__text">Галерията на д-р Моллов</p>
                                <a target="_blank" class="donations-one__item__rm" href="https://lechenie-turcia.com/galeriya-i-video/"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #ff5528;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/yuli-youtube.jpg" alt="careox">
                                <a target="_blank" href="https://www.youtube.com/watch?v=soIoXK0f7TY" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=soIoXK0f7TY">Д-р Юлиян Моллов</a></h3>
                                <p class="donations-one__item__text">Между между работата по света, музиката и семейството</p>
                                <a target="_blank" target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=soIoXK0f7TY&"><i class="icon-right-arrow"></i>
                                    Разгледай</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/dr-yuli-btv.jpg" alt="careox">
                                <a target="_blank" href="https://www.btv.bg/shows/predi-obed/videos/sreshta-s-d-r-julijan-mollov-kojto-dava-nadezhda-na-neizlechimo-bolni-pacienti.html" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.btv.bg/shows/predi-obed/videos/sreshta-s-d-r-julijan-mollov-kojto-dava-nadezhda-na-neizlechimo-bolni-pacienti.html">
                                    Среща с д-р Юлиян Моллов
                                </a></h3>
                                <p class="donations-one__item__text">Човек, който дава надежда на неизлечимо болни пациенти</p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.btv.bg/shows/predi-obed/videos/sreshta-s-d-r-julijan-mollov-kojto-dava-nadezhda-na-neizlechimo-bolni-pacienti.html"><i class="icon-right-arrow"></i>
                                    Разгледай
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #44c895;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/fialntrop.jpg" alt="careox">
                                <a target="_blank" href="https://www.youtube.com/watch?v=cFJnCkiG720" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=cFJnCkiG720">Филантропът д-р Юлиян Моллов</a></h3>
                                <p class="donations-one__item__text">Човекът, който помага за лечението на българи у нас и в чужбина.</p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=cFJnCkiG720"><i class="icon-right-arrow"></i>
                                    Разгледай
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #399be7;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/budni.jpg" alt="careox">
                                <a target="_blank" href="https://www.youtube.com/watch?v=OvoagDCRTqA" class="donations-one__item__image__link"></a>

                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=OvoagDCRTqA">БНТ - Призвание медик</a></h3>
                                <p class="donations-one__item__text">
                                    Лекарят, който подава ръка на пациентите с най-тежки диагноза
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=OvoagDCRTqA"><i class="icon-right-arrow"></i>
                                    Разгледай
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #d340c3;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/yuli-on-air.jpg" alt="careox">
                                <a target="_blank" href="https://www.youtube.com/watch?v=4TekD2ktxGo" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=4TekD2ktxGo">Д-р Моллов в Bulgaria On Air</a></h3>
                                <p class="donations-one__item__text">Пълна упойка при децата: Трябва да знаете това преди поставянето ѝ</p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=4TekD2ktxGo"><i class="icon-right-arrow"></i>
                                Разгледай
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #ffa415;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/darotivi.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.youtube.com/watch?v=T06_ascpvHc" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=T06_ascpvHc">Фондация д-р Моллов</a></h3>
                                <p class="donations-one__item__text">
                                    Фондация "Моллов" ще подпомага и даровити деца
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=T06_ascpvHc"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #ff5528;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/dr-mollov-pro.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://bnr.bg/horizont/post/102130854" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://bnr.bg/horizont/post/102130854">Д-р Моллов по БНР</a></h3>
                                <p class="donations-one__item__text">
                                    Да се научим да се грижим за себе си!
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://bnr.bg/horizont/post/102130854"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #d340c3;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/dr-mollov-pro.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.youtube.com/watch?v=YbZFk7FSfQs" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.youtube.com/watch?v=YbZFk7FSfQs">Лекарят от Лондон, който „спира и пуска живота“</a></h3>
                                <p class="donations-one__item__text">
                                    Филантропът помага безплатно на българи за уреждане на лечение на тежки случаи в Истанбул
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.youtube.com/watch?v=YbZFk7FSfQs"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #44c895;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/24chasa.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.24chasa.bg/bulgaria/article/20026265" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.24chasa.bg/bulgaria/article/20026265">Д-р Моллов открива фондация</a></h3>
                                <p class="donations-one__item__text">
                                    Откриват фондация за подкрепа на нуждаещи се от животоспасяващи скъпи лечения
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.24chasa.bg/bulgaria/article/20026265"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>




                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/med-help.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://silistranews.net/2024/11/28/d-r-yuliyan-mollov-osnovava-fondatsiya-za-meditsinska-pomosht-i-podkrepa-na-mladi-talanti" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://silistranews.net/2024/11/28/d-r-yuliyan-mollov-osnovava-fondatsiya-za-meditsinska-pomosht-i-podkrepa-na-mladi-talanti">Силистренецът д-р Юлиян Моллов ще представи фондацията си в София</a></h3>
                                <p class="donations-one__item__text">
                                  На 5-ти Март 2025г. е официалното откриване на д-р Моллов
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://silistranews.net/2024/11/28/d-r-yuliyan-mollov-osnovava-fondatsiya-za-meditsinska-pomosht-i-podkrepa-na-mladi-talanti"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>

                     {{-- <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/yulix2.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.bgdnes.bg/bulgaria/article/20026148" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.bgdnes.bg/bulgaria/article/20026148">Откриват фондация "Юлиян Моллов"</a></h3>
                                <p class="donations-one__item__text">
                              Откриват фондация "Юлиян Моллов"
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.bgdnes.bg/bulgaria/article/20026148"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div> --}}

                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/hristo-mariya.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.bgdnes.bg/bulgaria/article/18637299" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.bgdnes.bg/bulgaria/article/18637299"></a>
                                Д-р Моллов - единственият обърнал внимание на Христо, да не е с половин череп
                                </h3>
                                <p class="donations-one__item__text">
                                    Мария, сестрата на Христо - мъжа с половин череп: Братко, чакам да се събудиш!
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.bgdnes.bg/bulgaria/article/18637299"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>

                       <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="donations-one__item" style="--accent-color: #8742e8;">
                            <div class="donations-one__item__image">
                                <img src="/assets/images/news/rosen-trans.jpg" alt="careox">
                                <a target="_blank" target="_blank" href="https://www.credoweb.bg/publication/134368/krastosana-transplantatsiya-me-dari-s-nov-babrek-spodelya-rosen" class="donations-one__item__image__link"></a>
                            </div>
                            <div class="donations-one__item__content">
                                <h3 class="donations-one__item__title"><a target="_blank" href="https://www.credoweb.bg/publication/134368/krastosana-transplantatsiya-me-dari-s-nov-babrek-spodelya-rosen"></a>
                                Д-р Моллов - лекарят, който единствен успява да намери бъбрек за кръстосана трансплантация на Росен
                                </h3>
                                <p class="donations-one__item__text">
                                  Кръстосана трансплантация ме дари с нов бъбрек, споделя Росен
                                </p>
                                <a target="_blank" class="donations-one__item__rm" href="https://www.credoweb.bg/publication/134368/krastosana-transplantatsiya-me-dari-s-nov-babrek-spodelya-rosen"><i class="icon-right-arrow"></i>
                                Разгледай</a>
                            </div>
                        </div>
                    </div>




                </div><!-- /.row -->
                <hr>
                    <div class="row">
                           <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="donations-one__item" style="--accent-color: #8742e8;">
                                <div class="donations-one__item__image">
                                    <img src="/assets/images/news/ina.jpg" alt="careox">
                                    <a target="_blank" target="_blank" href="https://www.bgdnes.bg/bulgaria/article/17794957" class="donations-one__item__image__link"></a>
                                </div>
                                <div class="donations-one__item__content">
                                    <h3 class="donations-one__item__title"><a target="_blank" href="https://www.bgdnes.bg/bulgaria/article/17794957"></a>
                                    Д-р Моллов - разговор за спасяването на живота на Ина Бобева, чрез постяване на точна диагноза, сгрешена в България
                                    </h3>
                                    <p class="donations-one__item__text">
                                     Световната №3 в самбото Ина Бобева: Живея трети живот!
                                    </p>
                                    <a target="_blank" class="donations-one__item__rm" href="https://www.bgdnes.bg/bulgaria/article/17794957"><i class="icon-right-arrow"></i>
                                    Разгледай</a>
                                </div>
                            </div>
                        </div>

                    </div>

            </div>

        </section>





        @include('main_pages_files.inc.footer')

    </div><!-- /.page-wrapper -->


</body>

</html>
