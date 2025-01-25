@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Оюутны мэдээлэл засах
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/students/' . $student->id)}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Овог</label>
                                    <input type="text" name="ovog" class="form-control" value="{{$student->ovog}}">
                                    @error('ovog')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нэр</label>
                                    <input name="ner" type="text" class="form-control" value="{{$student->name}}">
                                    @error('ner')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Регистер</label>
                                    <input name="register" type="text" class="form-control" value="{{$student->register}}">
                                    @error('register')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Нас</label>
                                    <input name="nas" type="text" class="form-control" value="{{$student->nas}}">
                                    @error('nas')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хүйс</label>
                                    <input name="huis" type="text" class="form-control" value="{{$student->huis}}">
                                    @error('huis')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Яс үндэс</label>
                                    <input name="yas_undes" type="text" class="form-control" value="{{$student->yas_undes}}">
                                    @error('yas_undes')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Төгссөн сургууль</label>
                                    <input name="graduated_school" type="text" class="form-control" value="{{$student->graduated_school}}">
                                    @error('graduated_school')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Босго оноо1</label>
                                    <input name="bosgo_onoo1" type="text" class="form-control" value="{{$student->bosgo_onoo1}}">
                                    @error('bosgo_onoo1')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Босго оноо2</label>
                                    <input name="bosgo_onoo2" type="text" class="form-control" value="{{$student->bosgo_onoo2}}">
                                    @error('bosgo_onoo2')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Эрүүл мэнд</label>
                                    <input name="medical_score" type="text" class="form-control" value="{{$student->medical_score}}">
                                    @error('medical_score')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Утасны дугаар</label>
                                    <input name="phone_number" type="text" class="form-control" value="{{$student->phone_number}}">
                                    @error('phone_number')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Хаяг</label>
                                    <input name="address" type="text" class="form-control" value="{{$student->address}}">
                                    @error('address')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="class_code">Class</label>
                                    <select name="class_code" id="class_code" class="form-control" required>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}" {{ $class->id == $student->songoson_angi ? 'selected' : '' }}>
                                                {{ $class->class_code }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label>Элссэн он</label>
                                    <input name="admission_year" type="text" class="form-control" value="{{$student->admission_year}}">
                                    @error('admission_year')<small class="text-danger">{{$message}}</small>@enderror
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
