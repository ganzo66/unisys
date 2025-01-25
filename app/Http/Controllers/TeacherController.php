<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\Facades\Redis;

class TeacherController extends Controller
{
    //
    public function index()
    {
        // $roles=Role::all();
        $teachers=Teacher::all();
        return view('admin.teacher.index', compact('teachers',));
    }

    public function create()
    {
        $roles=Role::all();
        $departments = Department::all(); // Fetch all departments
        //    dd($departments);
        return view('admin.teacher.create', compact('departments','roles')); // Pass to the view
        // return view('admin.teacher.create');


    }

    public function store(Request $request)
    {

        $validatedData=$request->validate([
        'ovog'=>'required|string',
        'ner'=>'required|string',
        'register'=>'required|string',
        'nas'=>'required|integer',
        'huis'=>'required|string',
        'yas_undes'=>'required|string',
        'graduated_school'=>'required|string',
        'graduated_university'=>'required|string',
        'profession'=>'required|string',
        'academic_degree'=>'required|string',
        'foreign_language1'=>'required|string',
        'foreign_language2'=>'nullable|string',
        'work_experience1'=>'required|string',
        'work_experience2'=>'required|string',
        'work_experience3'=>'nullable|string',
        'work_experience4'=>'nullable|string',
        'work_experience5'=>'nullable|string',
        'shagnal1'=>'nullable|string',
        'shagnal2'=>'nullable|string',
        'phone_number1'=>'required|string',
        'phone_number2'=>'required|string',
        'home_address'=>'required|string',
        'code'=>'required|exists:departments,id',
        'teacher_email' => 'required|email|unique:teachers,teacher_email',
        'role_id'=>'required|exists:roles,id',

        ]);


        $password = substr($validatedData['register'], -8);

        $depId = $validatedData['code'];
        $depCode = Department::find($depId)->code;

        // $department = Department::findOrFail($validatedData['department_code']); // Fetch department
        // $departmentCode = $department->code;
        // dd($password);
        // dd($validatedData);
        // dd($validatedData, $password);
        Teacher::query()->create([

            'ovog'=>$validatedData['ovog'],
            'name'=>$validatedData['ner'],
            'register'=>$validatedData['register'],
            'nas'=>$validatedData['nas'],
            'huis'=>$validatedData['huis'],
            'yas_undes'=>$validatedData['yas_undes'],
            'graduated_school'=>$validatedData['graduated_school'],
            'graduated_university'=>$validatedData['graduated_university'],
            'profession'=>$validatedData['profession'],
            'academic_degree'=>$validatedData['academic_degree'],
            'foreign_language1'=>$validatedData['foreign_language1'],
            'foreign_language2'=>$validatedData['foreign_language2'],
            'work_experience1'=>$validatedData['work_experience1'],
            'work_experience2'=>$validatedData['work_experience2'],
            'work_experience3'=>$validatedData['work_experience3'],
            'work_experience4'=>$validatedData['work_experience4'],
            'work_experience5'=>$validatedData['work_experience5'],
            'shagnal1'=>$validatedData['shagnal1'],
            'shagnal2'=>$validatedData['shagnal2'],
            'phone_number1'=>$validatedData['phone_number1'],
            'phone_number2'=>$validatedData['phone_number2'],
            'home_address'=>$validatedData['home_address'],
            'department_code'=>$depCode,
            'teacher_email' => $validatedData['teacher_email'],
            'teacher_email_password' => Hash::make($password),
            'role_id' => $validatedData['role_id'],


        ]);





        return redirect('/admin/teachers')->with('message','Шинэ багшийн бүртгэл амжилттай нэмэгдлээ');
    }

    public function edit($id)
    {
        $teacher=Teacher::query()->find($id);
        $departments = Department::all(); // Fetch all departments
        return view('admin.teacher.edit',compact('teacher','departments'));
    }

    public function update(Request $request,$id)
    {

        $validated= $request->validate([
        'ovog'=>'required|string',
        'ner'=>'required|string|max:255',
        'register'=>'required|string',
        'nas'=>'required|integer',
        'huis'=>'required|string',
        'yas_undes'=>'required|string',
        'graduated_school'=>'required|string',
        'graduated_university'=>'required|string',
        'profession'=>'required|string',
        'academic_degree'=>'required|string',
        'foreign_language1'=>'required|string',
        'foreign_language2'=>'nullable|string',
        'work_experience1'=>'required|string',
        'work_experience2'=>'required|string',
        'work_experience3'=>'nullable|string',
        'work_experience4'=>'nullable|string',
        'work_experience5'=>'nullable|string',
        'shagnal1'=>'nullable|string',
        'shagnal2'=>'nullable|string',
        'phone_number1'=>'required|string',
        'phone_number2'=>'required|string',
        'home_address'=>'required|string',
        'department_code'=>'required|exists:departments,code',
        'teacher_email' => "required|email|unique:teachers,teacher_email,$id",

        ]);
        $teacher = Teacher::findOrFail($id);
        // $validated = $request->validated();

        $newPassword = null;
        if ($teacher->register !== $validated['register']) {
            $newPassword = substr($validated['register'], -8); // Extract last 8 digits
            $teacher->teacher_email_password = Hash::make($newPassword); // Hash and save
        }

        $teacher=Teacher::query()->find($id);
        $teacher->update([

            'ovog'=>$validated['ovog'],
            'name'=>$validated['ner'],
            'register'=>$validated['register'],
            'nas'=>$validated['nas'],
            'huis'=>$validated['huis'],
            'yas_undes'=>$validated['yas_undes'],
            'graduated_school'=>$validated['graduated_school'],
            'graduated_university'=>$validated['graduated_university'],
            'profession'=>$validated['profession'],
            'academic_degree'=>$validated['academic_degree'],
            'foreign_language1'=>$validated['foreign_language1'],
            'foreign_language2'=>$validated['foreign_language2'],
            'work_experience1'=>$validated['work_experience1'],
            'work_experience2'=>$validated['work_experience2'],
            'work_experience3'=>$validated['work_experience3'],
            'work_experience4'=>$validated['work_experience4'],
            'work_experience5'=>$validated['work_experience5'],
            'shagnal1'=>$validated['shagnal1'],
            'shagnal2'=>$validated['shagnal2'],
            'phone_number1'=>$validated['phone_number1'],
            'phone_number2'=>$validated['phone_number2'],
            'home_address'=>$validated['home_address'],
            'department_code'=>$validated['department_code'],
            'teacher_email' => $validated['teacher_email'],
            'teacher_email_password' => $newPassword ? Hash::make($newPassword) : $teacher->teacher_email_password,
        ]);

        return redirect('/admin/teachers')->with('message','Багшийн бүртгэл амжилттай засагдлаа');
    }


    public function destroy($id)
    {
        $teacher = Teacher::query()->find($id);
        $teacher->delete();
        return redirect('/admin/teachers')->with('message','Багшийн мэдээлэл амжилттай устгагдлаа');
    }

}
