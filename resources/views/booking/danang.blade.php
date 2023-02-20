@include('header')
<title>Đà Nẵng</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<h2 class="mt-5" style="text-align: center"> Đà Nẵng : Hãy chọn cho mình một khách sạn ưng ý</h2>
<div class="khachsan">
    <div class="book">
        <img src="{{ asset('image/danang1.jpg') }}">
        <div class="book1">
            <img src="{{ asset('image/ks11.jpg') }}">
            <img src="{{ asset('image/vila1.jpg') }}">
        </div>
    </div>
    <div class="slide">
        <div class="slide1">
            <img src="{{ asset('image/vila2.jpg') }}">
            <img src="{{ asset('image/ks7.jpg') }}">
            <img src="{{ asset('image/bs5.jpg') }}">
            <img src="{{ asset('image/bs4.jpg') }}">
            <img src="{{ asset('image/res1.jpg') }}">
            <img src="{{ asset('image/res2.jpg') }}">
        </div>
    </div>
    <div class="price">
        <div class="price1">
            <h4>Đánh giá : <img src="{{ asset('image/5sao.png') }}"></h4>
            <h3>Khách sạn,nhà nghỉ tại Đà Nẵng giá cả phải chăng</h3>
            <p>Thành phố Đà Nẵng, Tỉnh Quảng ngãi</p>

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
        <p>Bạn đủ điều kiện nhận giảm giá Genius tại Menora Grand Da Nang! Để tiết kiệm tại chỗ nghỉ này, bạn chỉ cần
            đăng nhập.</p>

        <p>Nhà nghỉ khách sạn của chúng tôi có lễ tân 24 giờ, sảnh khách chung, Wi-Fi và chỗ đỗ xe riêng miễn phí.</p>

        <p>Tọa lạc tại thành phố Đà Nẵng, Menora Grand Da Nang có hồ bơi ngoài trời, sảnh khách chung, nhà hàng và quầy
            bar. Khách sạn 4 sao này cung cấp dịch vụ văn phòng và dịch vụ tiền sảnh. Chỗ nghỉ có lễ tân 24 giờ, dịch vụ
            đưa đón sân bay, dịch vụ phòng và WiFi miễn phí trong toàn bộ khuôn viên.</p>

        <p>Mỗi phòng nghỉ tại Menora Grand Da Nang đều được bố trí máy điều hòa, khu vực ghế ngồi, TV truyền hình vệ
            tinh màn hình phẳng, két an toàn, ấm đun nước và phòng tắm riêng với vòi xịt/chậu rửa vệ sinh, đồ vệ sinh
            cá nhân miễn phí cùng máy sấy tóc. Một số phòng nhìn ra biển. Tất cả các phòng được trang bị ga trải giường
            và khăn tắm.</p>

        <p>Chỗ nghỉ phục vụ bữa sáng buffet, bữa sáng à la carte hoặc bữa sáng kiểu lục địa hằng ngày.</p>

        <p>Menora Grand Da Nang có sân hiên tắm nắng.</p>

        <p>Danang Booking Hotel đã chào đón khách Booking.com từ 9 tháng 3 2018.</p>

        <div class="book2">
            <p>Bạn còn đợi gì nữa mà không đặt một căn phòng ưng ý để nghỉ dưỡng tại Đà Nẵng ngay: </p>
            <a href="{{ route('book') }}">Tại đây </a>
        </div>
    </div>
</div>
<div class="feedback1">
    <h2> Một số nhận xét của khách hàng tại Đà Nẵng </h2>
    @foreach ($danang as $row)
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
