@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main">
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/breacum.jpg')}})">
      <div class="container">
         <h1 class="breadcrumb-title">{{($detail_service->name)}}</h1>
         <ul class="breadcrumb-menu">
            <li><a href="{{route('home')}}">Trang chủ</a></li>
            <li><a href="{{route('home')}}">Dịch vụ</a></li>
            <li class="active">{{($detail_service->name)}}</li>
         </ul>
      </div>
   </div>
   <div class="service-single-area py-60">
      <div class="container">
         <div class="service-single-wrapper">
            <div class="row">
               <div class="col-xl-8 col-lg-8">
                  <div class="service-details">
                     <div class="service-details">
                        <h3 class="mb-30">{{($detail_service->name)}}</h3>
                        <div class="contentarr">
                           {!!languageName($detail_service->content)!!}
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="service-sidebar">
                     <div class="widget category">
                        <h4 class="widget-title">Dịch vụ khác</h4>
                        <div class="category-list">
                           @foreach ($servicehome as $item)
                           <a href="{{route('serviceDetail',['slug'=>$item->slug])}}"><i class="far fa-long-arrow-right"></i>{{$item->name}}</a>
                           @endforeach
                        </div>
                     </div>
                     <div class="widget service-download">
                        <div class="user-profile-card">
                           <h4 class="user-profile-card-title">Yêu cầu tư vấn</h4>
                           <div class="col-lg-12">
                              <div class="user-profile-form">
                                 <form id="submitForm">
                                    <div class="form-group">
                                       <label>Họ tên</label>
                                       <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A">
                                    </div>
                                    <input type="text" name="service" hidden id="">
                                    <div class="form-group">
                                       <label>Số điện thoại</label>
                                       <input type="text" class="form-control" name="phone" placeholder="0123456789">
                                    </div>
                                    <div class="form-group">
                                       <label>Lời nhắn</label>
                                       <input type="text" class="form-control" name="note" placeholder="Ghi chú cho yêu cầu">
                                    </div>
                                    <button type="submit" class="theme-btn my-3"><i class="fa fa-spinner fa-spin spin-icon" aria-hidden="true"></i> Gửi yêu cầu</button>
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
                                  url: "https://script.google.com/macros/s/AKfycbyzVnC9pnnBRgBxGkLCpFVIT4bf73Gp__7kNONNhXGFOJidpO0MlkhmZPtTLcPpd8OJMA/exec",
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
            </div>
         </div>
      </div>
   </div>
</main>
@endsection