<footer class="footer-area">
   <div class="footer-widget">
      <div class="container">
         <div class="row footer-widget-wrapper pt-120 pb-70">
            <div class="col-md-6 col-lg-4">
               <div class="footer-widget-box about-us">
                  <a href="{{route('home')}}" class="footer-logo">
                  <img src="{{$setting->logo}}" alt>
                  </a>
                  <p class="mb-3">
                     {{$setting->webname}}
                  </p>
                  <ul class="footer-contact">
                     <li><a href="tel:+21236547898"><i class="far fa-phone"></i>{{$setting->phone1}} - {{$setting->phone2}}</a></li>
                     <li><i class="far fa-map-marker-alt"></i>{{$setting->address1}}</li>
                     <li><i class="far fa-map-marker-alt"></i>{{$setting->address2}}</li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6 col-lg-5">
               <div class="footer-widget-box list">
                  <h4 class="footer-widget-title">Chính sách và bảo mật</h4>
                  <ul class="footer-list">
                     @foreach ($pageContent as $item)
                     @if ($item->type == 'ho-tro-khanh-hang')
                     <li><a href="{{route('pagecontent',['slug'=>$item->slug])}}"><i class="fas fa-caret-right"></i> {{$item->title}}</a></li>
                     @endif
                     @endforeach
                  </ul>
               </div>
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="footer-widget-box list">
                  <h4 class="footer-widget-title">Vị trí</h4>
                  <div class="footer-newsletter">
                      {!!$setting->iframe_map!!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-md-6 align-self-center">
               <p class="copyright-text">
                  &copy; Copyright <span id="date"></span> <a href="#"> Giao Hàng Bến Xe </a> All Rights Reserved.
               </p>
            </div>
            <div class="col-md-6 align-self-center">
               <ul class="footer-social">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>