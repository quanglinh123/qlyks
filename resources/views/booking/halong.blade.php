@include('header')
<title>Hạ Long</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<h2 class="mt-5" style="text-align: center"> Hạ Long : Hãy chọn cho mình một khách sạn ưng ý</h2>
<div class="khachsan">
    <div class="book">
        <img src="{{ asset('image/halong1.jpg') }}">
        <div class="book1">
            <img src="{{ asset('image/ks13.jpg') }}">
            <img src="{{ asset('image/vila3.jpg') }}">
        </div>
    </div>
    <div class="slide">
        <div class="slide1">
            <img src="{{ asset('image/bs8.jpg') }}">
            <img src="{{ asset('image/bs7.jpg') }}">
            <img src="{{ asset('image/bs6.jpg') }}">
            <img src="{{ asset('image/vila4.jpg') }}">
            <img src="{{ asset('image/res3.jpg') }}">
            <img src="{{ asset('image/res4.jpg') }}">
        </div>
    </div>
    <div class="price">
        <div class="price1">
            <h4>Đánh giá : <img src="{{ asset('image/5sao.png') }}"></h4>
            <h3>Khách sạn,nhà nghỉ tại Hạ Long giá cả phải chăng</h3>
            <p>Thành phố Hạ Long, Tỉnh Quảng Ninh</p>

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
        <p>Bạn đủ điều kiện nhận giảm giá Genius tại HaLong Wind Hotel! Để tiết kiệm tại chỗ nghỉ này, bạn chỉ cần đăng
            nhập.</p>

        <p>Đội ngũ nhân viên nói tiếng Quan Thoại, tiếng Anh, tiếng Indonesia và tiếng Hàn sẵn sàng hỗ trợ khách tại
            quầy lễ tân 24 giờ.</p>

        <p>Phòng nghỉ gắn máy điều hòa tại khách sạn có bàn làm việc, ấm đun nước, két an toàn, TV màn hình phẳng, ban
            công và phòng tắm riêng với vòi xịt/chậu rửa vệ sinh. Một số phòng được bố trí khu vực bếp ăn với tủ lạnh,
            lò vi sóng và minibar. Các phòng được trang bị tủ để quần áo.</p>

        <p>Chỗ nghỉ phục vụ bữa sáng buffet, bữa sáng à la carte hoặc bữa sáng kiểu Mỹ hằng ngày.</p>

        <p>Du khách có thể chơi bida tại khách sạn 5 sao này và khu vực này nổi tiếng với hoạt động đi xe đạp.</p>

        <p>Bãi biển Bãi Cháy nằm trong bán kính 2,6 km từ Citadines Marina Halong trong khi Cáp treo Nữ hoàng cách đó 5
            km. Sân bay gần nhất là sân bay quốc tế Cát Bi, cách chỗ nghỉ 40 km..</p>

        <p>Citadines Marina Halong đã chào đón khách Booking.com từ 8 tháng 3 2022.
            Thương hiệu/chuỗi khách sạn: Citadines</p>
        <div class="book2">
            <p>Bạn còn đợi gì nữa mà không đặt một căn phòng ưng ý để nghỉ dưỡng tại Hạ Long ngay: </p>
            <a href="{{ route('book') }}">Tại đây </a>
        </div>
    </div>
</div>
<div class="feedback1">
    <h2> Một số nhận xét của khách hàng tại Hạ Long </h2>
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
