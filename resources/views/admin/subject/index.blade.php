@extends('admin.layouts.index');

@section('contents')

    <div class="head" style="width: 100%; justify-content: space-between; display: flex">
        <h2>ХИЧЭЭЛИЙН БҮРТГЭЛ</h2>
        <a href="{{url('admin/subject/create')}}" class="btn btn-primary" style="width:100px text-align:center">
            Шинэ хичээл
        </a>

    </div>
    <hr>

    <div class="maincon">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Хичээлийн нэр</th>
                    <th>Үйлдэл хийх</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->subject_name}}</td>
                            <td style="display: flex; justify-content: space-evenly">
                                <a href="{{url('admin/subject/edit/' . $item->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                    Засах
                                </a>
                                <form action="{{url('admin/subject/delete/' . $item->id)}}" method="POST"
                                    onclick="return confirm('Та үүнийг устгахдаа итгэлтэй байна уу?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >
                                        Устгах
                                    </button>

                                </form>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{-- @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
        </div>

    </div>


@endsection
