
    <h2> Feed Back từ khách hàng </h2>
    @foreach($feedback as $row)
    <div class ="feedback_title">
            <div class="icon">
                    <img src="{{asset('image/cus.jpg')}}">
                    <p> {{$row->username}}</p>
            </div>
            <div class="icon">
                    <img src="{{asset('image/loca.png')}}">
                    <p> {{$row->location}}</p>
            </div>
            <p>Loại phòng : {{$row->room_type}}</p>
            <p>Đánh giá : {{$row->title}}</p>
    </div>
    @endforeach
    {{$feedback->links()}}
