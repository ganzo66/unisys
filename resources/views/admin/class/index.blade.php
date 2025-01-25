@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <div class="head" style="width: 100%; display: flex; justify-content: space-evenly">
        <h2>АНГИЙН БҮРТГЭЛ</h2>
        <a href="{{url('admin/class/create')}}" class="btn btn-primary" style="width:100px text-align:center">
            + Анги нэмэх
        </a>
    </div>
    <hr>

    <div class="maincon">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ангийн нэр</th>
                    <th>Ангийн код</th>
                    <th>Үйлдэл хийх</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($classes as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->class_name}}</td>
                            <td>{{$item->class_code}}</td>
                            <td style="display: flex; justify-content: space-evenly">
                                <a href="{{url('admin/class/edit/' . $item->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                    Засах
                                </a>
                                <form action="{{url('admin/class/delete/' . $item->id)}}" method="POST"
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
