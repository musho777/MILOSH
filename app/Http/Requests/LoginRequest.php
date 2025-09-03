<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'day' => ['required', 'numeric', 'between:1,31'],
            'month' => ['required', 'string'],
            'year' => ['required', 'numeric', 'min:1900'],
            'phone_code' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:6'],
            'email' => ['required', 'email', 'unique:users,email'],
            'email_confirmation' => ['required', 'same:email'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите имя.',
            'surname.required' => 'Введите фамилию.',
            'day.required' => 'Укажите день рождения.',
            'email.unique' => 'Пользователь с таким email уже зарегистрирован.',
            'email_confirmation.same' => 'Подтверждение почты не совпадает.',
        ];
    }
}
