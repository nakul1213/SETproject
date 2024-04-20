<?php

/**
 * ©2024, Ujjwal Jindal, Batch 2025, CSE - IIT (ISM) Dhanbad
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaint';
    protected $primaryKey = 'com_id';
    protected $fillable = [
        'user_id',
        'date_n_time',
        'type',
        'location',
        'location_details',
        'problem_details',
        'pref_time',
        'status',
        'complaint_id',
        'remarks'
    ];

    // remove timestamps
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getComplaintsByUser($userId)
    {
        return $this->where('user_id', $userId)->get();
    }

    public function getComplaint($complaintId)
    {
        return $this->where('complaint_id', $complaintId)->first();
    }

    public function createComplaint($data)
    {
        return $this->create($data);
    }

    public function updateComplaint($complaintId, $data)
    {
        return $this->where('complaint_id', $complaintId)->update($data);
    }
}
