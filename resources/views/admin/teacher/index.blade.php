@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}

    <div class="head" style="width: 100%; display: flex; justify-content: space-evenly">
        <h2>БАГШИЙН БҮРТГЭЛ</h2>
        <a href="{{url('admin/teacher/create')}}" class="btn btn-primary" style="width:100px text-align:center;">
            + Багш нэмэх
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
                    <th>Утасны <br> дугаар1</th>
                    <th>Утасны <br> дугаар2</th>
                    <th>Тэнхимийн код</th>
                    <th>Багшийн и-мэйл</th>
                    <th >Үйлдэл</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->ovog}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone_number1}}</td>
                            <td>{{$item->phone_number2}}</td>
                            <td>{{$item->department_code}}</td>
                            <td>{{$item->teacher_email}}</td>
                            <td style="width:400px; ">
                               <div class="row">
                                    <div class="col-md-5">
                                        <div class="modal-box">
                                            <!-- Button trigger modal -->
                                            <button type="button" id="openModal" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                Дэлгэрэнгүй
                                              </button>

                                            <!-- Modal -->

                                            <div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                                    <div class="modal-content clearfix">

                                                        <div class="modal-body" style="margin: 0; padding: 0;">


                                                                <div class="row" style="height:80vh" >
                                                                    <div class="col-md-4" style="background-color: rgb(0, 41, 103); border: none; padding:0; height:100vh" >
                                                                        <div class="card"  style="border: none; height:100%">
                                                                            @csrf
                                                                            <div class="cardimg" style="background-color: rgb(0, 41, 103); border: none !important;">
                                                                                <div class="proimage">
                                                                                    <img src="{{ asset('storage/photos/man.png') }}" class="card-img-top" alt="Man photo">
                                                                                </div>
                                                                                <div style="margin-top: 20px; margin-bottom: 20px;">
                                                                                    <p style="margin:0; text-align: center; color: white;">{{$item->ovog}} <span style="text-transform: uppercase;"> {{$item->name}}</p>
                                                                                </div>
                                                                                <hr style="background-color: white;height:2px; margin: 0; padding: 0;">
                                                                            </div>


                                                                                <div class="card-body" style="background-color: rgb(0, 41, 103); border: none;">
                                                                                    <div class="cardbodyabout">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <h5 class="card-title" style="border: 1px solid rgb(0, 50, 101); border-radius:30px; background-color:white"  >Хувийн мэдээлэл</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-5 style=text-align: center;  ">
                                                                                                <p style="font-weight: bold;  ">РД:</p>
                                                                                            </div>
                                                                                            <div class="col-md-7 text-left">
                                                                                                <p class="card-text mb-0 ">{{$item->register}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-5 text-center">
                                                                                                <p style="font-weight: bold;">Нас:</p>
                                                                                            </div>
                                                                                            <div class="col-md-7 text-left">
                                                                                                <p class="card-text">{{$item->nas}}</p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-5 text-center">
                                                                                                <p style="font-weight: bold;">Хүйс:</p>
                                                                                            </div>
                                                                                            <div class="col-md-7 text-left">
                                                                                                <p class="card-text">{{$item->huis}}</p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-5 text-center">
                                                                                                <p style="font-weight: bold;" >Яс үндэс:</p>
                                                                                            </div>
                                                                                            <div class="col-md-7 text-left">
                                                                                                <p class="card-text">  {{$item->yas_undes}} </p>
                                                                                            </div>
                                                                                        </div>



                                                                                        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                                                                                    </div>
                                                                                </div>

                                                                                <div class="card-body" style="background-color: rgb(0, 41, 103); border: none;">
                                                                                    <div class="cardbodycontact">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" style="margin-bottom: 10px;">
                                                                                                <h5 class="card-title" style="border: 1px solid rgb(0, 50, 101); border-radius:30px; background-color:white; height:100%; " >Холбоо барих</h5>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-2 text-center">
                                                                                                <i class="fa-solid fa-phone-volume" style="color: white;"></i>
                                                                                            </div>
                                                                                            <div class="col-md-10 text-left">
                                                                                                <p class="card-text mb-0" style="color: white;">{{$item->phone_number1}}, {{$item->phone_number2}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-2 text-center">
                                                                                                <i class="fa-regular fa-envelope"></i>
                                                                                            </div>
                                                                                            <div class="col-md-10 text-left">
                                                                                                <p class="card-text">{{$item->teacher_email}}</p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-2 text-center">
                                                                                                <i class="fa-solid fa-globe"></i>
                                                                                                {{-- <i class="bi bi-globe"></i> --}}
                                                                                            </div>
                                                                                            <div class="col-md-10 text-left">
                                                                                                <p class="card-text">www.unisys.edu</p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row align-items-center" style="color: white; margin-bottom: 5px;">
                                                                                            <div class="col-md-2 text-center">
                                                                                                <i class="fa-solid fa-location-dot"></i>
                                                                                                {{-- <i class="bi bi-globe"></i> --}}
                                                                                            </div>
                                                                                            <div class="col-md-10 text-left">
                                                                                                <p class="card-text">{{$item->home_address}}</p>
                                                                                            </div>
                                                                                        </div>

                                                                                            {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                                                                                    </div>
                                                                                </div>
                                                                        </div>




                                                                    </div>
                                                                    <div class="col-md-8" style="margin-top:20px; margin-bottom:20px; height:100% ; overflow-y:auto ">
                                                                        <div class="row">
                                                                            <div class="col-md-1" style="padding-left: 0">  </div>
                                                                            <div class="col-md-10">
                                                                                <div class="education">
                                                                                    <h5 style="margin: 0; text-align:left">БОЛОВСРОЛ</h5>
                                                                                    <hr style="margin-top: 5px; margin-bottom: 10px;">
                                                                                    <ul>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray">Төгссөн сургууль</li>
                                                                                            <ul>
                                                                                                <li style="text-align: left; margin-left:30px">{{$item->graduated_school}}</li>
                                                                                            </ul>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray">Төгссөн их, дээд сургууль</li>
                                                                                            <ul>
                                                                                                <li style="text-align: left; margin-left:30px">{{$item->graduated_university}}</li>
                                                                                            </ul>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="prostatus">
                                                                                    <h5 style="margin: 0; text-align:left">МЭРГЭЖИЛ, ЗЭРЭГ, ЦОЛ</h5>
                                                                                    <hr style="margin-top: 5px; margin-bottom: 10px;">
                                                                                    <ul>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px;">{{$item->profession}}</li>

                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px;">{{$item->academic_degree}}</li>

                                                                                    </ul>
                                                                                </div>

                                                                                <div class="forlang">
                                                                                    <h5 style="margin: 0; text-align:left">ГАДААД ХЭЛ</h5>
                                                                                    <hr style="margin-top: 5px; margin-bottom: 10px;">
                                                                                    <ul>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px;">{{$item->foreign_language1}}</li>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px;">{{$item->foreign_language2}}</li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="workexp">
                                                                                    <h5 style="margin: 0; text-align:left">АЖЛЫН ТУРШЛАГА</h5>
                                                                                    <hr style="margin-top: 5px; margin-bottom: 10px;">
                                                                                    <ul>
                                                                                        <li style="text-align:left; font-weight:bold;  color:dimgray; margin-bottom:7px; margin-left:15px ">{{$item->work_experience1}}</li>
                                                                                        <li style="text-align:left; font-weight:bold;  color:dimgray; margin-bottom:7px; margin-left:15px">{{$item->work_experience2}}</li>
                                                                                        <li style="text-align:left; font-weight:bold;  color:dimgray; margin-bottom:7px; margin-left:15px ">{{$item->work_experience3}}</li>
                                                                                        <li style="text-align:left; font-weight:bold;  color:dimgray; margin-bottom:7px; margin-left:15px">{{$item->work_experience4}}</li>
                                                                                        <li style="text-align:left; font-weight:bold;  color:dimgray; margin-bottom:7px; margin-left:15px ">{{$item->work_experience5}}</li>
                                                                                    </ul>
                                                                                </div>

                                                                                <div class="forlang">
                                                                                    <h5 style="margin: 0; text-align:left">ШАГНАЛ</h5>
                                                                                    <hr style="margin-top: 5px; margin-bottom: 10px;">
                                                                                    <ul>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px; ">{{$item->shagnal1}}</li>
                                                                                        <li style="text-align:left; font-weight:bold; list-style-type: none; color:dimgray; margin-bottom:7px;">{{$item->shagnal2}}</li>
                                                                                    </ul>
                                                                                </div>


                                                                            </div>
                                                                        <div class="col-md-1">
                                                                             <button type="button" id="closeModal" class="close" style="text-align:start" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                    </div>
                                                                    </div>



                                                                </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <form action="{{url('admin/teacher/delete/' . $item->id)}}" method="POST"
                                            onclick="return confirm('Та үүнийг устгахдаа итгэлтэй байна уу?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" >
                                                Устгах
                                            </button>

                                        </form>
                                    </div>

                                    <div class="col-md-3">
                                        <a href="{{url('admin/teacher/edit/' . $item->id)}}" class="btn btn-warning" style="width:70px text-align:center">
                                            Засах
                                        </a>
                                    </div>
                               </div>

                                {{-- <a  class="btn btn-danger" style="width:60px text-align:center">Устгах</a> --}}
                            </td>
                        </div>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection
