<?php

namespace App\Http\Requests\Admin\Putevka;

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
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'room_id' => 'nullable|exists:rooms,id',
            'date_buy' => 'nullable|string',
            'date_in' => 'required|string',
            'date_out' => 'nullable|string'
        ];
    }
}
