@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
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
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/breacumblog.jpg')}})">
      <div class="container">
         <h1 class="breadcrumb-title">{{$pagecontentdetail->title}}</h1>
         <ul class="breadcrumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('home')}}">Hỗ trợ khách hàng</a></li>
            <li class="active">{{$pagecontentdetail->title}}</li>
         </ul>
      </div>
   </div>
   <div class="blog-single-area py-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="blog-single-wrapper">
                  <div class="blog-single-content">
                     <div class="blog-info">
                        <div class="blog-details">
                           <div class="content-ar">
                              {!!($pagecontentdetail->content)!!}
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