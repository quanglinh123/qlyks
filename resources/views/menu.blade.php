@include('header')
<title>Trang chủ</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/style.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<div class = "menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<div class = "all">
        <h2> Khám phá việt nam </h2>
        <h4> Các điểm đến phổ biến này có nhiều điều chờ đón bạn </h4>
        <div class="table">   
                <li class="abc">
                        <a class ="image" href ="{{route('dalat')}}"><img src = "{{asset('image/dalat.jpg')}}" > </a>
                        <a href ="{{route('dalat')}}">Đà lạt</a>
                        <p>Đà lạt phong cảnh hữu tình</p>
                </li>
                <li>
                        <a class ="image" href ="{{route('danang')}}"> <img src = "{{asset('image/danang.jpg')}}"> </a>
                        <a href ="{{route('danang')}}">Đà Nẵng</a>
                        <p>Đà Nẵng cầu rồng tuyệt đẹp</p>
                </li>
                <li>    
                        <a class ="image" href ="{{route('halong')}}"> <img src = "{{asset('image/halong.jpg')}}"> </a>
                        <a href ="{{route('halong')}}">Hạ Long</a>
                        <p>Biển hạ long trong xanh mát mẻ</p>
                </li>
                <li>    
                        <a class ="image" href ="{{route('phuquoc')}}"> <img src = "{{asset('image/phuquoc.jpg')}}"> </a>
                        <a href ="{{route('phuquoc')}}">Phú Quốc</a>
                        <p>Thư giãn cùng phú quốc</p>
                </li>
                <li>
                        <a class ="image" href ="{{route('tphcm')}}"> <img src = "{{asset('image/tphcm.jpg')}}"> </a>
                        <a href ="{{route('tphcm')}}">Tp Hồ Chí Minh</a>
                        <p>Thành phố mang tên Bác</p>
                </li>
        </div>
</div>
<div class = " khachsan1">
        <h2> Một số resort đáng chú ý </h2>
        <div class="table1">   
                <li>
                        <img src = "{{asset('image/ks1.jpg')}}" > 
                        <p>Khách sạn 5 sao Đà Lạt</p>
                </li>
                <li>
                        <img src = "{{asset('image/ks2.jpg')}}">
                        <p>Phòng nghỉ Hạ Long</p>
                </li>
                <li>    
                        <img src = "{{asset('image/ks3.jpg')}}">
                        <p>Khách sạn 4 sao Đà Nẵng</p>
                </li>
                <li>    
                        <img src = "{{asset('image/ks4.jpg')}}">
                        <p>Resort Phú Quốc</p>
                </li>
        </div>
</div>
<div class = "tit">
        <h2> Tiết kiệm thời gian và tiền bạc</h2>
        <a href="{{route('book')}}">Đặt phòng ngay để nhận ưu đãi tốt nhất </a>
</div>
<div class="feedback" id="table_data"  >
        @include('fblist')

</div>
<script>
        $(document).ready(function(){
         
         $(document).on('click', '.pagination a', function(event){
          event.preventDefault(); 
          var page = $(this).attr('href').split('page=')[1];
          fetch_data(page);
         });
         
         function fetch_data(page)
         {
          $.ajax({
           url:"fb.getfb?page="+page,
           success:function(feedback)
           {
            $('#table_data').html(feedback);
           }
          });
         }
         
        });
        </script> 

@include('footer')