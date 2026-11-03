<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Единична капмания</title>
    <script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>

    @include('dashboard_files.inc.head')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="/assets/images/dr. yuli icons/logo-yulian-mollov-2.png" width="180"
                            alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                @include('dashboard_files.inc.sidebar')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

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

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard_files.inc.header')
            <!--  Header End -->
            <div class="container-fluid">

                
                
        <div class="buttons_main">
            <button onclick="document.querySelector('.publishModal').style.display = 'flex'"
                class="publish-btn">Публикувай</button>
                
            @if ($dashboard_single_case->campaign_status === 'cause_active')
                <button onclick="document.querySelector('.stopCause').style.display = 'flex'" class="button-red">
                    Спри кампанията</button>
            @else
                <button disabled style="background: rgb(105, 5, 5)" title="Нямате активна кампания, която да спрете"
                    class="button-red">Спри
                    кампанията</button>
            @endif

            <button class="button-green payoutBtn">Payouts</button>
            
        </div>
        
         <hr> 
           <div class="current_status mt-20">
                <div>
                    <p>Искана сума: {{ number_format( (float) $dashboard_single_case->cause_desired_amount, 2, '.') }}  EUR</p>
                    <p>Събрана сума: {{ number_format( (float) $dashboard_single_case->cause_amount_collected / 1.96, 2, '.') }}  EUR</p>
                </div>
                @if ($dashboard_single_case->campaign_status === 'cause_active')
                    <p class="bg-label-success">Статус: Активна</p>
                @else
                    <p class="bg-label-danger">Статус: Неактивна</p>

                @endif
            </div>

                <form enctype="multipart/form-data" id="formCampaign" method="POST"
                action="{{ route('updateCause') }}" class="card-body row">
                @csrf
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Име на вашата кампания <span class="spanForm">*</span></label>
                            <input value="{{ $dashboard_single_case->cause_name ?? '' }}" type="text"
                                class="form-control inputArea" name="campaignName" id="exampleInputEmail1">
                            <p class="errorFields"></p>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Исканата сума от човек в евро (EUR).<span class="spanForm">*</span></label>
                            <input value="{{ $dashboard_single_case->cause_desired_amount ?? '' }}" type="text"
                                class="form-control inputArea" name="desiredResult" id="exampleInputEmail1">
                            <p class="errorFields"></p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Линк за видео (Youtube линк) <span class="spanForm">*</span></label>
                            <input value="{{ $dashboard_single_case->cause_youtube_video ?? '' }}" type="text"
                                class="form-control" name="youtubeInput" id="youtubeInput">
                            {{-- <p class="errorFields"></p> --}}
                        </div>
                
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Описание на кампанията <span class="spanForm">*</span></label>
                            <textarea type="email" name="campaignDescription" class="form-control inputArea" id="campaign_description">
                                {{ $dashboard_single_case->cause_description ?? '' }}
                            </textarea>
                            <p class="errorFields"></p>
                        </div>

                        <button type="submit" class="btn btn-primary">Запази промени</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-20">

                    {{-- AN AJAX Request Works when clicking the buttons --}}
           

                    <div class="checkbox-wrapper-64">
                        <h5>Видео</h5>
                        <label class="switch">
                            
                          <input name="causeVideoStatus"
                          @if ($video_status === "on")
                              checked
                          @endif
                          id="causeVideoStatus" type="checkbox">

                          <span class="slider"></span>
                        </label>
                      </div>

                      <div class="checkbox-wrapper-64-video">
                        <h5>Галерия</h5>
                        <label class="switch-video">
                            @php
                                var_dump($gallery_status);
                            @endphp
                          <input name="causeGalleryStatus" 
                          @if ($gallery_status === "on")
                                checked
                          @endif
                           id="causeGalleryStatus" type="checkbox">
                          <span class="slider-video"></span>
                        </label>
                      </div>
                      
        
                      

                    <hr>

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
                    @if ($dashboard_single_case->cause_main_image)
                        <img class="thumbnails"
                            src="/assets_dashboard/images/main_images/{{ $dashboard_single_case->cause_main_image }}"
                            alt="Главна снимка">
                    @endif
                    <p>Сегашен изглед на галерията:</p>
                    @php
                        $images = explode(' | ', $dashboard_single_case->cause_gallery);
                    @endphp
                   
                        @foreach ($images as $image)
                            <img class="thumbnails"
                                src="/assets_dashboard/images/gallery_images/{{ $image }}"
                                alt="Снимки Галерия">
                        @endforeach
          

                    <p>Сегашно видео:</p>
                    @if ($dashboard_single_case->cause_video_update)
                   
                        <a class="container-btn-file" href="/assets_dashboard/videos/{{ $dashboard_single_case->cause_video_update }}" download>
                            Изтеглете видеото
                        </a>
                        {{-- <video controls width="250">
                      <source src="/assets_dashboard/{{$dashboard_single_case->cause_video_update}}" type="video/webm" />
                    </video> --}}
                    @endif                    
                </div>
                <input name="hiddenID" value="{{$dashboard_single_case->id}}" type="hidden">
            </form>
            <hr>
            <h4>Свали главната снимка</h4>
            <a class="downloadFile" download href="/assets_dashboard/images/main_images/{{ $dashboard_single_case->cause_main_image }}">Свали главната снимка</a>
            
    
            <h4>Свали галерията</h4>
            @foreach ($images as $image)
            <a download class="downloadFile"
                href="/assets_dashboard/images/gallery_images/{{ $image }}"
                alt="{{ $image }}">Свали {{ $image }} </a>
        @endforeach

            <hr>
             
        <div>
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Секция - Payout от налични дарения</h5>
                    <h3 style="color: red;">Моля прочетете задължително информацията.</h3>
                    <p style="font-size: 16px;">
                        В случай че сте изтеглили пари в Stripe (направили сте Payout), които трябва да бъдат дадени на тази фондация, моля попълнете сумата, която сте изпратили към тази кампания, както и кое място са взети парите.
                    </p>
                    <hr>
                    <p>Пари дарени за каузи: <span class="causeDonations">{{ $current_amount_donations }} </span>  BGN</p>
                    <p>Процент даден към платформата: <span class="causePercentage">{{ $current_amount_platform }}</span>  BGN</p>
                    <p>Обща налична сума в Dr. Yulian Mollov (Дарения): {{ $total_available_amount }} BGN</p>
                    <hr>
                    <p>Обща налична сума в Dr. Mollov Platform (Абонаменти): <span class="subsAmount">{{ $current_amount_subs }}</span>  BGN</p>
                    <hr>
                </div>
                
                <h4 id="payoutElement">Създайте Payout</h4>

                <form id="payoutForm" enctype="multipart/form-data"
                action="{{route('payoutCreate')}}" method="POST">
                    @csrf
                    <div class="mb-3 blockInputs">
                        <div class="payoutBlock">
                            <label for="payoutAmount" class="form-label payouts">
                                Въведете сума лв.<span class="spanForm">*</span>
                            </label>
                            <input step="any" type="number" placeholder="Напишете сума" class="form-control" name="payoutAmount" id="payoutAmount">
                            <p class="errorMsg"></p> <!-- Error message for the number input -->
                        </div>
                        <div class="payoutBlock">
                            <label for="payoutReason" class="form-label payouts">
                                Въведете причина<span class="spanForm">*</span>
                            </label>
                            <input type="text" placeholder="Напишете причина" class="form-control" name="payoutReason" id="payoutReason">
                            <p class="errorMsg"></p> <!-- Error message for the text input -->
                        </div>
                        <div class="payoutBlock">
                            <label for="payoutPlatform" class="form-label payouts">
                                Изберете акаунт<span class="spanForm">*</span></label>
                                <select id="selectValue" name="payoutAccount" class="form-control">
                                    <option value="Dr. Yulian Mollov">Dr. Yulian Mollov (Каузи)</option>
                                    <!--<option value="Dr. Mollov Platform">Dr. Mollov Platform (Абонаменти)</option>-->
                                    {{-- <option value="PlatformMoney">Даренията към платформата</option> --}}
                                </select>
                        </div>
                        {{-- <div class="payoutBlock">
                            <button class="container-btn-file">
                                Прикачете файл
                                <input class="file" name="payoutFile" type="file" />
                            </button>
                            <p class="mt-2 fileNaming"></p> <!-- Error message for the file input -->
                            <p class="errorMsgFile"></p>
                        </div> --}}
                    </div>
                    

                    <div class="payoutCause">
                        <div class="modal_msg animate__fadeInUp msg-fail">
                            <p>Внимание! Това действие генерира Payout за тази кампания.</p>
                            <p>Потвърждавате ли, че искате да генерирате Payout?</p>
                        
                            <div class="btns_container">
                                <button type="submit" class="publish-btn">Потвърждавам</button>
                                <p onclick="this.closest('.payoutCause').style.display = 'none'" class="publish-btn button-red">
                                    Затвори</p>
                            </div>
                            <input name="hiddenID" value="{{$dashboard_single_case->id}}" type="hidden">
                        </div>
                    </div>  
                    <hr>
                    <button class="m-4 button-green" type="submit">Прикачи</button>
                </form>{{-- End of form --}}

              </div>
            </div>

            <hr>

            <div class="card w-100 p-4 container_cause_table">
                <h4>История на преводите</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Payout сума</th>
                            <th>Payout Причина</th>
                            <th>Payout Акаунт</th>
                            <th>Payout Admin</th>
                            <th>Payout Дата</th>
                            {{-- <th>Payout Файл</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_payouts as $payout)
                            <tr>
                                <td>{{ number_format($payout->payout_amount, 2, '.')}} BGN</td>
                                <td>{{ $payout->payout_reason }}</td>
                                <td>{{ $payout->payout_account }}</td>
                                <td>{{ $payout->payout_admin }}</td>
                                <td>{{ date('d.m.Y', strtotime($payout->created_at)) }}</td>
                                {{-- <td>
                                    <a download href="/assets_dashboard/images/payout_files/{{ $payout->payout_file }}"
                                    >Свали файла</a>
                                </td> --}}

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

           </div>           
        </div>



        @include('dashboard_files.inc.footer')




        {{--------------------------------------------}}
        {{-- Below are all the Pop up modals modals --}}
        {{--------------------------------------------}}


        <div class="publishModal">
            <form method="POST" action="{{ route('publishCause') }}" class="modal_msg animate__fadeInUp msg-fail">
                <p>Това действие ще публикува кампанията.</p>
                <p>Потвърждавате ли, че искате да публикувате тази кампания?</p>
                @csrf
                <div class="btns_container">
                    <button type="submit" class="publish-btn">Потвърждавам</button>
                    <p onclick="this.closest('.publishModal').style.display = 'none'" class="publish-btn removeGallery">
                        Затвори</p>
                </div>
                <input name="causeStatus" value="cause_active" type="hidden">
                <input name="hiddenID" value="{{$dashboard_single_case->id}}" type="hidden">
            </form>
        </div>

        <div class="stopCause">
            <form method="POST" action="{{ route('stopCause') }}" class="modal_msg animate__fadeInUp msg-fail">
                <p>Това действие ще спре кампанията.</p>
                <p>Потвърждавате ли, че искате да спрете кампанията?</p>
                @csrf
                <div class="btns_container">
                    <button type="submit" class="publish-btn">Потвърждавам</button>
                    <p onclick="this.closest('.stopCause').style.display = 'none'" class="publish-btn removeGallery">
                        Затвори</p>
                </div>
                <input name="hiddenID" value="{{$dashboard_single_case->id}}" type="hidden">
            </form>
        </div>


        {{--------------------------------------------}}
        {{-- Below are All Session modals --}}
        {{--------------------------------------------}}

        @if (session('payoutSuccess'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <p>{{ session('payoutSuccess') }}</p>
               
                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif

        @if (session('insufficient_amount'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <p>Няма достатъчно наличност за платформата!</p>
                <p>В случай, че имате въпрос, моля обърнете се към техническа поддръжка</p>
                
                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif
    
        @if (session('errorPublish'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <p>Не сте прикачили пълната информация за да започне кампания!</p>
                <p>Моля уверете се, че следните полета са попълненеи:</p>
                <ul>
                    <li>Име на вашата кампания</li>
                    <li>Описание</li>
                    <li>Главна снимка</li>
                    <li>Сума на кампанията</li>
                </ul>
                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif

    @if (session('successPublish'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <h2 class="text-center">Успех</h2>
                <p>Вашата кампания вече е активна!</p>

                <p class="close_modal_btn"
                    onclick="this.closest('.background_msg_cancelation').style.display='none';">
                    Затвори
                </p>
            </div>
        </div>
    @endif

    @if (session('campaignStopped'))
        <div class="background_msg_cancelation">
            <div class="modal_msg animate__animated animate__fadeInUp">
                <h2 class="text-center">Кампанията ви е спряна</h2>
                <p>Можете да я активирате по всяко едно време.</p>

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

        <script src="/javascript/dashboard_js/ckeeditor.js"></script>
    <script src="/javascript/dashboard_js/form-campaign-logic.js"></script>
    <script src="/javascript/dashboard_js/cause-validation.js"></script>

</body>

</html>
