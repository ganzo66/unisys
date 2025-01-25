@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Багшийн бүртгэл засах
                    </h4>
                </div>
                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 40px;">
                    <form action="{{url('admin/teachers/' . $teacher->id)}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Овог</label>
                                    <input type="text" name="ovog" class="form-control" value="{{$teacher->ovog}}">
                                    @error('ovog')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нэр</label>
                                    <input name="ner" type="text" class="form-control" value="{{$teacher->name}}">
                                    @error('ner')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Регистер</label>
                                    <input name="register" type="text" class="form-control" value="{{$teacher->register}}">
                                    @error('register')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нас</label>
                                    <input name="nas" type="text" class="form-control" value="{{$teacher->nas}}">
                                    @error('nas')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хүйс</label>
                                    <input name="huis" type="text" class="form-control" value="{{$teacher->huis}}">
                                    @error('huis')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Яс үндэс</label>
                                    <input name="yas_undes" type="text" class="form-control" value="{{$teacher->yas_undes}}">
                                    @error('yas_undes')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Төгссөн сургууль</label>
                                    <input name="graduated_school" type="text" class="form-control" value="{{$teacher->graduated_school}}">
                                    @error('graduated_school')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Төгссөн их, дээд сургууль</label>
                                    <input name="graduated_university" type="text" class="form-control" value="{{$teacher->graduated_university}}">
                                    @error('graduated_university')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Мэргэжил</label>
                                    <input name="profession" type="text" class="form-control" value="{{$teacher->profession}}">
                                    @error('profession')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Мэргэжлийн зэрэг, цол</label>
                                    <input name="academic_degree" type="text" class="form-control" value="{{$teacher->academic_degree}}">
                                    @error('academic_degree')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гадаад хэл1</label>
                                    <input name="foreign_language1" type="text" class="form-control" value="{{$teacher->foreign_language1}}">
                                    @error('foreign_language1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гадаад хэл2</label>
                                    <input name="foreign_language2" type="text" class="form-control" value="{{$teacher->foreign_language2}}">
                                    @error('foreign_language2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Ажлын туршлага1</label>
                                    <input name="work_experience1" type="text" class="form-control" value="{{$teacher->work_experience1}}">
                                    @error('work_experience1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага2</label>
                                    <input name="work_experience2" type="text" class="form-control" value="{{$teacher->work_experience2}}">
                                    @error('work_experience2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага3</label>
                                    <input name="work_experience3" type="text" class="form-control" value="{{$teacher->work_experience3}}">
                                    @error('work_experience3')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага4</label>
                                    <input name="work_experience4" type="text" class="form-control" value="{{$teacher->work_experience4}}">
                                    @error('work_experience4')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага5</label>
                                    <input name="work_experience5" type="text" class="form-control" value="{{$teacher->work_experience5}}">
                                    @error('work_experience')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Шагнал1</label>
                                    <input name="shagnal1" type="text" class="form-control" value="{{$teacher->shagnal1}}">
                                    @error('shagnal1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Шагнал2</label>
                                    <input name="shagnal2" type="text" class="form-control" value="{{$teacher->shagnal2}}">
                                    @error('shagnal2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Утасны дугаар1</label>
                                    <input name="phone_number1" type="text" class="form-control" value="{{$teacher->phone_number2}}">
                                    @error('phone_number1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Утасны дугаар2</label>
                                    <input name="phone_number2" type="text" class="form-control" value="{{$teacher->phone_number2}}">
                                    @error('phone_number2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гэрийн хаяг</label>
                                    <input name="home_address" type="text" class="form-control" value="{{$teacher->home_address}}">
                                    @error('home_address')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="department_code">Department</label>
                                    <select name="department_code" id="department_code" class="form-control" required>
                                        @foreach ($departments as $item)
                                            {{-- <option value="{{ $item->code }}"
                                                {{ old('department_code', $teacher->$item->code ?? '') == $item->code ? 'selected' : '' }}>
                                                {{ $item->code }}
                                            </option> --}}

                                            <option value="{{ $item->code }}"
                                                {{ old('department_code', $teacher->department_code ?? '') == $item->code ? 'selected' : '' }}>
                                                {{ $item->code }}
                                            </option>
                                        @endforeach
                                    </select>


                                </div>

                                <div class="mb-3">
                                    <label>Багшийн имэйл</label>
                                    <input name="teacher_email" type="text" class="form-control" value="{{$teacher->teacher_email}}">
                                    @error('teacher_email')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>
                        </div>




                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Хадгалах
                            </button>
                        </div>

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

