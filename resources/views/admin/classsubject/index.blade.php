@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <div class="head" style="width: 100%; display: flex; justify-content: space-evenly">
        <h2>АНГИД ОРОХ ХИЧЭЭЛИЙН БҮРТГЭЛ</h2>
        <a href="{{url('admin/classsubject/create')}}" class="btn btn-primary" style="width: 100px text-align:center">
            + Анги болон хичээл нэмэх
        </a>

    </div>
    <hr>

    <div class="maincon">
        <div class="row">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Анги</th>
                    <th>Хичээл</th>
                    <th>Хичээлийн жил</th>
                    <th>Үйлдэл</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($classSubjects as $classSub)
                        <tr>
                            <td>{{$classSub->id}}</td>
                            <td>{{ $classSub->class->class_name ?? 'No Class Assigned' }}</td>
                            <td>{{ $classSub->subject->subject_name ?? 'No Subject Assigned' }}</td>
                            <td>{{ $classSub->academicYear->year_name ?? 'No Year Assigned' }}</td>
                            <td style="display: flex; justify-content: space-evenly">
                                <a href="{{url('admin/classsubject/edit/' . $classSub->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                    Засах
                                </a>
                                <form action="{{url('admin/classsubject/delete/' . $classSub->id)}}" method="POST"
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
