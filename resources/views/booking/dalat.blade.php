@include('header')
<title>Đà Lạt</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<h2 class="mt-5" style="text-align: center"> Đà Lạt : Hãy chọn cho mình một khách sạn ưng ý</h2>
<div class="khachsan">
    <div class="book">
        <img src="{{ asset('image/dalat1.jpg') }}">
        <div class="book1">
            <img src="{{ asset('image/ks5.jpg') }}">
            <img src="{{ asset('image/ks6.jpg') }}">
        </div>
    </div>
    <div class="slide">
        <div class="slide1">
                <img src="{{ asset('image/ks1.jpg') }}">
                <img src="{{ asset('image/ks2.jpg') }}">
                <img src="{{ asset('image/ks3.jpg') }}">
                <img src="{{ asset('image/ks4.jpg') }}">
                <img src="{{ asset('image/ks8.jpg') }}">
                <img src="{{ asset('image/ks9.jpg') }}">
        </div>
    </div>
    <div class="price">
        <div class="price1">
            <h4>Đánh giá : <img src="{{ asset('image/5sao.png') }}"></h4>
            <h3>Khách sạn,nhà nghỉ tại đà lại giá cả phải chăng</h3>
            <p>Thành phố Đà Lạt, Lâm Đồng
            <p>
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
        <p>Bạn đủ điều kiện nhận giảm giá Genius tại Dalat Wind Hotel! Để tiết kiệm tại chỗ nghỉ này, bạn chỉ cần đăng
            nhập.</p>

        <p>Nhà nghỉ khách sạn của chúng tôi có lễ tân 24 giờ, sảnh khách chung, Wi-Fi và chỗ đỗ xe riêng miễn phí.</p>

        <p>Tại khách sạn, tất cả các phòng đều có bàn làm việc, TV màn hình phẳng, ấm đun nước và phòng tắm riêng với
            chậu rửa vệ sinh (bidet). Một số phòng còn có ban công.</p>

        <p>Khách sạn phục vụ bữa sáng gọi món hàng ngày. Du khách có thể dùng bữa tại nhà hàng trong khuôn viên, nơi
            chuyên phục vụ các món nướng/BBQ.</p>

        <p>Du khách cũng có thể thư giãn trên sân hiên tắm nắng.</p>

        <p>Các cặp đôi đặc biệt thích địa điểm này — họ cho điểm 8,9 cho kỳ nghỉ dành cho 2 người.</p>

        <p>Dalat Booking Hotel đã chào đón khách Booking.com từ 9 tháng 3 2018.</p>
        <div class="book2">
            <p>Bạn còn đợi gì nữa mà không đặt một căn phòng ưng ý để nghỉ dưỡng tại Đà Lạt ngay: </p>
            <a href="{{ route('book') }}">Tại đây </a>
        </div>
    </div>
</div>
<div class="feedback1">
    <h2> Một số nhận xét của khách hàng tại Đà Lạt </h2>
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
