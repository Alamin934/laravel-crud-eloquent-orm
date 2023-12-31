<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('welcome', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'city'=>'required',
            'marks'=>'required',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;

        $student->save();

        return redirect('/')->with(['status'=>'Student Added Successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('editForm', ['data'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::where('id', $id)->update([
            'name'=> $request->name,
            'city'=> $request->city,
            'marks'=> $request->marks,
        ]);
        return redirect('/')->with(['status'=>'Student Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/')->with(['status'=>'Student Deleted Successfully']);
    }
}
