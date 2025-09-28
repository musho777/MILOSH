<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('home');
    }

    public function showContactPage()
    {
        return view('contact');
    }

    public function showRekvizitPage()
    {
        return view('contact', ['showRekvizit' => true]);
    }

    public function showHitProductPage()
    {
        return view('hit-product');
    }

    public function showAboutBrandPage()
    {
        return view('about-brand');
    }

    public function showCasinoPage()
    {
        return view('casino');
    }

    public function showFibraPage()
    {
        return view('microfibra');
    }

    public function showManufacturePage()
    {
        return view('manufacture');
    }

    public function showNewsPage()
    {
        return view('news');
    }

    public function showAlisaPage()
    {
        return view('alisa');
    }

    public function showClientServicePage()
    {
        return view('client-service');
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function showRegistrationPage()
    {
        return view('registration');
    }

    public function showJournalPage()
    {
        return view('journal');
    }

    public function showCertifyPage()
    {
        return view('certify');
    }

    public function showActionsPage()
    {
        return view('actions');
    }

    public function showSettingsPage()
    {
        $user = Auth::user(); // Получаем авторизованного пользователя
        return view('settings', compact('user')); // Передаём пользователя в представление
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'surname' => 'string|max:255',
            'day' => 'numeric|min:1|max:31',
            'month' => 'string|max:20',
            'year' => 'numeric|min:1900|max:' . date('Y'),
            'phone_code' => 'string|max:10',
            'phone' => 'string|max:20',
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Обновление данных пользователя
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->birth_day = $request->day;
        $user->birth_month = $request->month;
        $user->birth_year = $request->year;
        $user->phone_code = $request->phone_code;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Данные успешно обновлены!');
    }
}
