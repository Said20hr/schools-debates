@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13  p-tb-10-md p-tb-5-sm">
        <section class="p-t-100">
            <div class="container p-t-20 p-b-20 text-right">
                <div class="text-center mb-3">
                    <h1 class="color-2 fs-38 fw-bold ">اعضاء النادي</h1>
                </div>
                <div class="row align-items-center p-t-50">
                    @foreach($members as $member)
                        <div class="col-lg-3 col-sm-12 m-b-14">
                            <div class="card">
                                <div class="card-body text-center" style=" border-radius: 10px 10px 0 0;">
                                    <div class="p-t-20">
                                        <img class="" src="{{asset('storage/members/'.$member->avatar)}}" alt="" width="250" height="250">
                                    </div>
                                    <div class="text-center clblack">
                                        <div class="p-lr-25">
                                            <h4 class="font-weight-bolder p-t-20">{{$member->name.' '.$member->lastname}}</h4>
                                            <h4 class="p-b-5">{{$member->job}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="p-tb-28">
            <div class="container p-b-20 text-right">
                <div class="text-center mb-3">
                    <h1 class="color-2 fs-38 fw-bold ">اخر المدربين</h1>
                </div>
                <div class="row align-items-center p-t-50">
                    @foreach($coaches as $coach)
                        <div class="col-lg-3 col-sm-12 m-b-50">
                            <div class="card">
                            <div class="card-body bg-secondary text-center" style=" border-radius: 10px 10px 0 0;">
                                    <div class="p-t-20">
                                        <img class="img-blog-avatar2" src="{{asset('storage/users/coach/avatars/'.$coach->avatar)}}" alt="">
                                    </div>
                                    <div class="text-right p-b-10 clblack">
                                        <div class="p-lr-7 mt-3 text-center">
                                            <a href="{{route('user.show',$coach->id)}}" class="font-weight-bold p-t-20 fs-20 clblack">{{$coach->name.' '.$coach->lastname}}</a>
                                            <h4 class="p-t-10 fs-17">{{$coach->job}}</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="m-tb-14 text-center">
                    <div class="p-tb-14 text-center">
                        <a href="{{'coaches'}}" class="btn btn-primary p-tb-8 fs-22 fw-bold col-md-2 p-tb-15">عرض المزيد</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-3 p-tb-28">
            <div class=" p-tb-28 text-center">
                <div class="container newletter">
                    <div class="d-flex justify-content-start mr-auto ">
                        <div class="col-lg-9 col-md-2 col-sm-12">
                            <div class="text-center">
                                <h1 class="fs-38 fw-bold m-tb-14">الإشتراك فى القائمة البريدية</h1>
                                <p class="fs-19">أشترك فى القائمة البريدية لمتابعة أخر عروضنا وأخبارنا</p>
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
