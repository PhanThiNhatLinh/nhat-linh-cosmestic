<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'product_code' => 'required',
        //     'product_name' => 'required|min:5|max:200',
        //     'price' => 'required|numeric|min:1000',
        //     'promotion' => 'required|numeric|lt:price',
        //     // 'hot' => 'required',
        //     'enstock' => 'required',
        //     'description' => 'required|min:5',
        //     'image_product' => 'image | mimes:jpg,jpeg,png'

        // ];
    }
    public function messages()
    {
        return [
            [
                //     'required' => ':attribute yêu cầu điền nội dung',
                //     'min' => ':attribute Không được nhỏ hơn :min kí tự',
                //     'max' => ':attribute Không được lớn hơn :max',
                //     'unique' => ':attribute Không được trùng lặp lại ',
                //     'lt' => ':attribute Không được lớn hơn giá sản phẩm'
                // ],
                // [
                //     'product_code' => 'Mã sản phẩm',
                //     'product_name' => 'Tên sản phẩm',
                //     'price' => 'Giá sản phẩm',
                //     'enstock' => 'Lượng sản phẩm trong kho',
                //     'description' => 'Mô tả sản phẩm',
                //     'image' => 'Hình ảnh',
                //     'promotion' => ' Giá Khuyến mãi',
                //     'hot' => 'Sản phẩm nổi bật',
                // 'product_code.required' => 'nhập mã sản phẩm'
            ]
        ];
    }
}
