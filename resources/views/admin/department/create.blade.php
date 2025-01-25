@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Шинээр тэнхим бүртгэх
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/departments')}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Тэнхимийн нэр</label>
                                    <input type="text" name="department_name" class="form-control" value="{{old('department_name')}}">
                                    @error('department_name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Тэнхимийн нэр/Англи/</label>
                                    <input name="department_name_en" type="text" class="form-control" value="{{old('department_name_en')}}">
                                    @error('department_name_en')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Тэнхимийн код</label>
                                    <input name="code" type="text" class="form-control" value="{{old('code')}}">
                                    @error('code')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>

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

