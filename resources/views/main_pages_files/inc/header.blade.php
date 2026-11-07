 @include('cookies')

 {{-- <div class="preloader">
    <div class="preloader__image" style="background-image: url(/assets/images/loader.png);"></div>
</div> --}}


 <header class="main-header main-header--four sticky-header sticky-header--normal active sticky-header">
     <div class="container-header">
         <div class="main-header__inner">
             <div class="main-header__logo">
                 <a href="/">
                     <img class="logo__header" src="/assets/images/dr. yuli icons/logo-yulian-mollov-2.png"
                         alt="Лого уебсайт">
                 </a>
             </div><!-- /.main-header__logo -->
             <nav class="main-header__nav main-menu">
                 @include('main_pages_files.inc.menuList')
             </nav><!-- /.main-header__nav -->
             <div class="main-header__right gap-3 d-flex flex-row-reverse">
                 <div class="mobile-nav__btn mobile-nav__toggler">
                     <span></span>
                     <span></span>
                     <span></span>
                 </div><!-- /.mobile-nav__toggler -->
                 @if (Route::has('login'))
                     @auth
                         <a href="/dashboard" class="careox-btn">
                             {{ __('messages.global_profile') }}
                         </a>
                     @else
                         <a href="/login" class="careox-btn">
                             {{ __('messages.global_login') }}
                         </a>
                     @endauth
                 @endif



                 <a data-cal-link="dr-yulian-mollov/30min"
                    data-cal-namespace="30min"
                     data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                     class="careox-btn">
                     <span>
                         <i class="icofont-heart"></i>
                         Запази си час
                     </span>
                 </a>



                 {{-- <div class="sl-nav bg-black text-white d-none d-lg-block">

                    @switch(Session::get('locale', 'bg'))
                        @case('bg')
                            Език:
                        @break

                        @case('en')
                            Language:
                        @break

                          @case('tr')
                            Dil:
                        @break

                        @default
                            Език:
                    @endswitch
                    @php
                        $languages = ['en' => 'English',
                                      'bg' => 'Български',
                                      'tr' => 'Türkçe'
                                    ];
                        $locale = Session::get('locale');
                        $locale = array_key_exists($locale, $languages) ? $locale : 'bg';
                    @endphp
                    <ul>
                        <li><b>
                                {{ $languages[$locale] }}
                            </b>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>

                            <ul>
                                <li>
                                    <a href="{{ route('change-language', ['lang' => 'bg']) }}">
                                        <img src="/assets/images/icons/bulgaria.png" />
                                        <span class="active">Български</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('change-language', ['lang' => 'en']) }}">
                                        <img src="/assets/images/icons/united-kingdom.png" />
                                        <span>English</span>
                                    </a>
                                </li>

                                      <li>
                                    <a href="{{ route('change-language', ['lang' => 'tr']) }}">
                                        <img src="/assets/images/icons/turkey.png" />
                                        <span>Türkçe</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div> --}}

             </div><!-- /.main-header__right -->
         </div>
     </div><!-- /.container-fluid -->
 </header><!-- /.main-header -->
