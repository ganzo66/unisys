@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <div class="head" style="width: 100%; justify-content:space-between; display: flex">
        <h2>ОЮУТНЫ БҮРТГЭЛ</h2>
        <a href="{{url('admin/student/create')}}" class="btn btn-primary" style="width:100px text-align:center">
            + Оюутан нэмэх
        </a>
    </div>
    <hr>

    <div class="maincon">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Овог</th>
                    <th>Нэр</th>
                    <th>Регистер</th>
                    <th>Нас</th>
                    <th>Хүйс</th>
                    <th>Яс үндэс</th>
                    <th>Төгссөн сургууль</th>
                    <th>Босго оноо1</th>
                    <th>Босго оноо2</th>
                    <th>Эрүүл мэнд</th>
                    <th>Утасны дугаар</th>
                    <th>Гэрийн хаяг</th>
                    <th>Сонгосон анги</th>
                    <th>Оюутны и-мэйл</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->ovog}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->register}}</td>
                            <td>{{$item->nas}}</td>
                            <td>{{$item->huis}}</td>
                            <td>{{$item->yas_undes}}</td>
                            <td>{{$item->graduated_school}}</td>
                            <td>{{$item->bosgo_onoo1}}</td>
                            <td>{{$item->bosgo_onoo2}}</td>
                            <td>{{$item->medical_score}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->songoson_angi}}</td>
                            <td>{{$item->student_email}}</td>
                            <td style="display: flex; justify-content: space-evenly">
                                <a href="{{url('admin/students/edit/' . $item->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                    Засах
                                </a>
                                <form action="{{url('admin/students/delete/' . $item->id)}}" method="POST"
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
