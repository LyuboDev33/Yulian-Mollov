<x-app-layout>

    @section('SEO')
        <title>За д-р Юлиян Моллов | Медицинска практика, ERC обучения и музика</title>
        <meta name="description"
            content="Научете повече за д-р Юлиян Моллов – специалист по анестезиология и интензивно лечение, инструктор към ERC, преподавател по първа помощ и музикален творец.">
        <meta name="keywords"
            content="д-р Юлиян Моллов, анестезиология, интензивно лечение, ERC, първа помощ, кардиопулмонална ресусцитация, обучение, медицина, музика">
        <meta name="author" content="Д-р Юлиян Моллов">
        <meta name="robots" content="index,follow,max-image-preview:large">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:type" content="profile">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:site_name" content="Д-р Юлиян Моллов">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="За д-р Юлиян Моллов | Медицина, обучения и музика">
        <meta property="og:description"
            content="Международна медицинска практика, преподавателска дейност и обучения по първа помощ като инструктор към ERC.">
        <meta property="og:image" content="{{ asset('assets/images/facebook-seo.png') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="За д-р Юлиян Моллов">
        <meta name="twitter:description" content="Медицинска практика, ERC обучения по първа помощ и музикална дейност.">
        <meta name="twitter:image" content="{{ asset('assets/images/facebook-seo.png') }}">
    @endsection

    <main>



        <section class="about-one about-one--about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div>
                            <div class="about-one__image__one">
                                <img src="/assets/images/26293e19-4c8f-44d9-834a-83bff7e8fa28.jpg" alt="Задружност">
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
                style="background-image: url(/assets/images/mollov-about.webp)">
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




        <!-- Biography layout -->
        <style>
            .doctor-bio {
                --bio-accent: #f5a623;
                --bio-ink: #182b36;
                --bio-muted: #61717b;
            }

            .doctor-bio .bio-section {
                padding: 85px 0;
            }

            .doctor-bio .bio-section--soft {
                background: #f6f8fa;
            }

            .doctor-bio .bio-eyebrow {
                display: block;
                color: #bd7612;
                font-size: 13px;
                font-weight: 800;
                letter-spacing: 2px;
                text-transform: uppercase;
                margin-bottom: 14px;
            }

            .doctor-bio .bio-heading {
                color: var(--bio-ink);
                font-size: clamp(29px, 3.2vw, 46px);
                line-height: 1.17;
                font-weight: 800;
                margin-bottom: 25px;
            }

            .doctor-bio .bio-subheading {
                font-size: 23px;
                font-weight: 750;
                color: var(--bio-ink);
                margin-bottom: 18px;
            }

            .doctor-bio .bio-text {
                font-size: 17px;
                line-height: 1.9;
                color: var(--bio-muted);
                margin-bottom: 17px;
            }

            .doctor-bio .bio-card {
                background: #fff;
                border: 1px solid #e8edf0;
                border-radius: 18px;
                padding: 32px;
                height: 100%;
                box-shadow: 0 12px 35px rgba(20, 42, 57, .045);
            }

            .doctor-bio .bio-card--accent {
                border-top: 5px solid var(--bio-accent);
            }

            .doctor-bio .bio-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 54px;
                height: 54px;
                background: #fff4df;
                color: #a96700;
                border-radius: 15px;
                font-size: 24px;
                margin-bottom: 24px;
            }

            .doctor-bio .bio-intro {
                background: linear-gradient(125deg, #152e3a, #244d59);
                border-radius: 24px;
                padding: clamp(30px, 5vw, 65px);
                color: #fff;
            }

            .doctor-bio .bio-intro .bio-heading,
            .doctor-bio .bio-intro .bio-text {
                color: #fff;
            }

            .doctor-bio .bio-intro .bio-text {
                opacity: .86;
            }

            .doctor-bio .bio-tag {
                display: inline-block;
                background: rgba(255, 255, 255, .12);
                color: #fff;
                border: 1px solid rgba(255, 255, 255, .18);
                padding: 8px 14px;
                border-radius: 50px;
                margin: 5px 6px 5px 0;
                font-size: 13px;
            }

            .doctor-bio .bio-stat {
                border-left: 4px solid var(--bio-accent);
                padding-left: 20px;
                margin-top: 25px;
            }

            .doctor-bio .bio-stat strong {
                display: block;
                font-size: 24px;
                color: var(--bio-ink);
            }

            .doctor-bio .bio-list {
                padding-left: 20px;
                color: var(--bio-muted);
                line-height: 1.9;
                font-size: 16px;
            }

            .doctor-bio .bio-list li {
                margin-bottom: 8px;
            }

            .doctor-bio .bio-photo {
                width: 100%;
                aspect-ratio: 4/3;
                object-fit: cover;
                border-radius: 15px;
            }

            .doctor-bio .bio-caption {
                color: var(--bio-muted);
                font-size: 14px;
                margin-top: 12px;
            }

            .doctor-bio .bio-song {
                background: #fff;
                border-radius: 22px;
                padding: clamp(24px, 4vw, 45px);
                box-shadow: 0 12px 40px rgba(20, 42, 57, .07);
            }

            .doctor-bio .bio-song-meta {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .doctor-bio .bio-song-meta li {
                padding: 9px 0;
                border-bottom: 1px solid #edf0f2;
                color: var(--bio-muted);
            }

            .doctor-bio .bio-song-meta strong {
                color: var(--bio-ink);
            }

            .doctor-bio .bio-video {
                position: relative;
                border-radius: 15px;
                overflow: hidden;
                aspect-ratio: 16/9;
                background: linear-gradient(135deg, #182f3b, #355c66);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 25px;
                text-align: center;
                color: #fff;
            }

            .doctor-bio .bio-video i {
                font-size: 55px;
                margin-bottom: 14px;
                color: #ffb43e;
            }

            .doctor-bio .bio-video a {
                color: #fff;
                font-weight: 700;
                text-decoration: underline;
            }

            @media(max-width:767px) {
                .doctor-bio .bio-section {
                    padding: 55px 0;
                }

                .doctor-bio .bio-card {
                    padding: 24px;
                }
            }
        </style>

        <div class="doctor-bio">
            <section class="bio-section" id="biography">
                <div class="container">
                    <div class="bio-intro">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <span class="bio-eyebrow" style="color:#ffc76d;">ЗА МЕН</span>
                                <h1 class="bio-heading">Д-р Юлиян Моллов</h1>
                                <p style="font-size:21px;font-weight:600;color:#fff;">Специалист по анестезиология и
                                    интензивно лечение</p>
                                <p class="bio-text">Д-р Юлиян Моллов е лекар – специалист по анестезиология, реанимация
                                    и интензивно лечение, с дългогодишен международен професионален опит в България,
                                    Турция, Германия и Обединеното кралство.</p>
                                <p class="bio-text">Професионалната му дейност обединява болнична медицинска практика,
                                    медицински консултации, съдействие за лечение в чужбина, домашни медицински
                                    посещения и преподавателска дейност.</p>
                                <p class="bio-text">Особено важно място в професионалното му развитие заема обучението
                                    по първа помощ и животоспасяващи мероприятия, насочено както към медицински
                                    специалисти, така и към широката общественост.</p>
                            </div>
                            <div class="col-lg-4">
                                <span class="bio-tag">Международна медицинска практика</span>
                                <span class="bio-tag">Медицински консултации</span>
                                <span class="bio-tag">Домашни медицински посещения</span>
                                <span class="bio-tag">Преподавателска дейност</span>
                                <span class="bio-tag">Инструктор към ERC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bio-section bio-section--soft" id="erc-training">
                <div class="container">
                    <div class="row align-items-end g-4 mb-4">
                        <div class="col-lg-8">
                            <span class="bio-eyebrow">ОСНОВЕН ПРОФЕСИОНАЛЕН АКЦЕНТ</span>
                            <h2 class="bio-heading">Преподавателска и обучителна дейност</h2>
                            <p class="bio-text">Едно от основните направления в професионалната дейност на д-р Моллов е
                                обучението по първа долекарска помощ, кардиопулмонална ресусцитация и животоспасяващи
                                мероприятия.</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="bio-card bio-card--accent">
                                <div class="bio-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                                <h3 class="bio-subheading">Инструктор към ERC</h3>
                                <p class="bio-text">European Resuscitation Council – Европейски ресусцитационен съвет.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-people-group"></i></div>
                                <h3 class="bio-subheading">Обучения за широката общественост</h3>
                                <p class="bio-text">Като инструктор към ERC д-р Моллов развива преподавателска дейност,
                                    насочена към практически умения за правилна и навременна реакция при спешни и
                                    животозастрашаващи състояния.</p>
                                <p class="bio-text">Провежда обучения за ученици, учители, родители, служители на
                                    образователни институции, държавни и частни организации, професионални групи и
                                    граждани без медицинско образование.</p>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-user-doctor"></i></div>
                                <h3 class="bio-subheading">Специализирани обучения</h3>
                                <p class="bio-text">Професионалната му квалификация и интереси обхващат специализирани
                                    обучения за медицински специалисти, включително:</p>
                                <ul class="bio-list">
                                    <li>Advanced Life Support (ALS)</li>
                                    <li>European Paediatric Advanced Life Support (EPALS)</li>
                                    <li>Paediatric Advanced Life Support (PALS)</li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="row g-4 mt-2">
                        <div class="col-lg-6">
                            <div class="bio-stat"><strong>Практически опит</strong>
                                <p class="bio-text">Обучения и инициативи по първа помощ в различни градове и училища,
                                    включително в Несебър и 64. ОУ „Цар Симеон Велики“ в София.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bio-stat"><strong>Мисия</strong>
                                <p class="bio-text">Да развива и разширява преподавателската си дейност, предоставяйки
                                    достъпно, качествено и практически ориентирано обучение по първа помощ в цяла
                                    България.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bio-section" id="medical-background">
                <div class="container">
                    <span class="bio-eyebrow">ПРОФЕСИОНАЛЕН ПЪТ</span>
                    <h2 class="bio-heading">Образование и международен опит</h2>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                                <h3 class="bio-subheading">Медицинско образование и квалификация</h3>
                                <p class="bio-text">Д-р Моллов е роден в град Силистра, където завършва средното си
                                    образование с пълно отличие. През 2011 г. завършва медицина в Медицинския факултет
                                    „Джеррахпаша“ в Истанбул, Република Турция, след което придобива специалност по
                                    анестезиология и интензивно лечение в България.</p>
                                <p class="bio-text"><strong>Езици:</strong> турски, английски, немски и руски.</p>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-globe"></i></div>
                                <h3 class="bio-subheading">Международен професионален опит</h3>
                                <p class="bio-text">Д-р Моллов притежава богат клиничен опит в лечебни заведения в
                                    България, Турция, Германия и Обединеното кралство. Работил е в УМБАЛ „Аджибадем Сити
                                    Клиник – Токуда“, УМБАЛ „Св. Анна“ – София, както и в болници в Лондон, Нотингам,
                                    Лийдс и Уелс.</p>
                                <p class="bio-text">Практиката му включва анестезиологично обезпечаване на оперативни
                                    интервенции, реанимация, интензивно лечение и грижи за пациенти в критично
                                    състояние.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bio-section bio-section--soft" id="medical-services">
                <div class="container">
                    <span class="bio-eyebrow">МЕДИЦИНСКА ПРАКТИКА</span>
                    <h2 class="bio-heading">Медицински услуги и консултации</h2>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-house-medical"></i></div>
                                <h3 class="bio-subheading">Домашни медицински посещения</h3>
                                <p class="bio-text">Д-р Моллов предоставя медицински консултации, домашни медицински
                                    посещения, диагностични и терапевтични манипулации, инфузионна терапия и
                                    индивидуални медицински грижи за пациенти в София и околностите.</p>
                                <p class="bio-text">Дейността му е насочена към осигуряване на професионална медицинска
                                    помощ в домашна среда, съобразена с индивидуалните потребности и състоянието на
                                    пациента.</p>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article class="bio-card">
                                <div class="bio-icon"><i class="fa-solid fa-stethoscope"></i></div>
                                <h3 class="bio-subheading">Съдействие за лечение в Турция</h3>
                                <p class="bio-text">Благодарение на медицинското си образование в Турция, международния
                                    професионален опит и установените контакти с водещи турски лечебни заведения, д-р
                                    Моллов оказва съдействие на пациенти за специализирани медицински консултации, второ
                                    медицинско мнение, диагностика и лечение в Република Турция.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bio-section" id="music">
                <div class="container">
                    <span class="bio-eyebrow">ВТОРО ПРИЗВАНИЕ</span>
                    <h2 class="bio-heading">Музика и артистична дейност</h2>
                    <div class="row g-4 align-items-start">
                        <div class="col-lg-7">
                            <p class="bio-text">Наред с медицината, музиката заема изключително важно място в живота на
                                д-р Юлиян Моллов. Той се занимава професионално с пиано, естрадно, оперно и джаз пеене,
                                като има множество музикални и концертни изяви.</p>
                            <p class="bio-text">Сред значимите му артистични участия са съвместните концерти в България
                                и Турция със световноизвестната джаз изпълнителка Йълдъз Ибрахимова.</p>
                            <p class="bio-text">Особено значимо постижение в композиторската му дейност е авторската
                                песен „Признание“, създадена по негова музика, по текст на Костадин Филипов и с
                                аранжимент на Георги Цветков. Песента е изпълнена от Маргарита Хранова и представена на
                                Националния конкурс за песен „Бургас и морето“ през 2025 г.</p>
                            <p class="bio-text">Музиката остава негово второ призвание, което развива паралелно с
                                лекарската си професия.</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="bio-card bio-card--accent">
                                <div class="bio-icon"><i class="fa-solid fa-music"></i></div>
                                <h3 class="bio-subheading">Концерти с Йълдъз Ибрахимова</h3>
                                <p class="bio-text">Съвместни музикални изяви в България и Турция.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 mt-3">
                        <div class="col-md-4">
                            <figure><img class="bio-photo" src="/assets/images/mollov-about.webp"
                                    alt="Д-р Юлиян Моллов и Йълдъз Ибрахимова на концерт" loading="lazy">
                                <figcaption class="bio-caption">Съвместен концерт с Йълдъз Ибрахимова</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4">
                            <figure><img class="bio-photo" src="/assets/images/yalduz.jpg"
                                    alt="Концертно участие на д-р Юлиян Моллов с Йълдъз Ибрахимова" loading="lazy">
                                <figcaption class="bio-caption">Музикални изяви в България и Турция</figcaption>
                            </figure>
                        </div>
                             <div class="col-md-4">
                            <figure><img class="bio-photo" src="/assets/images/yalduz-2.jpg"
                                    alt="Концертно участие на д-р Юлиян Моллов с Йълдъз Ибрахимова" loading="lazy">
                                <figcaption class="bio-caption">Музикални изяви в България и Турция</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="bio-song mt-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-5">
                                <span class="bio-eyebrow">АВТОРСКА ПЕСЕН · 2025</span>
                                <h3 class="bio-subheading">Маргарита Хранова – „Признание“</h3>
                                <ul class="bio-song-meta">
                                    <li><strong>Музика:</strong> д-р Юлиян Моллов</li>
                                    <li><strong>Текст:</strong> Костадин Филипов</li>
                                    <li><strong>Аранжимент:</strong> Георги Цветков</li>
                                    <li><strong>Изпълнение:</strong> Маргарита Хранова</li>
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <!-- Replace with an actual YouTube embed URL when supplied. -->
                                <div class="bio-video">
                                    <iframe src="https://www.youtube.com/embed/iWlItOTRwVw"
                                        title="Маргарита Хранова – Признание (2025)" width="100%" height="100%"
                                        style="width: 100%; aspect-ratio: 16 / 9; border: 0; border-radius: 15px;"
                                        loading="lazy"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</x-app-layout>
