@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-12 p-tb-10-md p-tb-5-sm">

        <section class="p-tb-112">
            <div class="container p-tb-28 text-right">
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
                <div class="p-b-20 text-center">
                    {{$blogs->links()}}
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
