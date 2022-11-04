<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => ['required','string','min:3'],
            'category_id' => ['required', 'exists:categories,id'],
            'price' => ['required','numeric','min:0'],
            'quantity' => ['required','numeric'],
            'description' => ['nullable','string','min:10']
        ];
    }
}
