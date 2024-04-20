<?php

/**
 * ©2024, Ujjwal Jindal, Batch 2025, CSE - IIT (ISM) Dhanbad
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class ComplaintController extends Controller
{
    /**
     * Get the list of complaints by user
     * @return \Illuminate\Http\JsonResponse
     * 
     * Response will be like this:
     * [
     * {
     * "com_id": 1,
     * "user_id": "1",
     * "date_n_time": "2021-09-07T00:00:00.000000Z",
     * "type": "Electricity",
     * "location": "Home",
     * "location_details": "Near the main gate",
     * "problem_details": "Power cut",
     * "pref_time": "Morning",
     * "status": "New",
     * "complaint_id": "6136b1b1b1b1b",
     * "remarks": "New Complaint"
     * }
     * ]
     */
    public function getComplaints(Request $request)
    {
        $complaint = new Complaint();
        $userId = Auth::id();

        error_log('User id: ' . $userId);

        if (empty($userId)) {
            return response()->json(['message' => 'User not found']);
        }
        $complaints = $complaint->getComplaintsByUser($userId);
        return response()->json($complaints);
    }

    /**
     * Get the complaint details by complaint id
     * @param $complaintId
     * @return \Illuminate\Http\JsonResponse
     * 
     * Response will be like this:
     * {
     * "com_id": 1,
     * "user_id": "1",
     * "date_n_time": "2021-09-07T00:00:00.000000Z",
     * "type": "Electricity",
     * "location": "Home",
     * "location_details": "Near the main gate",
     * "problem_details": "Power cut",
     * "pref_time": "Morning",
     * "status": "New",
     * "complaint_id": "6136b1b1b1b1b",
     * "remarks": "New Complaint"
     * }
     */
    public function getComplaint($complaintId)
    {
        if (empty($complaintId)) {
            return response()->json(['message' => 'Complaint id is required']);
        }
        $complaint = new Complaint();
        $complaint = $complaint->getComplaint($complaintId);
        if (empty($complaint)) {
            return response()->json(['message' => 'Complaint not found']);
        }
        return response()->json($complaint);
    }

    /**
     * Create a new complaint
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * Request body should be like this:
     * {
     * "type": "Electricity",
     * "location": "Home",
     * "location_details": "Near the main gate",
     * "problem_details": "Power cut",
     * "pref_time": "Morning"
     * }
     * 
     * Response will be like this:
     * {
     * "message": "Complaint created successfully"
     * }
     */
    public function createComplaint(Request $request)
    {
        if (empty($request->type) || empty($request->location) || empty($request->location_details) || empty($request->problem_details) || empty($request->pref_time)) {
            return response()->json(['message' => 'All fields are required', 'status' => false]);
        }

        $complaint = new Complaint();
        $complaint->user_id = Auth::id();

        if (empty($complaint->user_id)) {
            return response()->json(['message' => 'User not found', 'status' => false]);
        }

        $complaint->type = $request->type;
        $complaint->location = $request->location;
        $complaint->location_details = $request->location_details;
        $complaint->problem_details = $request->problem_details;
        $complaint->pref_time = $request->pref_time;

        $complaint->complaint_id = uniqid();
        $complaint->save();

        return response()->json([
            'message' => 'Complaint created successfully',
            'status' => true,
        ]);
    }

    /**
     * Get the list of complaint types
     * @return \Illuminate\Http\JsonResponse
     * 
     * Response will be like this:
     * [
     * "Electricity",
     * "Water",
     * "Internet",
     * "Others"
     * ]
     */
    public function getComplaintTypes()
    {
        $query = "SELECT DISTINCT com_type FROM complaints_types";
        $complaintTypes = DB::select($query);
        $complaintTypes = array_column($complaintTypes, 'com_type');
        return response()->json($complaintTypes);
    }
}
