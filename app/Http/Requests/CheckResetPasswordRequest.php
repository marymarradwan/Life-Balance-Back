<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => ['required', 'exists:otp_reset_passwords,code'],
            'email' => ['required', 'email', 'exists:users,email'],
        ];
    }
}
