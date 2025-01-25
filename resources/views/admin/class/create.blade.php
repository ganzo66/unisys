@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Шинээр анги бүртгэх
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/classes')}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Ангийн нэр</label>
                                    <input type="text" name="class_name" class="form-control" value="{{old('class_name')}}">
                                    @error('class_name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Ангийн код</label>
                                    <input name="class_code" type="text" class="form-control" value="{{old('class_code')}}">
                                    @error('class_code')<small class="text-danger">{{$message}}</small>@enderror
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

