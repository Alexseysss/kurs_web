<?php

namespace App\Http\Requests\Client\Putevka;

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
            'status' => 'required|string',
            'date_buy' => 'nullable|string',
            'date_in' => 'required|string',
            'date_out' => 'nullable|string'
        ];
    }
}
