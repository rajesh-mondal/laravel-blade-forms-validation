<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name'          => 'required|string|min:5|max:50',
            'price'         => 'required|numeric|min:3.0|max:100.0',
            'description'   => 'nullable|string',
            'stock'         => 'required|boolean',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array {
        return [
            'name.min'       => 'পন্যের নাম সর্বনিন্ম পাঁচ অক্ষরের হতে হবে',
            'name.max'       => 'পন্যের নাম সর্বোচ্চ পঞ্চাশ অক্ষরের হতে হবে',
            'name.required'  => 'পন্যের মূল্য দিতেই হবে',
            'price.required' => 'মূল্য দিতেই হবে',
            'price.min'      => 'একটা পন্যের সর্বনিন্ম মূল্য ৩ টাকা হতে হবে',
        ];
    }
}
