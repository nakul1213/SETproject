<?php

namespace App\Http\Controllers;
 


use Illuminate\Http\Request;
use App\Models\PersonalDetail;

class PersonalDetailsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'jeemain_ap_no' => 'required',
        //     'inst_name' => 'required',
        //     'first_name' => 'required',
            
        //     'last_name' => 'required',
        //     'email' => 'required|email',
        //     'contact_no' => 'required|numeric',
        //     'category' => 'required',
        //     'alotted_category' => 'required',
        //     'dob' => 'required',
        //     'gender' => 'required',
        //     'prep' => 'required|in:yes,no',
        //     'country' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'pincode' => 'required|numeric',
        //     'p_ad_line_1' => 'required',
        //     'p_ad_line_2' => 'required',
        //     'blood_group' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
        //     'nationality' => 'required',
        //     'birth_place' => 'required',
        //     'religion' => 'required|in:Hinduism,Islam,Christianity,Sikhism,Buddhism,Jainism,Other',
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Photo validation
        //     'sign' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Signature validation
        // ]);

        // // Handle file uploads for photo and signature
        // $photoPath = $request->file('photo')->store('photos');
        // $signPath = $request->file('sign')->store('signatures');

        // // Add photo and sign paths to validated data
        // $validatedData['photo_path'] = $photoPath;
        // $validatedData['sign_path'] = $signPath;

        // // Create a new PersonalDetail instance with the validated data
        // $personalDetail = PersonalDetail::create($validatedData);


        Log::info('Received data:', $request->all());
    }

    public function hello()
    {
        return response()->json(['message' => 'Hello from the backend!']);
    }
    public function newDataEndpoint(Request $request)
    {
        // Log the received data to the console
        Log::info('Received data:', $request->all());

        return response()->json(['message' => 'Data received successfully'], 200);
    }
}
