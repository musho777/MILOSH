<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showAdminLoginPage(){
        return view('admin.admin-login');
    }

    public function checkAdminLogin(AdminLoginRequest $request){

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            if(Auth::user()->roll == 1){
                return redirect()->route('showAdminHomePage')->with('success','Авторизован');
            }
        } else {
            return back()->with('error','Неправильный логин или пароль');
        }

    }

    public function AdminLogOut(){
        auth()->logout();
        return redirect()->route('showAdminLoginPage');
    }
}
