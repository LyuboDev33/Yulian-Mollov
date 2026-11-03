<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Неуспешно плащане</title>
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body class="succes__fail__body">

    <main class="cd__main">
        <!-- Start DEMO HTML (Use the following code into your project)-->
        <div id='card' class="animated fadeIn">
            <div id='upper-side'>

                <img class="tick_succes" src="/assets/images/fail.gif" alt="X">
                <h2 id='status'>
                     {{ __('messages.fail_payment') }}
                </h2>
            </div>
            <div id='lower-side'>
                <p id='message'>
                    {{ __('messages.fail_payment2') }}
                  </p>
                <p id='message'>
                     {{ __('messages.fail_payment3') }}
                  </p>
                <a href="/contact" id="contBtn">{{ __('messages.fail_go_to_contacts') }} </a>
            </div>
        </div>
        <!-- END EDMO HTML (Happy Coding!)-->
    </main>

</body>

</html>
