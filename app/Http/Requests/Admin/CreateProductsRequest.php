<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules()
    {
        return [
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'category_id' => 'required|max:255',
            'content' => 'required|max:255',
            'package_size' => 'required|max:255',
            'main_components' => 'nullable|string',
            'description' => 'nullable|string',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'price.required' => 'هذا الحقل مطلوب',
            'category_id.required' => 'هذا الحقل مطلوب',
            'content.required' => 'هذا الحقل مطلوب',
            'package_size.required' => 'هذا الحقل مطلوب',

        ];
    }
}
