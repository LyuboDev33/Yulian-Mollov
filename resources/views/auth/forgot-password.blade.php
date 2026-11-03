<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Забравена парола </title>

        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="/assets/css/custom.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body class="body__forgot__password">

        <!-- Session Status -->
     
    
        <form class="form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4 text-sm text-gray-600 text-center">
               <p>Забравили сте паролата си? </p>
               <p>Въведете имейла свързан с акаунта си и ще ви изпратим линк с нова парола</p>
            </div>
    
            <!-- Email Address -->
            <div class="field input-field">
                <label for="email">Въведете вашият имейл</label>
                <input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-input-error class="mb-4" :messages="session('status_error')" />
            </div>
    
            <div class="flex items-center justify-end mt-4 field">
                <button>Изпрати парола</button>
            </div>
        </form>
    
     



        <!-- JavaScript -->
        <script src="/javascript/main_pages_js/login-register.js"></script>
    </body>
</html>