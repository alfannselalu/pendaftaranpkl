<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDetailsRequest extends FormRequest
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
            'nama_sekolah' => 'required',
            // 'user_id' => 'required',
            'nama' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'nama_pembimbing' => 'required',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'nomor_telepon' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_bergabung' => 'required|date',
            'department_id' => 'required',
            'image' => 'required',
            'cv' => 'required|mimes:pdf',
            // |max:2048
            // |image|mimes:jpeg,png,jpg,gif|max:2048
        
        ];
    }
}
