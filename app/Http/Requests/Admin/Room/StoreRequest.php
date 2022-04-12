<?php

namespace App\Http\Requests\Admin\Room;

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
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|string',
            'room_image' => 'required|file'
        ];
    }
    public function messages()
    {

        return [
            'number.required' => 'Это поле необходимо заполнить',
            'number.string' => 'Даннные должны соответствовать строчному типу',
            'room_image.required' => 'Это поле необходимо заполнить',
            'room_image.file' => 'Необходимо  выбрать файл'
        ];
    }
}
