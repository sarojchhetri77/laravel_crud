<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students=Student::all();
         return view('student.main',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
      return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->class = $request->class;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // echo "delete ma aya";
        // die;
        $student->delete();
        return redirect()->route('student.index');
    }
}
