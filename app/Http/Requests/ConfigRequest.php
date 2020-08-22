<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'image' => 'nullable',
            'key' => 'required',
            'link' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'Key không được để trống',
            'link.required' => 'Liên kết không được để trống',
        ];
    }
}
