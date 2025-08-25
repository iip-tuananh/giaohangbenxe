@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<main class="main">
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/breacumblog.jpg')}})">
      <div class="container">
         <h2 class="breadcrumb-title">{{$title_page}} </h2>
         <ul class="breadcrumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">{{$title_page}} </li>
         </ul>
      </div>
   </div>
   <div class="blog-area py-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mx-auto">
               <div class="site-heading text-center">
                  <span class="site-title-tagline"><i class="flaticon-drive"></i>Blog</span>
                  <h2 class="site-title">{{$title_page}}</h2>
                  <div class="heading-divider"></div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($blog as $key => $item)
            <div class="col-md-6 col-lg-4">
               <div class="blog-item wow fadeInUp" data-wow-delay=".{{$key+2}}5s">
                  <div class="blog-item-img">
                     <a class="w-100" href="{{route('detailBlog',['slug'=>$item->slug])}}">
                        <img  src="{{$item->image}}" alt="Thumb">
                     </a>
                  </div>
                  <div class="blog-item-info">
                     <div class="blog-item-meta">
                        <ul>
                           <li><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><i class="far fa-user-circle"></i> By Admin</a></li>
                           <li><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><i class="far fa-calendar-alt"></i> {{date_format($item->created_at,'d/m/Y')}}</a></li>
                        </ul>
                     </div>
                     <h4 class="blog-title">
                        <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a>
                     </h4>
                     <a class="theme-btn" href="#">Chi tiết<i class="fas fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <div class="pagination-area">
            <div aria-label="Page navigation example">
               {{$blog->links()}}
            </div>
         </div>
      </div>
   </div>
</main>
@endsection