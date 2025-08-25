@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main">
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/breacumcontact.jpg')}})">
      <div class="container">
         <h2 class="breadcrumb-title">Liên Hệ</h2>
         <ul class="breadcrumb-menu">
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li class="active">Liên hệ</li>
         </ul>
      </div>
   </div>
   <div class="contact-area py-60">
      <div class="container">
         <div class="contact-content">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact-info">
                     <div class="contact-info-icon">
                        <i class="fa fa-map-location-dot"></i>
                     </div>
                     <div class="contact-info-content">
                        <h5>Địa chỉ</h5>
                        <p>{{$setting->address1}}</p>
                        <p>{{$setting->address2}}</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact-info">
                     <div class="contact-info-icon">
                        <i class="fa fa-phone-volume"></i>
                     </div>
                     <div class="contact-info-content">
                        <h5>Hotline</h5>
                        <p>{{$setting->phone1}}</p>
                        <p>{{$setting->phone2}}</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact-info">
                     <div class="contact-info-icon">
                        <i class="fa fa-envelopes"></i>
                     </div>
                     <div class="contact-info-content">
                        <h5>Email</h5>
                        <p>{{$setting->email}}</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-wrapper">
            <div class="row">
               <div class="col-lg-6 align-self-center">
                  <div class="contact-img">
                     <img src="{{url('frontend/img/contact.jpg')}}" alt="">
                  </div>
               </div>
               <div class="col-lg-6 align-self-center">
                  <div class="contact-form">
                     <div class="contact-form-header">
                        <h2>Gửi lời nhắn cho chúng tôi</h2>
                     </div>
                     <form method="post" action="{{route('postcontact')}}" >
                        @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="name" placeholder="Họ Tên" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" required="">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Lời nhắn"></textarea>
                        </div>
                        <button type="submit" class="theme-btn">Gửi thông tin<i class="far fa-paper-plane"></i></button>
                        <div class="col-md-12 mt-3">
                           <div class="form-messege text-success"></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="contact-map">
      {!!$setting->iframe_map!!}
   </div>
</main>
@endsection