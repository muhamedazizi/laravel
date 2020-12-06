@extends('master')

@section('page-title')
post Detials - {{$post_detials->title}} 

@endsection

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2> ما بعد التفاصيل </h2>
          <ol>
            <li><a href="{{route('start')}}">الصفحة الرئيسية</a></li>
            <li> ما بعد التفاصيل </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single" data-aos="fade-up">

              <div class="entry-img">
                <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <div>{{$post_detials->category->title}}</div>
              <h2 class="entry-title">
                <a href="">{{$post_detials->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$post_detials->user->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post_detials->created_at->diffForHumans()}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>{{($post_detials->description)}}</p>
             </div>
             </div>

          
              <!-- End comment #4 -->
              </div>
              </div>
              </div>
              </div>
              </div>
              @endsection