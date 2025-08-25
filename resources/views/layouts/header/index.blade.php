
<header class="header">
   <div class="header-top">
      <div class="container">
         <div class="header-top-wrapper">
            <div class="header-top-left">
               <div class="header-top-contact">
                  <ul>
                     <li><a href="tel:+21236547898"><i class="far fa-phone-volume"></i> {{$setting->phone1}}</a></li>
                     <li><a href="#"><i class="far fa-map"></i> {{$setting->address1}}</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="main-navigation">
      <nav class="navbar navbar-expand-lg">
         <div class="container position-relative">
            <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{$setting->logo}}" alt="logo">
            </a>
            <div class="mobile-menu-right">
               <div class="search-btn">
                  <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
               </div>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
               <ul class="navbar-nav">
                  <li class="nav-item ">
                     <a class="nav-link active" href="{{route('home')}}">Trang chủ</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu</a></li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="{{route('serviceList')}}" data-bs-toggle="dropdown">Giao hàng bến xe</a>
                     <ul class="dropdown-menu fade-down">
                        @foreach ($servicehome as $item)
                           <li><a class="dropdown-item" href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
                        @endforeach
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="{{route('serviceList')}}" data-bs-toggle="dropdown">Hỗ trợ khách hàng</a>
                     <ul class="dropdown-menu fade-down">
                        @foreach ($pageContent as $item)
                               @if ($item->type === 'ho-tro-khanh-hang')
                              <li><a class="dropdown-item" href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                           @endif
                        @endforeach
                     </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tin Tức</a>
                     <ul class="dropdown-menu fade-down">
                        @foreach ($blogCate as $item)
                           <li><a class="dropdown-item" href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a></li>
                        @endforeach
                     </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
               </ul>
               <div class="nav-right">
                  <div class="search-btn">
                     <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                  </div>
                  <div class="nav-right-btn mt-2">
                     <a href="tel:{{$setting->phone1}}" class="theme-btn"><span class="fas fa-taxi"></span>Tư vấn ngay</a>
                  </div>
               </div>
            </div>
            <div class="search-area">
               <form action="#">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Type Keyword...">
                     <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                  </div>
               </form>
            </div>
         </div>
      </nav>
   </div>
</header>