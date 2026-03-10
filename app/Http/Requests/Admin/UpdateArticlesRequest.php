<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticlesRequest extends FormRequest
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
            'date' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'date.required' => 'هذا الحقل مطلوب',

        ];
    }
}
