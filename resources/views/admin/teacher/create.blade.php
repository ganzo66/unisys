@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Шинээр багш бүртгэх
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/teachers')}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Овог</label>
                                    <input type="text" name="ovog" class="form-control" value="{{old('ovog')}}">
                                    @error('ovog')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нэр</label>
                                    <input name="ner" type="text" class="form-control" value="{{old('ner')}}">
                                    @error('ner')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Регистер</label>
                                    <input name="register" type="text" class="form-control" value="{{old('register')}}">
                                    @error('register')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нас</label>
                                    <input name="nas" type="text" class="form-control" value="{{old('nas')}}">
                                    @error('nas')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хүйс</label>
                                    <input name="huis" type="text" class="form-control" value="{{old('huis')}}">
                                    @error('huis')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Яс үндэс</label>
                                    <input name="yas_undes" type="text" class="form-control" value="{{old('yas_undes')}}">
                                    @error('yas_undes')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Төгссөн сургууль</label>
                                    <input name="graduated_school" type="text" class="form-control" value="{{old('graduated_school')}}">
                                    @error('graduated_school')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Төгссөн их, дээд сургууль</label>
                                    <input name="graduated_university" type="text" class="form-control" value="{{old('graduated_university')}}">
                                    @error('graduated_university')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Мэргэжил</label>
                                    <input name="profession" type="text" class="form-control" value="{{old('profession')}}">
                                    @error('profession')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Мэргэжлийн зэрэг, цол</label>
                                    <input name="academic_degree" type="text" class="form-control" value="{{old('academic_degree')}}">
                                    @error('academic_degree')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гадаад хэл1</label>
                                    <input name="foreign_language1" type="text" class="form-control" value="{{old('foreign_language1')}}">
                                    @error('foreign_language1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гадаад хэл2</label>
                                    <input name="foreign_language2" type="text" class="form-control" value="{{old('foreign_language2')}}">
                                    @error('foreign_language2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label>Ажлын туршлага1</label>
                                    <input name="work_experience1" type="text" class="form-control" value="{{old('work_experience1')}}">
                                    @error('work_experience1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага2</label>
                                    <input name="work_experience2" type="text" class="form-control" value="{{old('work_experience2')}}">
                                    @error('work_experience2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага3</label>
                                    <input name="work_experience3" type="text" class="form-control" value="{{old('work_experience3')}}">
                                    @error('work_experience3')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага4</label>
                                    <input name="work_experience4" type="text" class="form-control" value="{{old('work_experience4')}}">
                                    @error('work_experience4')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ажлын туршлага5</label>
                                    <input name="work_experience5" type="text" class="form-control" value="{{old('work_experience5')}}">
                                    @error('work_experience')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Шагнал1</label>
                                    <input name="shagnal1" type="text" class="form-control" value="{{old('shagnal1')}}">
                                    @error('shagnal1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="mb-3">
                                    <label>Шагнал2</label>
                                    <input name="shagnal2" type="text" class="form-control" value="{{old('shagnal2')}}">
                                    @error('shagnal2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Утасны дугаар1</label>
                                    <input name="phone_number1" type="text" class="form-control" value="{{old('phone_number1')}}">
                                    @error('phone_number1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Утасны дугаар2</label>
                                    <input name="phone_number2" type="text" class="form-control" value="{{old('phone_number2')}}">
                                    @error('phone_number2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Гэрийн хаяг</label>
                                    <input name="home_address" type="text" class="form-control" value="{{old('home_address')}}">
                                    @error('home_address')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="code" class="form-label">Тэнхимийн код</label>
                                        <select id="code" name="code" required class="form-control">

                                                @forelse($departments as $item)
                                                    <option value="{{ $item->id }}">{{ $item->code }}</option>
                                                @empty
                                                    <option value="">No departments available</option>
                                                @endforelse
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="role_id" class="form-label">Role ID</label>
                                        <select id="role_id" name="role_id" required class="form-control">

                                                @forelse($roles as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @empty
                                                    <option value="">No roles available</option>
                                                @endforelse
                                        </select>
                                </div>


                                <div class="mb-3">
                                    <label>Багшийн и-мэйл</label>
                                    <input name="teacher_email" id="teacher_email" type="text" class="form-control" value="{{old('email','teacher_email')}}">
                                    @error('teacher_email')<small class="text-danger">{{$message}}</small>@enderror

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

                        @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

