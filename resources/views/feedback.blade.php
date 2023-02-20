<title>FeedBack</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/feedback.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('app')
@section('content')
<div class="container">
            <form id="signup" method="post" action="{{ route('feedback.action')}}">
                @csrf
                <div class="header">
        
                    <h3>Đánh giá</h3>
                    
                    <p>Hãy để lại đánh giá của bạn cho chúng tôi</p>
                    
                </div>
                <div class="sep"></div>
                <div class="inputs">
                <div class="mb-3">
                    <label>Chọn Địa Điểm</label>
                    <select class="form-control @error('location') is-invalid @enderror" name= "location" value="{{old('location')}}">
                        <option value="Đà Lạt">Đà Lạt</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Thành Phố Hồ Chí Minh">Thành Phố Hồ Chí Minh</option>
                        <option value="Phú Quốc">Phú Quốc</option>
                        <option value="Hạ Long">Hạ Long</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Chọn loại phòng mà bạn muốn đánh giá</label>
                    <select class="form-control @error('room_type') is-invalid @enderror" name= "room_type" value="{{old('room_type')}}">
                        <option value="Phòng đơn">Phòng đơn</option>
                        <option value="Phòng đôi">Phòng đôi</option>
                        <option value="Phòng thương gia">Phòng thương gia</option>
                        <option value="Villa">Villa</option>
                        <option value="Resort">Resort</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Cảm nghĩ của bạn về dịch vụ của chúng tôi</label>
                    <input type="text "class="form-control @error('title') is-invalid @enderror " name="title" value="{{old('title')}}"/>
                </div>
                    <button id="submit" >Đánh giá </button>
                    <a id="submit"class ="btn btn-danger" href="{{route('menu')}}"> Quay lại </a> 
                </div>
            </div>
            </form>   
</div>
​
@endsection