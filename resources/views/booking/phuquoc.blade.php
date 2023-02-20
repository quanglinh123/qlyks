@include('header')
<title>Phú Quốc</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="menu">
    <h2> Tìm chỗ nghỉ tiếp theo</h2>
    <h4> Ưu đãi lớn , chỗ nghỉ đa dạng và nhiều hơn nữa...</h4>
</div>

<h2 class="mt-5" style="text-align: center"> Phú Quốc : Hãy chọn cho mình một khách sạn ưng ý</h2>
<div class="khachsan">
    <div class="book">
        <img src="{{ asset('image/phuquoc1.jpg') }}">
        <div class="book1">
            <img src="{{ asset('image/ks15.jpg') }}">
            <img src="{{ asset('image/vila5.jpg') }}">
        </div>
    </div>
    <div class="slide">
        <div class="slide1">
            <img src="{{ asset('image/bs11.jpg') }}">
            <img src="{{ asset('image/bs10.jpg') }}">
            <img src="{{ asset('image/bs9.jpg') }}">
            <img src="{{ asset('image/vila6.jpg') }}">
            <img src="{{ asset('image/res5.jpg') }}">
            <img src="{{ asset('image/res6.jpg') }}">
        </div>
    </div>
    <div class="price">
        <div class="price1">
            <h4>Đánh giá : <img src="{{ asset('image/5sao.png') }}"></h4>
            <h3>Khách sạn,nhà nghỉ tại Phú Quốc giá cả phải chăng</h3>
            <p>Thành phố Phú Quốc, Tỉnh Cà Mau</p>

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
        <p>Bạn đủ điều kiện nhận giảm giá Genius tại Maison du Vietnam Resort & Spa! Để tiết kiệm tại chỗ nghỉ này, bạn
            chỉ cần đăng nhập.</p>

        <p>Nằm trên đảo Phú Quốc, cách Chùa Sùng Hưng 10 km, Maison du Vietnam Resort & Spa cung cấp chỗ nghỉ với xe đạp
            cho khách sử dụng miễn phí, chỗ đỗ xe riêng, hồ bơi ngoài trời và khu vườn. Trong số các tiện nghi của chỗ
            nghỉ này có nhà hàng, câu lạc bộ trẻ em, bếp chung và WiFi miễn phí. Nơi đây có sân hiên, quầy bar trong
            khuôn viên và sảnh khách chung.</p>

        <p>Tất cả phòng nghỉ tại Maison du Vietnam Resort & Spa được trang bị máy điều hòa, TV truyền hình vệ tinh màn
            hình phẳng, minibar, ấm đun nước, vòi xịt/chậu rửa vệ sinh, đồ vệ sinh cá nhân miễn phí và bàn làm việc. Một
            số phòng có tầm nhìn ra hồ bơi và phòng tắm riêng đi kèm vòi sen cùng máy sấy tóc. Mỗi phòng đều được bố trí
            ga trải giường và khăn tắm.</p>

        <p>Chỗ nghỉ phục vụ bữa sáng buffet, bữa sáng à la carte và bữa sáng kiểu Á hằng ngày.</p>

        <p>Nơi đây cung cấp chỗ nghỉ 4 sao với bồn nước nóng và sân chơi cho trẻ em. Khu vực này nổi tiếng với các hoạt
            động đi bộ đường dài và đi xe đạp trong khi du khách có thể thuê xe hơi tại resort 4 sao này.</p>

        <p>Nhân viên nói tiếng Anh và tiếng Việt tại quầy lễ tân luôn sẵn sàng hỗ trợ du khách.</p>

        <p>Công viên giải trí Vinpearl Land Phú Quốc và Sòng bạc Corona đều nằm trong bán kính 26 km từ Maison du
            Vietnam Resort & Spa. Sân bay gần nhất là sân bay quốc tế Phú Quốc, cách resort 14 km, và chỗ nghỉ cung cấp
            dịch vụ đưa đón sân bay miễn phí.</p>

        <p>Maison du Vietnam Resort & Spa đã chào đón khách Booking.com từ 2 tháng 11 2018.</p>
        <div class="book2">
            <p>Bạn còn đợi gì nữa mà không đặt một căn phòng ưng ý để nghỉ dưỡng tại Phú Quốc ngay: </p>
            <a href="{{ route('book') }}">Tại đây </a>
        </div>
    </div>
</div>
<div class="feedback1">
    <h2> Một số nhận xét của khách hàng tại Phú Quốc </h2>
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
