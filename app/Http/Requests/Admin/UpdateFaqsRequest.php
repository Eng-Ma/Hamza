<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqsRequest extends FormRequest
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
            'question' => 'required|max:255',
            'answer_question' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'هذا الحقل مطلوب',
            'answer_question.required' => 'هذا الحقل مطلوب',

        ];
    }
}
