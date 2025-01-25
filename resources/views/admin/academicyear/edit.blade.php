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
                    <form action="{{url('admin/academicyears/' . $academicyear->id)}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        @method('PUT')
                        <div class="mb-3">
                            <label>Хичээлийн жилийн нэр</label>
                            <input type="text" name="year_name" class="form-control" value="{{$academicyear->year_name}}">
                            @error('year_name')<small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="mb-3">
                            <label>Хичээлийн жилийн нэр/Англи/</label>
                            <input name="year_name_en" type="text" class="form-control" value="{{$academicyear->year_name_en}}">
                            @error('year_name_en')<small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="mb-3">
                            <label>Эхлэх өдөр</label>
                            <input name="start_date" type="text" class="form-control" value="{{$academicyear->start_date}}">
                            @error('start_date')<small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="mb-3">
                            <label>Дуусах өдөр</label>
                            <input name="end_date" type="text" class="form-control" value="{{$academicyear->end_date}}">
                            @error('end_date')<small class="text-danger">{{$message}}</small>@enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Хадгалах
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

