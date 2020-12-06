@extends('master')

@section('page-title')
  blog

@endsection

@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>مدونة</h2>

         
        
          <ol>
         

            <li><a href="{{route('start')}}">الصفحة الرئيسية</a></li>
            <li>مدونة</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
   
    <!-- Example single danger button -->
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-more">التصنيف</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">

  @foreach($categories as $category)
    <a class="dropdown-item" href="#">{{$category->title}}</a>
    @endforeach
  </div>
</div>






    <!-- ======= Blog Section ======= -->

    <section id="blog" class="blog">
    
      <div class="container">
  
        <div class="row mb-2">
        <div class="floblog">
                <img class="mb-5" src="{{asset('essatt/img/blog-1.jpg')}}" alt="" height="420px" width='1135px' >
              </div>

              
        @foreach($posts as $post)
       
        
          <div class="col-lg-6 entries">
        
            <article class="entry" data-aos="fade-up">

                <div class="entry-title"><a href="{{route('posts.show',[$post->id])}}"> <h5>{{$post->category->title}}</h5></a></div>
              <h2 class="entry-title">
                <a  href="{{route('posts.show',[$post->id])}}">{{$post->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$post->user->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$post->created_at->diffForHumans()}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{Str::words($post->description,10)}}
                </p >
                <div class="read-more">

                <a href="{{ route('posts.show',[$post->id]) }}" class="default-btn">التفاصيل</a>

                </div>
                
              </div>
            
            </article><!-- End blog entry -->
         
            </div>
         @endforeach
            </div>
        
         </div> 
        
            <div class="blog-pagination">
              <ul class="justify-content-center">
                
                <li><a href="{{ route('cars') }}" class="boxed_btn_rev">إقرأ المزيد</a></li>
              </ul>
            </div>  
         </div> 
     </div> 
  </section><!-- End Blog Section -->

    @endsection