@extends('layouts.main.master')
@section('title')
Giới thiệu về CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ NĂNG LƯỢNG TÁI TẠO
@endsection
@section('description')
Giới thiệu về CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ NĂNG LƯỢNG TÁI TẠO
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main">
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/about.jpg')}})">
      <div class="container">
         <h2 class="breadcrumb-title">About Us</h2>
         <ul class="breadcrumb-menu">
            <li><a href="index.html">Home</a></li>
            <li class="active">About Us</li>
         </ul>
      </div>
   </div>
   <div class="about-area py-60">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <div class="about-right wow fadeInRight text-center" data-wow-delay=".25s">
                  <div class="site-heading mb-3">
                     <span class="site-title-tagline justify-content-start">
                     <i class="flaticon-drive"></i> About Us
                     </span>
                     <h2 class="site-title">
                       {{$setting->company}}
                     </h2>
                  </div>
                 
               </div>
               <div class="wow fadeInRight" data-wow-delay=".35s">
                  {!!$gioithieu->content!!}
               </div>
              
            </div>
         </div>
      </div>
   </div>
   <div class="testimonial-area pt-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="site-heading text-center">
                  <span class="site-title-tagline"><i class="flaticon-drive"></i> Giao Hàng Bến Xe</span>
                  <h2 class="site-title text-white">Khách hàng nói gì về chúng tôi?</h2>
                  <div class="heading-divider"></div>
               </div>
            </div>
         </div>
         <div class="testimonial-slider owl-carousel owl-theme">
            @foreach ($reviewcus as $item)
            <div class="testimonial-single">
               <div class="testimonial-content">
                  <div class="testimonial-author-img">
                     <img src="{{$item->avatar}}" alt>
                  </div>
                  <div class="testimonial-author-info">
                     <h4>{{languageName($item->name)}}</h4>
                     <p>{{languageName($item->position)}}</p>
                  </div>
               </div>
               <div class="testimonial-quote">
                  <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                  {!!languageName($item->content)!!}
               </div>
               <div class="testimonial-rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</main>





@endsection