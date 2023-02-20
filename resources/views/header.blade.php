<link rel ="stylesheet" type = "text/css" href="{{asset('css/style.css')}}">
        @extends('app')
        @section('content')
        <div class = "header">
                        <a class="booking" href = "{{route('menu')}}" ><h3> Booking.com </h3> </a>
        @auth
                <select class= "avatar" onchange="location = this.value;">
                        <option value = "{{route('logout')}}"> <b>Xin chào : {{Auth::User()->username}}</b></option>
                        <option value = "{{route('logout')}}">Đăng Xuất</option>
                        <option value = "{{route('book')}}" >Đặt phòng</option>
                        <option value = "{{route('feedback')}}" >Để lại đánh giá</option>
                        <option value = "{{route('password')}}" >Đổi mật khẩu</option>
                        <option value = "{{route('finalbook.action')}}" >Danh sách phòng đã đặt</option>
                </select>
        @endauth
        @guest
                        <a href = "{{route('login')}}" >Đăng nhập</a> 
                        <a href = "{{route('register')}}">Đăng kí </a> 
        @endguest
        </div>
        @endsection         