<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Събития</title>
    <!-- favicons Icons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <meta name="description" content="Разгледайте нашите благотворителни кампании и подкрепете значими каузи чрез дарение. Заедно можем да направим промяна." />
<meta name="keywords" content="Фондация Юлиян Моллов, дарения, кампании, благотворителност, каузи, помощ, подкрепа" />
<meta name="author" content="Фондация Юлиян Моллов" />

<meta property="og:title" content="Закупете билети с кауза" />
<meta property="og:description" content="Закупете билет за концерт и участвайте в благотворителност свързана с платформата" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://yulianmollov.bg/events" />
<meta property="og:image" content="https://yulianmollov.bg/assets/images/events/event3.jpg" />
<meta property="og:image:width"/>
<meta property="og:image:height"/>
<meta property="og:site_name" content="Фондация Юлиян Моллов" />
<meta property="og:locale" content="bg_BG" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Открийте кампании за дарения | Фондация Юлиян Моллов" />
<meta name="twitter:description" content="Дарете за значими каузи чрез нашите благотворителни кампании. Заедно можем да направим добро." />
<meta name="twitter:image" content="https://yulianmollov.bg/assets/images/events/event3.jpg" />
<meta name="twitter:image:width" />
<meta name="twitter:image:height" />

<link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


<link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
<link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
<link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css" />
<link rel="stylesheet" href="/assets/vendors/careox-icons/style.css" />



<!-- template styles -->
<link rel="stylesheet" href="/assets/css/careox.css"/>
<link rel="stylesheet" href="/assets/css/custom.css">

<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
        @include('main_pages_files.inc.header')

        <section class="pricing-one pricing-one--page">
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Билети с кауза
                    </h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-xl-4 wow fadeInUp " style="--accent-color: #66acf2;" data-wow-delay="00ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-zakat"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">100лв</h3><!-- /.pricing-one__card__price -->
                            </div>
                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="100ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-messages"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">150лв</h3><!-- /.pricing-one__card__price -->
                            </div>
                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="200ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-multiple-users-silhouette"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">200лв</h3><!-- /.pricing-one__card__price -->
                            </div>

                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->
        <hr>


        <section>
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Какво представлява "Билет с кауза" </h3>
                    <!-- /.sec-title__title -->
                    <div class="row  mt-30">
                        <div class="col-xl-6 about__us">
                            <div class="about-one__image">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="support_pic_turkey" src="/assets/images/main-pages/what-is-cause.jpg"
                                        alt="Снимка Подкрепа">
                                </div>
                              
                            </div><!-- /.about__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                            <div class="about-one__content">
                                <div class="sec-title text-left">

                                    <h6 class="sec-title__tagline bw-split-in-right"><span
                                            class="sec-title__tagline__border"></span>Информация</h6>
                                    <!-- /.sec-title__tagline -->

                                </div><!-- /.sec-title -->

                                <p class="text-center">

                                    Билет с кауза е билет, чиято стойност не просто осигурява достъп до събитие, а отива изцяло за дарение в подкрепа на избрана от вас кампания на платформата. 
                                 </p>
                                 <p>
                                   На 14.05. /сряда/, на сцената в Дом на културата “Искър” в  ж.к. Дружба в София - Masterpiece ще представи с голям концерт - “Магията на многогласното пеене”.
Цветни, ексцентрични, вълнуващи - едни от най-успешните и любими на публиката в страната - Вокален състав Masterpiece, ръководени от доаена на музикалната педагогика - Георги Янков.
                                 </p>
                                    
                         
                               

                            
                            </div><!-- /.about__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.sec-title -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-two -->

        <hr>

        <section>
            <div class="container">
                <div class="sec-title text-center">
                    <h3 class="sec-title__title bw-split-in-left">Кои са Вокален състав Masterpiece? </h3>
                    <!-- /.sec-title__title -->
                    <div class="row  mt-30">
                        <div class="col-xl-6 about__us">
                            <div class="about-one__image">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="support_pic_turkey rounded-4" src="/assets/images/events/masterpiece.jpg"
                                        alt="Снимка Masterpiece">
                                </div>
                               
                            </div><!-- /.about__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-xl-6">
                            <div class="about-one__content">
        
                                <p class="about-one__content__text text-center">

                                    Вокален състав Masterpiece са едва на 4 години, които са както малко, така и много.
                                    Години на усилен труд и множество часове репетиции под ръководството на невероятния
                                    вокален педагог и певец Георги Янков.
                                    Участниците в състава покоряват публиката със своя темперамент, хъс, страст, душа и
                                    много любов към музиката.
                                   
                                </p>

                            
                            </div><!-- /.about__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.sec-title -->

                <div class="swiper-objects container position-relative">
                    <h4 class="text-center mb-20">Галерия</h4>
                    <p class="text-center mb-15">(Кликнете върху снимките за по-добър изглед)</p>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="background-image" style="background-image: url('/assets/images/events/event2.jpg');"></div>
                                <img data-fancybox="gallery" src="/assets/images/events/event2.jpg" alt="Снимки Галерия" class="image-content">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="background-image" style="background-image: url('/assets/images/events/event3.jpg');"></div>
                                <img data-fancybox="gallery" src="/assets/images/events/event3.jpg" alt="Снимки Галерия" class="image-content">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="background-image" style="background-image: url('/assets/images/events/event4.jpg');"></div>
                                <img data-fancybox="gallery" src="/assets/images/events/event4.jpg" alt="Снимки Галерия" class="image-content">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="background-image" style="background-image: url('/assets/images/events/event5.jpg');"></div>
                                <img data-fancybox="gallery" src="/assets/images/events/event5.jpg" alt="Снимки Галерия" class="image-content">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="background-image" style="background-image: url('/assets/images/events/event6.jpg');"></div>
                                <img data-fancybox="gallery" src="/assets/images/events/event6.jpg" alt="Снимки Галерия" class="image-content">
                            </div>
                        </div>
                        
                
                    </div>	  
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  
            
                </div>

            </div><!-- /.container -->
        </section><!-- /.testimonials-two -->

        <hr>

   
        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <div class="about-one__content centered_fully">
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                            Допълнителна информация</h3><!-- /.sec-title__title -->
                            </div>
                            <p class="about-one__content__text">
                                В годините Masterpiece са едни от най-предпочитаните и канени състави за участия в
                                събития от всякакъв характер – благотворителни концерти, предавания, светски
                                събития.
                                
                            </p>

                            <p>
                                Сдружение „Мюзик Факчъри“ в лицето на Георги Янков, който макар и млад осъзнава
                                необходимостта от подкрепа и развитие на талантите на България. Той не само им
                                преподава вокални класове от най-високо ниво, но им осигурява и сцена за техните
                                изяви като организира десетки концерти всяка година. “Магията на многогласното
                                пеене”, “Аvangard”, “Гласовете на есента”, “Christmas Harmony” са една малка част от
                                концертите, на които той предоставя възможността за изява на таланти от цяла
                                България.
                            </p>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                
                </div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->


        <section class="pricing-one pricing-one--page">
            <div class="container">
        
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-xl-4 wow fadeInUp " style="--accent-color: #66acf2;" data-wow-delay="00ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-zakat"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">100лв</h3><!-- /.pricing-one__card__price -->
                            </div>
                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="100ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-messages"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">150лв</h3><!-- /.pricing-one__card__price -->
                            </div>
                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-xl-4 wow fadeInUp" style="--accent-color: #66acf2;" data-wow-delay="200ms">
                        <div class="pricing-one__card text-center shadow">
                            <div class="pricing-one__card__top">
                                <div class="pricing-one__card__top__bg"></div>
                                <div class="pricing-one__card__icon">
                                    <i class="icon-multiple-users-silhouette"></i>
                                </div><!-- /.pricing-one__card__icon -->
                                <h3 class="pricing-one__card__price">200лв</h3><!-- /.pricing-one__card__price -->
                            </div>

                            <p class="careox-btn buyTicketEvents"><span>Закупи билет</span></p>
                        </div><!-- /.pricing-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->
        

        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <div class="about-one__content centered_fully mb-50">
                            <div class="sec-title">
                                <h3 class="sec-title__title">
                            За Masterpiece</h3><!-- /.sec-title__title -->
                            </div>
                            <p>
                                В репертоара на състава са включени стотици песни от различни стилове и жанрове.
                                Носители на десетки награди от конкурси в България, солисти на джаз Формация София и
                                Симфониета София. Участници в "Черешката на тортата", реализирали общи проекти с
                                изпълнителите: Ави Бенеди, Мими Иванова, Тринити, Експоуз и много други изпълнители.
                                Тези деца заедно с Георги Янков полагат изключително старание, за да се
                                усъвършенстват, присъстват на множество събития с идеята да усмихнат хората с
                                музиката и да докажат, че младите могат и искат да направят света по-добър.

                                
                            </p>

                            <!--<p>-->
                            <!--    За да продължи да се развива успешно вокалният състав от изключителна важност е-->
                            <!--    закупуването на музикална техника на стойност 19 746 лв., която включва четири-->
                            <!--    безжични микрофона, дигитално пиано, и студиен микрофон за запис.-->
                            <!--    Сумата може да ви се струва не толкова голяма, но е непосилна за 10 деца от вокалния-->
                            <!--    състав и за Георги Янков и затова се обръщаме към Фондация “Др. Юлиян Моллов” и-->
                            <!--    дарителите на фондацията с молба за подкрепа. В годините сме участвали в множество-->
                            <!--    благотворителни каузи и ще продължаваме да го правим. Вярваме, че и вие ще застанете-->
                            <!--    до нас и ще ни подкрепите.-->
                            <!--</p>-->

                            <!--<p>-->
                            <!--     Тази техника ще позволи да бъдат организирани все повече и по-мащабни концерти, в-->
                            <!--    които да се изявяват все повече български таланти. Тя ще усмихне не само нас от-->
                            <!--    състав Masterpiece, но и многобройните ни почитатели – настоящи и бъдещи.-->
                            <!--</p>-->
                        </div>
                    </div>
                
                </div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->




        <modal id="modalTicket">
            <div class="content text-center animate__animated animate__fadeInUp">
                <div class="closeModal">
                    Затвори
                </div>
                <h3>Закупуване на билет</h3>
                <h3>Цена: <p id="eventPrice"></p></h3>
                <hr>
                
                <form method="post" action="{{ route('purchaseTicket') }}">
                    @csrf
                    <div class="field input-field mb-40">
                        <label for="name">Имена </label>
                        <input required  name="name" type="text"
                            placeholder="Въведетe двете си имена" class="input">
                    </div>
    
                    <div class="field input-field mb-40">
                        <label for="name">Телефонен номер</label>
                        <input required name="telephone" type="text" placeholder="Въведете телефонен номер" class="input">
                    </div>
                    <input id="userTicket" name="userTicket" type="hidden">
                    <hr>
                    <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__border"></span>
                        Парите от всеки билет ще бъдат дадени за благотворителна кауза.
                    </h6>
                    <hr>
                    <button type="submit" class="careox-btn bg-black"><span>Закупи билет</span></button>

                </form>
            </div>
        </modal>
    
        @if (session('purchaseSuccess'))
        <modal class="d-flex">
            <div class="content text-center">
                    <div onclick="this.closest('modal').classList.remove('d-flex')"
                    class="closeModal">
                    Затвори
                    </div>
                    <hr>
                    <h3>Успех!</h3>
                    <hr>
                    <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__border"></span>
                        Благодарим ви за закупения билет! 
                    </h6>
                    <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__border"></span>
                        Ще се свържем с вас в най-кратък срок.
                    </h6>
                    <hr>
                </div>
            </modal>
        @endif
    

        {{-- If fields are empty we display the same form with the --}}
        @if ($errors->any())
        <modal class="d-flex">
            <div class="content text-center">
                <div onclick="this.closest('modal').classList.remove('d-flex')"
                class="closeModal">
                    Затвори
                </div>
                <h3>Закупуване на билет</h3>
                <h3>Цена: <p id="eventPrice"></p></h3>
                <hr>
                
                <form method="post" action="{{ route('purchaseTicket') }}">
                    @csrf
                    <div class="field input-field mb-40">
                        <label for="name">Имена </label>
                        <input required name="name" type="text"
                            placeholder="Въведетe двете си имена" class="input">
                            @error('name')
                            <div class="btn btn-danger mt-20">{{ $message }}</div>
                            @enderror
                    </div>
    
                    <div class="field input-field mb-40">
                        <label for="telephone">Телефонен номер</label>
                        <input required name="telephone" type="text" placeholder="Въведете телефонен номер" class="input">
                        @error('telephone')
                        <div class="btn btn-danger mt-20">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__border"></span>
                        Парите от всеки билет ще бъдат дадени за благотворителна кауза.
                    </h6>
                    <hr>
                    <button type="submit" class="careox-btn bg-black"><span>Закупи билет</span></button>

                    <input id="userTicket" name="userTicket" type="hidden">
                </form>
            </div>
        </modal>
        @endif


        @include('main_pages_files.inc.footer')


    </div><!-- /.page-wrapper -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
            document.addEventListener("DOMContentLoaded", function () {
                swiperFancybox ()

                function swiperFancybox () {
            Fancybox.bind('[data-fancybox="gallery"]', {
            Thumbs: {
                type: "classic",
            },
            });

            var swiper = new Swiper(".swiper-objects", {
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
            // when window width is >= 992px 
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is >= 992px 
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            }
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }

        });
    }
            });


       
    </script>

</body>

</html>
