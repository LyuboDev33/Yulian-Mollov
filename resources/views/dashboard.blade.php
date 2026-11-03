<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Табло за управление</title>
    <link rel="stylesheet" href="/assets_dashboard/css/styles.min.css" />
    <link rel="stylesheet" href="/assets_dashboard/css/custom.css" />
    @include('dashboard_files.inc.head')
</head>

<body>


    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->

        @include('dashboard_files.inc.sidebar')

        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard_files.inc.header')
            <!--  Header End -->
            <div class="container-fluid">

                <div id="preloader">
                    <div id="loader">
                    </div>
                    <p> Зареждане...</p>
                </div>


                <!--  Row 1 -->
                <p>Здравейте {{ Auth::user()->name }}</p>

                @if (Auth::user()->access_type === 'user')
                    <p>Вие сте регистриран в платформата като месечен дарител</p>
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="mb-4">
                                        <h5 class="card-title fw-semibold">Информация за вашия акаунт</h5>
                                    </div>

                                    @if ($status_stripe === 'active')
                                        <p>Вашият абонамент е активен</p>
                                    @elseif (empty($status_stripe) || $status_stripe === 'canceled')
                                        <p>В момента нямате активен абонамент</p>

                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <h5 class="card-title fw-semibold mb-4">Важни въпроси относно вашия акаут и достъп
                                    </h5>


                                    <div class="faq-container">
                                        <div class="faq-item">
                                            <div class="faq-question">
                                                Какъв вид е вашият акаут и какво значи?
                                                <span class="arrow">▶</span>
                                            </div>
                                            <div class="faq-answer">
                                                Видът на вашия достъп е "Месечен дарител". Това означава, че всеки месец
                                                нашата система
                                                автоматично ще събира избраната от вас сума за дарение, докато не
                                                прекратите абонамента си.
                                            </div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">
                                                Можете ли да спрете абонамента си?
                                                <span class="arrow">▶</span>
                                            </div>
                                            <div class="faq-answer">
                                                Да. Можете да спрете абонамента си във всеки един момент.
                                                Отидете във вашия профил
                                            </div>
                                        </div>
                                        <div class="faq-item">
                                            <div class="faq-question">
                                                За какво помагат парите, които дарявам?
                                                <span class="arrow">▶</span>
                                            </div>
                                            <div class="faq-answer">
                                                Нашата платформа участва в различни видове благотворителност свързана с
                                                деца и възрастни в неравностойно положение,
                                                животински кампании, образование и др. <br> <br>
                                                Сумата от вашият абонамент ще бъде разпределена за различните кампании и
                                                всеки ще получава актуална информация
                                                в сайта с цел прозрачност.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (Auth::user()->access_type === 'campaign_owner')
                    @if (!empty($campaign))

                        <h2>Кратки инструкции</h2>
                        <div class="container_instructions">
                            <div class="instructions">
                                <p>Видът на вашият профил ви позволява да създадете кампания попълвайки формата отдолу.
                                </p>
                                <p>Можете да следите дарената сума във вашия профил тук в реално време.</p>
                                <p>След като качите вашето описание и снимки, нашият екип ще прегледа информацията
                                    и ще активира кампанията в случай, че всичко е наред.</p>
                                <p>Във всеки случай ще получите обратна връзка след като прегледаме кампанията ви.</p>
                               
                                <hr>
                                <p>Моля попълнете всички задължителни полета.</p>
                                <!--<p> <span style="color: red; font-size: 20px;"> <u> Задължителните полета са обозначени с червена звездичка-->
                                <!--   *</u></span>-->
                                </p>
                           
                            </div>

                        
                            
                             <div class="current_status mt-20">
                                @if ($campaign->campaign_status === 'cause_active')
                                    <p class="bg-label-success">Статус: Активна</p>
                                @else
                                    <p class="bg-label-danger">Статус: Неактивна</p>

                                    @if ($filled_status === "cause_filled")
                                    <div class="shadow causeStatusComplete">
                                        <p>Поздравления! Вие успешно попълнихте кампанията си!</p>
                                        <p>Нашият екип ще прегледа кампанията ви и ще получите обаждане, когато е одобрена.
                                        </p>
                                    </div>
                                @elseif($filled_status === "cause_not_filled")
                                <div class="shadow causeStatusIncomplete">
                                    <p>След като попълните необходимите празни полета, нашият екип ще прегледа вашата кампания! </p>
                                    <p>Полетата се считат попълнени, когато не са празни!</p>
                                    <p>Задължителните полета са: </p>
                                    <ol>
                                        <li>Име на вашата кампания</li>
                                        <li>Описание на кампанията</li>
                                        <li>Желаната от вас сума в евро (EUR)</li>
                                        <li>Главна снимка</li>
                                    </ol>
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>

                        <hr>
                        <form enctype="multipart/form-data" id="formCampaign" method="POST"
                            action="{{ route('updateCause') }}" class="card-body row">
                            @csrf
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Име на вашата кампания <span
                                                style="color: red; font-size: 25px;">*</span></label>
                                        <input value="{{ $campaign->cause_name ?? '' }}" type="text"
                                            class="form-control inputArea" name="campaignName" id="exampleInputEmail1">
                                        <p class="errorFields"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fileInput" class="file-upload-label">
                                            <div class="flexedImages">
                                                <div class="bnts">
                                                    <div class="container-btn-file">
                                                        <img src="/assets_dashboard/images/upload2.png"
                                                            alt="Прикачи файл">
                                                        Прикачете видео
                                                        <input class="file" name="videoUpload" accept="video*"
                                                            type="file" id="videoInput" />
                                                    </div>
                                                    <p id="removeVideo">Премахни видеото</p>

                                                </div>
                                                <p id="videoPreview"></p>
                                            </div>

                                            <label for="exampleInputEmail1" class="form-label">Напишете желаната от вас
                                                сума в евро (EUR). <span style="color: red; font-size: 25px;">*</span></label>
                                            <input value="{{ $campaign->cause_desired_amount ?? '' }}" type="number"
                                                class="form-control inputArea" name="desiredResult">
                                            <p class="errorFields"></p>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Описание на кампанията <span
                                                style="color: red; font-size: 25px;">*</span></label>
                                        <textarea type="email" name="campaignDescription" class="form-control inputArea" id="campaign_description">
                                            {{ $campaign->cause_description ?? '' }}
                                        </textarea>
                                        <p class="errorFields"></p>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Запази промени</button>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-20">

                                <div class="flexedImages">
                                    <div class="bnts">
                                        <button class="container-btn-file">
                                            <img src="/assets_dashboard/images/upload2.png" alt="Прикачи файл">
                                            Прикачете главна снимка
                                            <input class="file" name="mainImages"
                                                accept="image/png, image/jpg, image/jpeg" type="file"
                                                id="single-image" />
                                                <p class="errorFields"></p>
                                        </button>
                                        <p class="removeImg">Премахни снимката</p>

                                    </div>
                                    <div id="file-preview"></div>
                                </div>
                                <hr>
                                <div class="flexedImages">
                                    <div class="btns">
                                        <button class="container-btn-file">
                                            <img src="/assets_dashboard/images/upload2.png" alt="Прикачи файл">
                                            Прикачете галерия
                                            <input class="file" name="gallery[]" multiple
                                                accept="image/png, image/jpg, image/jpeg" type="file"
                                                id="file-upload" />
                                                <p class="errorFields"></p>
                                        </button>
                                       
                                        <p class="removeGallery">Премахни галерията</p>
                                    </div>
                                    <output id="result">
                                </div>
                                <hr>
                                <p>Сегашна главна снимка:</p>
                                @if ($campaign->cause_main_image)
                                    <img class="thumbnails"
                                        src="/assets_dashboard/images/main_images/{{ $campaign->cause_main_image }}"
                                        alt="Главна снимка">
                                @endif
                                <p>Сегашен изглед на галерията:</p>
                                @php
                                    $images = explode('| ', $campaign->cause_gallery);
                                @endphp
                                @if (count($images) > 1)
                                    @foreach ($images as $image)
                                        <img class="thumbnails"
                                            src="/assets_dashboard/images/gallery_images/{{ $image }}"
                                            alt="Снимки Галерия">
                                    @endforeach
                                @endif

                                <p>Сегашно видео:</p>
                                @if ($campaign->cause_video_update)
                                    <video width="100%" max-width="100%" controls>
                                        <source src="/assets_dashboard/videos/{{ $campaign->cause_video_update }}" />
                                        Вашият браузър не поддържа този видео формат.
                                    </video>
                                    {{-- <video controls width="250">
                                  <source src="/assets_dashboard/{{$campaign->cause_video_update}}" type="video/webm" />
                                </video> --}}
                                @endif
                            </div>


                            <input type="hidden" name="hiddenID" value="{{ $campaign->id }}">
                        </form>
                    @endif
                @endif

                @if (Auth::user()->access_type === 'admin')
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold mb-4">Важни въпроси относно вашия акаут и достъп</h5>
                                <p>Вие имате админски права. Това означава, че можете да преглеждате запитвания за
                                    кампании,
                                    да проверявате документи и да създавате акаунти собственици на кампании с един клик.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-left">
                        <div class="menuAdmins col-md-3 col-lg-3 col-xl-3 col-xxl-3 shadow">
                            <h5>Общо брой дарения за каузи</h5>
                            <p>Обща сума: {{ $total_amount_donations }} BGN</p>
                            <p>Общо брой дарители: {{ $all_transactions }}</p>
                            {{-- <a href="/dashboard/payout/cause-page" class="btn btn-primary">
                                Към Payout
                            </a> --}}
                        </div>
                        <div class="menuAdmins col-md-3 col-lg-3 col-xl-3 col-xxl-3 shadow">
                            <h5>Сума дарена за платформата</h5>
                            <p>Налична сума дарена за платформата : {{ $available_amount_donations }} BGN</p>
                            <p>Налична сума за дарения : {{ $amount_available }} BGN</p>

                            {{-- <button class="btn btn-primary">
                                Към Payout
                            </button> --}}
                        </div>
                        <div class="menuAdmins col-md-3 col-lg-3 col-xl-3 col-xxl-3 shadow">
                            <h5>Налична сума от месечни абонаменти</h5>
                            <p>Налична сума: {{ $total_amount_subscriptions }} BGN</p>
                            <p>Активни абонаменти:{{ $toal_active_subscriptions }} </p>
                            {{-- <button class="btn btn-primary">
                                Към Payout
                            </button> --}}
                        </div>
                       
                    </div>

                    <div class="card-body w-100 p-4">
                        <h3>Закупени билети</h3>
                        @if (isset($all_tickets))
                            @foreach ($all_tickets as $ticket)
                                <div class="mb-30 shadow rounded-4 p-3">
                                    <h4>Номер: {{ $ticket->id }} </h4>
                                    <p>Име: {{ $ticket->name }}</p>
                                    <span>Номер: {{ $ticket->telephone }}</span>
                                    <span>Билет: {{ $ticket->ticket_price }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    
                @endauth

                <hr>

                <div class="row">

                    <div class="col-sm-6 col-md-3 col-xl-3 card">
                        <img src="/assets_dashboard/images/products/s4.png" class="card-img-top rounded-0"
                            alt="Снимка Табло 1">
                    </div>

                    <div class="col-sm-6 col-md-3 col-xl-3 card">
                        <img src="/assets_dashboard/images/products/s5.png" class="card-img-top rounded-0"
                            alt="Снимка Табло 2">
                    </div>

                    <div class="col-sm-6 col-md-3 col-xl-3 card">
                        <img src="/assets_dashboard/images/products/s7.png" class="card-img-top rounded-0"
                            alt="Снимка Табло 3">
                    </div>

                    <div class="col-sm-6 col-md-3 col-xl-3 card">
                        <img src="/assets_dashboard/images/products/s11.png" class="card-img-top rounded-0"
                            alt="Снимка Подкрепа 4">
                    </div>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">
                            Благодарим на всички наши дарители,
                            които правят нашето същестуване възможно &#10084;&#65039;
                        </p>
                    </div>
                </div>
        </div>
    </div>

    {{-- Session Flash Messages --}}

    @if (session('duplicate'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <p>Този акаунт вече има достъп!</p>
                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif

    @if (session('causeMsg'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <p>Променита бяха запазени успешно!</p>
                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif
    {{-- Modal Section --}}




    {{-- Session Response session --}}




    @include('dashboard_files.inc.footer')


    <script src="/javascript/dashboard_js/ckeeditor.js"></script>
    <script src="/javascript/dashboard_js/form-campaign-logic.js"></script>


</body>

</html>
