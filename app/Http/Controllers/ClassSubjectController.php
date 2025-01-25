<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassSubject;
use App\Models\Subject;
use App\Models\AcademicYear;
use App\Models\UClass;

class ClassSubjectController extends Controller
{
    public function index()
    {
        $classSubjects=ClassSubject::with(['class','subject','academicYear'])->get();
        return view('admin.classsubject.index',compact('classSubjects'));
    }

    public function create()
    {

        $classes = UClass::all();
        $subjects = Subject::all();
        $academicYears = AcademicYear::all();
        return view('admin.classsubject.create',compact('classes','subjects','academicYears'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'class_id' => 'required|exists:classes,id',
            'subject_id' => 'required|exists:subjects,id',
            'academic_year_id' => 'required|exists:academic_years,id',
        ]);

        ClassSubject::create($request->all());
        return redirect()->route('admin.classsubject.index')->with('success', 'Class Subject created successfully.');
    }

    public function edit(ClassSubject $classSubject)
    {
        // $classSubject = ClassSubject::findOrFail($classSubject->id);
        $classes = UClass::all();
        $subjects = Subject::all();
        $academicYears = AcademicYear::all();
        return view('admin.classsubject.edit', compact('classSubject', 'classes', 'subjects', 'academicYears'));
        // dd($id, ClassSubject::find($id));
    }

    public function update(Request $request, $id)
{
    $classSubject = ClassSubject::findOrFail($id);


    $request->validate([
        'class_id' => 'required|exists:classes,id',
        'subject_id' => 'required|exists:subjects,id',
        'academic_year_id' => 'required|exists:academic_years,id',
    ]);

    $classSubject->update($request->all());

    return redirect()->route('admin.classsubject.index')->with('success', 'Class Subject updated successfully.');
}

    public function destroy(ClassSubject $classSubject)
    {
        // dd($classSubject->toArray());
        $classSubject->delete();
        return redirect()->route('admin.classsubject.index')->with('success', 'Class Subject deleted successfully.');
    }

}
