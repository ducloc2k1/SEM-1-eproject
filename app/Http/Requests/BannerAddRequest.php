<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerAddRequest extends FormRequest
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
            'image' => 'required',
            'sort' => 'required|max:10',
            'description' => 'max:200',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Hình ảnh không được để trống',
            'sort.required' => 'Sắp xếp không được để trống',
            'description.max' => 'Mô tả chỉ tối đa 200 ký tự',
        ];
    }
}
