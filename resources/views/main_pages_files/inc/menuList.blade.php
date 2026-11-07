   <ul class="main-menu__list">
       <li>
           <a href="/">
               {{-- {{ __('messages.sidebar_welcome') }} --}}
               Лекар у дома
           </a>
       </li>

       <li>
           <a href="{{ route('treatment') }}">
               Лечение в Турция
           </a>

        <li>
           <a href="{{ route('teaching') }}">
               Обучения първа помощ
           </a>
       </li>



       {{-- <li>
           <a href="/discover">   {{ __('messages.sidebar_campaign') }} </a>
       </li> --}}

       <li class="dropdown">
           <a href="/about">
               Инфо
               {{-- {{ __('messages.sidebar_about_the_platform') }} --}}
           </a>
           <ul>

               {{-- <li class="dropdown">
                   <a href="/events">Събития</a>
               </li> --}}
               <li>
                   <a href="/news">
                       Новини
                       {{-- {{ __('messages.sidebar_news') }} --}}
                   </a>
               </li>

               {{-- <li class="dropdown">
                   <a href="/support">{{ __('messages.sidebar_support_the_platform') }}</a>
               </li> --}}
               <li>
                   <a href="/about">
                       За д-р Моллов
                       {{-- {{ __('messages.sidebar_about_us') }} --}}
                   </a>
               </li>

           </ul>
       </li>


              <li>
           <a href="{{ route('contact') }}">
               Контакти
           </a>
       </li>


   </ul>
