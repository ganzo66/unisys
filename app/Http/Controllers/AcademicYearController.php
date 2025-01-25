<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYear;

class AcademicYearController extends Controller
{
    public function index()
    {
        $academicyears = AcademicYear::all(); //fetch all data from academic_years table
        return view('admin.academicyear.index', compact('academicyears'));
    }

    public function create()
    {
        return view('admin.academicyear.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'year_name'=>'required|string',
            'year_name_en'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
        ]);

        AcademicYear::query()->create([
            'year_name'=>$validatedData['year_name'],
            'year_name_en'=>$validatedData['year_name_en'],
            'start_date'=>$validatedData['start_date'],
            'end_date'=>$validatedData['end_date'],
        ]);

        return redirect('admin/academicyears')->with('success', 'Хичээлийн жил амжилттай нэмэгдлээ');

    }

    public function edit($id)
    {
        $academicyear = AcademicYear::query()->find($id);
        return view('admin.academicyear.edit', compact('academicyear'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'year_name'=>'required|string',
            'year_name_en'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
        ]);

        $academicyear = AcademicYear::query()->find($id);
        $academicyear->update([
            'year_name'=>$validatedData['year_name'],
            'year_name_en'=>$validatedData['year_name_en'],
            'start_date'=>$validatedData['start_date'],
            'end_date'=>$validatedData['end_date'],
        ]);

        return redirect('admin/academicyears')->with('success', 'Хичээлийн жил амжилттай засагдлаа');
    }

    public function destroy($id)
    {
        $academicyear = AcademicYear::query()->find($id);
        $academicyear->delete();

        return redirect('admin/academicyears')->with('success', 'Хичээлийн жил амжилттай устгагдлаа');
    }
}
