<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
        $id = $this->route('property.id');

        return [
            // 'title' => 'required|string|max:255|unique:properties,title,' . $id . ',id',
            // 'author_id' => 'required|exists:users,id',
            // 'property_type_id' => 'required|exists:property_types,id',
            // 'status' => 'required|string',
            // 'new_home' => 'integer|min:0',
            // 'student_property' => 'integer|min:0',
            // 'house_flat_share' => 'integer|min:0',
            // 'date_available' => 'nullable|date_format:d-m-Y',
            // 'contract_months' => 'integer|min:0',
            // 'minimum_term' => 'integer|min:0',
            // 'let_type' => 'nullable|string|max:255'
        ];
    }
}
