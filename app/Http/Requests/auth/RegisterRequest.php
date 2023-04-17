<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|exists:siswas,email|unique:users',
            'password' => 'required|min:7',
            'password_confirm' => 'required_with:password|same:password|min:7'
        ];
    }

    public function messages(): array
    {
        return [
            'exists' => ':attribute tidak terdaftar dalam sekolah',
            'unique' => ':attribute sudah registrasi',
            'required' => ':attribute harus di isi',
            'same' => ':attribute tidak sama',
            'min' => ':attribute minimal :min huruf',
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'email',
            'password' => 'password',
            'password_confirm' => 'password confirm',
        ];
    }
}
