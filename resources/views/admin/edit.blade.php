<title>Update</title>
<?php $id = $edit->book_id ?>
<form method="post" action="{{route("edit/".$edit->book_id)}}">
    @csrf
    <div class="mb-3">
        <label>Số lượng phòng</label>
        <input type="text "class="form-control @error('room_member') is-invalid @enderror " name="room_member" value="{{$edit->room_member}}"/>
    </div>
    <div class="mb-3">
        <label>Ngày nhận phòng</label>
        <input type = "date"class="form-control datetimepicker @error('room_date') is-invalid @enderror " name="room_date" value="{{$edit['room_date']}}"/>
    </div>
    <div class="mb-3">
        <label>Thời gian checkin</label>
        <input type = "time"class="form-control datetimepicker @error('room_time') is-invalid @enderror " name="room_time" value="{{$edit['room_time']}}"/>
    </div>
    <div class="mb-3">
        <label>Ngày trả phòng</label>
        <input type = "date"class="form-control datetimepicker @error('room_date2') is-invalid @enderror " name="room_date2" value="{{$edit['room_date2']}}"/>
    </div>
    <div class="mb3">
        <button class="btn btn-primary" > Đặt phòng</button>
        <a class ="btn btn-danger" href="{{route('admin')}}"> Quay lại </a> 
    </div>
</form>