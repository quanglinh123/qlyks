<title>Danh Sách đặt phòng</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/style.css')}}">
@extends('app')
@section('content')
<div class="final">
    <div class = "row">
        <div class="col-md-6">
            <h4  style="margin: 40px;">Đây là thông tin đặt phòng của bạn. Vui lòng thanh toán đặt cọc để hoàn thành quá trình đặt phòng</h4>
            <ul class="responsive-table">
            <li class="table-header">
                <div class="col ">Tên khách hàng</div>
                <div class="col ">Số điện thoại</div>
                <div class="col ">Địa điểm du lịch</div>
                <div class="col ">Loại phòng </div>
                <div class="col ">Số lượng phòng </div>
                <div class="col ">Ngày nhận phòng </div>
                <div class="col ">Thời gian checkin </div>
                <div class="col ">Ngày trả phòng</div>
                <div class="col ">Tiền đặt cọc</div>
                <div class="col ">Thao tác </div>
            </li>
            @foreach($finalbook as $row)
            <li class="table-row">
                <div class="col " data-label="Job Id">{{$row->username}}</div>
                <div class="col " data-label="Customer Name">{{$row->phone}}</div>
                <div class="col " data-label="Amount">{{$row->locate}}</div>
                <div class="col " data-label="Payment Status">{{$row->room_type}}</div>
                <div class="col " data-label="Payment Status">{{$row->room_member}}</div>
                <div class="col " data-label="Payment Status">{{$row->room_date}}</div>
                <div class="col " data-label="Payment Status">{{$row->room_time}}</div>
                <div class="col " data-label="Payment Status">{{$row->room_date2}}</div>
                <div class="col " data-label="Payment Status">{{$row->price/10}} Đồng</div>
                <div class="col "><a class ="btn btn-danger" href="{{"delete/".$row->book_id}}">Hủy</a></div>
            </li>
            @endforeach  
            </ul>
            <div class="mb3" style="margin-left:40px";>
                <a class="btn btn-primary" href="{{route('checkout')}}"> Đặt cọc </a>
                <a class ="btn btn-danger" href="{{route('book')}}"> Đặt thêm phòng </a> 
                <a class ="btn btn-danger" href="{{route('menu')}}"> Quay lại </a> 
            </div>
        </div>
    </div>    
</div>
@endsection