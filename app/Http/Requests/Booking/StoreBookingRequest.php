<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
            'start_date' => [
                'required',
                'date',
                'after_or_equal:today', // Ngày bắt đầu phải từ hôm nay trở đi
            ],
            'end_date' => [
                'required',
                'date',
                'after:start_date', // Ngày kết thúc phải sau ngày bắt đầu
            ],
        ];
    }
    public function messages()
    {
        return [
            'start_date.required' => 'vui lòng chọn ngày bắt đầu thuê',
            'start_date.date' => 'ngày không đúng định dạng',
            'start_date.after_or_equal' => 'Ngày bắt đầu phải từ hôm nay',
            'end_date.required' => 'vui lòng chọn ngày kết thúc thuê',
            'end_date.date' => 'ngày không đúng định dạng',
            'end_date.after' => 'Ngày kết thúc phải sau ngày bắt đầu',
        ];
    }
}
