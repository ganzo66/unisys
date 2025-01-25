<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index',compact('departments'));
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|string',
            'department_name_en' => 'required|string',
            'code' => 'required|string'
        ]);

        Department::query()->create([
            'department_name' => $validatedData['department_name'],
            'department_name_en' => $validatedData['department_name_en'],
            'code' => $validatedData['code']
        ]);

        return redirect()->route('admin.department.index')->with('message','Шинэ тэнхимийн бүртгэл амжилттай нэмэгдлээ');
    }

    public function edit($id)
    {
        $departments = Department::query()->find($id);
        return view('admin.department.edit',compact('departments'));
    }

    public function update(Request $request, $id)
    {
        $department = Department::query()->find($id);
        $validatedData = $request->validate([
            'department_name' => 'required|string',
            'department_name_en' => 'required|string',
            'code' => 'required|string'
        ]);

        $department->update([
            'department_name' => $validatedData['department_name'],
            'department_name_en' => $validatedData['department_name_en'],
            'code' => $validatedData['code']
        ]);

        return redirect()->route('admin.department.index')->with('message','Тэнхимийн мэдээлэл амжилттай шинэчлэгдлээ');
    }

    public function destroy($id)
    {
        $department = Department::query()->findOrFail($id);
        $department->delete();
        return redirect()->route('admin.department.index')->with('message','Тэнхим амжилттай устгагдлаа');
    }
}
