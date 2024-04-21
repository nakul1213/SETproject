<?php

/**
 * ©2024, Ujjwal Jindal, Batch 2025, CSE - IIT (ISM) Dhanbad
 */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComplaintController;

Route::controller(ComplaintController::class)->group(function () {
    Route::get('complaints', 'getComplaints');
    Route::get('complaints/types', 'getComplaintTypes');
    Route::get('complaints/{complaintId}', 'getComplaint');
    Route::post('complaints', 'createComplaint');
});
