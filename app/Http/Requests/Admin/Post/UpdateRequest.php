<?php

namespace App\Http\Requests\Admin\Post;

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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'post_image' => 'required|file'
        ];
    }

    public function messages()
    {

        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Даннные должны соответствовать строчному типу',
            'post_image.required' => 'Это поле необходимо заполнить',
            'post_image.file' => 'Необходимо  выбрать файл'
        ];
    }

}
