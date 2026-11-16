<x-app-layout>

    @section('SEO')
        <title>Успешно записан час | Д-р Юлиян Моллов</title>
        <meta name="description" content="Потвърждение за успешно записан час за домашно медицинско посещение при д-р Юлиян Моллов в София.">
        <meta name="robots" content="noindex,nofollow">
    @endsection

    <main class="homecare-page">
        <section class="homecare-appointment-success" aria-labelledby="appointment-success-title">
            <div class="homecare-appointment-success__decoration homecare-appointment-success__decoration--left" aria-hidden="true"></div>
            <div class="homecare-appointment-success__decoration homecare-appointment-success__decoration--right" aria-hidden="true"></div>

            <div class="container">
                <div class="homecare-appointment-success__content">
                    <div class="homecare-appointment-success__icon" aria-hidden="true">
                        <i class="fa-solid fa-check"></i>
                    </div>

                    <span class="homecare-section__label homecare-appointment-success__eyebrow">
                        <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                        УСПЕШНО ЗАПИСВАНЕ
                    </span>

                    <h1 class="homecare-section__title homecare-appointment-success__title" id="appointment-success-title">
                        Вашият час е <span>успешно записан!</span>
                    </h1>

                    <div class="homecare-appointment-success__divider" aria-hidden="true">
                        <span></span>
                        <i class="fa-solid fa-heart-pulse"></i>
                        <span></span>
                    </div>

                    <p class="homecare-appointment-success__description">
                        Благодарим Ви, че се доверихте на д-р Юлиян Моллов.
                        Вашето записване за медицинско посещение е успешно.
                    </p>

                    <div class="homecare-appointment-success__message">
                        <div class="homecare-appointment-success__message-icon" aria-hidden="true">
                            <i class="fa-solid fa-house-medical-circle-check"></i>
                        </div>
                        <div>
                            <h2>Грижа с внимание към Вас</h2>
                            <p>
                                Посещението ще се осъществи съгласно направената уговорка.
                                Ако е необходимо допълнително уточнение, моля, свържете се с лекаря.
                            </p>
                        </div>
                    </div>

                    <p class="homecare-appointment-success__closing">
                        Благодарим Ви за доверието и Ви пожелаваме здраве!
                    </p>

                    <a href="{{ url('/') }}" class="careox-btn homecare-appointment-success__button">
                        <span>
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                            Към началната страница
                        </span>
                    </a>

                   
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
