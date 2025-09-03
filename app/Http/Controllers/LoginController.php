<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(LoginRequest $request)
    {
        $data = $request->validated();

        User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'birth_day' => $data['day'],
            'birth_month' => $data['month'],
            'birth_year' => $data['year'],
            'phone' => $data['phone'],
            'phone_code' => $data['phone_code'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('showHomePage')->with('success', 'Вы успешно зарегистрировались!');
    }
}
