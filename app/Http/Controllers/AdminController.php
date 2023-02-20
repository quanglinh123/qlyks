<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function feedbacklist(){
        $feedback = DB::table('tb_feedback')->select('*');
        $feedback = $feedback->get();

        $pagename = 'Đánh giá của khách hàng';
        return view('admin/feedbacklist',compact('feedback', 'pagename'));
    }
    public function userlist(){
        $user = DB::table('tb_user')->select('*');
        $user = $user->get();

        $pagename = 'Thông tin khách hàng';
        return view('admin/userlist',compact('user', 'pagename'));
    }
    public function admin1(){
        return view('admin/adminLogin');
    }
    public function admin_login(Request $request)
    {
        $request->validate([
            'admin_name'=>'required',
            'admin_password'=>'required',
        ]);
        if(Auth::attempt(['admin_name'=>$request->admin_name,'admin_password'=>$request->admin_password])){
            $request->session()->regenerate();
            return redirect()->intended('menu');
        }
        return back()->withErrors(['admin_password'=>'Sai tài khoản hoặc mật khẩu !']);
    }
    public function admin()
    {
        $booklist = DB::table('tb_book')->select('*');
        $booklist = $booklist->get();

        $pageName = 'Danh sách khách đặt phòng';

        return view('admin/admin', compact('booklist', 'pageName'));
    }
    public function delete1($book_id){
        $data = Book::find($book_id);
        $data->delete();
        return redirect('admin');
    }
    public function update($book_id){
        $data = Book::find($book_id);
        return view('admin/edit',['edit'=> $data]);
    }
    function edit(Request $request){
        $data = Book::find($request->book_id);
        $data->room_member=$request->room_member;
        $data->room_date=$request->room_date;
        $data->room_time=$request->room_time;
        $data->room_date2=$request->room_date2;
        $data->save();
        return redirect('admin');
    }
}