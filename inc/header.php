<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <!-- <title>Leuk Health</title> -->
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?=$title?></title>
    <meta name="msvalidate.01" content="4F12E6C4554899D24BB2512DA4DF9008" />
    <meta name="title" content="<?=$title; ?>" />
    <meta name="ROBOTS" content="FOLLOW,INDEX" />

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/leuk-logo-title.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/custom-animation.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
      
  <!-- preloader -->
  <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
    <!-- preloader end  -->

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target tp-style-green" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->

   <header class="tp-header-height z-index-p-r ">
         <!-- tp-header-area-start -->
         <div id="header-sticky" class="tp-header-2__area header-sticky-bg-2 tp-header-2__transparent tp-header-2__plr z-index-3">
            <div class="container-fluid g-0">
               <div class="row g-0 align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                     <div class="tp-header-2__logo">
                        <a class="white-logo" href="index.php"><img class="w-60" src="assets/img/logo/leuk-logo-white.png" alt=""></a>
                        <a class="black-logo" href="index.php"><img class="w-60" src="assets/img/logo/leuk-logo.png" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                     <div class="tp-header-2__main-menu text-center">
                        <nav id="mobile-menu">
                            <ul class="item-nav">
                              <li <?php echo ($title == 'Leuk Health | Connected Health Platform') ? "class='item active'" : "item"; ?>>
                                 <a href="index.php">Home</a>
                              </li>
                              <li <?php echo ($title == 'For Patients | Connected Health Platform | Leuk Health') ? "class='item active'" : "item"; ?>>
                                 <a href="service.php">For Patient</a>
                              </li>
                              <li <?php echo ($title == 'For Doctors | Connected Health Platform | Leuk Health') ? "class='item active'" : "item"; ?>>
                                 <a href="for-doctors.php">For Doctors</a>
                              </li>
                              <!-- <li><a href="service.php">Service</a></li> -->
                              <li <?php echo ($title == 'About | Connected Health Platform ') ? "class='item active'" : "item"; ?>>
                                 <a href="about.php">About</a>
                                 <ul class="submenu">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="career.php">Career</a></li>
                                 </ul>
                              </li>
                              <li <?php echo ($title == 'Contact | Connected Health Platform | Leuk Health') ? "class='item active'" : "item"; ?>>
                                 <a href="contact.php">Contact</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                     <div class="tp-header-2__right d-flex align-items-center justify-content-end">
                        <!-- <a class="tp-header-2__login d-none d-md-block" href="register.php">Login</a> -->
                        <a class="tp-header-2__login d-none d-md-block" href="https://doctor.leukhealth.com/login" target="_blank">Login</a>
                        <a class="tp-btn-green-sm d-none d-md-block" href="register.php">Sign Up</a>
                        <a class="header-bottom__bar tp-menu-bar d-lg-none" href="javascript:void(0)"><i class="fal fa-bars"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tp-header-area-end -->
      </header>
</body>
</html>