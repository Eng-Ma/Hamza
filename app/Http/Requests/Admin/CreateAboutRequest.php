<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAboutRequest extends FormRequest
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
            'text' => 'required|max:255',
            'content' => 'required',
            'image'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'text.required' => 'هذا الحقل مطلوب',
            'content.required' => 'هذا الحقل مطلوب',
            'image.required' => 'هذا الحقل مطلوب',
        ];
    }
}
