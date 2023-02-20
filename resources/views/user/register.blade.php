<title>Đăng kí</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/user.css')}}">
@extends('app')  
 @section('content')
 <div class ="body">
    <div class = "main">
        <div class="signup">
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger"> {{ $err }}</p>
            @endforeach
            @endif
            <form method="post" action="{{ route('register.action')}}">
                @csrf
                
                    <label class="label" for="chk" aria-hidden="true">Mời bạn đăng kí<span class="text-danger">*</span></label>
                    <input class="input"type ="text" name="username" placeholder="Tên đăng nhập" value="{{ old('username')}}"/>   
                    <input class="input" type="text" name="phone" placeholder="Số điện thoại" value="{{ old('phone')}}"/>           
                    <input class="input" type="password" placeholder="Mật khẩu" name="password" />
                    <input class="input" type="password" placeholder="Nhập lại mật khẩu" name="password_confirm" />
                
                    <button class="button"> Đăng kí</button>
                    <a class ="but" href="{{route('menu')}}"> Quay lại </a>   
            </form>
        </div>
    </div>    
</div>
@endsection

