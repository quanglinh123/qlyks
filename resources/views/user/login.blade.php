<title>Đăng Nhập</title>
<link rel ="stylesheet" type = "text/css" href="{{asset('css/user.css')}}">
@extends('app')  
@section('content')
<div class="body">
    <div class = "main">
        <div class="login">
            @if(session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
            @endif
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger"> {{ $err }}</p>
            @endforeach
            @endif
            <form method="post" action="{{ route('login.action')}}">
                @csrf

                    <label class="label" for="chk" aria-hidden="true">Mời bạn đăng nhập</label>
                    <input class="input" type ="text" name="username" placeholder="Tên đăng nhập" value="{{ old('username')}}"/>
                    <input class="input" type="password" name="password"placeholder="Mật Khẩu" />
                    <button class="button"> Đăng nhập</button>
                    <a class ="but" href="{{route('menu')}}"> Quay lại </a>
            </form>
        </div>
    </div>    
</div>
@endsection


