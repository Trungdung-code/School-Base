<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ],
            [
                'email.required' => 'Email không bỏ trống',
                'email.email' => 'Email phải đúng định dạng',
                'email.exists' => 'Email không tồn tại',
                'password.required' => 'Mật khẩu không bỏ trống',
                'password.min' => 'Mật khẩu không nhỏ hơn 6 kí tự',
            ]
        );
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $resultCheckLogin = Auth::guard('web')->attempt(
            ['email' => $request->email, 'password' => $request->password]
        );
        if (!$resultCheckLogin) {
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng !');
        }
        $user = auth()->user();
        return $this->checkRole($user);

    }
    public function checkRole($user){

         if($user->isRole(User::ROLE_ADMIN)){
             return redirect()->route('admin.dashboard');
         }
        return redirect('/my_courses');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function signup()
    {
        return view('pages.auth.signup');
    }

}
