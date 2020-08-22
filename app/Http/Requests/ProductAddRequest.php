<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'price'=>'required|numeric|min:0|not_in:0',
            'sale_price'=>'numeric|min:0|lt:price',
            'quantity'=>'numeric|min:0',
            'category_pro_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên sản phẩm không được để trống',
            'price.required'=>'Gía không được để trống',
            'category_pro_id.required'=>'Danh mục không được để trống',
            'price.numeric'=>'Gía phải là số',
            'price.not_in'=>'Gía không được bằng 0',
            'sale_price.numeric'=>'Gía phải là số',
            'price.min'=>'Gía phải > 0',
            'sale_price.min'=>'Gía phải > 0',
            'sale_price.lt'=>'Gía khuyến mãi phải nhỏ hơn giá gốc',
            'quantity.numeric'=>'số lượng phải là số',
            'quantity.min'=>'số lượng phải > 0'
        ];
    }
}
