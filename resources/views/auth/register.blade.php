<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ __('messages.title_register') }} </title>

    @include('main_pages_files.inc.head')

</head>

<body>

    <div class="page-wrapper">

        @include('main_pages_files.inc.header')

        <section class="container-format forms">

            <div class="form login signup">
                <div class="form-content">
                    <header class="header_forms">{{ __('messages.global_register') }}</header>

                    <form class="registerForm" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form_group_container">
                            <div class="form-group">
                                <div class="field input-field">
                                    <input required name="name" :value="old('name')" type="text"
                                        placeholder="{{ __('messages.register_placeholder_names') }}" class="input">
                                </div>

                                <div class="field input-field">
                                    <input required name="email" :value="old('email')" type="email"
                                        placeholder="{{ __('messages.register_placeholder_email') }}" class="input">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field input-field">
                                    <input required type="password" name="password" autocomplete="new-password"
                                        placeholder="{{ __('messages.register_placeholder_password') }}" class="password">
                                </div>

                                <div class="field input-field">
                                    <input required type="password" name="password_confirmation"
                                        autocomplete="new-password" placeholder="{{ __('messages.register_placeholder_password_repeat') }}" class="password">
                                    <i class='bx bx-hide eye-icon'></i>
                                </div>
                            </div>
                        </div>

                        <div class="field button-field registerBtn">
                            <button>{{ __('messages.global_register') }}</button>
                        </div>

                        <x-input-error :messages="$errors->get('name')" />
                        <x-input-error :messages="$errors->get('email')" />
                        <x-input-error :messages="$errors->get('password')" />
                        <x-input-error :messages="$errors->get('password_confirmation')" />


                        <input value="{{ isset($_GET['plan']) ? $_GET['plan'] : '' }}" name="payment_plan"
                            type="hidden">
                    </form>

                    <div class="form-link">
                        <span>{{ __('messages.register_already_have_account') }}
                            <a href="/login" class="link login-link">{{ __('messages.global_login') }}</a>
                        </span>
                    </div>
                </div>


                {{-- <div class="media-options google">
                    @if (isset($_GET['plan']))
                    <a href="{{ route('google_auth', ['plan' => isset($_GET['plan']) ? $_GET['plan'] : ''])}}" class="field google">
                        <img src="/images/main_pages_images/google.png" alt="Снимка Google" class="google-img">
                        <span>Вход с Google</span>
                    </a>
                    @else 
                    <a href="{{ route('google_auth')}}" class="field google">
                        <img src="/images/main_pages_images/google.png" alt="Снимка Google" class="google-img">
                        <span>Вход с Google</span>
                    </a>
                    @endif
                </div> --}}

            </div>
        </section>

        @include('main_pages_files.inc.footer')
    </div>


    @if (session('need__registration'))
        <div class="background_msg">
            <div class="modal_msg animate__animated animate__lightSpeedInRight">
                <p>{!! __('messages.session_need_registration') !!}</p>
                <p>{!! __('messages.session_need_registration2') !!}</p>
                <p>{!! __('messages.session_need_registration3') !!}</p>
                <button onclick="window.location.reload()" class="closeRead">{!! __('messages.global_close') !!}</button>
            </div>
        </div>
    @endif


    <!-- JavaScript -->
    <script src="/javascript/main_pages_js/login-register.js"></script>
</body>

</html>
