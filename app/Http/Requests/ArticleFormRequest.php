<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'author' => 'required|max:100',
            'brief' => 'required|max:500',
            'fulltext' => 'required',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле :attribute обязательно для заполнения',
            'title.max' => 'Поле :attribute должно быть не больше :max символов',
            'author.required' => 'Поле :attribute обязательно для заполнения',
            'author.max' => 'Поле :attribute должно быть не больше :max символов',
            'brief.required' => 'Поле :attribute обязательно для заполнения',
            'brief.max' => 'Поле :attribute должно быть не больше :max символов',
            'fulltext.required' => 'Поле :attribute обязательно для заполнения',
        ];
    }

    /**
     * @return string[]
     */
    public function attributes(): array
    {
        return [
            'title' => 'Заголовок',
            'author' => 'Автор',
            'brief' => ' Бриф',
            'fulltext' => 'Текст',
        ];
    }
}
