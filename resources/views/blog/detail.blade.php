@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="main">
   <div class="site-breadcrumb" style="background: url({{url('frontend/img/breacumblog.jpg')}})">
      <div class="container">
         <h1 class="breadcrumb-title">{{languageName($blog_detail->title)}}</h1>
         <ul class="breadcrumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('home')}}">Tin tức</a></li>
            <li class="active">{{languageName($blog_detail->title)}}</li>
         </ul>
      </div>
   </div>
   <div class="blog-single-area py-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <div class="blog-single-wrapper">
                  <div class="blog-single-content">
                     <div class="blog-info">
                        <div class="blog-meta">
                           <div class="blog-meta-left">
                              <ul>
                                 <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                 <li><i class="far fa-calendar-alt"></i>{{date_format($blog_detail->created_at,'d/m/Y')}}</li>
                              </ul>
                           </div>
                        </div>
                        <div class="blog-details">
                           <h3 class="blog-details-title mb-20">{{languageName($blog_detail->title)}}</h3>
                           <div class="content-ar">
                              {!!languageName($blog_detail->content)!!}
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <aside class="sidebar">
                  <div class="widget recent-post">
                     <h5 class="widget-title">Bài viết mới</h5>
                     @foreach ($bloglq as $item)
                     <div class="recent-post-single">
                        <div class="recent-post-img">
                           <a class="w-100" href="{{route('detailBlog',['slug'=>$item->slug])}}">
                              <img src="{{$item->image}}" alt="thumb">
                           </a>
                           
                        </div>
                        <div class="recent-post-bio">
                           <h6 class=""><a class="line_2" href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h6>
                           <span><i class="far fa-clock"></i>{{date_format($item->created_at,'d/m/Y')}}</span>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <div class="widget category">
                     <h5 class="widget-title">Dịch vụ của chúng tôi</h5>
                     <div class="category-list">
                        @foreach ($servicehome as $item)
                        <a href="{{route('serviceDetail',['slug'=>$item->slug])}}"><i class="far fa-arrow-right"></i>{{$item->name}}</a>
                        @endforeach
                     </div>
                  </div>
                  
               </aside>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection