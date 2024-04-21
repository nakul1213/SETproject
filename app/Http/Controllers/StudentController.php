<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{ 
    public function addStudent(StudentRequest $studentRequest){
        try {
            $student = Student::create($studentRequest->validated());
            \Log::info('Student added successfully.');
            return response()->json($student, 201);
        } catch (\Exception $e) {
            \Log::error('Error adding student: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while adding the student.'], 500);
        }
    }
    public function getAllStudents()
    {
        try {
            $students = Student::all();
            return response()->json($students, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching students: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching students.'], 500);
        }
    }
    public function getStudentById($id)
    {
        try {
            $student = Student::findOrFail($id);
            return response()->json($student, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }
    public function deleteStudent($id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->delete();
            return response()->json(['message' => 'Student deleted successfully.'], 200);
        } catch (\Exception $e) {
            \Log::error('Error deleting student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }
    public function updateStudent(StudentRequest $studentRequest, $id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->update($studentRequest->all());
            return response()->json($student, 200);
        } catch (\Exception $e) {
            \Log::error('Error updating student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }
}
