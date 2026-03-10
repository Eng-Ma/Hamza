<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAngelesRequest extends FormRequest
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
            'desc' => 'required|max:255',
            'image' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'text.required' => 'هذا الحقل مطلوب',
            'desc.required' => 'هذا الحقل مطلوب',
            'image.required' => 'هذا الحقل مطلوب',

        ];
    }
}
