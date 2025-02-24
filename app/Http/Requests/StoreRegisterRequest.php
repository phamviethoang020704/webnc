<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:5',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'tên không được để trống',
            'name.string' => 'tên sai định dạng',
            'name.max' => 'tên quá dài',
            'name.min' => 'tên ít nhất 5 kí tự',
            'email.required' => 'email không được để trống',
            'email.email' => 'email sai định dạng',
            'email.unique' => 'email đã tồn tại',
            'phone.required' => 'vui lòng điền',
            'address.required' => 'vui lòng điền',
            'password.required' => 'mật khẩu không được để trống',
            'password.min' => 'mật khẩu ít nhất 6 kí tự',
            'password_confirmation.same' => 'Xác nhận mật khẩu không khớp',
        ];
    }

}
