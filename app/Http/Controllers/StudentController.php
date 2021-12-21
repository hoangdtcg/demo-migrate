<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('backend.student.list',compact('students'));
    }

    public function create()
    {
        return view('backend.student.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->save();
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }


}
