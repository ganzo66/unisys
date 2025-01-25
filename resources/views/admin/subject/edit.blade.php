@extends('admin.layouts.index');

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="procard">
                <div class="procard-header">
                    <h4>
                        Хичээлийн бүртгэл засах
                    </h4>
                </div>
                <div class="procard-body" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); padding: 30px" >
                    <form action="{{url('admin/subjects/' . $subject->id)}}" method="POST">
                        @csrf {{-- cross site request forgery --}}
                        @method('PUT')
                        <div class="mb-3">
                            <label>Хичээлийн нэр</label>
                            <input type="text" name="subject_name" class="form-control" value="{{$subject->subject_name}}">
                            @error('subject_name')<small class="t   ext-danger">{{$message}}</small>@enderror
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

