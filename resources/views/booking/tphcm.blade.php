@include('header')
<title>TP.Hồ Chí Minh</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<h2 class="mt-5" style="text-align: center"> TP Hồ Chí Minh : Hãy chọn cho mình một khách sạn ưng ý</h2>
<div class="khachsan">
    <div class="book">
        <img src="{{ asset('image/hcm1.jpg') }}">
        <div class="book1">
            <img src="{{ asset('image/ks18.jpg') }}">
            <img src="{{ asset('image/vila7.jpg') }}">
        </div>
    </div>
    <div class="slide">
        <div class="slide1">
            <img src="{{ asset('image/vila8.jpg') }}">
            <img src="{{ asset('image/bs1.jpg') }}">
            <img src="{{ asset('image/bs2.jpg') }}">
            <img src="{{ asset('image/bs3.jpg') }}">
            <img src="{{ asset('image/res7.jpg') }}">
            <img src="{{ asset('image/res8.jpg') }}">
        </div>
    </div>
    <div class="price">
        <div class="price1">
            <h4>Đánh giá : <img src="{{ asset('image/5sao.png') }}"></h4>
            <h3>Khách sạn,nhà nghỉ tại TP.Hồ Chí Minh giá cả phải chăng</h3>
            <p>Thành phố Hồ Chí Minh</p>

        </div>
        <div class="price2">
            <table class="price3">
                <tr>
                    <th>Loại Phòng</th>
                    <th>Giá Phòng</th>
                </tr>
                <tr>
                    <td>Phòng đơn</td>
                    <td>500.000 VND/Ngày</td>
                </tr>
                <tr>
                    <td>Phòng đôi</td>
                    <td>800.000 VND/Ngày</td>
                </tr>
                <tr>
                    <td>Phòng thương gia</td>
                    <td>1.000.000 VND/Ngày</td>
                </tr>
                <tr>
                    <td>Villa</td>
                    <td>2.000.000 VND/Ngày</td>
                </tr>
                <tr>
                    <td>Resort</td>
                    <td>2.500.000 VND/Ngày</td>
                </tr>
            </table>
            <a class="price4" href="{{ route('book') }}">Đặt Phòng </a>
        </div>
    </div>

    <div class="title">
        <p>Nhà nghỉ khách sạn của chúng tôi có lễ tân 24 giờ, sảnh khách chung, Wi-Fi và chỗ đỗ xe riêng miễn phí.</p>

        <p>Mỗi căn tại đây đều có ghế sofa, khu vực ghế ngồi, TV truyền hình cáp màn hình phẳng, bếp ăn đầy đủ tiện nghi
            với khu vực ăn uống và phòng tắm riêng đi kèm áo choàng tắm. Các căn còn được trang bị lò vi sóng, tủ lạnh,
            bếp nấu ăn và ấm đun nước.</p>

        <p>Trung tâm thương mại Takashimaya Việt Nam nằm trong bán kính 1,9 km từ căn hộ trong khi Chợ ẩm thực đường
            phố Bến Thành cách đó 2,3 km. Sân bay gần nhất là sân bay quốc tế Tân Sơn Nhất, cách Homet Saigon -
            RiverGate 8 km.</p>

        <p>Du khách cũng có thể thư giãn trên sân hiên tắm nắng.</p>

        <p>Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm 9 cho kỳ nghỉ dành cho 2 người.</p>

        <p>Homet Saigon - RiverGate đã chào đón khách Booking.com từ 22 tháng 9 2022.</p>
        <div class="book2">
            <p>Bạn còn đợi gì nữa mà không đặt một căn phòng ưng ý để nghỉ dưỡng tại TP.Hồ Chí Minh ngay: </p>
            <a href="{{ route('book') }}">Tại đây </a>
        </div>
    </div>
</div>
<div class="feedback1">
    <h2> Một số nhận xét của khách hàng tại TP Hồ Chí Minh </h2>
    @foreach ($dalat as $row)
        <div class="feedback_title">
            <div class="icon">
                <img src="{{ asset('image/cus.jpg') }}">
                <p> {{ $row->username }}</p>
            </div>
            <div class="icon">
                <img src="{{ asset('image/loca.png') }}">
                <p> {{ $row->location }}</p>
            </div>
            <p>Loại phòng : {{ $row->room_type }}</p>
            <p>Đánh giá : {{ $row->title }}</p>
        </div>
    @endforeach
</div>

@include('footer')
