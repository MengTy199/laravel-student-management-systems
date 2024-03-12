<?php

namespace App\Http\Requests;

use App\Rules\UniqueEnrollmentId;
use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
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
            'enrollment_id' => 'required|exists:enrollments,id',
            'paid_date' => 'required|date_format:Y-m-d',
            'amount' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'enrollment_id.exists' => 'The selected enrollment ID does not exist in the students table.',
        ];
    }
}   
