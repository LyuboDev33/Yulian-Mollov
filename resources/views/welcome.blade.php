<x-app-layout>

    @section('SEO')
        <title>Домашни посещения в София | Д-р Юлиян Моллов</title>

        <meta name="description"
            content="Домашни медицински посещения в София от д-р Юлиян Моллов. Прегледи, медицински манипулации, инфузии, катетри, изследвания и палиативни грижи. Запазете час онлайн.">

        <meta name="keywords"
            content="домашни посещения София, лекар по домовете, д-р Юлиян Моллов, домашни прегледи, медицински манипулации, инфузии, катетри, ЕКГ, палиативни грижи">

        <meta name="author" content="Д-р Юлиян Моллов">
        <meta name="robots" content="index,follow,max-image-preview:large">

        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:site_name" content="Д-р Юлиян Моллов">
        <meta property="og:url" content="{{ url()->current() }}">

        <meta property="og:title" content="Домашни медицински посещения в София | Д-р Юлиян Моллов">

        <meta property="og:description"
            content="Медицинска грижа в комфорта на Вашия дом. Прегледи, манипулации, изследвания и специализирана помощ с предварително записване.">

        <meta property="og:image" content="{{ asset('assets/images/facebook-seo.png') }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Домашни посещения | Д-р Юлиян Моллов">
        <meta name="twitter:description" content="Медицински прегледи, манипулации и грижа у дома в София.">
        <meta name="twitter:image" content="{{ asset('assets/images/facebook-seo.png') }}">
    @endsection


    <main class="homecare-page">

        <!-- ==========================================
             HERO
        =========================================== -->
        <section class="homecare-hero">
            <div class="container">
                <div class="row align-items-center g-5">

                    <div class="col-lg-6">
                        <div class="homecare-hero__content">

                            <span class="homecare-eyebrow">
                                <i class="fa-solid fa-house-medical"></i>
                                ДОМАШНИ МЕДИЦИНСКИ ПОСЕЩЕНИЯ
                            </span>

                            <h1 class="homecare-hero__title">
                                Професионална
                                <span>медицинска грижа</span>
                                в уюта на Вашия дом
                            </h1>

                            <p class="homecare-hero__text">
                                Д-р Юлиян Моллов предлага домашни медицински
                                посещения в град София – прегледи,
                                медицински манипулации, инфузии,
                                изследвания и индивидуална грижа,
                                съобразена с нуждите на пациента.
                            </p>

                            <div class="homecare-hero__actions">

                                {{-- <a href="#" data-cal-link="dr-yulian-mollov/30min" data-cal-namespace="30min"
                                    data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                                    class="careox-btn">

                                    <span>
                                        <i class="fa-solid fa-calendar-check"></i>
                                        Запази си час
                                    </span>
                                </a> --}}


                            </div>

                            <div class="homecare-hero__note">
                                <i class="fa-solid fa-circle-info"></i>
                                Посещенията се извършват след предварителна уговорка.
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="homecare-hero__visual">

                            <!-- Replace with your own image -->
                            <img src="/assets/images/welcome/mollov-2.png"
                                alt="Д-р Юлиян Моллов – домашни медицински посещения" class="homecare-hero__image">

                            <div class="homecare-hero__floating">
                                <div class="homecare-hero__floating-icon">
                                    <i class="fa-solid fa-user-doctor"></i>
                                </div>

                                <div>
                                    <strong>Д-р Юлиян Моллов</strong>
                                    <span>Индивидуална медицинска грижа</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ==========================================
             INTRODUCTION
        =========================================== -->
        <section class="homecare-section">
            <div class="container">
                <div class="row align-items-center g-5">

                    <div class="col-lg-6">
                        <div class="homecare-media">

                            <img src="/assets/images/welcome/c7214109-17ba-4994-9399-07062f6cadd0.jpg"
                                alt="Медицинска консултация в домашна среда" loading="lazy">

                            <div class="homecare-media__accent"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 align-self-start">

                        <span class="homecare-section__label">
                            ГРИЖА, СЪОБРАЗЕНА С ВАС
                        </span>

                        <h2 class="homecare-section__title">
                            Когато медицинската помощ
                            идва при Вас
                        </h2>

                        <p class="homecare-section__text">
                            Посещението в лечебно заведение невинаги
                            е лесно или удобно. За възрастни хора,
                            пациенти с ограничена подвижност,
                            хронични заболявания или нужда от
                            последваща медицинска грижа,
                            домашното посещение може да бъде
                            практична алтернатива.
                        </p>

                        <p class="homecare-section__text">
                            Д-р Юлиян Моллов извършва медицински
                            прегледи и манипулации в домашни условия
                            след предварително уточняване на
                            здравословното състояние, необходимите
                            процедури и подходящия час за посещение.
                        </p>

                        <!-- Placeholder for doctor's additional text -->
                        <p class="homecare-section__text">
                            Всяко посещение се планира индивидуално,
                            с внимание към комфорта на пациента
                            и особеностите на неговото състояние.
                            Допълнителна информация за подхода
                            и организацията ще бъде добавена тук.
                        </p>



                    </div>

                </div>
            </div>
        </section>


        <!-- ==========================================
             SERVICES
        =========================================== -->

<section class="homecare-section homecare-section--soft homecare-pricing" id="homecare-pricing">
    <div class="container">

        <div class="homecare-section__heading text-center">
            <span class="homecare-section__label">ЦЕНОРАЗПИС</span>

            <h2 class="homecare-section__title">
                Домашни медицински посещения и манипулации
            </h2>

            <p class="homecare-pricing__doctor">
                <strong>Д-р Юлиян Моллов</strong>
                <span>Специалист по анестезиология и интензивно лечение</span>
            </p>

            <p class="homecare-section__text">София и околностите</p>

            <p class="homecare-pricing__currency">
                <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                Всички цени са в евро (€).
            </p>
        </div>

        <nav class="homecare-pricing__navigation" aria-label="Категории в ценоразписа">
            <a href="#homecare-price-1">01. Лекарски консултации</a>
            <a href="#homecare-price-2">02. Венозни манипулации</a>
            <a href="#homecare-price-3">03. Диагностични изследвания</a>
            <a href="#homecare-price-4">04. Бързи тестове</a>
            <a href="#homecare-price-5">05. Биологични проби</a>
            <a href="#homecare-price-6">06. Катетри и сонди</a>
            <a href="#homecare-price-7">07. Обработка на рани</a>
            <a href="#homecare-price-8">08. Палиативни грижи</a>
            <a href="#homecare-price-9">09. Нощни и извънградски посещения</a>
            <a href="#homecare-price-10">10. Общи условия</a>
            <a href="#homecare-price-11">11. Записване на посещение</a>
        </nav>

        <div class="row g-4 align-items-stretch">

            <!-- 01. Лекарски консултации -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-1">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-user-doctor" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 01</span>
                            <h3>Лекарски консултации и домашни посещения</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Лекарски консултации и домашни посещения</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Първична лекарска консултация и преглед</th>
                                    <td>130 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вторично посещение до 7 дни за същото медицинско състояние</th>
                                    <td>70 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Последващо посещение от 8-ия до 30-ия ден</th>
                                    <td>85 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Консултация по повод нов здравословен проблем</th>
                                    <td>130 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Посещение само за предварително назначена медицинска манипулация, без нов пълен преглед</th>
                                    <td>50 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Онлайн консултация с чуждестранен специалист, включително съдействие и превод</th>
                                    <td>По индивидуална оферта</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <h4>Какво включва първичната лекарска консултация?</h4>
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Посещение на адрес и транспорт в рамките на стандартната зона на София, подробна анамнеза, физикален преглед, измерване на кръвно налягане, пулс, кислородна сатурация и температура при необходимост.</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Включва още преглед на наличната медицинска документация, клинична оценка, индивидуални медицински препоръки и изготвяне на план за лечение, допълнителни изследвания или проследяване.</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Допълнителните медицински манипулации, диагностични изследвания и медикаменти не са включени в основната цена.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 02. Венозни манипулации -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-2">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-syringe" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 02</span>
                            <h3>Венозни манипулации и инфузионна терапия</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Венозни манипулации и инфузионна терапия</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Поставяне на периферен венозен катетър (абокат)</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Отстраняване на венозен катетър</th>
                                    <td>5 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Венозна инжекция</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Мускулна инжекция</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Подкожна инжекция</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Венозна инфузия до 60 минути</th>
                                    <td>30 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Венозна инфузия от 60 до 120 минути</th>
                                    <td>45 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Всяка допълнителна инфузия в рамките на посещението</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Допълнително медицинско наблюдение след първите 120 минути, за всеки започнат час</th>
                                    <td>25 €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Важно: Медикаментите, инфузионните разтвори и специализираните консумативи се заплащат отделно, освен ако изрично е посочено друго.</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Инфузионните терапии се извършват само след лекарска преценка, при медицински показания и при осигурени условия за безопасно наблюдение.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 03. Диагностични изследвания -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-3">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 03</span>
                            <h3>Диагностични изследвания</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Диагностични изследвания</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">ЕКГ с лекарска интерпретация</th>
                                    <td>20 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Отоскопия</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Измерване на кръвна захар</th>
                                    <td>5 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Измерване на хемоглобин (Hb)</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">CRP – бърз тест</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Пълна кръвна картина чрез подходящ анализатор</th>
                                    <td>20 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Електролити (Na, K, Cl)</th>
                                    <td>25 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Тропонин – бърз тест</th>
                                    <td>25 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">D-dimer – бърз тест</th>
                                    <td>25 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Изследване на урина с тест лента</th>
                                    <td>8 €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Диагностичните изследвания се предлагат според наличната апаратура и консумативи. Изследванията, които изискват обработка във външна лаборатория, се заплащат съгласно тарифата на съответната лаборатория.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 04. Бързи тестове -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-4">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-vial-virus" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 04</span>
                            <h3>Бързи тестове за инфекциозни заболявания</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Бързи тестове за инфекциозни заболявания</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">COVID-19 – антигенен тест</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Грип A+B</th>
                                    <td>12 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Комбиниран тест COVID-19 + грип A+B</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Комбиниран тест COVID-19 + грип + RSV</th>
                                    <td>20 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Стрептокок група А</th>
                                    <td>12 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Микоплазма</th>
                                    <td>20 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Инфекциозна мононуклеоза</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Други бързи диагностични тестове</th>
                                    <td>По предварителна оферта</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Тестовете се извършват според клиничните показания и наличността.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 05. Биологични проби -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-5">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-vials" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 05</span>
                            <h3>Вземане на биологични проби</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Вземане на биологични проби</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Вземане на венозна кръв</th>
                                    <td>12 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вземане на капилярна кръв</th>
                                    <td>8 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вземане на гърлен или назофарингеален секрет</th>
                                    <td>10 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вземане на проба от рана</th>
                                    <td>12 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вземане на урина за лабораторно изследване</th>
                                    <td>8 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Транспорт на биологични проби до партньорска лаборатория</th>
                                    <td>10 €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Цената на лабораторните анализи не е включена.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 06. Катетри и сонди -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-6">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-kit-medical" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 06</span>
                            <h3>Катетри, сонди и други медицински манипулации</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Катетри, сонди и други медицински манипулации</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Поставяне или смяна на уринарен катетър</th>
                                    <td>35 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Отстраняване на уринарен катетър</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Поставяне на назогастрална сонда</th>
                                    <td>40 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Отстраняване на назогастрална сонда</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Клизма</th>
                                    <td>25 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Инхалаторна терапия</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Други медицински манипулации</th>
                                    <td>След индивидуална оценка</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Специализираните катетри, сонди, лекарствени продукти и други материали се калкулират отделно.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 07. Обработка на рани -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-7">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-bandage" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 07</span>
                            <h3>Обработка на рани и малки хирургични процедури</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Обработка на рани и малки хирургични процедури</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Обработка и превръзка на малка рана</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Обработка на сложна или декубитална рана</th>
                                    <td>25–45 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Сваляне на хирургични конци</th>
                                    <td>15 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Затваряне на подходяща повърхностна рана с тъканно лепило</th>
                                    <td>25 € плюс стойността на материала</td>
                                </tr>
                                <tr>
                                    <th scope="row">Обработка и зашиване на малка рана</th>
                                    <td>50–80 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Малка инцизия или ексцизия</th>
                                    <td>От 60 €, след индивидуална оценка</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Хирургичните процедури се извършват само когато са медицински подходящи за домашна среда и са осигурени необходимите условия за безопасност, стерилност и последващо проследяване.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 08. Палиативни грижи -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-8">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 08</span>
                            <h3>Палиативни грижи и контрол на болката</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Палиативни грижи и контрол на болката</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Първична консултация на онкологичен или палиативен пациент</th>
                                    <td>130 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Разширена оценка и изготвяне на индивидуален план за контрол на болката</th>
                                    <td>Допълнително 30 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Вторично посещение до 7 дни</th>
                                    <td>70 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Последващо посещение от 8-ия до 30-ия ден</th>
                                    <td>85 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Допълнителни медицински процедури</th>
                                    <td>Съгласно ценоразписа</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Медицинските грижи се съобразяват с клиничното състояние, индивидуалните нужди на пациента и приложимите изисквания за предписване и приложение на лекарствени продукти.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 09. Нощни и извънградски посещения -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-9">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-clock" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 09</span>
                            <h3>Вечерни, нощни и извънградски посещения</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__table-wrap">
                        <table class="homecare-pricing__table">
                            <caption class="visually-hidden">Вечерни, нощни и извънградски посещения</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Медицинска услуга</th>
                                    <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Работни дни, от 08:00 до 20:00 ч.</th>
                                    <td>Без допълнителна надбавка</td>
                                </tr>
                                <tr>
                                    <th scope="row">Нощни посещения, от 20:00 до 08:00 ч.</th>
                                    <td>Надбавка от 100% върху услугите</td>
                                </tr>
                                <tr>
                                    <th scope="row">Посещения през почивни и официални празнични дни</th>
                                    <td>Надбавка от 30% върху услугите</td>
                                </tr>
                                <tr>
                                    <th scope="row">Посещения извън стандартната зона на София</th>
                                    <td>Допълнителна транспортна такса от 15 до 30 €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Посещения извън София</th>
                                    <td>По индивидуална оферта</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="homecare-pricing__notes">
                        <p>
                            <i class="fa-solid fa-circle-info" aria-hidden="true"></i>
                            <span>Вечерните, нощните и извънградските посещения се извършват след предварителна уговорка и потвърждение. При съвпадане на повече от една надбавка окончателната цена се уточнява предварително.</span>
                        </p>
                    </div>
                </article>
            </div>

            <!-- 10. Общи условия -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group" id="homecare-price-10">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-file-invoice" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 10</span>
                            <h3>Общи условия за ценообразуване и заплащане</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__terms">
                        <div class="homecare-pricing__term">
                            <h4>Основна цена за посещение</h4>
                            <p>При първоначална лекарска консултация се начислява такса от 130 €, която включва лекарския труд, прегледа и транспорта в рамките на стандартната зона на обслужване.</p>
                        </div>

                        <div class="homecare-pricing__term">
                            <h4>Последващи посещения</h4>
                            <p>При проследяване на вече оценено медицинско състояние се прилагат намалените тарифи, посочени в настоящия ценоразпис. При възникване на нов здравословен проблем се начислява цена за първична лекарска консултация.</p>
                        </div>

                        <div class="homecare-pricing__term">
                            <h4>Допълнителни медицински процедури</h4>
                            <p>Всички допълнително извършени медицински манипулации и диагностични изследвания се начисляват отделно съгласно публикувания ценоразпис.</p>
                        </div>

                        <div class="homecare-pricing__term">
                            <h4>Медикаменти и медицински консумативи</h4>
                            <p>Допълнителните лекарствени продукти, инфузионни разтвори, специализирани медицински изделия и консумативи, които не са изрично включени в цената на съответната процедура, се калкулират отделно.</p>
                        </div>

                        <div class="homecare-pricing__term">
                            <h4>Предварително информиране на пациента</h4>
                            <p>Преди извършването на допълнителна платена медицинска манипулация пациентът или неговият законен представител се уведомява за необходимостта от процедурата и нейната цена.</p>
                        </div>

                        <div class="homecare-pricing__term">
                            <h4>Окончателна стойност на посещението</h4>
                            <p>Окончателната стойност се определя въз основа на действително извършените медицински услуги, приложените медикаменти и използваните допълнителни материали. На пациента се предоставя документ с описание на извършените услуги и начислените суми.</p>
                        </div>
                    </div>
                </article>
            </div>

            <!-- 11. Записване на посещение -->
            <div class="col-12 col-lg-6">
                <article class="homecare-pricing__group homecare-pricing__group--contact" id="homecare-price-11">
                    <header class="homecare-pricing__group-header">
                        <span class="homecare-pricing__group-icon">
                            <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="homecare-pricing__group-number">Категория 11</span>
                            <h3>Записване на домашно медицинско посещение</h3>
                        </div>
                    </header>

                    <div class="homecare-pricing__contact">
                        <p>
                            Домашните медицински посещения се извършват след предварителна заявка и потвърждение на възможността за посещение.
                        </p>

                        <p>
                            <strong>Д-р Юлиян Моллов</strong>
                            <br>
                            Специалист по анестезиология и интензивно лечение
                        </p>

                        <p class="homecare-pricing__phone">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                            Телефон:
                            <a href="tel:+359895962610">
                                <strong>0895 962 610</strong>
                            </a>
                        </p>
                    </div>
                </article>
            </div>

        </div>

    </div>
</section>



        <!-- ==========================================
             HOW IT WORKS
        =========================================== -->
        <section class="homecare-section" id="homecare-process">
            <div class="container">

                <div class="row align-items-center g-5">

                    <div class="col-lg-6 order-lg-2">

                        <div class="homecare-media">

                            <img src="/assets/images/welcome/molov-3.jpg"
                                alt="Подготовка за домашно медицинско посещение" loading="lazy">

                        </div>

                    </div>

                    <div class="col-lg-6 order-lg-1">

                        <span class="homecare-section__label">
                            ЛЕСНО И УДОБНО
                        </span>

                        <h2 class="homecare-section__title">
                            Как протича заявяването
                            на домашно посещение?
                        </h2>

                        <p class="homecare-section__text">
                            Организацията започва с предварителна
                            заявка, за да бъдат уточнени
                            нуждите на пациента и необходимите
                            медицински материали.
                        </p>

                        <div class="homecare-steps">

                            <div class="homecare-step">
                                <span class="homecare-step__number">01</span>

                                <div>
                                    <h3>Свържете се с нас</h3>
                                    <p>
                                        Заявете консултация чрез
                                        сайта или по телефон.
                                    </p>
                                </div>
                            </div>

                            <div class="homecare-step">
                                <span class="homecare-step__number">02</span>

                                <div>
                                    <h3>Уточняване на подробностите</h3>
                                    <p>
                                        Обсъждат се състоянието
                                        на пациента, адресът,
                                        желаните процедури,
                                        датата и часът.
                                    </p>
                                </div>
                            </div>

                            <div class="homecare-step">
                                <span class="homecare-step__number">03</span>

                                <div>
                                    <h3>Медицинско посещение</h3>
                                    <p>
                                        След потвърждение
                                        д-р Моллов извършва
                                        договорените медицински
                                        дейности на адрес.
                                    </p>
                                </div>
                            </div>

                            <div class="homecare-step">
                                <span class="homecare-step__number">04</span>

                                <div>
                                    <h3>Документация</h3>
                                    <p>
                                        След посещението
                                        се оформят необходимите
                                        документи и протокол
                                        за извършените дейности.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>



        <!-- ==========================================
             WHO IS IT FOR
        =========================================== -->
        <section class="homecare-section">
            <div class="container">

                <div class="row align-items-center g-5">

                    <div class="col-lg-6">

                        <span class="homecare-section__label">
                            ЗА КОГО Е ПОДХОДЯЩО
                        </span>

                        <h2 class="homecare-section__title">
                            Медицинска помощ за хора,
                            които се нуждаят от грижа у дома
                        </h2>

                        <p class="homecare-section__text">
                            Домашните медицински посещения
                            могат да бъдат полезни
                            за пациенти, които изпитват
                            затруднения при посещение
                            на лечебно заведение
                            или имат нужда от
                            определени медицински процедури.
                        </p>

                        <ul class="homecare-checklist">

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Възрастни хора с ограничена подвижност
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Пациенти с хронични заболявания
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Хора в следоперативен период
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Пациенти, нуждаещи се от инфузии
                                и медицински манипулации
                            </li>

                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                Онкологично болни пациенти,
                                нуждаещи се от палиативни грижи
                            </li>

                        </ul>

                    </div>

                    <div class="col-lg-6">

                        <div class="homecare-media">

                            <img src="/assets/images/welcome/mollov-7.jpg"
                                alt="Домашни медицински грижи за възрастни пациенти" loading="lazy">

                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- ==========================================
             AVAILABILITY
        =========================================== -->
        <section class="homecare-section homecare-section--soft">
            <div class="container">

                <div class="row align-items-center g-5">

                    <div class="col-lg-6">

                        <div class="homecare-media">

                            <img src="/assets/images/welcome/molov-5.jpg"
                                alt="Предварително записване за домашно посещение" loading="lazy">

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <span class="homecare-section__label">
                            РАБОТНО ВРЕМЕ И УСЛОВИЯ
                        </span>

                        <h2 class="homecare-section__title">
                            Посещения в удобно
                            за Вас време
                        </h2>

                        <p class="homecare-section__text">
                            Домашните медицински посещения
                            се извършват основно през
                            работните дни след предварително
                            записване и потвърждение.
                        </p>

                        <p class="homecare-section__text">
                            Посещения в часовете между
                            20:00 и 08:00 ч. могат
                            да бъдат организирани
                            при наличие на възможност.
                            За този часови диапазон
                            се прилага 100% надценка
                            върху цената на услугите.
                        </p>

                        <p class="homecare-section__text">
                            Услугите са насочени основно
                            към пациенти в град София.
                            Посещения в околните населени
                            места могат да бъдат обсъдени
                            индивидуално.
                        </p>

                        <div class="homecare-info-box">

                            <i class="fa-solid fa-circle-info"></i>

                            <p>
                                Цената на посещението
                                се уточнява предварително
                                според необходимите
                                медицински дейности,
                                времето и адреса.
                            </p>

                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- ==========================================
             FAQ
        =========================================== -->
        <section class="homecare-section">
            <div class="container">

                <div class="homecare-section__heading text-center">

                    <span class="homecare-section__label">
                        ПОЛЕЗНА ИНФОРМАЦИЯ
                    </span>

                    <h2 class="homecare-section__title">
                        Често задавани въпроси
                    </h2>

                    <p class="homecare-section__text">
                        Отговори на най-често задаваните
                        въпроси относно организацията
                        на домашните посещения.
                    </p>

                </div>

                <div class="homecare-faq">

                    <details class="homecare-faq__item" open>
                        <summary>
                            Как мога да запазя час за домашно посещение?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Можете да направите предварителна
                            заявка чрез сайта или да се
                            свържете по телефон.
                            След уточняване на необходимите
                            медицински дейности ще бъде
                            потвърден подходящ час.
                        </div>
                    </details>

                    <details class="homecare-faq__item">
                        <summary>
                            Какви медицински услуги се извършват у дома?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Предлагат се медицински прегледи,
                            венозни инфузии, инжекции,
                            поставяне и смяна на катетри,
                            вземане на биологичен материал,
                            диагностични изследвания
                            и други медицински манипулации.
                        </div>
                    </details>

                    <details class="homecare-faq__item">
                        <summary>
                            Извършват ли се лабораторни изследвания?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Възможно е вземане на венозна
                            и капилярна кръв, както и
                            други биологични материали.
                            Предлагат се и определени
                            бързи диагностични тестове.
                        </div>
                    </details>

                    <details class="homecare-faq__item">
                        <summary>
                            Възможни ли са вечерни или нощни посещения?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Да, при предварителна уговорка
                            и наличие на възможност.
                            За посещения между 20:00
                            и 08:00 ч. се прилага
                            100% надценка.
                        </div>
                    </details>

                    <details class="homecare-faq__item">
                        <summary>
                            Предлагат ли се грижи за онкологично болни?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Предлагат се специализирани
                            посещения за пациенти
                            с онкологични заболявания,
                            включително палиативни грижи
                            и подкрепа при контрол
                            на болката според
                            медицинските показания.
                        </div>
                    </details>

                    <details class="homecare-faq__item">
                        <summary>
                            Извършват ли се посещения извън София?
                            <i class="fa-solid fa-plus"></i>
                        </summary>

                        <div class="homecare-faq__answer">
                            Посещенията се извършват
                            основно в София.
                            За околните населени места
                            е необходима предварителна
                            индивидуална уговорка.
                        </div>
                    </details>

                </div>

            </div>
        </section>


        <!-- ==========================================
             FINAL CTA
        =========================================== -->
        <section class="homecare-cta">
            <div class="container">

                <div class="homecare-cta__box">

                    <div class="homecare-cta__decoration"></div>

                    <div class="row align-items-center g-4">

                        <div class="col-lg-8">

                            <span class="homecare-cta__label">
                                ЗАПАЗЕТЕ ЧАС ОНЛАЙН
                            </span>

                            <h2>
                                Нуждаете се от медицинска
                                грижа във Вашия дом?
                            </h2>

                            <p>
                                Свържете се с д-р Юлиян Моллов
                                за предварителна консултация,
                                информация относно услугите
                                и записване на домашно посещение.
                            </p>

                        </div>

                        <div class="col-lg-4 text-lg-end">

                            {{-- <a href="#" data-cal-link="dr-yulian-mollov/30min" data-cal-namespace="30min"
                                data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                                class="careox-btn">

                                <span>
                                    <i class="fa-solid fa-calendar-check"></i>
                                    Запази си час
                                </span>

                            </a> --}}

                            <div class="homecare-cta__phone">
                                <a href="tel:+359895962610">
                                    <i class="fa-solid fa-phone"></i>
                                    +359 895 96 26 10
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>

</x-app-layout>
