@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <div class="head" style="width: 100%; display: flex; justify-content: space-evenly">
        <h2>ТЭНХИМИЙН БҮРТГЭЛ</h2>
        <a href="{{url('admin/department/create')}}" class="btn btn-primary" style="width:100px text-align:center">
            + Тэнхим нэмэх
        </a>
    </div>
    <hr>

    <div class="maincon">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Тэнхимийн нэр</th>
                    <th>Тэнхимийн нэр /Англи/</th>
                    <th>Тэнхимийн код</th>
                    <th>Үйлдэл хийх</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($departments as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->department_name}}</td>
                            <td>{{$item->department_name_en}}</td>
                            <td>{{$item->code}}</td>
                            <td style="display: flex; justify-content: space-evenly">
                                <a href="{{url('admin/department/edit/' . $item->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                    Засах
                                </a>
                                <form action="{{url('admin/department/delete/' . $item->id)}}" method="POST"
                                    onclick="return confirm('Та үүнийг устгахдаа итгэлтэй байна уу?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" >
                                        Устгах
                                    </button>

                                </form>
                                {{-- <a  class="btn btn-danger" style="width:60px text-align:center">Устгах</a> --}}

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection
