<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Успешно плащане</title>
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body class="succes__fail__body">

    <main class="cd__main">
        <!-- Start DEMO HTML (Use the following code into your project)-->
        <div id='card' class="animated fadeIn">
            <div id='upper-side'>

                <img class="tick_succes" src="/assets/images/tick-success.gif" alt="Тикче">
                <h2 id='status'>
                    {{ __('messages.global_success') }}
                </h2>
            </div>
            <div id='lower-side'>
                <p id='message'>
                    {{ __('messages.sucess_payment') }}
                </p>
                <a href="/dashboard" id="contBtn">
                    {{ __('messages.success_go_to_account') }}
                </a>
            </div>
        </div>
        <!-- END EDMO HTML (Happy Coding!)-->
    </main>

</body>

</html>
