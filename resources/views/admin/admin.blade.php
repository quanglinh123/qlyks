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
                <h2>{{$pageName}}</small></h2>
                <ul class="responsive-table">
                <li class="table-header">
                    <div class="col ">Tên khách hàng</div>
                    <div class="col ">Số điện thoại</div>
                    <div class="col ">Địa điểm du lịch</div>
                    <div class="col ">Loại Phòng </div>
                    <div class="col ">Số lượng phòng </div>
                    <div class="col ">Thời gian checkin </div>
                    <div class="col ">Ngày nhận phòng </div>
                    <div class="col ">Ngày trả phòng</div>
                    <div class="col ">Thao tác</div>
                </li>
                @foreach($booklist as $row)
                <li class="table-row">
                    <div class="col" data-label="Job Id">{{$row->username}}</div>
                    <div class="col" data-label="Customer Name">{{$row->phone}}</div>
                    <div class="col" data-label="Amount">{{$row->locate}}</div>
                    <div class="col" data-label="Payment Status">{{$row->room_type}}</div>
                    <div class="col" data-label="Payment Status">{{$row->room_member}}</div>
                    <div class="col" data-label="Payment Status">{{$row->room_time}}</div>
                    <div class="col" data-label="Payment Status">{{$row->room_date}}</div>
                    <div class="col" data-label="Payment Status">{{$row->room_date2}}</div>
                    <div class="col">
                        <button><a class ="" href="{{"delete1/".$row->book_id}}">Hủy</a> </button>
                        <button><a class ="" href="{{"update/".$row->book_id}}">Chỉnh sửa</a></button>
                    </div>
                </li>
                @endforeach
                </ul>
            </div>
    </div>
</body>