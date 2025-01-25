@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Шинэ хичээл бүртгэх
                    </h4>
                </div>

                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/subjects')}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Хичээлийн нэр</label>
                                    <input type="text" name="subject_name" class="form-control" value="{{old('subject_name')}}">
                                    @error('subject_name')<small class="text-danger">{{$message}}</small>@enderror
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

