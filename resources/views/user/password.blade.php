<title>Thay đổi mật khẩu</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/user.css')}}">
@extends('app')  
@section('content')
<div class="body">
    <div class = "main">
        <div class="signup">
            @if(session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
            @endif
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger"> {{ $err }}</p>
            @endforeach
            @endif
            <form method="post" action="{{ route('password.action')}}">
                @csrf
                    <label class ="label" for="chk" aria-hidden="true">Thay đổi mật khẩu <span class="text-danger">*</span></label>
                    <input class="input"type ="password" placeholder="Mật khẩu hiện tai" name="old_password" />
                    <input class="input" type="password" placeholder="Mật khẩu mới"name="new_password" />
                    <input class="input" type="password" placeholder="Nhập lại mật khẩu mới"name="new_password_confirm" />
                    <button class="button"> Thay đổi</button>
                    <a class ="but" href="{{route('menu')}}"> Quay lại </a> 
                </div>
            </form>
        </div>
    </div>    
</div>
@endsection