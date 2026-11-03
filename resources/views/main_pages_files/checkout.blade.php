<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Абонаментни планове </title>
    

</head>

<body>


    @include('main_pages_files.inc.header')

    

    <!-- Sidebar area start here -->
    <div class="sidebar-area offcanvas offcanvas-end" id="menubar">
        <div class="offcanvas-header">
            <a href="index.html" class="logo">
                <img src="/images/main_pages_images/logo/logo-light.svg" alt="logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i
                    class="fa-regular fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body sidebar__body">
            <div class="mobile-menu overflow-hidden"></div>
            <div class="d-none d-lg-block">
                <h5 class="text-white mb-20">About Us</h5>
                <p class="paragraph-light fs-16">
                    Unleash the full potential of your website and elevate its online presence with our comprehensive
                    online courses.
                </p>
            </div>
            <div class="sidebar__search d-block d-lg-none">
                <input type="text" placeholder="Search here..">
                <button><i class="fa-regular fa-magnifying-glass"></i></button>
            </div>
            <div class="sidebar__contact-info mt-30">
                <h5 class="text-white mb-20">Contact Info</h5>
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i> <a href="#0">example@example.com</a>
                    </li>
                    <li class="py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+912659302003">+91
                            2659
                            302 003</a>
                    </li>
                    <li><i class="fa-solid fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar__btns my-4">
                <a href="sign-up.html">Sign Up</a>
                <a class="sign-in" href="sign-in.html">Sign In</a>
            </div>
            <div class="sidebar__socials">
                <ul>
                    <li>
                        <a href="#0">
                            <i class="fa-brands text-white fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fa-brands text-white fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fa-brands text-white fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fa-brands text-white fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sidebar area end here -->



    <main>

     

        <!-- Pricing area start here -->
        <section class="pricing-area pt-120 pb-120">
            <div class="container">
           
            @if (Auth::check())
            <p>Логнат</p>

            @else

            <p>Нелогнат</p>

            @endif
            
            </div>
        </section>
        <!-- Pricing area end here -->
    </main>

    @include('main_pages_files.inc.footer')


  
</body>

</html>