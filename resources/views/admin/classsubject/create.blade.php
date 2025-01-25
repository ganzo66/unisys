@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Ангид орох хичээлийг бүртгэх
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/classsubjects')}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        <div class="row">
                            <label>Ангийн нэр</label>
                            <select name="class_id" style="margin-bottom: 20px" required>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>
                                        {{ $class->class_name }}
                                    </option>
                                @endforeach
                            </select>

                            <label for="subject_id">Subject:</label>
                            <select name="subject_id" style="margin-bottom: 20px" required>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                                        {{ $subject->subject_name }}
                                    </option>
                                @endforeach
                            </select>

                            <label for="academic_year_id">Academic Year:</label>
                            <select name="academic_year_id" style="margin-bottom: 20px" required>
                                @foreach ($academicYears as $academicYear)
                                    <option value="{{ $academicYear->id }}" {{ old('academic_year_id') == $academicYear->id ? 'selected' : '' }}>
                                        {{ $academicYear->year_name }}
                                    </option>
                                @endforeach
                            </select>
                                    {{-- <input type="text" name="year_name" class="form-control" value="{{old('year_name')}}">
                                    @error('year_name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хичээлийн нэр</label>
                                    <input type="text" name="year_name" class="form-control" value="{{old('year_name')}}">
                                    @error('year_name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хичээлийн жилийн нэр</label>
                                    <input name="year_name_en" type="text" class="form-control" value="{{old('year_name_en')}}">
                                    @error('year_name_en')<small class="text-danger">{{$message}}</small>@enderror
                                </div> --}}



                        </div>



                            <button type="submit" class="btn btn-primary" style="margin-top: 20px">
                                Хадгалах
                            </button>


                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

