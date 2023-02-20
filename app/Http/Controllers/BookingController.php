<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function book(){
        return view('bookroom/book');
    }
    public function book_action(Request $request){
        $request->validate(([
            'locate'=>'required|string|max:255',
            'room_type'=>'required|string|max:255',
            'room_member'=>'required|int|max:225',
            'room_date'=> 'required|string|max:255',
            'room_time'=> 'required|string|max:255',
            'room_date2'=> 'required|string|max:255',
        ]));     
        $cnt=$request->room_member;
        $type=$request->room_type;
        $price=DB::table('tb_room')->where('room_type',$type)->value('room_price');
        $price1=$price * $cnt;
        $username= Auth::User()->username ;   
        $phone= Auth::User()->phone ; 
        $book = new Book;
        $book->locate=$request->locate;
        $book->room_type=$request->room_type;
        $book->username=$username;
        $book->phone=$phone;
        $book->room_member=$request->room_member;
        $book->price=$price1;
        $book->room_date=$request->room_date;
        $book->room_time=$request->room_time;
        $book->room_date2=$request->room_date2;
        $book->save();
        return redirect()->route('finalbook.action')->with('success','Đặt phòng thành công');
    }
    public function finalbook_action(){
        $username= Auth::User()->username ;   
        $finalbook = DB::table('tb_book')->where('username',$username)->select('*');
        $finalbook = $finalbook->get();

        return view('bookroom/bookss',compact('finalbook'));
    }
    public function delete($book_id){
        $data = Book::find($book_id);
        $data->delete();
        return redirect('bookss');
    }
}