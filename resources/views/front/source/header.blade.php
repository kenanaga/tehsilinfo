<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Meta Data -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Tehsil.info |  </title>

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/media/favicon.png')}}">

   <!-- Dependency Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{ asset('front/dependencies/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('front/dependencies/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('front/dependencies/animate/animate.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('front/dependencies/swiper/css/swiper.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ asset('front/dependencies/magnific-popup/css/magnific-popup.css')}}">

   <!-- Site Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css')}}">

</head>

<body>

   <!-- Start wrapper -->
   <div id="wrapper" class="wrapper">

      <!-- start perloader -->
      <div class="pre-loader" id="preloader">
         <div class="loader"></div>
      </div>
      <!-- end perloader -->

      <!-- Start main-content -->
      <div id="main_content" class="footer-fixed">

         <!-- Header -->
         <header class="rt-header sticky-on">

            <!-- sticky-placeholder -->
            <div id="sticky-placeholder"></div>
            <!-- Header Main -->
            <div class="header-main header-main-style-1 navbar-wrap" id="navbar-wrap">
               <div class="container">
                  <div class="row">
                     <div class="d-flex align-items-center justify-content-between">

                        <!-- start logo here -->
                        <div class="site-branding">
                           <a class="dark-logo" href="{{asset('/')}}">
                              <img width="162" height="52" src="{{asset('front/media/logo/logo-dark.svg')}}" alt="neeon">
                           </a>
                           <a class="light-logo" href="{{asset('/')}}">
                              <img width="162" height="52" src="{{asset('front/media/logo/logo-light.svg')}}" alt="neeon">
                           </a>
                        </div>
                        <!-- end logo here -->

                        <!-- start main menu -->
                        <div class="main-menu">
                           <nav class="main-menu__nav">
                              <ul>
                                 <li class="main-menu__nav_sub list active">
                                    <a class="animation" href="javascript:void(0)">Xəbərlər</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="{{asset('/kateqoriya/kose-yazilari')}}">Köşə Yazıları</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Vakansiyalar</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="{{asset('/kateqoriya/tecrube-proqramlari')}}">Təcrübə Proqramları</a></li>
                                       <li><a href="{{asset('/kateqoriya/konulluluk')}}">Könüllülük</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Tədbirlər</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="{{asset('/kateqoriya/seminarlar')}}">Seminarlar</a></li>
                                       <li><a href="{{asset('/kateqoriya/telimler')}}">Təlimlər</a></li>
                                       <li><a href="{{asset('/kateqoriya/musabiqeler')}}">Müsabiqələr</a></li>
                                       <li><a href="{{asset('/kateqoriya/konfranslar')}}">Konfranslar</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="javascript:void(0)">Təhsil</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="{{asset('/kateqoriya/xaricde-tehsil')}}">Xaricdə Təhsil</a></li>
                                    </ul>
                                 </li>
                                 <li class="main-menu__nav_sub list">
                                    <a class="animation" href="{{asset('/')}}">Haqqımızda</a>
                                    <ul class="main-menu__dropdown">
                                       <li><a href="#">Elan Göndər</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- end main menu -->

                        <!-- start header actions -->
                        <ul class="header-action-items">
                           <li class="item">
                              <a href="#template-search"><i class="fas fa-search"></i></a>
                           </li>
                           
                           <li class="item humburger offcanvas-menu-btn menu-status-open">
                              <span></span>
                           </li>
                        </ul>
                        <!-- end header actions -->

                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>
            <!-- End Header Main -->

         </header>
         <!-- end header -->

         <!-- start rt-mobile-header -->
         <div class="rt-mobile-header mobile-sticky-on">

            <div id="mobile-sticky-placeholder"></div>
            <!-- end mobile-sticky-placeholder -->

            <div class="mobile-menu-bar-wrap" id="mobile-menu-bar-wrap">
               <div class="mobile-menu-bar">
                  <div class="logo">
                     <a href="{{asset('/')}}">
                        <img src="{{asset('front/media/logo/logo-dark.svg')}}" alt="neeon" width="162" height="52">
                     </a>
                  </div>
                  <span class="sidebarBtn">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                  </span>
               </div>
               <div class="rt-slide-nav">
                  <div class="offscreen-navigation">
                     <nav class="menu-main-primary-container">
                        <ul class="menu">
                           <li class="list menu-item-has-children">
                              <a class="animation" href="{{asset('/')}}">Xəbərlər</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="{{asset('/kateqoriya/kose-yazilari')}}">Köşə Yazıları</a></li>
                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Vakansiyalar</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="{{asset('/kateqoriya/tecrube-proqramlari')}}">Təcrübə Proqramları</a></li>
                                 <li><a href="{{asset('/kateqoriya/konulluluk')}}">Könüllülük</a></li>
                              </ul>

                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="javascript:void(0)">Tədbirlər</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="{{asset('/kateqoriya/seminarlar')}}">Seminarlar</a></li>
                                 <li><a href="{{asset('/kateqoriya/telimler')}}">Təlimlər</a></li>
                                 <li><a href="{{asset('/kateqoriya/musabiqeler')}}">Müsabiqələr</a></li>
                                 <li><a href="{{asset('/kateqoriya/konfranslar')}}">Konfranslar</a></li>
                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="{{asset('/kateqoriya/tehsil')}}">Təhsil</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="{{asset('/kateqoriya/xaricde-tehsil')}}">Xaricdə Təhsil</a></li>
                              </ul>
                           </li>
                           <li class="list menu-item-has-children">
                              <a class="animation" href="{{asset('/')}}">Haqqımızda</a>
                              <ul class="main-menu__dropdown sub-menu">
                                 <li><a href="#">Elan Göndər</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>



         </div>
         <!-- end rt-mobile-header -->