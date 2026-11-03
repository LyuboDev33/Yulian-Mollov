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
                        <img src="/assets/images/dr. yuli icons/logo-yulian-mollov-2.png" width="180" alt="" />
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

        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard_files.inc.header')
            <!--  Header End -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div>
                        <form id="formCreateAccount" method="POST" action="{{ route('changeStatus') }}" class="card custom-card">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Имена: {{ $single_campaign->name }}</h4>
                                <h5 class="card-title">Имейл: {{ $single_campaign->email }}</h5>
                                <h5 class="card-title">Телефон : {{ $single_campaign->telephone }}</h5>
                                <p class="card-text">Причина: {{ $single_campaign->treatment }}</p>
                                <p class="card-text">Описание:{{ $single_campaign->description }}</p>
                                <p class="status">{{$single_campaign->status}}</p>
                            </div>
            
                            <div class="form-actions">
                                <select name="status" id="statusValue" class="form-select">
                                    <option value="approved">Одобри  кампания</option>
                                    <option value="canceled">Отхвърли кампания</option>
                                </select>
                                @if ($single_campaign->status === "approved")
                                <button disabled type="submit" class="btn btn-primary">Промени</button>
                                @else
                                <button type="submit" class="btn btn-primary">Промени</button>

                                @endif
                            </div>
                            
                            <hr>

                            @php
                                $fileNames = explode(' | ', $single_campaign->file_name);
                            @endphp
                            
                           
                            @foreach ($fileNames as $fileName)
            
                                <a download href="/assets_dashboard/files/{{ $fileName }}" class="downloadFile mb-20">Свали {{ $fileName }}</a>
                            @endforeach

                            
                            <!--<p class="card_text pdf">-->
                            <!--    <i style="color: white" class="fa-solid fa-file-pdf"></i>-->
                            <!--    Отвори Файла<i class="fal fa-long-arrow-right"></i> </p>-->
            
                            <input type="hidden" name="hiddenID" value="{{ $single_campaign->id }}">
                            <input type="hidden" name="access_type" value="campaign_owner">
                            <input type="hidden" name="name" value="{{ $single_campaign->name }}">
                            <input type="hidden" name="email" value="{{ $single_campaign->email }}">
                            <input id="fileName" value="{{$single_campaign->file_name}}" type="hidden">
                            <input id="fileLink" value="/assets_dashboard/files/{{$single_campaign->file_name}}" type="hidden">
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="pdf_background">
            <div id="adobe-dc-view"></div>
            <button id="closePDF">Затвори файла</button>
        </div>

        <div class="backgroundConfirm">
            <div class="modal_msg animate__fadeInUp msg-success">
                <p>Вие избрахте опция: Одобри  кампания</p>
                <p>Тази опция ще създаде профил на потребител с права за създаване на кампания.</p>
                <p>Потвърждавате ли, че искате да създадете такъв профил?</p>
                <div class="btns_container">
                    <button class="triggerBtn publish-btn">Потвърждавам</button>
                    <button class="closeModal removeGallery">Затвори</button>
                  </div>
            </div>
        </div>

        <div class="backgroundConfirm ">
            <div class="modal_msg animate__fadeInUp msg-fail">
                <p>Вие избрахте опция: Отхвърли кампания</p>
                <p>Тази опция ще отвхърли направеното запитване за кампания.</p>
                <p>Потвърждавате ли, че искате да оотхврлите?</p>
                  <div class="btns_container">
                    <button class="triggerBtn publish-btn">Потвърждавам</button>
                    <button class="closeModal removeGallery">Затвори</button>
                  </div>
            </div>
        </div>

        @include('dashboard_files.inc.footer');

        <script src="/assets_dashboard/js/PDFembed.js" ></script>
</body>

</html>
