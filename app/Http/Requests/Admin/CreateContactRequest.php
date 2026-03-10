<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            'questions' => 'required|max:255',
            'description' => 'required',
            'order_link' => 'nullable',
            'info_link' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'youTube' => 'nullable',
            'instagram' => 'nullable',
            'image' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'questions.required' => 'هذا الحقل مطلوب',
            'description.required' => 'هذا الحقل مطلوب',
            'image.required' => 'هذا الحقل مطلوب',

        ];
    }
}
