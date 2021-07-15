@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13">
        <div class="text-right container p-t-100 p-b-50">
            <div class="row d-flex align-items-end pt-xl-5">
                <div class="col-lg-7 col-md-12 col-sm-12 order-md-2 order-lg-1">
                    <h1 class="fs-34 font-weight-bolder color-1">عنوان رئيسي</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <p class="fs-18">
                        "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيومود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
                    </p>
                    <div class="p-t-10 p-tb-10-sm d-flex m-b-14">
                        <div class="col-md-5 col-sm-2 p-tb-5-sm">
                            <a href="{{route('events.index')}}" class="btn btn-primary p-lr-25 p-tb-10 fs-20 font-weight-bold p-tb-5-sm">
                                اطلع
                            </a>
                        </div>
                        <div class="col-md-5 col-sm-2 p-tb-5-sm">
                            <a href="{{route('events.index')}}" class="btn btn-outline-primary p-lr-25 p-tb-10 fs-20 font-weight-bold p-tb-5-sm" >
                                 التفاعليات
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 p-tb-25-sm order-md-1 order-lg-2">
                    <img src="{{asset('images/6673.svg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <section class="container ">
                <div class="row text-right">
                    <div class="col-lg-4 col-md-4 col-sm-12 p-tb-14">
                        <div class="trips d-flex justify-content-between align-items-start p-tb-14 p-lr-28">
                            <div class="p-t-14 m-t-20 trips_icons">
                                <img src="{{asset('images/Icons/icon1.svg')}}" alt="icons" class="img-fluid" width="100">
                            </div>
                            <div class="m-t-14 p-lr-10 p-lr-0-sm">
                                <h4 class="fw-bold">{{$students_count}} متناظر</h4>
                                <p class="fs-17">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 p-tb-14">
                        <div class="trips d-flex justify-content-between align-items-start p-tb-14 p-lr-28">
                            <div class="p-t-14 m-t-20 trips_icons">
                                <img src="{{asset('images/Icons/icon2.svg')}}" alt="icons" class="img-fluid" width="100">
                            </div>
                            <div class="m-t-14 p-lr-10 p-lr-0-sm">
                                <h4 class="fw-bold">{{$coaches_count}} مدرب</h4>
                                <p class="fs-17">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 p-tb-14">
                        <div class="trips d-flex justify-content-between align-items-start p-tb-14 p-lr-28">
                            <div class="p-t-14 m-t-20 trips_icons">
                                <img src="{{asset('images/Icons/icon3.svg')}}" alt="icons" class="img-fluid" width="100">
                            </div>
                            <div class="m-t-14 p-lr-10 p-lr-0-sm">
                                <h4 class="fw-bold"> {{$event_count}} تفاعلية</h4>
                                <p class="fs-17">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت</p>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <section class="container p-tb-56 m-tb-56 m-sm-0">
            <div class="row d-flex align-items-end">
                <div class="col-md-4 order-xl-1 order-lg-1 order-sm-2">
                    <img class="img-fluid" src="{{asset('images/13260.svg')}}" alt="">
                </div>
                <div class="col-lg-8 text-right p-tb-20 order-xl-2 order-lg-2 order-sm-1">
                    <h1 class="color-2 fs-34 fw-bolder p-b-20 p-r-10">عنوان :</h1>
                    <p class="fs-18 lh-17 p-l-28">
                        "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
                        أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
                        كسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات
                    </p>
                    <div class="col-md-3 p-tb-14">
                        <button class="btn btn-primary p-tb-8 fs-22 fw-bold">المزيد</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-3 p-tb-56">
            <div class="container p-t-20 p-b-20 text-right">
                <div class="text-center mb-3">
                    <h1 class="text-white fs-42 fw-bold ">أبرز المتناظرين</h1>
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
                <div class="m-tb-14 text-center">
                    <div class="p-tb-14 text-center">
                        <a href="{{'students'}}" class="btn btn-primary p-tb-8 fs-22 fw-bold col-md-2 p-tb-15">عرض المزيد</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light p-tb-56">
            <div class="container p-t-20 p-b-20 text-right">
                <div class="text-center mb-3">
                    <h1 class="color-2 fs-44 fw-bold ">آخر الأخبار</h1>
                </div>
                <div class="row align-items-center p-t-50">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-sm-12 m-b-50">
                        <div class="card" style="  box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);">
                            <div class="card-body text-center">
                                <div class="">
                                    <img class="img-fluid" src="{{asset('storage/blogs/'.$blog->image)}}" alt="">
                                </div>
                                <div class="clblack">
                                    <div class="text-right p-t-14 p-lr-14">
                                        <a href="{{route('blog.show',$blog->id)}}" class="fs-19 font-weight-bolder clblack text-decoration-none">{{$blog->title}} </a>
                                        <div class="text-right p-tb-10">
                                                <p class="fs-14 p-lr-7">
                                                    سيت أميت ,كونسيكتيتور أدايبا يسكي وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                                </p>
                                        </div>
                                        <div class="p-t-10 text-center">
                                            <a href="{{route('blog.show',$blog->id)}}" class="btn btn-primary p-tb-10 col-md-8">
                                                طالع
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        <section class="bg-3 p-tb-28">
                <div class=" p-tb-28 text-center">
                    <div class="container newletter">
                        <div class="d-flex justify-content-start mr-auto ">
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <div class="text-center ">
                                    <h1 class="fs-38 fw-bold m-tb-14 p-tb-50-sm">الإشتراك فى القائمة البريدية</h1>
                                    <p class="fs-19 ">أشترك فى القائمة البريدية لمتابعة أخر عروضنا وأخبارنا</p>
                                    <form class="d-flex mt-4" action="{{route('newsletter')}}" method="POST">
                                        @csrf
                                        <div class="offset-lg-6 offset-xl-3 offset-md-2 offset-sm-0"></div>
                                        <div class="col-lg-6 d-flex ">
                                        <input type="email" name="email" class="form-control" placeholder="بريدك الالكترونى" required="required" style="border-radius: 0 25px 25px 0">
                                        <input type="submit" class="btn btn-primary col-md-3 col-sm-2 fs-19 font-weight-bold p-lr-7" value="الإشتراك" style="border-radius: 25px 0 0  25px ">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

    </div>
@endsection
