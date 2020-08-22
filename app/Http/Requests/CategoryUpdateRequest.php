<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name'=>'required',
            'slug'=>'required',
            'meta_key'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để chống',
            'slug.required'=>'Slug không được để chống',
            'meta_key.required'=>'Meta key không được để chống',
            'meta_title.required'=>'Meta title không được để chống',
            'meta_description.required'=>'Meta description không được để chống'
        ];
    }
}
