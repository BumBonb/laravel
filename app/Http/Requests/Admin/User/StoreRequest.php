<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Пустое поле',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Пустое поле',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Почта не того формата',
            'email.unique' => 'Пользователь с такой почтой уже существует',
            'password.required' => 'Пустое поле',
            'password.string' => 'Пароль должен быть строкой',
        ];
    }
}
