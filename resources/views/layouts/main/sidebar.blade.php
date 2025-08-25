<aside class="sidebar-area">
   <div class="widget widget_categories">
      <div class="card shadow">
         <nav class="bookback">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Đi sân bay</button>
               <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Đi đường dài</button>
            </div>
         </nav>
         <div class="tab-content p-3 border bg-light" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
               <form id="submitFormDisanbay" class="booking-form4 wow fadeInUp background-image " style="visibility: visible; animation-name: fadeInUp;">
                  <div class="row">
                     <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="diemdi" id="s-destination" placeholder="Điểm đi"> 
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                     </div>
                     <div class="form-group col-sm-6">
                           <input type="text" class="form-control" value="Nội Bài" name="diemden" id="e-destination" placeholder="Điểm đến"> 
                           <i class="fa-sharp fa-regular fa-location-dot"></i>
                     </div>
                      <div class="form-group col-sm-6">
                          <input type="text" class="form-control" name="name" id="text" placeholder="Họ Tên"> <i class="fa-light fa-user"></i>
                      </div>
                      <div class="form-group col-sm-6">
                          <input type="number" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"> <i class="fa-light fa-phone-rotary"></i>
                      </div>
                     <div class="form-group col-12">
                        <select name="loaixe" id="passenger" class="form-select">
                           <option value="" selected="selected">Loại xe</option>
                           <option value="4 chỗ">4 chỗ</option>
                           <option value="5 chỗ">5 chỗ</option>
                           <option value="7 chỗ">7 chỗ</option>
                           <option value="16 chỗ">16 chỗ</option>
                        </select>
                     </div>
                     <div class="form-group col-sm-6">
                          <input type="text" class="date-pick form-control" name="ngaydi" id="date-pick" placeholder="Ngày đi"> 
                          <i class="fa-light fa-calendar-days"></i>
                      </div>
                     <div class="form-group col-sm-6">
                          <input type="text" class="time-pick form-control" name="giodi" id="time-pick" placeholder="Giờ đi"> 
                          <i class="fa-light fa-clock"></i>
                      </div>
                     <div class="form-btn col-12"><button type="submit" class="th-btn radius-btn bookdisanbay">Đặt ngay<i class="fa-regular fa-arrow-right ms-2"></i></button></div>
                  </div>
                  <p class="form-messages mb-0 mt-3"></p>
               </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <form id="submitFormDiduongdai" class="booking-form4 wow fadeInUp background-image " style="visibility: visible; animation-name: fadeInUp;">
                  <div class="row">
                     <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="diemdididuongdai" id="s-destination" placeholder="Điểm đi"> 
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                     </div>
                     <div class="form-group col-sm-6">
                           <input type="text" class="form-control" name="diemdendiduongdai" id="e-destination" placeholder="Điểm đến"> 
                           <i class="fa-sharp fa-regular fa-location-dot"></i>
                     </div>
                      <div class="form-group col-sm-6">
                          <input type="text" class="form-control" name="namediduongdai" id="text" placeholder="Họ Tên"> <i class="fa-light fa-user"></i>
                      </div>
                      <div class="form-group col-sm-6">
                          <input type="number" class="form-control" name="phonediduongdai" id="phone" placeholder="Số điện thoại"> <i class="fa-light fa-phone-rotary"></i>
                      </div>
                     <div class="form-group col-12">
                        <select name="loaixediduongdai" id="passenger" class="form-select">
                           <option value="" selected="selected">Loại xe</option>
                           <option value="4 chỗ">4 chỗ</option>
                           <option value="5 chỗ">5 chỗ</option>
                           <option value="7 chỗ">7 chỗ</option>
                           <option value="16 chỗ">16 chỗ</option>
                        </select>
                     </div>
                     <div class="form-group col-sm-6">
                          <input type="text" class="date-pick form-control" name="ngaydididuongdai" id="date-pick" placeholder="Ngày đi"> 
                          <i class="fa-light fa-calendar-days"></i>
                      </div>
                     <div class="form-group col-sm-6">
                          <input type="text" class="time-pick form-control" name="giodididuongdai" id="time-pick" placeholder="Giờ đi"> 
                          <i class="fa-light fa-clock"></i>
                      </div>
                     <div class="form-btn col-12"><button type="submit" class="th-btn radius-btn bookdisanbay">Đặt ngay<i class="fa-regular fa-arrow-right ms-2"></i></button></div>
                  </div>
                  <p class="form-messages mb-0 mt-3"></p>
               </form>
            </div>
            <script>
               $('#submitFormDiduongdai').validate({
                    rules: {
                       "namediduongdai": {
                          required: true,
                       },
                       "phonediduongdai": {
                          required: true,
                          minlength: 8
                       },
                       "loaixediduongdai":{
                          required: true,
                       },
                       "diemdididuongdai":{
                          required: true,
                       },
                       "diemdendiduongdai":{
                          required: true,
                       },
                       "ngaydididuongdai":{
                          required: true,
                       }
                    },
                    messages: {
                       "namediduongdai": {
                          required: "Tên bạn là gì?",
                       },
                       "phonediduongdai": {
                          required: "Nhập sdt liên hệ",
                       },
                       "loaixediduongdai":{
                          required: "Chọn loại xe"
                       },
                       "diemdididuongdai":{
                          required: "Tôi đón bạn ở đâu?"
                       },
                       "diemdendiduongdai":{
                          required: "Chọn điểm đến của bạn"
                       },
                       "ngaydididuongdai":{
                          required: "Bạn muốn đi hôm nào?"
                       }
                    },
              
                 submitHandler: function(form) {
                    $.ajax({
                     url: "https://script.google.com/macros/s/AKfycbzltqWuUhsTC9P5N18VsoWyztOIVtKRbP7Yy0kqQUZfR2gG3RzhgSaDYIiNb9MTK7hX/exec",
                     type: "post",
                     data: $("#submitFormDiduongdai").serializeArray(),
                     success: function () {
                       jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
                     },
                     error: function () {
                       jQuery.notify("Gửi thông tin thất bại", "error");
                     }
                  });
                 }
                 });
                 $('#submitFormDisanbay').validate({
                    rules: {
                       "name": {
                          required: true,
                       },
                       "phone": {
                          required: true,
                          minlength: 8
                       },
                       "loaixe":{
                          required: true,
                       },
                       "diemdi":{
                          required: true,
                       },
                       "diemden":{
                          required: true,
                       },
                       "ngaydi":{
                          required: true,
                       }
                    },
                    messages: {
                       "name": {
                          required: "Tên bạn là gì?",
                       },
                       "phone": {
                          required: "Nhập sdt liên hệ",
                       },
                       "loaixe":{
                          required: "Chọn loại xe"
                       },
                       "diemdi":{
                          required: "Tôi đón bạn ở đâu?"
                       },
                       "diemden":{
                          required: "Chọn điểm đến của bạn"
                       },
                       "ngaydi":{
                          required: "Bạn muốn đi hôm nào?"
                       }
                    },
              
                 submitHandler: function(form) {
                    $.ajax({
                     url: "https://script.google.com/macros/s/AKfycbzltqWuUhsTC9P5N18VsoWyztOIVtKRbP7Yy0kqQUZfR2gG3RzhgSaDYIiNb9MTK7hX/exec",
                     type: "post",
                     data: $("#submitFormDisanbay").serializeArray(),
                     success: function () {
                       jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
                     },
                     error: function () {
                       jQuery.notify("Gửi thông tin thất bại", "error");
                     }
                  });
                 }
                 });
              </script>
         </div>
      </div>
   </div>
   <div class="widget widget_offer background-image" style="background-image: url(&quot;{{url('frontend/img/offer.jpg')}}&quot;);">
      <div class="offer-banner">
         <h5 class="banner-title">Cần giúp đỡ liên hệ ngay với chúng tôi</h5>
         <div class="banner-logo"><img src="{{$setting->logo}}" alt="Taxiar"></div>
         <div class="offer">
            <h6 class="offer-title">Hotline</h6>
            <a class="offter-num" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
         </div>
         <a href="{{route('lienHe')}}" class="th-btn style3">Liên hệ<i class="fa-regular fa-arrow-right"></i></a>
      </div>
   </div>
</aside>