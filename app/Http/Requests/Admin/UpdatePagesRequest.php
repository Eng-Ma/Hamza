<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePagesRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'link_text' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'هذا الحقل مطلوب',
            'content.required' => 'هذا الحقل مطلوب',
            'link_text.required' => 'هذا الحقل مطلوب',

        ];
    }
}
