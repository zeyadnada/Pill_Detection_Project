<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PillsInteractionRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'pill_1_id' => 'required|',
            'pill_2_id' => 'required|different:pill_1_id',
            'interaction_type' => 'required',
            'interaction_description' => 'required'
        ];
    }
}