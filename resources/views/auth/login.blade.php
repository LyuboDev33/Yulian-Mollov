<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ __('messages.title_login') }} </title>

    @include('main_pages_files.inc.head')

</head>

<body>

    <div class="page-wrapper">
        @include('main_pages_files.inc.header')

        <section class="container-format login forms">

            <div class="form loginContainer signup">
                <div class="form-content">
                    <header class="header_forms">
                        {{ __('messages.global_login') }}
                    </header>



                    <form class="loginForm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form_group_container">
                            <div class="field input-field">
                                <input required name="email" :value="old('email')" type="email"
                                    placeholder="{{ __('messages.login_placeholder_email') }}" class="input">
                                <x-input-error :messages="$errors->get('email')" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="field input-field custom_passField">
                                <input required type="password" name="password" autocomplete="new-password"
                                    placeholder="{{ __('messages.login_placeholder_password') }}" class="password">
                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                        </div>

                        <div class="field button-field registerBtn">
                            <button>
                                {{ __('messages.global_login') }}
                            </button>
                        </div>
                        <input value="{{ isset($_GET['plan']) ? $_GET['plan'] : '' }}" name="payment_plan"
                            type="hidden">

                    </form>

                    <div class="form-link">
                        <span>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('messages.login_forgot_password') }}
                                </a>
                            @endif
                        </span>
                    </div>
                </div>

                {{-- <div class="line"></div> --}}

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


    <!-- JavaScript -->
    <script src="/javascript/main_pages_js/login-register.js"></script>
</body>

</html>
