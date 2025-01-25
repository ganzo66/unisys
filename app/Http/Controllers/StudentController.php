<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UClass;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students= Student::all();
        return view('admin.student.index',compact('students'));
    }

    public function create()
    {
        $chosen_class = UClass::all(); // Fetch all classes
        return view('admin.student.create', compact('chosen_class')); // Pass to the view
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'ovog'=>'required|string',
            'ner'=>'required|string',
            'register'=>'required|string|max:20',
            'nas'=>'required|integer',
            'huis'=>'required|string|max:20',
            'yas_undes'=>'required|string',
            'graduated_school'=>'required|string|max:200',
            'bosgo_onoo1'=>'required|integer',
            'bosgo_onoo2'=>'required|integer',
            'medical_score'=>'required|string',
            'phone_number'=>'required|string',
            'address'=>'required|string|max:250',
            'class_code'=>'required|string|exists:classes,id',
            'admission_year'=>'required|digits:4',




        ]);

        // dd($validatedData);
        // dd($validatedData['class_code']);
        $stpassword = substr($validatedData['register'], -8);

        $classId = $validatedData['class_code'];
        $classCode = UClass::findOrFail($classId)->class_code;
        // dd($classCode);
        $year = substr($request->admission_year, -2); // e.g., "2024" => "24"

        // Find the last student in the same class and year
        $count = Student::where('songoson_angi', $classCode)
                ->where('admission_year', $validatedData['admission_year'])
                ->count();

        // Determine the next 3-digit number
        $nextNumber = sprintf('%03d', $count + 1);

        // Generate the email
        $stemail = $this->generateEmail($classCode, $year, $nextNumber);
        // dd($classCode);
        Student::query()->create([

            'ovog'=>$validatedData['ovog'],
            'name'=>$validatedData['ner'],
            'register'=>$validatedData['register'],
            'nas'=>$validatedData['nas'],
            'huis'=>$validatedData['huis'],
            'yas_undes'=>$validatedData['yas_undes'],
            'graduated_school'=>$validatedData['graduated_school'],
            'bosgo_onoo1'=>$validatedData['bosgo_onoo1'],
            'bosgo_onoo2'=>$validatedData['bosgo_onoo2'],
            'medical_score'=>$validatedData['medical_score'],
            'phone_number'=>$validatedData['phone_number'],
            'address'=>$validatedData['address'],
            'songoson_angi'=>$classCode,
            'admission_year'=>$validatedData['admission_year'],
            'student_email' => $stemail,
            'student_email_password' => Hash::make($stpassword),

        ]);

        return redirect()->route('admin.student.index')->with('message','Шинэ оюутны бүртгэл амжилттай нэмэгдлээ');
    }

    private function generateEmail($classCode, $year, $nextNumber)
    {

        $letter = 'n';
        $domain = 'st.unisys.edu';
        return "{$classCode}{$year}{$letter}{$nextNumber}@{$domain}";
    }
    //

    public function edit($id)
    {
        $student = Student::query()->find($id); // Оюутны мэдээллийг ID-аар хайх
        $classes = UClass::all(); // Бүх ангиудыг авах

        return view('admin.student.edit', compact('student', 'classes'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'ovog'=>'required|string',
            'ner'=>'required|string',
            'register'=>'required|string|max:20',
            'nas'=>'required|integer',
            'huis'=>'required|string|max:20',
            'yas_undes'=>'required|string',
            'graduated_school'=>'required|string|max:200',
            'bosgo_onoo1'=>'required|integer',
            'bosgo_onoo2'=>'required|integer',
            'medical_score'=>'required|string',
            'phone_number'=>'required|string',
            'address'=>'required|string|max:250',
            'class_code'=>'required|string|exists:classes,id',
            'admission_year'=>'required|digits:4',
        ]);

        $student = Student::findOrFail($id); // Оюутны мэдээллийг олно
        $classId = $validatedData['class_code'];
        $classCode = UClass::findOrFail($classId)->class_code;

        $needsEmailUpdate = false;

        // Элсэлтийн жил эсвэл анги код өөрчлөгдсөн эсэхийг шалгана
        if ($student->songoson_angi !== $classCode || $student->admission_year !== $validatedData['admission_year']) {
            $needsEmailUpdate = true;
        }

        // Имэйл өөрчлөх шаардлагатай бол
        if ($needsEmailUpdate) {
            $year = substr($validatedData['admission_year'], -2);

            $count = Student::where('songoson_angi', $classCode)
                            ->where('admission_year', $validatedData['admission_year'])
                            ->count();

            $nextNumber = sprintf('%03d', $count + 1);
            $email = $this->generateEmail($classCode, $year, $nextNumber);

            $student->student_email = $email; // Шинэ имэйл оноох
        }

        // Нууц үг өөрчлөх (жишээ: register дугаараас үүсгэх)
        $student->student_email_password = Hash::make(substr($validatedData['register'], -8));

        // Бусад өгөгдлүүдийг шинэчлэх
        $student->update([
            'ovog'=>$validatedData['ovog'],
            'name'=>$validatedData['ner'],
            'register'=>$validatedData['register'],
            'nas'=>$validatedData['nas'],
            'huis'=>$validatedData['huis'],
            'yas_undes'=>$validatedData['yas_undes'],
            'graduated_school'=>$validatedData['graduated_school'],
            'bosgo_onoo1'=>$validatedData['bosgo_onoo1'],
            'bosgo_onoo2'=>$validatedData['bosgo_onoo2'],
            'medical_score'=>$validatedData['medical_score'],
            'phone_number'=>$validatedData['phone_number'],
            'address'=>$validatedData['address'],
            'songoson_angi'=>$classCode,
            'admission_year'=>$validatedData['admission_year'],
        ]);

        return redirect()->route('admin.student.index')->with('message', 'Оюутны мэдээлэл амжилттай шинэчлэгдлээ!');

    }

    public function destroy($id)
    {
        $student = Student::query()->find($id);
        $student->delete();
        return redirect('/admin/students')->with('message','Оюутны мэдээлэл амжилттай устгагдлаа');
    }
}

// <td>{{$item->id}}</td>
// <td>{{$item->ovog}}</td>
// <td>{{$item->name}}</td>
// <td>{{$item->register}}</td>
// <td>{{$item->nas}}</td>
// <td>{{$item->huis}}</td>
// <td>{{$item->yas_undes}}</td>
// <td>{{$item->graduated_school}}</td>
// <td>{{$item->bosgo_onoo1}}</td>
// <td>{{$item->bosgo_onoo2}}</td>
// <td>{{$item->medical_score}}</td>
// <td>{{$item->phone_number}}</td>
// <td>{{$item->address}}</td>
