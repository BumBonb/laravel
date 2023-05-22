<?php

namespace App\Http\Requests\Admin\Book;

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
            'title' => 'required|string|unique:books',
            'description' => 'required|string',
            'user_id' => 'nullable|string',
            'cover' => 'required|file',
            'bookFile' => 'required|file',
            'genre_ids' => 'nullable|array',
            'genre_ids.*' => 'nullable|integer|exists:genres,id',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Пустое поле',
            'title.string' => 'Данные должны быть строкой',
            'title.unique' => 'Такое название уже есть',
            'description.required' => 'Пустое поле',
            'description.string' => 'Данные должны быть строкой',
            'cover.required' => 'Пустое поле',
            'bookFile.required' => 'Пустое поле',
            'genre_id.integer' => 'Не строчное значение',
        ];

    }
}
