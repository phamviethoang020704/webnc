<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreCarRequest extends FormRequest
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
            'trademark' => [
                'required',
                Rule::in(['Audi', 'Bentley', 'BMW', 'Jaguar', 'Land-Rover', 'Lexus', 'Mercedes-Benz', 'Rolls-Royce']),
            ],
            'description' => 'required',
            'name' => 'required',
            'seat_count' => 'required|integer|min:4',
            'price_per_day' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'remaining_quantity' => 'required|integer|min:0|lte:quantity'
        ];
    }
    public function messages()
    {
        return [
            'trademark.required' => 'Thương hiệu không được để trống',
            'trademark.in' => 'thương hiệu không nằm trong danh sách',
            'description.required' => 'Mô tả không được để trống.',
            'name.required' => 'Tên xe không được để trống.',
            'seat_count.required' => 'Số chỗ ngồi không được để trống.',
            'seat_count.integer' => 'Số chỗ ngồi phải là số nguyên.',
            'seat_count.min' => 'Số chỗ ngồi phải lớn hơn 4.',
            'price_per_day.required' => 'giá thuê không được để trống.',
            'price_per_day.integer' => 'giá thuê phải là số nguyên.',
            'price_per_day.min' => 'giá thuê không thể nhỏ hơn 1',
            'quantity.required' => 'Số lượng không được để trống.',
            'quantity.integer' => 'Số lượng phải là số nguyên.',
            'quantity.min' => 'Số lượng không thể nhỏ hơn 1',
            'remaining_quantity.required' => 'Số lượng còn lại không được để trống.',
            'remaining_quantity.integer' => 'Số lượng còn lại phải là số nguyên.',
            'remaining_quantity.min' => 'Số lượng còn lại không thể nhỏ hơn 1',
        ];
    }
}
