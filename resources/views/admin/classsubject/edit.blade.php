@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Хичээлийн жилийн бүртгэл засах
                    </h4>
                </div>
                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{ url('admin/classsubjects/'. $classSubject->id) }}" method="POST">
                          {{-- dd($classSubject->id); --}}
                        @csrf
                        @method('PUT')
                        <label>Class</label>
                        <select name="class_id" class="form-control" style="margin-bottom: 20px" required>
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}" {{ $classSubject->class_id == $class->id ? 'selected' : '' }}>
                                    {{ $class->class_name }}
                                </option>
                            @endforeach
                        </select>

                        <label>Subject</label>
                        <select name="subject_id" class="form-control" required>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}" {{ $classSubject->subject_id == $subject->id ? 'selected' : '' }}>
                                    {{ $subject->subject_name }}
                                </option>
                            @endforeach
                        </select>

                        <label>Academic Year</label>
                        <select name="academic_year_id" class="form-control"  style="margin-bottom: 20px" required>
                            @foreach($academicYears as $academicYear)
                                <option value="{{ $academicYear->id }}" {{ $classSubject->academic_year_id == $academicYear->id ? 'selected' : '' }}>
                                    {{ $academicYear->year_name }}
                                </option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

