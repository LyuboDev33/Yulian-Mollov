<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ __('messages.title_create_campaign') }} </title>
    @include('main_pages_files.inc.head')
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="page-wrapper">

        @include('main_pages_files.inc.header')



        <section class="container-format forms container">

            <h3 class="text-black text-center">{{ __('messages.campaign_choose_type') }}</h3>

            <section class="mt-30">
                <div class="top-banner-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="campaingSwitch banner-text-wrapper mb-40">
                                    <div class="btn__wrapper shadow">
                                        <a class="first__btn active" role="link">
                                            {{ __('messages.campaign_medical_purposes') }}
                                        </a>
                                        <a class="second__btn" role="link">
                                            {{ __('messages.campaign_non_medical_purpose') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <div class="form login campaigm">
                <div class="form-content">


                    <iframe class="video__welcome"
                        src="https://www.youtube.com/embed/NCQd_SM_erA?si=Tj4J80vIwThg1X2s&rel=0"
                        title="Видео д-р Молов" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


                    <header class="header_forms"> {{ __('messages.campaign_info_about_you') }}</header>

                    <form enctype="multipart/form-data" id="formCampaign" method="POST"
                        action="{{ route('insert_campaign') }}">
                        @csrf
                        <div class="form_group_container">
                            <div class="form-group">
                                <div class="field input-field">
                                    <input required name="name" type="text"
                                        placeholder="{{ __('messages.campaign_placeholder_names') }}" class="input">
                                </div>

                                <div class="field input-field">
                                    <input required name="email_campaing" type="email"
                                        placeholder="{{ __('messages.campaign_placeholder_email') }}" class="input">
                                </div>

                                <div class="field input-field">
                                    <textarea required name="description_campaign" placeholder="{{ __('messages.campaign_placeholder_description') }}"
                                        class="input descriptionCampaign"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field input-field">
                                    <input required name="telephone" type="text"
                                        placeholder="{{ __('messages.campaign_placeholder_phone_number') }}"
                                        class="input">
                                </div>

                                {{-- <label for="treatment">За каква кауза ви трябват пари?</label> --}}

                                <select required name="treatment" id="treatment">
                                    <option value="Медицинско лечение">{{ __('messages.campaign_option1') }}</option>
                                    <option value="Подкрепа за животни">{{ __('messages.campaign_option2') }}</option>
                                    <option value="Образование и обучение">{{ __('messages.campaign_option3') }}
                                    </option>
                                    <option value="Културни и спортни инициативи">{{ __('messages.campaign_option4') }}
                                    </option>
                                </select>

                                <label for="fileInput" class="file-upload-label">
                                    <div class="file-upload-design">
                                        <svg viewBox="0 0 640 512">
                                            <path
                                                d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                                            </path>
                                        </svg>
                                        <span>{{ __('messages.campaign_upload_file') }}</span>
                                    </div>

                                    <input multiple type="file" class="custom-file-input" id="fileInput"
                                        name="campaignFile[]" hidden />

                                </label>
                                <p id="fileNameDisplay" class="file-name-display text-center"></p>
                                <p class="fileError text-center"></p>
                            </div>
                        </div>

                        <div class="field button-field registerBtn">
                            <button>{{ __('messages.campaign_send_request') }}</button>
                        </div>
                        <x-input-error :messages="$errors->get('email_campaing')" />
                    </form>

                </div>
            </div>
            <div class="infoDiv">
                <h3 class="text-center mb-20 mt-20">{{ __('messages.campaign_more_info') }}</h3>
                <h4 class="text-center mb-20 mt-20 text-danger">{{ __('messages.campaign_please_read') }}</h4>
                <ol>
                    <li>
                        <h4 class="text-centered">{{ __('messages.campaign_part1_header') }}</h4>
                        <ul>
                            <li>
                                {!! __('messages.campaign_part1_content1') !!}
                            </li>
                            <li>
                                {!! __('messages.campaign_part1_content2') !!}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4 class="text-centered">{{ __('messages.campaign_part2_header') }}</h4>
                        <ul>
                            <li>
                                {!! __('messages.campaign_part2_content1') !!}
                            </li>
                            <li>
                                {!! __('messages.campaign_part2_content2') !!}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4>{{ __('messages.campaign_part3_header') }}</h4>
                        <ul>
                            <li>
                                {!! __('messages.campaign_part3_content1') !!}
                            </li>
                            <li>
                                {!! __('messages.campaign_part3_content2') !!}
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4>{{ __('messages.campaign_part4_header') }}</h4>
                        <ul>
                            <li>
                                {!! __('messages.campaign_part4_content1') !!}
                            </li>
                            <li>
                                {!! __('messages.campaign_part4_content2') !!}
                            </li>
                        </ul>
                    </li>
                </ol>

            </div>
        </section>

        @if (session('no_file_uploaded'))
            <div class="background_msg">
                <div class="modal_msg animate__animated animate__fadeInUp">
                    <p>
                         {!! __('messages.no_file_uploaded1') !!}
                    </p>
                    <p>
                          {!! __('messages.no_file_uploaded2') !!}
                    </p>

                    <button onclick="window.location.reload()" class="closeRead">
                        {!! __('messages.global_close') !!}
                    </button>
                </div>
            </div>
        @endif

        @if (session('campaign_success'))
            <div class="background_msg">
                <div class="modal_msg animate__animated animate__fadeInUp">
                    <p>
                         {!! __('messages.campaign_success1') !!}
                    </p>
                    <p>
                            {!! __('messages.campaign_success2') !!}
                    </p>
                    <button onclick="window.location.reload()" class="closeRead">
                         {!! __('messages.global_close') !!}
                    </button>
                </div>
            </div>
        @endif

        @include('main_pages_files.inc.footer')
    </div>

    <!-- JavaScript -->

    <script src="/javascript/main_pages_js/login-register.js"></script>

</body>

</html>
