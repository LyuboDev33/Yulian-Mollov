<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Имейл </title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
      /* CSS Reset : BEGIN */
/* Remove spaces around the email design added by some email clients */
html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1 !important;
}

/* Stops email clients resizing small text */
* {
    -ms-text-size-adjust: 100% !important;
    -webkit-text-size-adjust: 100% !important;
}

/* Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* Stops Outlook from adding extra spacing to tables */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* Fixes webkit padding issue */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* Better rendering method when resizing images in IE */
img {
    -ms-interpolation-mode: bicubic !important;
}

/* Prevents Windows 10 Mail from underlining links despite inline CSS */
a {
    text-decoration: none !important;
}

/* A work-around for email clients meddling in triggered links */
*[x-apple-data-detectors],
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* Prevents Gmail from displaying a download button on large, non-linked images */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* Prevents Gmail from changing the text color in conversation threads */
.im {
    color: inherit !important;
}

/* Removes right gutter in Gmail iOS app */
u~div .email-container {
    min-width: 320px !important;
}

@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u~div .email-container {
        min-width: 375px !important;
    }
}

@media only screen and (min-device-width: 414px) {
    u~div .email-container {
        min-width: 414px !important;
    }
}

/* CSS Reset : END */

/* Progressive Enhancements : BEGIN */
.primary {
    background: #17bebb !important;
}

.bg_white {
    background: #ffffff !important;
}

.bg_light {
    background: #f7fafa !important;
}

.bg_black {
    background: #000000 !important;
}

.bg_dark {
    background: rgba(0, 0, 0, .8) !important;
}

.email-section {
    padding: 2.5em !important;
}

/* BUTTON */
.btn {
    padding: 10px 15px !important;
    display: inline-block !important;
}

.btn.btn-primary {
    border-radius: 5px !important;
    background: #66acf2 !important;
    color: #ffffff !important;
}

.btn.btn-white {
    border-radius: 5px !important;
    background: #ffffff !important;
    color: #000000 !important;
}

.btn.btn-white-outline {
    border-radius: 5px !important;
    background: transparent !important;
    border: 1px solid #fff !important;
    color: #fff !important;
}

.btn.btn-black-outline {
    border-radius: 0px !important;
    background: transparent !important;
    border: 2px solid #000 !important;
    color: #000 !important;
    font-weight: 700 !important;
}

.btn-custom {
    color: rgba(0, 0, 0, .3) !important;
    text-decoration: underline !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Poppins', sans-serif !important;
    color: #000000 !important;
    margin-top: 0 !important;
    font-weight: 400 !important;
}

body {
    font-family: 'Poppins', sans-serif !important;
    font-weight: 400 !important;
    font-size: 15px !important;
    line-height: 1.8 !important;
    color: rgba(0, 0, 0, .4) !important;
}

a {
    color: #17bebb !important;
}

table {}

/* LOGO */
.logo h1 {
    margin: 0 !important;
}

.logo h1 a {
    color: #17bebb !important;
    font-size: 24px !important;
    font-weight: 700 !important;
    font-family: 'Poppins', sans-serif !important;
}

/* HERO */
.hero {
    position: relative !important;
    z-index: 0 !important;
}

.hero .text {
    color: black !important;
    font-size: 18px !important;
}

.hero .text h2 {
    color: #000 !important;
    font-size: 34px !important;
    margin-bottom: 0 !important;
    font-weight: 200 !important;
    line-height: 1.4 !important;
}

.hero .text h3 {
    font-size: 24px !important;
    font-weight: 300 !important;
}

.hero .text h2 span {
    font-weight: 600 !important;
    color: #000 !important;
}

.text-author {
    border: 1px solid rgba(0, 0, 0, .05) !important;
    max-width: 50% !important;
    margin: 0 auto !important;
    padding: 2em !important;
}

.text-author img {
    border-radius: 50% !important;
    padding-bottom: 20px !important;
}

.text-author h3 {
    margin-bottom: 0 !important;
}

ul.social {
    padding: 0 !important;
}

ul.social li {
    display: inline-block !important;
    margin-right: 10px !important;
}

/* FOOTER */
.footer {
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    color: black !important;
}

.footer .heading {
    color: #000 !important;
    font-size: 20px !important;
}

.footer ul {
    margin: 0 !important;
    padding: 0 !important;
}

.footer ul li {
    list-style: none !important;
    margin-bottom: 10px !important;
}

.footer ul li a {
    color: rgba(0, 0, 0, 1) !important;
}


     
    </style>


</head>

<body width="100%"
    style="margin: 0 !important; padding: 0 !important; mso-line-height-rule: exactly !important; background-color: #f1f1f1 !important;">
    <center style="width: 100% !important; background-color: #f1f1f1 !important;">
        <div
            style="display: none !important; font-size: 1px !important; max-height: 0px !important; max-width: 0px !important; opacity: 0 !important; overflow: hidden !important; mso-hide: all !important; font-family: sans-serif !important;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style="max-width: 600px !important; margin: 0 auto !important;" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto !important;">
                <tr>
                    <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em !important;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="logo" style="text-align: center !important;">
                                    <img src="https://yulianmollov.bg/assets/images/dr.%20yuli%20icons/logo-yulian-mollov-2.png"
                                        alt="Снимка д-р Молов">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0 !important;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="padding: 0 2.5em !important; text-align: center !important; padding-bottom: 3em !important;">
                                    <div class="text">
                                        <h3 style="margin: 0 !important;">Поздравления! </h3>
                                        <h3 style="margin: 0 !important;">Вашата кампания беше одобрена.</h3>
                                        <p style="margin: 0 !important;">Какво следва?</p>
                                        <p style="margin: 0 !important;">По-долу ще намерите данни за вход - вашите имейл и парола.</p>
                                        <p style="margin: 0 !important;">Натиснете бутона "Към моя профил" и влезте в профила си с данните за вход.</p>
                                        <p style="margin: 0 !important;">В профила си ще намерите допълнителни инструкции за това как да стартирате вашата кампания.</p>
                                        <p style="color: red !important; text-decoration: underline !important; margin: 0 !important;">
                                            Отметка: Моля сменете паролата на профила си след като влезете в него!</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center !important;">
                                    <div class="text-author" style="max-width: 50% !important; margin: 0 auto !important; padding: 2em !important;">
                                        <h4 style="margin: 0 !important;">Данни за вашият акаунт:</h4>
                                        <img src="images/person_2.jpg" alt=""
                                            style="width: 100px !important; max-width: 600px !important; height: auto !important; margin: auto !important; display: block !important;">
                                        <h3 class="name" style="margin: 0 !important;">Имейл: {{$userEmail}}</h3>
                                        <span class="position" style="margin: 0 !important;">Парола: {{$userPassword}}</span>
                                        <p style="margin: 0 !important;"><a target="_blank" href="https://yulianmollov.bg/login" class="btn btn-primary" style="margin: 0 !important;">Към моя профил</a></p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <!-- 1 Column Text + Button : END -->
            </table>
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto !important;">
                <tr>
                    <td valign="middle" class="bg_light footer email-section" style="padding: 20px !important;">
                        <table>
                            <tr>
                                <td valign="top" width="50%" style="padding-top: 20px !important;">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                        width="100%">
                                        <tr>
                                            <td style="text-align: left !important; padding-right: 10px !important;">
                                                <h3 class="heading" style="margin: 0 !important;">За нас</h3>
                                                <p style="margin: 0 !important;">Фондация д-р Юлиан Молов - помага на тези, които имат нужда от средства</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td valign="top" width="50%" style="padding-top: 20px !important;">
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                        width="100%">
                                        <tr>
                                            <td style="text-align: left !important; padding-left: 5px !important; padding-right: 5px !important;">
                                                <h3 class="heading" style="margin: 0 !important;">Контакти</h3>
                                                <ul style="margin: 0 !important; padding: 0 !important;">
                                                    <li style="list-style: none !important; margin-bottom: 10px !important;"><span class="text" style="margin: 0 !important;">Иммате въпроси и желате да се свържете с нас?</span></li>
                                                    <li style="list-style: none !important; margin-bottom: 10px !important;"><span class="text" style="margin: 0 !important;">Обадете се на +359 895 96 26 10</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end: tr -->
            </table>
        </div>
    </center>
</body>

</html>
