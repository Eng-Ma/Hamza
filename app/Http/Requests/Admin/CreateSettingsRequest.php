<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateSettingsRequest extends FormRequest
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
            'text_about' => 'required|max:255',
            'header_about_text' => 'required|max:255',
            'paragh_about_text' => 'required|max:255',
            'header_angeles_text' => 'required|max:255',
            'paragh_angeles_text' => 'required|max:255',
            'header_contact_text' => 'required|max:255',
            'paragh_contact_text' => 'required|max:255',
            'Terms_and_Conditions' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'text_about.required' => 'هذا الحقل مطلوب',
            'header_about_text.required' => 'هذا الحقل مطلوب',
            'paragh_about_text.required' => 'هذا الحقل مطلوب',
            'header_angeles_text.required' => 'هذا الحقل مطلوب',
            'paragh_angeles_text.required' => 'هذا الحقل مطلوب',
            'header_contact_text.required' => 'هذا الحقل مطلوب',
            'paragh_contact_text.required' => 'هذا الحقل مطلوب',
            'Terms_and_Conditions.required' => 'هذا الحقل مطلوب',

        ];
    }
}
