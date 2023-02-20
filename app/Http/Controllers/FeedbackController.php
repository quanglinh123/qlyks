<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function feedback_action(Request $request){
        $request->validate(([
            'location'=>'required|string|max:255',
            'room_type'=>'required|string|max:255',
            'title'=> 'required|string|max:225',
        ]));  
        $username= Auth::User()->username ;    
        $phone= Auth::User()->phone ;         
        $feedback = new Feedback;
        $feedback->username=$username;
        $feedback->phone=$phone;
        $feedback->location=$request->location;
        $feedback->room_type=$request->room_type;
        $feedback->title=$request->title;
        $feedback->save();
        return redirect()->route('menu')->with('success','Feedback thành công');
    }
    public function fblist_action(){
      
        $feedback = DB::table('tb_feedback')->select('*')->paginate(2);

        return view('menu',compact('feedback'))->with('i',(request()->input('page',1)-1)*3);
        
    }
    function getFeedback(Request $request)
    {
     if($request->ajax())
     {
      $feedback = DB::table('tb_feedback')->select('*')->paginate(2);
      return view('fblist', compact('feedback'))->render();
     }
    }
    public function fblistdalat_action(){
        $dalat = DB::table('tb_feedback')->where('location','Đà Lạt')->select('*');
        $dalat = $dalat->get();

        return view('booking/dalat',compact('dalat'));
    }
    public function fblistdanang_action(){
        $danang = DB::table('tb_feedback')->where('location','Đà Nẵng')->select('*');
        $danang = $danang->get();

        return view('booking/danang',compact('danang'));
    }
    public function fblisttphcm_action(){
        $dalat = DB::table('tb_feedback')->where('location','Thành Phố Hồ Chí Minh')->select('*');
        $dalat = $dalat->get();

        return view('booking/tphcm',compact('dalat'));
    }
    public function fblistphuquoc_action(){
        $dalat = DB::table('tb_feedback')->where('location','Phú Quốc')->select('*');
        $dalat = $dalat->get();

        return view('booking/phuquoc',compact('dalat'));
    }
    public function fblisthalong_action(){
        $dalat = DB::table('tb_feedback')->where('location','Hạ Long')->select('*');
        $dalat = $dalat->get();

        return view('booking/halong',compact('dalat'));
    }
}
