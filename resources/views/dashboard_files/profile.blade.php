{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <title>Табло за управление</title>

    @include('dashboard_files.inc.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="wrapper">

        @include('dashboard_files.inc.sidebar')
        <div class="main-panel">
            @include('dashboard_files.inc.header')
           

            @include('dashboard_files.inc.footer')
        </div>
    </div>

</body>

</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <title>Табло за управление</title>

    @include('dashboard_files.inc.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="wrapper">
        @include('dashboard_files.inc.sidebar')
        <div class="main-panel">
            @include('dashboard_files.inc.top_bar')
            <div class="container">
             





            </div>
            @include('dashboard_files.inc.footer')
        </div>
    </div>

</body>

</html> --}}

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Табло за управление</title>
  @include('dashboard_files.inc.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('dashboard_files.inc.header')
      <!--  Header End -->
      <div class="container-fluid">
      
        <div class="container">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Информация в профила') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Променете данните в профила си при нужда') }}
                            </p>
                        </header>

                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="name" :value="__('Име')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('Имейл')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Запази') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                     x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                                        class="text-sm text-gray-600">{{ __('Промените бяха запазени.') }}
                                        </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Смяна на Парола') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('За да промените паролата си, въведете текущата си парола в полето "Сегашна Парола", след което въведете новата парола два пъти за потвърждение.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="update_password_current_password" :value="__('Сегашна Парола')" />
                                <x-text-input id="update_password_current_password" name="current_password"
                                    type="password" class="mt-1 block w-full" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="update_password_password" :value="__('Нова Парола')" />
                                <x-text-input id="update_password_password" name="password" type="password"
                                    class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="update_password_password_confirmation" :value="__('Повтори Новата Парола')" />
                                <x-text-input id="update_password_password_confirmation"
                                    name="password_confirmation" type="password" class="mt-1 block w-full"
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Запази') }}</x-primary-button>

                                @if (session('status') === 'password-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)"
                                        class="text-sm text-gray-600">{{ __('Промените бяха запазени.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Изтриване на Акаунт') }}
                            </h2>

                            {{-- <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                    </p> --}}
                        </header>

                        <x-danger-button x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Изтрий') }}</x-danger-button>

                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                                @method('delete')

                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Потвърждавате ли че искате да изтриете акаунта си?') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Ако изтриете акаунта си, ще загубите цялото съдържание до него.') }}
                                </p>

                                <div class="mt-6">
                                    <x-input-label for="password"
                                        value="{{ __('Въведете паролата си ако желаете да изтриете акаунта') }}"
                                        class="sr-only" />

                                    {{-- <x-text-input
                                id="password"
                                name="password"
                                type="password"
                                class="mt-1 block w-3/4"
                                placeholder="{{ __('Парола') }}"
                            /> --}}

                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Затвори') }}
                                    </x-secondary-button>

                                    <x-danger-button class="ms-3">
                                        {{ __('Потвръждавам') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </section>

                </div>
            </div>


        </div>
       
     
      </div>
    </div>
  </div>

@include('dashboard_files.inc.footer')

</body>

</html>

