<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'uuid' => 'required|string',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'physically_challenged' => 'required|string|max:255',
            'blood_group' => 'required|string|max:255',
            'kashmiri_immigrant' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'aadhar_card_no' => 'required|string|max:255',
            'identification_mark' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'father_gross_annual_income' => 'required|string|max:255',
            'mother_gross_annual_income' => 'required|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'guardian_relation' => 'required|string|max:255',
            'parent_guardian_mobile_no' => 'required|string|max:255',
            'parent_email' => 'required|string|max:255|email',
            'present_address' => 'required|string',
        ];
    }
}
