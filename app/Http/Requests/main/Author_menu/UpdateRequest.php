<?php

namespace App\Http\Requests\Main\Author_menu;

use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
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
            'cover' => 'nullable|file',
            'bookFile' => 'nullable|file',
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
            'genre_id.required' => 'Пустое поле',
        ];
    }
}
