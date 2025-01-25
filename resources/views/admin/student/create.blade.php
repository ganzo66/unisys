@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Шинээр оюутан бүртгэх
                    </h4>
                </div>



                    <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                        <form action="{{url('admin/students')}}" method="POST">

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
                                        <label>Босго оноо1</label>
                                        <input name="bosgo_onoo1" type="text" class="form-control" value="{{old('bosgo_onoo1')}}">
                                        @error('bosgo_onoo1')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>

                                </div>

                                {{-- //2-r bagana --}}
                                <div class="col-md-6">


                                    <div class="mb-3">
                                        <label>Босго оноо2</label>
                                        <input name="bosgo_onoo2" type="text" class="form-control" value="{{old('bosgo_onoo2')}}">
                                        @error('bosgo_onoo2')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label>Эрүүл мэнд</label>
                                        <input name="medical_score" type="text" class="form-control" value="{{old('medical_score')}}">
                                        @error('medical_score')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label>Утасны дугаар</label>
                                        <input name="phone_number" type="text" class="form-control" value="{{old('phone_number')}}">
                                        @error('phone_number')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label>Хаяг</label>
                                        <input name="address" type="text" class="form-control" value="{{old('address')}}">
                                        @error('address')<small class="text-danger">{{$message}}</small>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="class_id">Ангийн нэр</label>
                                        <select id="class_id" name="class_code"  class="form-control @error('class_code') is-invalid @enderror">
                                            @if($chosen_class->isNotEmpty())
                                                @foreach($chosen_class as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->class_code }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value="">Анги байхгүй байна</option>
                                            @endif
                                        </select>
                                        @error('class_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label>Элссэн он</label>
                                        <input name="admission_year" type="text" class="form-control" value="{{old('admission_year')}}">
                                        @error('admission_year')<small class="text-danger">{{$message}}</small>@enderror
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
