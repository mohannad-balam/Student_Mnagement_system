<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.student', ['students' => $students, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('students.student', ['students' => $students, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student();

        if ($student) {
            $student->cne = $request->input('cne');
            $student->first_name = $request->input('first_name');
            $student->last_name = $request->input('last_name');
            $student->age = $request->input('age');
            $student->speciality = $request->input('speciality');

            $student->save();

            return redirect('/student')->with(['success' => 'student added successfully!']);
        }
        return redirect('/student/create')->withInput($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('students.student', ['student' => $student, 'students' => $students, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('students.student', ['students' => $students, 'student' => $student, 'layout' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->cne = $request->input('cne');
            $student->first_name = $request->input('first_name');
            $student->last_name = $request->input('last_name');
            $student->age = $request->input('age');
            $student->speciality = $request->input('speciality');

            $student->save();
            return redirect('/student')->with(['success' => 'student updated successfully!']);
        }
        return redirect('/student/edit/'.$student->id)->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with(['deleted' => 'student deleted successfully!']);
    }
}
