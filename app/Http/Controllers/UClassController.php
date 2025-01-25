<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UClass;

class UClassController extends Controller
{
    public function index()
    {
        $classes= UClass::all();
        return view('admin.class.index',compact('classes'));
    }

    public function create()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'class_name'=>'required|string',
            'class_code'=>'required|string',

        ]);

        // dd($validatedData);

        UClass::query()->create([
            'class_name'=>$validatedData['class_name'],
            'class_code'=>$validatedData['class_code'],
        ]);

        return redirect('admin/classes')->with('success', 'Ангийн мэдээлэл амжилттай нэмэгдлээ');

    }

    public function edit($id)
    {
        $class = UClass::query()->find($id);
        return view('admin.class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'class_name'=>'required|string',
            'class_code'=>'required|string',
        ]);

        $class = UClass::query()->find($id);
        $class->update([
            'class_name'=>$validatedData['class_name'],
            'class_code'=>$validatedData['class_code'],
        ]);

        return redirect('admin/classes')->with('success', 'Ангийн мэдээлэл амжилттай шинэчлэгдлээ');
    }

    public function destroy($id)
    {
        $class=UClass::query()->find($id);
        $class->delete();
        return redirect('admin/classes')->with('success', 'Ангийн мэдээлэл амжилттай устгагдлаа');
    }


}

