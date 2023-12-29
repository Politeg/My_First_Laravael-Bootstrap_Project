<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_name'=>'required',
            'product_country'=>'required',
            'product_count'=>'required|numeric',
            'category_id'=>'required|numeric',
            'product_photo'=>'nullable|file|mimes:png,jpeg,bmp|max:10240|image',
            'product_price'=>'required|numeric|min:0',
            'product_description'=>'required',
        ];
    }


    public function messages()
    {
        return[
            'required'=>'Это поле обязательно для заполнения',
            'category_id.numeric'=>'Вы не выбрали категорию',
            'product_price.numeric'=>'Цена указывается цифрами',
            'product_count.numeric'=>'Количество указывается цифрами',
            'mimes'=>'Файл должен быть картинкой jpeg,png,bmp',

        ];
    }
}
