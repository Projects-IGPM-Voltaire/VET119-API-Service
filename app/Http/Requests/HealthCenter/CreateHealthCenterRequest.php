<?php

namespace App\Http\Requests\HealthCenter;

use App\Http\Requests\FormRequest;
use Illuminate\Contracts\Validation\ValidationRule;

class CreateHealthCenterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'image' => 'nullable|image|mimes:jpeg,png',
            'city_code' => 'required|string',
            'barangay_code' => 'required|string',
            'house_number' => 'nullable|string',
            'street' => 'nullable|string',
            'map_url' => 'required|string',
        ];
    }
}
