<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $subjects= Subject::all();
        return view('admin.subject.index',compact('subjects'));
        
    }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'subject_name'=>'required|string|max:255',
        ]);

        // dd($validatedData);

        Subject::query()->create([
            'subject_name'=>$validatedData['subject_name'],
        ]);

        return redirect('admin/subjects')->with('success', 'Хичээлийн мэдээлэл амжилттай нэмэгдлээ');

    }
    public function edit($id)
    {
        $subject = Subject::query()->find($id);
        return view('admin.subject.edit', compact('subject'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'subject_name'=>'required|string|max:255',
        ]);

        $subject = Subject::query()->find($id);
        $subject->update([
            'subject_name'=>$validatedData['subject_name'],
        ]);

        return redirect('admin/subjects')->with('success', 'Хичээлийн мэдээлэл амжилттай засагдлаа');
    }
    public function destroy($id)
    {
        $subject = Subject::query()->find($id);
        $subject->delete();
        return redirect('admin/subjects')->with('success', 'Хичээлийн мэдээлэл амжилттай устгагдлаа');
    }
}
