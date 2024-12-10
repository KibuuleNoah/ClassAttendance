<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;
use App\Models\Student;

class StudentsController extends Controller
{
    /*
     * firstname
     * lastname
     * class
     * gender
     */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("students.index",["students" => Student::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = ["class 1","class 2","class 3","class 4"];
        return view("students.create",[
            "classes" => $classes,
            "genders" => ["female","male"]
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentFormRequest $request):RedirectResponse
    {
        //
        $data = $request->validated();

        Student::create($data);

        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view("students.show",["student" => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view("students.edit",["student" => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentFormRequest $request, Student $student)
    {
        $data = $request->validated();

        $student->updated($data);

        return redirect()->route("students.show",["student" => $student["id"]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route("students.index");
    }
}
