<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      
            return [
                'sertifikat' => 'sometimes|image|mimes:jpeg,png,jpg,gif', // Ubah sesuai kebutuhan
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ];

    }

 

}
