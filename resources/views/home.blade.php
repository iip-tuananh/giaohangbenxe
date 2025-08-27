@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main">
   <div class="hero-section">
      <div class="hero-slider owl-carousel owl-theme">
         @foreach ($banner as $item)
         <div class="hero-single" style="background: url({{$item->image}})">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12 col-lg-9 mx-auto">
                     <div class="hero-content text-center">
                        <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Giao hàng bến xe
                        </h6>
                        <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                           {!!$item->title!!}
                        </h1>
                        <p data-animation="fadeInLeft" data-delay=".75s">
                           {{$item->description}}
                        </p>
                        <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                           <a href="tel:{{$setting->phone1}}" class="theme-btn"><i class="fas fa-phone"></i> {{$setting->phone1}}</a>
                           <a href="{{$item->link}}" class="theme-btn theme-btn2"><i class="fas fa-arrow-right"></i> Chi tiết</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   <div class="about-area pt-60">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                  <div class="about-img">
                     <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$gioithieu->image}}" alt="about">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                  <div class="site-heading mb-3">
                     <span class="site-title-tagline justify-content-start">
                     <i class="flaticon-drive"></i> Giao Hàng Bến Xe
                     </span>
                     <h2 class="site-title">
                        Về chúng tôi
                     </h2>
                  </div>
                  <div class="about-text line_10">
                      {!!$gioithieu->content!!}
                  </div>
                  <a href="{{route('aboutUs')}}" class="theme-btn mt-4">Xem thêm<i class="fas fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="service-area bg pt-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="site-heading text-center">
                  <span class="site-title-tagline">Services</span>
                  <h2 class="site-title">Dịch vụ của chúng tôi</h2>
                  <div class="heading-divider"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($servicehome as $key => $item)
            <div class="col-md-6 col-lg-4">
               <div class="service-item wow fadeInUp" data-wow-delay=".{{$key+2}}5s">
                  <div class="service-img">
                     <a class="w-100" href="{{route('serviceDetail',['slug'=>$item->slug])}}">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="{{($item->name)}}">
                     </a>
                     
                  </div>
                  <div class="service-content">
                     <h3 class="service-title">
                        <a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{($item->name)}}</a>
                     </h3>
                     <p class="service-text line_2">
                      {{languageName($item->description)}}
                     </p>
                     <div class="service-arrow">
                        <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="theme-btn">Chi tiết<i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="counter-area">
      <div class="container">
         <div class="counter-wrapper">
            <div class="row">
               <div class="col-lg-3 col-sm-6 col-6">
                  <div class="counter-box">
                     <div class="icon">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{env('AWS_R2_URL')}}/frontend/img/icon1.png" alt="icon1">
                     </div>
                     <div>
                        <span class="counter" data-count="+" data-to="10" data-speed="1000">10</span>
                        <h6 class="title">+ Năm kinh nghiệm </h6>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-6">
                  <div class="counter-box">
                     <div class="icon">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{env('AWS_R2_URL')}}/frontend/img/icon2.png" alt="icon2">
                     </div>
                     <div>
                        <span class="counter" data-count="+" data-to="900" data-speed="1000">900</span>
                        <h6 class="title">+ Khách hàng mỗi năm</h6>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-6">
                  <div class="counter-box">
                     <div class="icon">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{env('AWS_R2_URL')}}/frontend/img/icon3.png" alt="icon3">
                     </div>
                     <div>
                        <span class="counter" data-count="+" data-to="30" data-speed="1000">30</span>
                        <h6 class="title">+ Nhân sự lành nghề</h6>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-6">
                  <div class="counter-box">
                     <div class="icon">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{env('AWS_R2_URL')}}/frontend/img/icon4.png" alt="icon4">
                     </div>
                     <div>
                        <span class="counter" data-count="+" data-to="24" data-speed="1000">24</span>
                        <h6 class="title">+ Hỗ trợ tư vấn 24/7</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="feature-area feature-bg pt-60">
      <div class="container mt-150">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="site-heading text-center">
                  <span class="site-title-tagline">Why Choise</span>
                  <h2 class="site-title text-white">Tại sao nên chọn Giao Hàng Bến Xe</h2>
                  <div class="heading-divider"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($whychoise as $key => $item)
            <div class="col-md-6 col-lg-3">
               <div class="feature-item wow fadeInUp" data-wow-delay=".{{$key+1}}5s">
                  <div class="feature-icon">
                     <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="{{$item->image}}">
                  </div>
                  <div class="feature-content">
                     <h4>{{$item->name}}</h4>
                     <p>{{languageName($item->description)}}
                     </p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>

   <div class="faq-area pt-60 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="faq-right">
                  <div class="site-heading mb-3">
                     <span class="site-title-tagline justify-content-start">Faq's</span>
                     <h2 class="site-title my-3">Câu hỏi thường gặp</h2>
                  </div>
                  <p class="about-text">Chúng tôi sẽ giải đáp một số câu hỏi thường gặp của khách hàng khi sử dụng dịch vụ
                  </p>
                  <div class="faq-img mt-3">
                     <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://imagedelivery.net/XP6SKQ-NzRtLXs1fzgn4HA/2be2a0cf-5f8d-495b-b409-0a75a3471f00/public" alt="slider-1.jpg">
                  </div>
               </div>
            </div>
            @php
                $fag = json_decode($setting->footer_content);
            @endphp
            <div class="col-lg-6">
               <div class="accordion" id="accordionExample">
                  @foreach ($fag[0]->fag_detail as $key =>  $i)
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne_{{$key}}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{$key}}" aria-expanded="{{$key == 0 ? 'true' : 'false'}}" aria-controls="collapseOne_{{$key}}">
                        <span><i class="far fa-question"></i></span> {{$i->name}}
                        </button>
                     </h2>
                     <div id="collapseOne_{{$key}}" class="accordion-collapse collapse {{$key == 0 ? 'show' : ''}}" aria-labelledby="headingOne_{{$key}}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           {{$i->content}}
                        </div>
                     </div>
                  </div>
                  @endforeach
                  
                 
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
                     <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->avatar}}" alt="avatar">
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
   <div class="contact-area pt-60">
      <div class="container">
         <div class="contact-wrapper">
            <div class="row">
               <div class="col-lg-6 align-self-center">
                  <div class="contact-img">
                     <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="/frontend/img/tuvan.png" alt="chuyenha">
                  </div>
               </div>
               <div class="col-lg-6 align-self-center">
                  <div class="contact-form">
                     <div class="contact-form-header">
                        <h2>Yêu cầu tư vấn dịch vụ</h2>
                        <p>Chúng tôi rất mong muốn nhận được yêu cầu tư vấn từ khách hàng để phát triển và hoàn thiện dịch vụ hơn
                        </p>
                     </div>
                     <form id="submitForm">
                        <div class="form-group">
                           <input type="text" class="form-control" name="name" placeholder="Họ Tên" required="">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required="">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                           <select class="form-control" name="service" id="" placeholder="Dịch vụ cần tư vấn">
                              <option value="">Dịch vụ cần tư vấn</option>
                              @foreach ($servicehome as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <button type="submit" class="theme-btn">Send
                        Message  <i class="fa fa-spinner fa-spin spin-icon" aria-hidden="true"></i></button>
                        <div class="col-md-12 mt-3">
                           <div class="form-messege text-success"></div>
                        </div>
                     </form>
                     <script>
                        $('#submitForm').validate({
                     rules: {
                        "name": {
                           required: true,
                        },
                        "phone": {
                           required: true,
                           minlength: 10
                        },
                        "service":{
                           required: true,
                        }
                     },
                     messages: {
                        "name": {
                           required: "Tên bạn là gì?",
                        },
                        "phone": {
                           required: "Nhập sdt liên hệ",
                           minlength:"Số điện thoại phải 10 ký tự"
                        },
                        "service":{
                           required: "Chọn dịch vụ"
                        },
                     },
               
                  submitHandler: function(form) {
                     $(".spin-icon").css("display", "block");
                     $.ajax({
                      url: "https://script.google.com/macros/s/AKfycbzVT0pLWI2Pxf7GT8rJy4380XMMCxC5y5OTGuHOzvWL31-YV0YT9S4JA-4Tlh6No96z/exec",
                      type: "post",
                      data: $("#submitForm").serializeArray(),
                      success: function () {
                        $(".spin-icon").css("display", "none");
                        jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
                      },
                      error: function () {
                        $(".spin-icon").css("display", "none");
                        jQuery.notify("Gửi thông tin thất bại", "error");
                      }
                   });
                  }
                  });
                     </script>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="blog-area pt-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="site-heading text-center">
                  <span class="site-title-tagline"><i class="flaticon-drive"></i> Blog</span>
                  <h2 class="site-title">Tin tức & kiến thức</h2>
                  <div class="heading-divider"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($hotnews as $item)
            <div class="col-md-6 col-lg-4">
               <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                  <div class="blog-item-img">
                     <a class="w-100" href="{{route('detailBlog',['slug'=>$item->slug])}}">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="Thumb">
                     </a>
                  </div>
                  <div class="blog-item-info">
                     <div class="blog-item-meta">
                        <ul>
                           <li><a href="#"><i class="far fa-user-circle"></i> By Admin</a></li>
                           <li><a href="#"><i class="far fa-calendar-alt"></i> {{date_format($item->created_at,'d/m/Y')}}</a></li>
                        </ul>
                     </div>
                     <h4 class="blog-title">
                        <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a>
                     </h4>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="partner pt-80 pb-80">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mx-auto">
                 <div class="site-heading text-center">
                    <h2 class="site-title">Đối tác chiến lược</h2>
                    <div class="heading-divider"></div>
                 </div>
              </div>
           </div>
         <div class="partner-slider owl-carousel owl-theme">
            @foreach ($partner as $item)
            <div class="partner-item">
               <div class="partner-img">
                  <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->image}}" alt="image">
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</main>
@endsection