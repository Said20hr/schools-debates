@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <section class="bg-3 p-tb-120">
            <div class="container p-t-20 p-b-20 text-right">
                <div class="text-center mb-5">
                    <h1 class="text-white fs-42 fw-bold ">المتناظرين</h1>
                </div>
                <div class="row align-items-center p-t-50">
                    @foreach($students as $student)
                        <div class="col-lg-3 col-sm-12 m-b-50">
                            <div class="card">
                                <div class="card-body text-center" style=" border-radius: 10px 10px 0 0;">
                                    <div class="bg-primary">
                                        <img class="img-fluid avatar" src="{{asset('storage/users/student/avatars/'.$student->avatar)}}" alt="">
                                    </div>
                                    <div class="text-right p-b-30 team-info clblack">
                                        <div class="p-lr-25">
                                            <h5 class="font-weight-bold p-t-20">{{$student->name.' '.$student->lastname}}</h5>
                                            <h5 class="p-b-5"> المشاركات في البطوﻻت ({{count($student->tournaments)}})</h5>
                                            <div class="d-flex">
                                                <h5 class="font-weight-bold p-b-5">
                                                    <i class="fa fa-star color-2"></i>
                                                    <i class="fa fa-star color-2"></i>
                                                    <i class="fa fa-star color-2"></i>
                                                    <i class="fa fa-star color-2"></i>
                                                    <i class="fa fa-star color-2"></i>
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="p-b-20 text-center">
                                            <a href="{{route('user.show',$student->id)}}" class="btn btn-outline-primary fw-bold col-md-10 fs-18 p-lr-20"> استعراض </a>
                                        </div>


                                    </div>
                                </div>

                            </div>


                        </div>
                    @endforeach
                </div>
                <div class="m-tb-14 d-flex justify-content-center">
                    <div class="col-md-3 p-tb-14 text-center">
                       {{$students->links()}}
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-secondary p-tb-28">
            <div class=" p-tb-28 text-center">
                <div class="container newletter">
                    <div class="d-flex justify-content-start mr-auto ">
                        <div class="col-lg-9 col-md-2 col-sm-12">
                            <div class="text-center">
                                <h1 class="fs-38 fw-bold m-tb-14 color-1">الإشتراك فى القائمة البريدية</h1>
                                <p class="fs-19 color-1">أشترك فى القائمة البريدية لمتابعة أخر عروضنا وأخبارنا</p>
                                <form class="d-flex mt-4" action="{{route('newsletter')}}" method="POST">
                                    @csrf
                                    <div class="offset-2"></div>
                                    <input type="email" name="email" class="form-control col-md-6 p-lr-28" placeholder="بريدك الالكترونى" required="required" style="border-radius: 0 25px 25px 0">
                                    <input type="submit" class="btn btn-primary col-md-2 fs-19 font-weight-bold p-lr-7" value="الإشتراك" style="border-radius: 25px 0 0  25px ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
