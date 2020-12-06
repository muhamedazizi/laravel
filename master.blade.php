<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> A Z I Z I . @yield('page-title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('essatt/img/favicon.png')}}" rel="icon">
  <link href="{{asset('essatt/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('essatt/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('essatt/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('essatt/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <main id="main">
      <h1 class="logo mr-auto "><a href="{{route('start')}}"><span>< A Z</span> i Z i ></a></h1>
      </main><!-- End #main -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav class="nav-menu d-none d-lg-block " >
        <ul>
          <li class="active"><a href="{{route('start')}}">الصفحة الرئيسية </a></li>

          <li class=""><a href="{{route('about')}}">حول</a></li>

          <li><a href="{{route('services')}}">خدمات </a></li>

          <li><a href="{{route('portfolio')}}">محفظة</a></li>
          
          <li><a href="{{route('blog')}}">مدونة</a></li>

          <li><a href="{{route('contact')}}">اتصل بنا</a></li>

          <p><a class="read-more ml-5" href="#ٍ">تسجيل دخول </a></p>

        </ul>

      </nav><!-- .nav-menu -->
      

      <div class="header-social-links">
        <a href="https://twitter.com/pnYvqlzmBkrjBA2?s=09" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/filmlovelyoven" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/mohammed.1998.azizi?igshid=sm345vqxc2hz" class="instagram"><i class="icofont-instagram"></i></a>
       
      </div>

    </div>
  </header><!-- End Header -->



   
 
   
@yield('content')





   <!-- ======= Footer ======= -->
   <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>شركة</h3>
        <p>
         4.LEVENT <br>
         Istanbul <br>
         Turkey  <br><br>
          <strong> + هاتف: </strong> 905525890998 
          <br>
          <strong> بريد إلكتروني :  </strong>azizi199855@gmail <br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>روابط مفيدة </h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('start')}}">الصفحة الرئيسية </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">عنا </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">خدمات</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">شروط الخدمة </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">سياسة الخصوصية </a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>خدماتنا </h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">تصميم الويب </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">تطوير الويب </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">مونتاج لمقاطع الفديو</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">فوتشوب</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">التصميم الجرافيكي </a></li>
        </ul>
      </div>

     

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy;حقوق النشر  <strong><span>شركة</span></strong>. كل الحقوق محفوظة
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
      تصميم<a href="{{route('start')}}"><< A Z I Z I >>شركة</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="https://twitter.com/pnYvqlzmBkrjBA2?s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="https://www.facebook.com/filmlovelyoven" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="https://instagram.com/mohammed.1998.azizi?igshid=sm345vqxc2hz" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('essatt/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('essatt/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('essatt/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('essatt/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('essatt/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('essatt/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('essatt/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('essatt/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('essatt/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('essatt/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('essatt/js/main.js')}}"></script>

</body>

</html>