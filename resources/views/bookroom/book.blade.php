<title>Đặt Phòng</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/book.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('app')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="signup-wrapper shadow-box">
            <div class="company-details ">
                <div class="shadow"></div>
                <div class="wrapper-1">
                    <div class="logo">
                        <div class="icon-food"></div>
                    </div>
                    <h1 class="title">Booking.com</h1>
                    <div class="slogan">Khách hàng là thượng đế</div>
                </div>
            </div>
            <div class="signup-form ">
                <div class="wrapper-2">
                    <div class="form-title">Lựa chọn nơi nghỉ cho riêng bạn</div>
                    <div class="form">
                        <form method="post" action="{{ route('book.action')}}">
                        @csrf
                            <div class="content-item">
                                <label>Chọn Địa Điểm</label>
                                <select class="form-control @error('locate') is-invalid @enderror" name= "locate" value="{{old('locate')}}">
                                    <option value="Đà Lạt">Đà Lạt</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Thành Phố Hồ Chí Minh">Thành Phố Hồ Chí Minh</option>
                                    <option value="Phú Quốc">Phú Quốc</option>
                                    <option value="Hạ Long">Hạ Long</option>
                                </select>
                            </div>
                            <div class="content-item">
                                <label>Chọn loại phòng</label>
                                <select class="form-control @error('room_type') is-invalid @enderror" name= "room_type" value="{{old('room_type')}}">
                                    <option value="Phòng đơn">Phòng đơn</option>
                                    <option value="Phòng đôi">Phòng đôi</option>
                                    <option value="Phòng thương gia">Phòng thương gia</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Resort">Resort</option>
                                </select>
                            </div>
                            <div class="content-item">
                                <label>Số lượng phòng</label>
                                <input type="text "class="form-control @error('room_member') is-invalid @enderror " name="room_member" value="{{old('room_member')}}"/>
                            </div>
                            <div class="content-item">
                                <label>Ngày nhận phòng</label>
                                <input type = "date"class="form-control datetimepicker @error('room_date') is-invalid @enderror " name="room_date" value="{{old('room_date')}}"/>
                            </div>
                            <div class="content-item">
                                <label>Thời gian checkin</label>
                                <input type = "time"class="form-control datetimepicker @error('room_time') is-invalid @enderror " name="room_time" value="{{old('room_time')}}"/>
                            </div>
                            <div class="content-item">
                                <label>Ngày trả phòng</label>
                                <input type = "date"class="form-control datetimepicker @error('room_date2') is-invalid @enderror " name="room_date2" value="{{old('room_date2')}}"/>
                            </div>
                            <div class="mb3">
                                <button class="signup"> Đặt phòng</button>
                                <a class="login" href="{{route('menu')}}"> Quay lại </a> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
@endsection