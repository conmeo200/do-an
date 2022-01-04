<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\P7;
class KhachHangController extends Controller
{
    public function getLogin()
    {
        return view('Line.login');
    }
    public function getSignup()
    {
        return view('Line.signup');
    }
    public function Login(Request $request)
    {
        $arr=[
            'Email' => $request->email,
            'password' =>$request->password
        ];
        
        if (Auth::attempt($arr)) {
            return redirect('/');
        }else{
            return redirect('/login')->with('messe','Tài khoản và mật khẩu không hợp lệ !');
        }
    }
    public function Signup(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required|email|unique:users,Email',
            'password'=>'required|min:6|max:20',
        ],
        [
            'name.required'=>'Vui lòng nhập tên.',
            'email.required'=>'Vui lòng nhập email.',
            'email.Email'=>'Không đúng định dạng email.',
            'email.unique'=>'Email đã tồn tại.',
            'password.required'=>'Vui lòng nhập password.',
            'password.min'=>'Vui lòng nhập ít nhất 6 ký tự.',

        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('messe','Đăng ký thành công !');
    }
    public function requestChair(Request $request)
    {
        $data1 =$request->data;
        foreach($data1 as $ch){
           $data = DB::table('P7')
                        ->where('ID',$ch)
                        ->update(['Status'=>1]);
        }
        return  response()->json(['success'=>'ĐẶT CHỔ THÀNH CÔNG !']);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

    return redirect('/');

    }
}
