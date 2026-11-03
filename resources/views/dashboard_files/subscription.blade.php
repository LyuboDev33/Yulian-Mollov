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
      
     
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 container">
    
            {{-- This section displays the Users Subscription Plan --}}
          
       
            <div class="p-4 bg-white shadow sm:rounded-lg">
                <h2 class="text-center">Подновяване на абонамент</h2>
                <div class="max-w-xl text-center renew__div">
                    <p>За да подновите абонамента си, е необходимо текущият ви план да е изтекъл.
                       Докато активният ви абонамент не приключи, системата 
                       няма да ви позволи да закупите нов план.</p>
                    
                    <p>След като абонаментът ви бъде прекратен и платеният
                       период изтече, можете да подновите абонамента си,
                        като посетите началната страница и изберете
                         секцията "Подкрепи платформата". 
                         Там ще намерите различните възможности за абонамент, които можете да закупите отново.</p>
                </div>
            </div>


            <div class="p-4 bg-white shadow sm:rounded-lg">
                <h2 class="text-center">Прекратяване на абонамент</h2>
                <div class="max-w-xl text-center renew__div">
                    <p>Всеки потребител може да има само един активен абонамент. 
                      Важно е да знаете, че когато прекратите своя абонамент, 
                      няма да загубите достъпа до акаунта си.
                    </p>
                                        
                    <p>След като абонаментът ви бъде прекратен, 
                      имате възможността да го подновите по 
                      всяко време. Системата ще ви позволи да 
                      направите това след изтичането на
                       текущия платен период.</p>
                    
                    <button class="cancel_sub confirm_delete">Прекрати абонамент</button>
                </div>
            </div>


            </div>

            <div class="background_msg">
                <div class="modal_msg animate__animated animate__fadeInUpBig">
                    <form method="POST" action="{{ route('cancel__subscription') }}">
                        @csrf
                        <p>Потвърждавате ли, че искате да прекратите абонамента си?</p>
                        
                        <div class="flexed_btns">
                            <button class="confirm_delete" type="submit">Потвърждавам</button>
                            <p class="close_modal">Затвори</p>
                        </div>
        
                    </form>
                </div>
            </div>
     
      </div>
    </div>
  </div>

  @if (session('success_cancelation'))
  <div class="background_msg_cancelation">
      <div class="modal_msg animate__animated animate__fadeInUpBig">
         <p>{!! __('messages.session_success_cancelation') !!}</p>
          <p class="close_modal_btn">{!! __('messages.global_close') !!}</p>
      </div>
  </div>
  
  <script>
  let close_modal = document.querySelector('.close_modal_btn');
  let background = document.querySelector('.background_msg_cancelation');

  close_modal.addEventListener('click', function () {         
  background.style.display = "none"; 
  });
  </script>
  @endif
  
    @if (session('error_noSubscription'))
  <div class="background_msg_cancelation">
      <div class="modal_msg animate__animated animate__fadeInUpBig">
         <p>{!! __('messages.session_error_noSubscription') !!}</p>
          <p class="close_modal_btn">{!! __('messages.global_close') !!}</p>
      </div>
  </div>
  
  <script>
  let close_modal = document.querySelector('.close_modal_btn');
  let background = document.querySelector('.background_msg_cancelation');

  close_modal.addEventListener('click', function () {         
  background.style.display = "none"; 
  });
  </script>
  @endif


@include('dashboard_files.inc.footer')

</body>

</html>

