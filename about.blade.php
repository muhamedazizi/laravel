@extends('master')

@section('page-title')
  Abot 

@endsection

@section('content')
<!-- ======= About Us Section ======= -->

<main id="main">
<section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title mt-5">
          <h2>عنا</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>:رؤيتنا</h2>
            <h3>الريادة في إبداع وتطوير أفكار برمجية خلاقة على مستوى المنطقة.</h3>

            <h2>:ما يميزنا
            </h2>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> أساس منتجنا رؤية علمية واضحة.</li>
              <li><i class="ri-check-double-line"></i> تسخير أحدث وأرقى التقنيات المعلوماتية.</li>
              <li><i class="ri-check-double-line"></i> خدمة ما بعد البيع من أولوياتنا.</li>
              <li><i class="ri-check-double-line"></i> رضى الزبون يهمنا.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            <h2> :رسالتنا </h2> تأسست شركة نماء 
            للحلول البرمجية لتكون كيان يدفع باتجاه تطور صناعة البرمجيات في المنطقة وفق أحدث الطرق العلمية 
            وترسيخ فكر الإبداع و الإتقان في هذه الصناعة اعتماداً على كوادر ذات مستوى علمي مميز وخبرة كبيرة بالسوق البرمجية، 
            حيث تهدف لتطوير أفكار ومشاريع برمجية رائدة وإدارتها، بالإضافة لتقديم حلول متكاملة لعملائها
             في مجالات تطبيقات الويب وتطبيقات الهواتف الذكية بكافةأنظمتها 
            وإنجاز متطلباتهم بدقة وكفاءة عالية.
            </p>
            <p class="font-italic">
            
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2><strong>فريقنا</strong></h2>
      <p>فريق عملنا  يعمل بشكل دائم ليكون مواكب لأخر التقنيات المستخدمة. </p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="{{asset('essatt/img/team/team-1.jpg')}}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{asset('essatt/img/team/team-2.jpg')}}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="{{asset('essatt/img/team/team-3.jpg')}}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>CTO</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="{{asset('essatt/img/team/team-4.jpg')}}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Our Team Section -->

<!-- ======= Footer ======= -->
    </main><!-- End #main -->

    @endsection



       