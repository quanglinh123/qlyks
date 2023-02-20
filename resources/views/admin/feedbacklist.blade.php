<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title> ADMIN </title>
    <link rel ="stylesheet" type = "text/css" href="{{asset('css/adminstyle.css')}}">
</head>
<body>
    <div class = "welcome">
        <h3>Chào Mừng Đến Với Trang Quản Lý </h3>
    </div>
    <div class = "wrap">
        <div class = "sidebar">
            <ul class = "listadmin"> 
                <li> <a href ="{{route('admin')}}"> Danh sách đặt phòng </a></li>
                <li> <a href ="{{route('userlist')}}"> Thông tin khách hàng </a></li>
                <li> <a href ="{{route('feedbacklist')}}"> FeedBack của khách hàng </a></li>
            </ul>
        </div>
            <div class="container">
                <h2>{{$pagename}}</small></h2>
                <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">Tên khách hàng</div>
                    <div class="col col-1">Số điện thoại</div>
                    <div class="col col-1">Địa điểm du lịch</div>
                    <div class="col col-1">Loại Phòng </div>
                    <div class="col col-2">Đánh giá của khách hàng</div>
                </li>
                @foreach($feedback as $row)
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">{{$row->username}}</div>
                    <div class="col col-1" data-label="Customer Name">{{$row->phone}}</div>
                    <div class="col col-1" data-label="Amount">{{$row->location}}</div>
                    <div class="col col-1" data-label="Payment Status">{{$row->room_type}}</div>
                    <div class="col col-2" data-label="Payment Status">{{$row->title}}</div>
                </li>
                @endforeach
                </ul>
            </div>
    </div>
</body>