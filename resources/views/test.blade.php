<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!--====== Title ======-->
    <title> Infinity 21 Начална Страница </title>
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="/css/main_pages_css/main.css">
    <link rel="stylesheet" href="/css/main_pages_css/embed-youtube.css">

</head>

<body>
    

    @if (session('status'))
    <div class="succes_background">
        <div class="alert alert-success msg_success">
        {{ session('status') }}
        <button class="close_success_modal shadow">Затвори</button>
        </div>
    </div>

    <script>
        // This JS Code is here to close the modal by reloading the page
        // This modal appears when you make a registration and it redirects you here on the main page
        let successModal = document.querySelector('.close_success_modal');

        successModal.addEventListener('click', function () { 
        window.location.reload();
    
        });
        
        </script>

    @endif 

    <!--====== Preloader Start ======-->
    {{-- <div id="preloader">
        <div class="loader-cubes">
            <div class="loader-cube1 loader-cube"></div>
            <div class="loader-cube2 loader-cube"></div>
            <div class="loader-cube4 loader-cube"></div>
            <div class="loader-cube3 loader-cube"></div>
        </div>
    </div> --}}
    <!--====== Preloader End ======-->

    <!--====== Header Part Start ======-->
  @include('main-page-components.inc.header')
    <!--====== Header Part End ======-->

    <!--====== Banner Slider Start ======-->
    <section class="banner-slider-active">

        {{-- First Banner --}}
        <div class="single-banner banner-slider banner-slider-one first_slider">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                {{-- <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    IT Business Consulting
                                </span> --}}
                                <h1  class="title">
                                    LR Health & Beauty - Стандарт за Качество
                                </h1>
                                <p>
                                Искате ли да <b>Повишите Доходите</b> си Докато <b>Подобрявате Здравето Си</b>? <br>
                                Разберете Повече за <br> "Нашето Предложение" от бутона
                                </p>
                                <a id="button_one" class="main-btn rounded-btn icon-right small-size">
                                    Нашето Предложение <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" >
                            <img src="assets/img/pic-1.png.svg" alt="Бизнес дама банер">
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
     {{-- First Banner --}}


     {{-- Second Banner --}}
     {{-- ------------------- --}}
        <div class="single-banner banner-slider banner-slider-one second_slider">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                           
                                {{-- <h1 class="title">
                               
                                </h1> --}}
                                <p >
                                    Време за теб и Tвоето Семейство чрез Изграждането на <b>Надеждни</b> и 
                                    <b>Стабилни</b> доходи с развитие без риск и кредити! <br>
                                    Какво Означава Това и Как Се Постига?
                                </p>
                                <a id="button_two" class="main-btn rounded-btn icon-right small-size">
                                    Научи тук
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                       <div class="banner-img" >
                            {{-- <img class="second_banner_img banner_imgs" src="/images/main-page-images/second_business.jpg" alt="Снимка бизнесмен"> --}}
                        </div> 
                    </div>
                </div>
            </div>
          </div>
        </div>
        {{-- Second Banner --}}
     {{-- ------------------- --}}


        {{-- Third Banner --}}
    {{-- ------------------- --}}

        <div class="single-banner banner-slider banner-slider-one third_slider">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                           
                                <h1 class="title">
                                    MADE IN GERMANY
                                </h1>
                                <p >
                                    Изобилие от доказани продукти с безупречно качество, 
                                    директно от завод-производител! <br>
                                    Защо продуктите са толкова ефективни?
                                </p>
                                <a id="button_three" class="main-btn rounded-btn icon-right small-size">
                                    Научи тук
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" >
                            {{-- <img class="second_banner_img banner_imgs" src="/images/main-page-images/products_aloe.jpg" alt="Снимка бизнесмен"> --}}
                        </div> 
                    </div>
                </div>
            </div>
          </div>
        </div>
          {{-- Third Banner --}}
    {{-- ------------------- --}}


        {{-- Fourth Banner --}}
            {{-- ------------------- --}}

        <div class="single-banner banner-slider banner-slider-one fourth_slider">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                           
                                <h1 class="title">
                                Екипна Работа
                                </h1>
                                <p >
                                    Подкрепа и благоприятна почва за твоето развитие. Среда от успешни, отговорни и позитивни хора, които са готови да помагат!
                                </p>
                                <a id="button_four" class="main-btn rounded-btn icon-right small-size button_four">
                                    Научи тук
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" >
                            {{-- <img class="second_banner_img fourthIMG banner_imgs" src="/images/main-page-images/business_img.jpg" alt="Снимка екип"> --}}
                        </div> 
                    </div>
                </div>
            </div>
          </div>
        </div>
        {{-- Fourth Banner --}}
        {{-- ------------------- --}}

    </section>
    <!--====== Banner Slider End ======-->

    <!--====== Service Part Start ======-->
    <section class="service-section pb-30">
        <div class="section-title text-center mb-30">
            {{-- <span class="title-tag">SERVICES</span> --}}
            {{-- <h2 class="title">Партнирай си с Нас</h2> --}}
        </div>
         <div class="container">
            <div class="section-title text-center mb-30">
                {{-- <span class="title-tag">SERVICES</span> --}}
                <h2 class="title">Партнирай Си С Нас</h2>
            </div>
        
            <div class="row service-items flexed-videos">
                <div class="iframeDiv">
                    <h3 class="header_vids">Бизнес Предложение</h3>
                    <lite-youtube videoid="xvv_MoHAbXA" params="controls=1"></lite-youtube>
                </div>
                <div class="iframeDiv">
                    <h3 class="header_vids">Продуктово Видео</h3>
                    <lite-youtube videoid="kx3pYyeAoow" params="controls=1"></lite-youtube>
                </div>
          
        </div> 
    </section>
    <!--====== Service Part End ======-->

    <!--====== Feature Sectioin Start ======-->
    <section class="feature-section soft-blue-bg pb-20 pt-20">
        <div class="container">
            <div class="row justify-content-center align-items-center changed_flexed">
                
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-one wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="img-one">
                            <img src="/images/main-page-images/forLR_2.jpg" alt="ЛР Екипна 2">
                        </div>
                        <div class="img-two text-right wow fadeInUp"  data-wow-delay="0.5s">
                            <img style="width: 90%" src="/images/main-page-images/forLR_1.jfif" alt="ЛР Екипна 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-text-block mt-md-gap-60 wow fadeInRight"  data-wow-delay="0.4s">
                        <div class="section-title mb-20">
                            {{-- <span class="title-tag">CORE FEATURES</span> --}}
                            <h2 class="title">Кои Сме Ние?</h2>
                        </div>
                        {{-- <p class="big-text mb-30"> Нашите Знания  </p> --}}
                        <p>
                            Ние сме екип <b>Инфинити 21</b>. Като независим партньор на <b>LR Health & Beauty</b>, вече <b>10 години</b> държим всеки един кандидат да бъде консултиран професионално и да му се предостави информацията, от която има нужда, за да може осъзнато да вземе своето решение.
                        <br><br>

                        Отличаваме се със <b>сериозно отношение</b>, <b>ценности</b>, <b>сплотеност</b> и <b>грижа</b> към партньорите и клиентите си. Ежедневно консултираме десетки хора, които се ориентират към <b>по-здравословен начин на живот</b> или желаят да <b>повишат доходите си</b>, а защо не и двете.

                        <br><br>

                        Ставайки част от нашия екип, получавате достъп до <b>стойностна информация</b>, <b>образователни уебинари</b>, <b>събития</b> и <b>екипен сайт</b> с всичко необходимо за успешно партньорство.

                        <br><br>

                        Най-големият бонус е <b>личностното ви израстване</b>. Ще развиете <b>мениджърски</b> и <b>лидерски умения</b>, ще усетите <b>повече увереност</b> в себе си.

                        <br><br>

                        Изборът е ваш - дали ще използвате, или ще изпуснете този шанс да се присъедините към екип <b>Инфинити 21</b>.
                            
                            
                        </p>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Sectioin End ======-->

     <!--====== Team Section Start ======-->
     <section class="team-area pb-20 overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-60">
                {{-- <span class="title-tag">Екип Infinity 21 </span> --}}
                <h2 class="title"> Лидери и Мениджъри в <br> Екип Infinity 21</h2>
            </div>
        </div>

        <div class="container-fluid p-0 container_members">
            <div class="team-members">
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Венета и Севдалина Спасови, SOL.png" alt="Венета Спасова">
                        </div>
                        <div>
                            <h5 class="name">Венета и Севдалина Спасови</h5>
                            <span class="position">SOL</span>
                        </div>
                    </div>
                </div>

            
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Диана и Венцеслав Иванови OL.png" alt="Диана и Венцеслав Иванови">
                        </div>
                        <div>
                            <h5 class="name">Диана <br> и Венцеслав Иванови</h5>
                            <span class="position">OL</span>
                        </div>
                    </div>
                </div>

               

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Димитър Боровинов, TL.jpg" alt="Димитър Боровинов">
                        </div>
                        <div>
                            <h5 class="name">Димитър <br> Боровинов</h5>
                            <span class="position">TL</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Валентина Бадова, TL.jpg" alt="Валентина Бадова">
                        </div>
                        <div>
                            <h5 class="name">Валентина Бадова</h5>
                            <span class="position">TL</span>
                        </div>
                    </div>
                </div>
                
              
                  <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Нели Димитрова JTL .png" alt="Нели Димитрова">
                        </div>
                        <div class="">
                            <h5 class="name">Нели <br> Димитрова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                 <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/ГЕОРГИ БАРАКОВ - МЛАДШИ ЛИДЕР НА ГРУПА.jpg" alt="Георги Бараков">
                        </div>
                        <div class="">
                            <h5 class="name">Георги <br> Бараков</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/ВАСКА СЛАВКОВА - МЛАДШИ МЕНИДЖЪР.jpg" alt="Васка Славкова">
                        </div>
                        <div class="">
                            <h5 class="name">Васка <br> Славкова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/ДИАНА МИТОВА МЛАДШИ МЕНИДЖЪР.jpg" alt="Диана Митова">
                        </div>
                        <div class="">
                            <h5 class="name">Диана <br> Митова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                 <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/СЕВДА ИВАНОВА, МЛАДЖИ МЕНИДЖЪР.jpeg" alt="Севда Иванова">
                        </div>
                        <div class="">
                            <h5 class="name">Севда <br> Иванова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                 <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/НАДЯ ТАБАКОВА МЛАДШИ МЕНИДЖЪР.jpeg" alt="Надя Табакова">
                        </div>
                        <div class="">
                            <h5 class="name">Надя <br> Табакова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                  <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/АНЕТА ГИРОВА - МЛАДШИ МЕНИДЖЪР .jpg" alt="Анета Гирова">
                        </div>
                        <div class="">
                            <h5 class="name">Анета <br> Гирова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>

                  <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/ДИМИТРИНА ЦЕНЕВА - МЛАДШИ МЕНИДЖЪР.jpg" alt="Димитрина Ценева">
                        </div>
                        <div class="">
                            <h5 class="name">Димитрина <br> Ценева</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
                
                 <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/ЕЛКА ДАВИДКОВА - МЛАДШИ МЕНИДЖЪР.jpg" alt="Елка Давидкова">
                        </div>
                        <div class="">
                            <h5 class="name">Елка <br> Давидкова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>
               

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Емилия Иванова JTL.jpg" alt="Емилия Иванова">
                        </div>
                        <div class="">
                            <h5 class="name">Емилия <br> Иванова</h5>
                            <span class="position">JTL</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Йорданка Генова, М.jpg" alt="Йорданка Генова">
                        </div>
                        <div>
                            <h5 class="name">Йорданка <br>Генова </h5>
                            <span class="position">M</span>
                        </div>
                    </div>
                </div>
                
                 <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Мишо и Силвето, JM.jpg" alt="Мишо и Силвето">
                        </div>
                        <div>
                            <h5 class="name">Михаил Стоименов и <br>Силвия Иванова</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Георги Спасов, Лили Тилева, JM.png" alt="Георги Спасов и Лили Тилева">
                        </div>
                        <div>
                            <h5 class="name">Георги Спасов и Лили Тилева</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Гергана Ганева, JM .png" alt="Гергана Ганева">
                        </div>
                        <div>
                            <h5 class="name">Гергана <br> Ганева</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
    
                
                
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Антон Тодоров JM.jpg" alt="Антон Тодоров">
                        </div>
                        <div class="">
                            <h5 class="name">Антон <br> Тодоров</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Красимира Ангелова, JM .png" alt="Красимира Ангелова">
                        </div>
                        <div>
                            <h5 class="name">Красимира <br> Ангелова</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Христина Саръколева, JM .png" alt="Христина Саръколева">
                        </div>
                        <div>
                            <h5 class="name">Христина <br> Саръколева</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>


                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Валентина Ненова, JM.jpg" alt="Валентина Ненова">
                        </div>
                        <div>
                            <h5 class="name">Валентина<br>Ненова </h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                

               

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Нели Атанасова, JM.jpg" alt="Нели Атанасова">
                        </div>
                        <div>
                            <h5 class="name">Нели <br>Атанасова </h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
    
               
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Валентина Ганчева JM .png" alt="Валентина Ганчева">
                        </div>
                        <div>
                            <h5 class="name">Валентина <br> Ганчева</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
    
                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Таня Христова, JM.png" alt="Таня Христова">
                        </div>
                        <div>
                            <h5 class="name">Таня <br> Христова</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Ники Николова, JM.jfif" alt="Ники Николова">
                        </div>
                        <div>
                            <h5 class="name">Ники <br> Николова</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Георги Павлов, JM.jpg" alt="Георги Павлов">
                        </div>
                        <div>
                            <h5 class="name">Георги <br> Павлов</h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Дарина Тодорова, JM.jpg" alt="Дарина Тодорова">
                        </div>
                        <div>
                            <h5 class="name">Дарина<br>Тодорова </h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member shadow  mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="/images/leaders_images/Snejana-Peikovska-JM.jpeg" alt="Снежана Пейковска">
                        </div>
                        <div>
                            <h5 class="name">Снежана<br>Пейковска </h5>
                            <span class="position">JM</span>
                        </div>
                    </div>
                </div>
                
    
                
    
            </div>
        </div>

              
    </section>
    <!--====== Team Section Ends ======-->


    <section class="feature-section section-gap soft-blue-bg">
        <div class="container">
            <div id="forTheCompany" class="row justify-content-center align-items-center">
                
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-one wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="img-one">
                            <img src="/images/main-page-images/lr_company1.jpg" alt="Снимка ЛР">
                        </div>
                        <div class="img-two text-right wow fadeInUp"  data-wow-delay="0.5s">
                            <img style="width: 90%;" src="/images/main-page-images/lr_company2.jpg" alt="Снимка ЛР">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-text-block mt-md-gap-60 wow fadeInRight"  data-wow-delay="0.4s">
                        <div class="section-title mb-20">
                            {{-- <span class="title-tag">CORE FEATURES</span> --}}
                            <h2 class="title">За LR Health & Beauty</h2>
                        </div>
                        {{-- <p class="big-text mb-30"> Нашите Знания  </p> --}}
                        <p>
                            LR Health & Beauty е водеща компания в сферата на здравето и красотата,
                             предлагаща висококачествени продукти за грижа за кожата, 
                             здравословен начин на живот и парфюмерия. Фирмата е 
                             известна със своите иновативни формули, базирани на 
                             научни изследвания и натурални съставки. <br><br> Освен с 
                             продуктите си, LR предоставя и възможност за допълнителен 
                             доход чрез своя бизнес модел. Всеки може да стане част от
                              LR като независим партньор и да изгради собствен бизнес,
                               предлагащ продуктите на компанията. Това е чудесен начин 
                               да се развива личностно и професионално, като се печели 
                               допълнителен доход и се работи с гъвкаво работно време.
                            
                        </p>
               
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== Counter Part Start ======-->
    <section class="counter-section secondary-bg pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="counter-box color-1">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/world.svg" alt="Държави">
                        </div>
                        <span class="counter">+32</span>
                        <h6 class="title">Държави</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-box color-2 mt-40 mb-xs-gap-40">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/business-growth.svg" alt="Години">
                        </div>
                        <span class="counter">+39</span>
                        <h6 class="title">Години Успешно Развитие</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-box color-3">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/pills-bottle.svg" alt="Продукти за Красота">
                        </div>
                        <span class="counter">300+</span>
                        <h6 class="title">Продукти за Красота</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="counter-box mt-40">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/aloe-vera.svg" alt="Алое Вера">
                        </div>
                        <span class="counter">90% +</span>
                        <h6 class="title">Съдържание на Алое</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Part End ======-->

    <!--====== Catalog Section Starts ======-->

     <section>

        <div class="container_catalog shadow">
            
            <p class="catalog_header">Искате да станете част от бизнеса с LR ? <br> Ето как</p>
            <p class="catalog_text">
            За да стартирате бизнеса си в LR е нужно да се регистрирате като сътрудник на компанияита.
            <br>
            За да станете сътрудник на LR Health & Beauty, е 
            необходимо да попълните кратък регистрационен формуляр.
             След като го подадете, наш представител ще се 
             свърже с вас, за да ви помогне да завършите 
             процеса и да станете част от LR и екипа на Infinity 21.
            </p>
    
            <hr>

            <a class="download_a" href="/register">Към Формуляра</a>


    
    
        </section>
    
    <!--====== Catalog Section Ends ======-->


    <!--====== Testimonials Section Start ======-->
    <section class="testimonials-section section-gap soft-blue-bg">
        <div class="container">
            <div class="section-title text-center mb-20">
                {{-- <span class="title-tag">Client Testimonials</span> --}}
                <h2 class="title">Какво Казват Другите За Нас? </h2>
            </div>

            <div class="row">
                {{-- <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>Обожавам добавките и продуктите на LR. От над 10г. се занимавам със спорт и съм пробвал най-различни продукти,
                            тези определено са най-добрите.
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/lyubo.png" alt="Image">
                            </div>
                            <div class="desc">
                                <h6>Любомир Стоянов</h6>
                                <span class="position">Програмист</span>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <hr class="hr_testimonials">

                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>Личният опит е най-добрият съветник и най-мощното доказателство,
                             че нещо се е случило и проработило! 
                             С ръка на сърцето и от личен опит мога да заявя,
                              че благодарение на немските продукти на LR моите
                               деца вече почти не боледуват от вируси, настинки,
                                грип и всичко, което се "развъжда" обичайно по
                                 детските градини и училища. Доверих се на природните 
                                 продукти на LR - коластра, витамини и алое, и вече съм
                                  една спокойна майка, защото здравето на моите деца е 
                                  приоритет!
                                   И го поддържам точно с превенция с тези страхотни продукти!
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/Valentina Nenova.jfif" alt="Валентина Ненова">
                            </div>
                            <div class="desc">
                                <h6>Валентина Ненова</h6>
                                <span class="position">PR Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="hr_testimonials">


                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>
                        В няколкото години, в които работех за фондация "За нашите деца" 
                        можах да видя от първа ръка колко безценна и последователна е
                        подкрепата на Глобал кидс фънд на LR. Благодарение на 
                        набраните средства от Вас - съдружниците на LR в 
                        България, както и с подкрепата на самата компания, българската 
                        фондация е истински пристан на надеждата за деца, разделени 
                        временно или изоставени от своите родители.
                        Да се променят толкова човешки животи е възможно, 
                        бладарение на всеки закупил продукти със знака на Глобал
                        кидс фънд или направил дарение към организацията. 
                        Тази подкрепа се координира и умножава благодарение на компании
                        като LR, които имат безспорно стратегическото виждане 
                        и грижа към важни проблеми за обществото на всяка партнираща държава.
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/Nadya Tabakova.jpg" alt="Надя Табакова">
                            </div>
                            <div class="desc">
                                <h6>Надя Табакова</h6>
                                <span class="position">Фондация за Нашите Деца</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>
                        Продуктите на немската компания LR са абсолютна необходимост
                        за всеки, който уважава себе си и се грижи за своето здраве, 
                        красота и самочувствие. Безкомпромисни като качество,
                         натурални, с безброй полезни съставки, сертифицирано
                          признати в десетки страни по света, тези продукти 
                          могат да осигурят вашето щастие! Защото здравият,
                           поддържан и добре изглеждащ човек е това - щастлив човек!
                            И именно продуктите на LR в десетките им направления 
                            доказано могат да ви съдействат да сте щастливи!
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/Sevdalina Spasova.jfif" alt="Севдалина Спасова">
                            </div>
                            <div class="desc">
                                <h6>Севдалина Спасова</h6>
                                <span class="position">Музикант</span>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </section>
    <!--====== Testimonials Section Ends ======-->

       <!--====== Catalog Section Starts ======-->

       <section>

        <div class="container_catalog shadow">
            <p class="catalog_header">КАТАЛОЗИ НА LR И ПРОДУКТОВА КНИГА</p>
            <p class="catalog_text">Ставайки сътрудник на компания LR получавате постоянна отстъпка от около 30% от каталожната цена. 
            <br>За сътруднически цени вижте "Ценоразписа за сътрудници", а за подробна информация за продуктите "Продуктова книга на LR".</p>
    
            <div class="container_pdfs">
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">LR - Основен Каталог </h3>
                <img class="img_catalogs" src="/images/main-page-images/main-catalog.jpg" alt="Колекция 2024">
                    <a target="_blank" class="download_a" href="https://media.lrworld.com/Collection/BG_bg/index.html">Към PDF Файла</a>
                </div>
        
                <hr class="hr_pdfs">
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">Цени за Партньори</h3>
                    <img style="border-radius: 25px;" class="img_catalogs" src="/images/main-page-images/lr-partners.jpg" alt="Ценоразпис 2024">
                    <a target="_blank" class="download_a" href="https://drive.google.com/file/d/1HwkObdm25vd5fxKho-jqa78c8LALIil9/view">Към PDF Файла</a>
                </div>
        
                <hr class="hr_pdfs">
        
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">LR - Продуктова Книга</h3>
                    <img class="img_catalogs" src="/images/main-page-images/product-book.jpg" alt="Продуктова книга 2024">
                    <a target="_blank" class="download_a" href="https://drive.google.com/file/d/1SKbnrBqZiowuA4GuRIr8DRxFKKpRsSCj/view?usp=drive_link">Към PDF Файла</a>
                </div>

               </div>

            </div>
    
    
        </section>
    
    <!--====== Catalog Section Ends ======-->

    <hr>

     <!--====== Catalog Section Starts ======-->

     <section>

        <div class="container_catalog shadow">
            <p class="catalog_header">Документи за Старт</p>
            <p class="catalog_text">
                За да се регистрирате в LR, е необходимо да направите първа поръчка на продукти по ваш избор. <br>
  
                Обърнете се към лицето, което ви предостави този сайт, за да ви помогне с регистрацията! <br>
                Можете да разгледате нашите стартови пакети от менюто "Пакети".
    
            </p>
    
            <div class="container_pdfs">
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">Пакети</h3>
                    <img class="img_catalogs" src="/images/main-page-images/catalog-lr.png" alt="Колекция 2024">
                    <a target="_blank" class="download_a" href="https://drive.google.com/file/d/1j4g_gIp7rEYdiL9OZhO0HLeqhxrgQewg/view">Към PDF Файла</a>
                </div>
        
                <hr class="hr_pdfs">
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">Абонаментна Програма</h3>
                    <img class="img_catalogs" src="/images/main-page-images/subscribtion-lr.jpg" alt="Ценоразпис 2024">
                    <a target="_blank" class="download_a" href="https://drive.google.com/file/d/1w2YOFhf6FizojVRNs7vSZUhRX0aTn-il/view">Към PDF Файла</a>
                </div>
        
                <hr class="hr_pdfs">
        
        
                <div class="pdf_container">
                    <h3 class="main_header_pdfs">Молба За Сътрудничество </h3>
                    <img class="img_catalogs" src="/images/main-page-images/paperwork.svg" alt="Продуктова книга 2024">
                    <a target="_blank" class="download_a" href="https://drive.google.com/file/d/1j4g_gIp7rEYdiL9OZhO0HLeqhxrgQewg/view">Към PDF Файла</a>
                </div>

               </div>

            </div>
        </section>
    <!--====== Catalog Section Ends ======-->

    {{-----------------------------------------------}}
    {{-----------------------------------------------}}
    {{--------Section with All Modals---------------}}

    <div class="background_modals">

        <div class="modal_one">
            <lite-youtube videoid="xvv_MoHAbXA" params="controls=1"></lite-youtube>
            <div class="div_close">
                <img class="closeX" src="/images/main-page-images/closeX.png" alt="Затвори">
            </div>
            <b style="font-size: 20px;">21 причини, защо LR и екип Инфинити 21?</b><br><br>
    
             <span class="text_first_modal"><b>1.</b>Възможност да изградите свой собствен бизнес, но с подкрепата на компанията.</span><br>
            <span class="text_first_modal"> <b>2.</b>Не се изисква опит, обаче има безплатно обучение, за да се запознаете с продуктите и с маркетинг плана.</span><br>
            <span class="text_first_modal"> <b>3.</b>Всички имаме равен старт за успех.</span><br>
            <span class="text_first_modal"><b>4.</b>Започваме без капиталовложения и следователно няма бизнес риск. (дори сме на печалба със самият старт, защото купуваме на заводски цени и получаваме още безплатни материали).</span><br>
             <span class="text_first_modal"><b>5.</b>Гъвкаво работно време, което може да се самоопределя и съчетава с основната си работа.</span><br>
             <span class="text_first_modal"><b>6.</b>Възможност да работите във вашето си пространство (от вкъщи, от близкото кафе и др.).</span><br>
             <span class="text_first_modal"><b>7.</b>Възможност за "бързи пари" направени чрез директни продажби на каталожна цена.</span><br>
             <span class="text_first_modal"><b>8.</b> Месечен бонус на база реални резултати всеки месец (бонусите се изплащат на всяко 15 число от месеца по банков път на база резултатите/оборота от предходния месец).</span><br>
             <span class="text_first_modal"><b>9.</b>Образователни пътувания в България и в чужбина - тиймбилдинги и академии с екип Инфинити 21 и LR.</span><br>
            <span class="text_first_modal"> <b>10.</b>Спечелени пътувания България и в чужбина.</span><br>
            <span class="text_first_modal"> <b>11.</b>Доставка на продукти навсякъде в страната в рамките на 3 до 5 работни дни.</span><br>
             <span class="text_first_modal"><b>12.</b>Възможност за двойки да участват заедно и да се развиват заедно за общо бъдеще.</span><br>
             <span class="text_first_modal"><b>13.</b>Правилата са еднакви за ВСИЧКИ.</span><br>
             <span class="text_first_modal"><b>14.</b>Вие не сте сами. Една голяма мултинационална, много успешна, добре установена в областта и постоянно развиваща се компания подкрепя Вашите усилия (участвате в успешен екип, пълен с успешни хора).</span><br>
             <span class="text_first_modal"><b>15.</b>Доходите, произтичащи от бонусите, са за цял живот. Разполагате с пасивен доход, който можете да развивате без ограничения. Няма таван.</span><br>
             <span class="text_first_modal"><b>16.</b>Достигайки определено ниво, доходът ви се унаследява.</span><br>
             <span class="text_first_modal"><b>17.</b>Приходите се предават на семейството ви чрез договор (имате клауза за унаследяване на доходите - чрез двуезичен договор).</span><br>
             <span class="text_first_modal"><b>18.</b>Компанията постоянно инвестира в научни изследвания за нови продукти и технологии. LR е собственик на една от най-новите и модерни микролаборатории не само в Германия, но и в Европа.</span><br>
             <span class="text_first_modal"><b>19.</b>Произвежда сертифицирани продукти от строги, независими институти (продуктите са бързо-ликвидни и са в сферата на най-актуалните и търсени от почти всеки човек и семейство продукти).</span><br>
             <span class="text_first_modal"><b>20.</b>Уникална концепция за коли (VW, Mercedes, Porsche - носеща рекорд на Гинес от 2008 година).</span><br>
            <span class="text_first_modal"> <b>21.</b>ГАРАНТИРАН МИНИМАЛЕН ДОХОД за период от една година при достигане на определен оборот (FAST TRACK програма) (* попитайте вашият спонсор за повече информация относно програмата).</span><br>
        </div>

        <div class="modal_two">
            <div class="div_close">
                <img class="closeX" src="/images/main-page-images/closeX.png" alt="Затвори">
            </div>

            <b class="text_first_modal">Ако не ти харесва идеята да работиш за някой друг и вярваш, че заслужаваш повече отколкото ти плащат, тогава начинът да излезеш от ситуацията е, като се присъединиш към LR, изграждайки нещо свое. Още един аргумент за това е дългогодишното стабилно развитие на компанията (39 години на пазара) по стълбицата само напред и нагоре.</b><br><br>

            <b class="text_first_modal">Чрез маркетинг плана на LR се скъсява пътя на даден продукт до крайния потребител. В КРАЙНА СМЕТКА ВСИЧКИ СМЕ ПОТРЕБИТЕЛИ И КОНСУМИРАМЕ ТАКИВА ПРОДУКТИ. ЗАЩО ДА НЕ СЕ ВЪЗПОЛЗВАМЕ И ОТ ВЪЗМОЖНОСТТА ДА ПЕЧЕЛИМ ОТ СВОЯ СИГУРЕН РАЗХОД? ПАРАДОКСАЛНО ЗВУЧИ, НО НЕКА ОБЯСНИМ.</b><br><br>

            <span class="text_people">
                Все повече хора предпочитат късия път на продукта – 
                от завода производител до крайния потребител,
                 тъй като при традиционните продажби, продуктът
                  минава от производителя през поредица дистрибутори, 
                  търговци на едро и дребно, преди да стигне до потребителя. Всеки от тези посредници взима своя дял от печалбата. До 90% от цената, която плащате за дадена стока, е предназначена за посредници, реклама, транспорт и други непроизводствени разходи.<br><br>

            </span>

            <b class="text_people">Предлагаме ви сами да сте шефове в уюта на собствения си дом или извън него да представяте тези изключителни продукти, да се забавлявате и да печелите.</b><br><br>

            <b class="text_people">Разполагаме със система за обучение, с чиято подкрепа можете и вие да постигнете желаните резултати и да подобрите начина си на живот в посоката, която ви харесва.</b><br><br>

            <b class="text_people">Избирайки да си партнирате с нас, вие избирате професионализъм и отдаденост. Смятаме, че тази дейност не е за всеки, но тези от вас, които положат нужното старание и са решени да се научат, ще постигнат желания резултат.</b><br><br>

            <b class="text_people">Важно е да се знае, че парите се разпределят справедливо и всеки има възможност да изкара повече дори и от някой, който е започнал бизнеса преди години!!!</b><br><br>

            <b class="text_first_modal">Начини за печалба от LR?</b><br><br>

            <b class="text_first_modal">Вариант 1: ДОХОДИ ТУК И СЕГА</b><br>

            <span class="text_people">                
                Препоръчвай продуктите като партньор на LR 
                и печели пари от надценка. Печели пари, като
                 взимаш продуктите директно от LR на заводски
                  цени и ги продаваш на каталожни цени с марж
                   между 30 и 50%. Много често компанията пуска
                    промоции от типа: Вземи 3 бр, а плати само 2 бр. 
                    Това увеличава вашата печалба до -50%, а понякога 
                    и повече. Непрекъснато има уебинари, които помагат
                     на партньорите да получават нови знания за продуктите
                      и да стават все по-успешни консултанти. 
                      Това увеличава и тяхната клиентска база.<br><br>

            </span>

            <b class="text_first_modal">Вариант 2: ДОХОДИ С РАЗВИТИЕ И ИЗГРАЖДАНЕ НА ПАСИВЕН ДОХОД</b><br>
            <span class="text_people">
                Този вариант е свързан с изграждането на екип. 
                Освен споделянето на продукти, тук споделяте и за
                 възможностите за развитие с LR и давате достъп
                  до завода и на други хора. Можете да се
                   развивате както в цяла България, така и в
                    32 държави и да имате огромен, интернационален екип, 
                    който непрекъснато расте. Доходите зависят от личните
                     постижения и от времето, което даден сътрудник отделя
                      за това да развива и обучава екипа си, както и себе си.
                       В началото се влагат повече усилия и се изкарват по-малки доходи,
                        но с времето това се обръща. Заслужава си човек да го направи!

            </span>
        </div>

        <div class="modal_three">
            <div class="div_close">
                <img class="closeX" src="/images/main-page-images/closeX.png" alt="Затвори">
            </div>

            <span class="text_people">                
                Компания LR разработва <b>висококачествени, иновативни продукти за здраве и красота</b> на базата на 
                най-новите постижения на науката и ги произвеждa с най-добрите натурални съставки. <br><br>

                 <b>Висококачествените продукти на LR</b>, с малки изключения, се произвеждат 
                 в Германия при спазване на най-високи стандарти за
                  качество и без тестове върху животни. 
                  <b>Качеството на продуктите</b>  се потвърждава редовно от 
                  реномирани независими институти за тестване, в т.ч. SGS 
                  INSTITUT FRESENIUS и IASC (Международен научен съвет за алое). 
                  Компанията постоянно <b>инвестира в научни изследвания</b> за нови
                   продукти и технологии. LR e собственик на една от най-новите
                    и модерни микролаборатории не само в Германия, но и в Европа.
    
            </span>
           
        </div>

        <div class="modal_four">
            <div class="div_close">
                <img class="closeX" src="/images/main-page-images/closeX.png" alt="Затвори">
            </div>

            <lite-youtube videoid="xvv_MoHAbXA" params="controls=1"></lite-youtube>

            <span class="text_people">
                Като независим партньор на <b>LR Health & Beauty</b>, ние от <b>Инфинити 21</b>
                 държим всеки един клиент да бъде консултиран 
                 професионално и да му се предостави информацията, 
                 от която има нужда. Отличаваме се със <b>сериозно 
                    отношение</b> и <b>внимание към детайла</b>. 
                    Ежедневно консултираме десетки хора, които се 
                    ориентират към по-здравословния начин на живот 
                    или желаят да повишат доходите си.

            </span>

            <br><br>

            <span class="text_people">
                Освен в България, развиваме този бизнес международно и бихме могли да работим заедно, ако се намирате в една от тези държави:
            </span> 

            <br><br>
    
            <span class="text_people">
                Великобритания, Германия, Италия, Испания, Турция, Русия, Украйна, Румъния, Гърция, Кипър, Албания, Австрия, Белгия, Чехия, Дания, Финландия, Франция, Унгария, Казакстан, Беларус, Лихтенщайн, Люксембург, Холандия, Норвегия, Полша, Португалия, Швеция, Швейцария, Словакия.

            </span>

            <br><br>
            
            <span class="text_first_modal"> Ставайки част от нашия екип, вие получавате:  </span>

            <br><br>
            
            <b>Партньорство с НЕМСКИ ЗАВОД ПРОИЗВОДИТЕЛ - ЛИДЕР</b> в сферата на здравето и красотата,<br>
            <b>ЛИЧЕН ОНЛАЙН ОФИС, профил и страница</b>,<br>
            <b>ДОСТЪП ДО ЕКИПЕН САЙТ</b>,<br>
            <b>ОПИТ И ПОДКРЕПА ОТ ПРОФЕСИОНАЛИСТИ</b>,<br>
            <b>ОНЛАЙН МАГАЗИН</b> /без необходимостта да държите продукти на склад/,<br>
            <b>КАЧЕСТВЕНИ ПРОДУКТИ ЗА КОНСУМАЦИЯ</b> <b>MADE IN GERMANY</b>,<br>
            <b>CALL ЦЕНТРОВЕ</b> в 32 държави и възможност за развитие на дейността в тях,<br>
            <b>ОРГАНИЗИРАНА ЛОГИСТИКА</b>,<br>
            <b>ОБСЛУЖВАНЕ И ПРЕДСТАВИТЕЛСТВО В БЪЛГАРИЯ</b>, което улеснява работата на всеки един партньор,<br>
            <b>БЕЗ ИЗИСКВАНИЯ ЗА ЗАДЪЛЖИТЕЛНО ПОТРЕБЛЕНИЕ ИЛИ ПРОДАЖБИ</b>,<br>
            <b>ОПТИМАЛНА ОРГАНИЗАЦИЯ</b> между работен процес и свободно време,<br>
            <b>УНАСЛЕДЯВАНЕ НА ДОХОДА</b> при достигане до лидерско ниво,<br>
            <b>АВТОМОБИЛНА КОНЦЕПЦИЯ</b> – възможност да карате <b>чисто нов автомобил</b> в зависимост от постигнатите резултати: WV Polo, Mercedes, Porsche (при по-голямо развитие).
            
            <br><br>
            
            Тази възможност е <b>достъпна за всеки</b> и не е нужно да имате опит или квалификация. 
            Необходимото обучение, информация и подкрепа се предлагат от нас и 
            от компанията под формата на организирани събития за представяне на 
            продуктите и бизнес възможностите, видео презентации, рекламни материали, брошури.
            

        </div>


    </div>
   

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->

    <!--====== Footer PART START ======-->
    @include('main-page-components.inc.footer')
    <!--====== Footer PART ENDS ======-->

     <script src="/javascript/main-pages-js/modals.js"></script>
     <script src="/javascript/main-pages-js/embed-youtube.js"></script>

</body>

</html>
