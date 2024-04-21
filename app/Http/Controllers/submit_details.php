<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use App\Models\Cca_Eca;
use App\Models\EducationDetails;
use App\Models\OtherDetails;
use App\Models\ParentDetails;
use App\Models\Ug_student;

use Illuminate\Support\Facades\Auth;

class submit_details extends Controller
{
    public function store(Request $request)
    {
    $email=$request->college_email;

        $validated_personal_data = $request->validate([
            'jeemain_ap_no' => 'required',
            'inst_name' => 'required',
            'first_name' => 'required',
            
            'last_name' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required|numeric',
            'category' => 'required',
            'alotted_category' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'prep' => 'required|in:yes,no',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|numeric',
            'p_ad_line_1' => 'required',
            'p_ad_line_2' => 'required',
            'blood_group' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'nationality' => 'required',
            'birth_place' => 'required',
            'religion' => 'required|in:Hinduism,Islam,Christianity,Sikhism,Buddhism,Jainism,Other',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Photo validation
            'sign' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Signature validation
        ]);

        // Handle file uploads for photo and signature
        $photoPath = $request->file('photo')->store('photos');
        $signPath = $request->file('sign')->store('signatures');

        // Add photo and sign paths to validated data
        $validated_personal_data['photo_path'] = $photoPath;
        $validated_personal_data['sign_path'] = $signPath;

        // Create a new PersonalDetail instance with the validated data
        $personalDetail = PersonalDetail::create($validated_personal_data);

        
        $v_edu_data = $request->validate([
            'name_of_examination_10' => 'required|string|max:255', 
            'university_board_10' => 'required|string|max:100',
            'year_10' => 'required|integer|digits:4|min:1950', 
            'institution_school_10' => 'required|string|max:255',
            'grade_percentage_10' => 'required|numeric|between:0,100',
            'division_10' => 'required|string', 
            'major_subjects_10' => 'string', // Optional 
            
            'name_of_examination_12' => 'required|string|max:255', 
            'university_board_12' => 'required|string|max:100',
            'year_12' => 'required|integer|digits:4|min:1950', 
            'institution_school_12' => 'required|string|max:255',
            'grade_percentage_12' => 'required|numeric|between:0,100',
            'division_12' => 'required|string', 
            'major_subjects_12' => 'string', // Optional 
            'migration_certificate_no' => 'required|string' 
        ]);
        $v_edu_data['college_email']=$email;
        $edu_det = EducationDetails::create($v_edu_data);

        $v_hostel_data=$request->validate([
            'food_habit' => 'required|string',
            'laptop_details' => 'required|string',
            'model_no' => 'nullable|string',
            'serial_no' => 'nullable|string'
        ]);
        $v_hostel_data['college_email']=$email;
        $hostel_data= HostelDetails::create($v_hostel_data);


        $v_other_details = $request->validate([
            'name_in_hindi' => 'required|string|max:255', // Limit length
            'marital_status' => 'required|string',
            'kashmiri_immigrant' => 'required|string',
            'identification_mark' => 'nullable|string', // Optional
            'extra_curricular_activities' => 'required|string',
            'other_relevent_info' => 'nullable|string', 
            'favourite_past_time' => 'required|string',
            'hobbies' => 'required|string',
            'jee_advanced_rank' => 'required|integer|min:1', // Positive rank
            'jee_advanced_category_rank' => 'nullable|integer|min:1',
            'bank_name_of_student' => 'required|string',
            'account_no_of_student' => 'required|integer|digits_between:8,18', 
            'confirm_account_no_of_student' => 'required|same:account_no_of_student',
            'ifsc_code_of_student' => 'required|string', // Typical IFSC code format
        ]);
        $v_other_details ['college_email']=$email;

        $other_data = OtherDetails::create($v_other_details);

        $v_parent_data = $request->validate([
            'father_name' => 'required|string|max:255', 
            'mother_name' => 'required|string|max:255', 
            'father_occupation' => 'required|string',
            'mother_occupation' => 'required|string',
            'father_income' => 'required|integer|min:0', // Income can't be negative
            'mother_income' => 'required|integer|min:0', 
            'parent_mobile_no' => 'required|digits:10',
            'parent_email_id' => 'required|email',
            'guardian_name' => 'nullable|string', 
            'guardian_relation' => 'nullable|string',
            'alternate_mobile_no' => 'nullable|digits:10',
            'alternate_email_id' => 'nullable|email',
            'bank_name_of_parent' => 'required|string',
            'account_no_of_parent' => 'required|integer|digits_between:8,18', 
            'confirm_account_no_of_parent' => 'required|same:account_no_of_parent',
            'ifsc_code_of_parent' => 'required|regex:/^[A-Z]{4}0[A-Z0-9]{6}$/', 
        ]);

        $v_parent_data ['college_email']=$email;
        $parent_details = ParentDetails::create($v_parent_data);
    }
}
