<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        $data['title'] ='Đăng kí';
        return view('user/register',$data);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'username'=>'required|unique:tb_user',
            'phone'=>'required',
            'password'=>'required',
            'password_confirm' => 'required|same:password'
        ]);
        $user = new User([
            'username' => $request->username,
            'phone' => $request->phone,
            'password'=> Hash::Make($request->password),
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Đăng kí thành công . Mời bạn đăng nhập');
    }
    public function login(){
        $data['title'] ='Đăng Nhập';
        return view('user/login',$data);
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended('menu');
        }
        return back()->withErrors(['password'=>'Sai tài khoản hoặc mật khẩu !']);
    }
    public function password(){
        $data['title'] ='Thay đổi mật khẩu';
        return view('user/password',$data);
    }
    public function password_action(Request $request)
    {
        $request->validate([
            'old_password'=>'required|current_password',
            'new_password'=>'required',
            'new_password_confirm' => 'required|same:new_password'
        ]);
        $User = User::find(Auth::id());
        $User->password= Hash::make($request->new_password);
        $User->save();
        $request->session()->regenerate();
        return back()->with('success','Thay đổi mật khẩu thành công !');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("menu");
    }
}