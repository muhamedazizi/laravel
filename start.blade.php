@extends('master')

@section('page-title')
  Home 

@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('essatt/img/slide/slide-1.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2> << A Z I Z I >>  <span>  اهلا بك في شركة </span></h2>
              <p>.تأسست هذه الشركة  للحلول البرمجية لتكون كيان يدفع باتجاه تطور صناعة البرمجيات في المنطقة وفق أحدث الطرق العلمية وترسيخ فكر الإبداع و الإتقان في هذه الصناعة اعتماداً على كوادر ذات مستوى علمي مميز وخبرة كبيرة بالسوق البرمجية، حيث تهدف لتطوير أفكار ومشاريع برمجية رائدة وإدارتها، بالإضافة لتقديم حلول متكاملة.</p>
              <div class="text-center"><a href="{{route('about')}}" class="btn-get-started">تعرف على المزيد </a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('essatt/img/slide/slide-2.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>الخدمات الذي نهتم بتقديمها للزبائن</h2>
              <p>لتبدأ اليوم مشروعك معنا .
اذا كنت صاحب فكرة تجارية مميزة أو مشروع تجاري ناشئ وترغب بإظهاره بشكل قوي في السوق،  سنأخذ
بيدك لتبني معك هذا الحلم ونقدم لك كافة الخدمات والمميزات اللازمة.

 </p>
              <div class="text-center"><a href="{{route('services')}}" class="btn-get-started">تعرف على المزيد</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('essatt/img/slide/slide-3.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2> نصائحنا لمن يرغب في الدخول لعالم البرمجيات</h2>
              <p>
إن القدرة على البرمجة هي مهارة رائعة حيث تعطيك شعورًا بالرضى على المستوى الشخصي والمهني، بالإضافة إلى أنها تمكّنك من البناء وحل المشاكل والاختراع. كما تستطيع أن تفتح لك أبوابًا لكل أنواع المهن بفوائد كبيرة، كمرتبٍ محترم أو حرية العمل من أي مكان وفي أي وقت، أو كلاهما معًا.</p>
              <div class="text-center"><a href="{{route('blog')}}" class="btn-get-started">تعرف على المزيد</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">السابق</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">التالي</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  
@endsection
