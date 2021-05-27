@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-14 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <h1 class="color-2 fs-42 fw-bold mb-4"> فعالية {{$event->name}} </h1>
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-tb-14">
                            <img class="img-fluid" src="{{asset('storage/events/'.$event->image)}}" alt="" style="border-radius: 25px">
                        </div>
                    </div>
                <div class="col-lg-8 col-md-12 col-sm-12 p-tb-14" >
                    <div class="d-flex justify-content-between col-md-8 m-tb-14">
                        <div class="fs-24 font-weight-bold">{{$event->date}}<i class="ti-time ml-2"></i></div>
                        <div class="fs-24 font-weight-bold"><i class="ti-user ml-2"></i>  عدد المسجلين ({{$count_participants}}) </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="fs-40 font-weight-bolder color-1">الوصف</h1>
                        <div class="separator text-center m-tb-28"></div>
                        <p class="fs-20">
                            {!! $event->description !!}
                        </p>
                    </div>
                </div>
                <div id="register" class="d-block justify-content-center m-tb-56">
                    @if(session()->has('success_message'))
                        <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                    @endif
                </div>

                <div class="card-body bg-white"  style="border-top:10px #0d4d6c solid   ;box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);">
                    @if($event->case)
                    @if(auth()->check())
                        @if($eventsUser_exist)
                            <div class="p-t-24 fs-24 font-weight-bolder text-center color-1">
                                <i class="ti-check-box fw-bolder m-lr-14"></i>مسجل في هذه الغعالية
                            </div>
                        @else
                            @if(auth()->user()->role == 'student')
                                <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3">التسجيل في الفعالية</h1>
                                <div class="separator text-center m-tb-28 mx-3"></div>
                                <div class="container p-tb-28">
                            <form action="{{route('event.store')}}" method="POST" >
                                @csrf
                                <input type="hidden" name="event" value="{{$event->id}}">
                                <div class="row p-lr-28 p-t-14">
                            <div class="col-md-4 mb-3">
                                <label for="name" class="form-label fs-16 pb-2 p-r-10 clblack">الاسم الاول * </label>
                                <div class="input-group mb-2">
                                    <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                           name="name" value="{{ auth()->user()->name }}" required disabled>
                                </div>
                                @error('name')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="second_name" class="form-label fs-16 pb-2 p-r-10 clblack">الاسم الثاني * </label>
                                <div class="input-group mb-2">
                                    <input id="second_name" class="form-control @error('second_name') is-invalid @enderror" type="text"
                                           name="second_name" value="{{ auth()->user()->second_name}}" required disabled>
                                </div>
                                @error('second_name')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastname" class="form-label fs-16 pb-2 p-r-10 clblack">اسم العائلة * </label>
                                <div class="input-group mb-2">
                                    <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text"
                                           name="lastname" value="{{ auth()->user()->lastname }}" required disabled>
                                </div>
                                @error('lastname')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email" class="form-label fs-16  pb-2 p-r-10 clblack">البريد الإلكتروني * </label>
                                <div class="input-group mb-3">
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="text"
                                           name="email" value="{{ auth()->user()->email }}"  required disabled>
                                </div>
                                @error('email')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="school" class="form-label fs-16  pb-2 p-r-10 clblack">المدرسة * </label>
                                <div class="input-group mb-3">
                                    <input id="school" class="form-control @error('school') is-invalid @enderror" type="text"
                                           name="school" value="{{ auth()->user()->school }}"  required disabled>
                                </div>
                                @error('school')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="level" class="form-label fs-16  pb-2 p-r-10 clblack">الصف * </label>
                                <div class="input-group mb-3">
                                    <input id="level" class="form-control @error('level') is-invalid @enderror" type="text"
                                           name="level" value="{{ auth()->user()->level }}"  required disabled>
                                </div>
                                @error('level')
                                <div class="text-danger mb-2" role="alert">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                           <div class="d-flex justify-content-center">
                            <div class="col-md-3 m-tb-7">
                                <button type="submit" class="btn btn-primary p-tb-12 fs-20">
                                    سجل
                                </button>
                            </div>
                           </div>
                        </div>*
                            </form>
                        </div>
                            @else
                                <div class="d-block mt-4 text-center">
                                    <div class="fs-22 font-weight-bold color-1 mb-2">
                                        فقط الاعضاء (المتناظرين) يمكنهم التسجيل في هذه الفعالية
                                    </div>
                                </div>
                            @endif
                        @endif
                    @else
                        <div class="d-block mt-4 text-center">
                            <div class="fs-22 font-weight-bold color-1 mb-2">
                                فقط الاعضاء (المتناظرين) يمكنهم التسجيل في هذه الفعالية
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-3 m-tb-7 text-center">
                                    <a href="{{route('login')}}" class="btn btn-primary p-tb-12 fs-20">
                                        سجل دخولك بحسابك (متناظر)
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @else
                        <div class="d-block mt-4 text-center">
                            <div class="fs-22 font-weight-bold color-1 mb-2">
                                هذه الفعالية مغلوقة
                            </div>
                        </div>
                    @endif
                </div>

                @if(count($users_reg)>0)
                    <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14 m-tb-56">
                    <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> آخر  المسجلين </h1>
                    <div class="separator text-center m-tb-28 mx-3"></div>
                    <table class="table  table-striped">
                        <thead>
                        <tr class="bg-3">
                            <td></td>
                            <td>الصورة</td>
                            <td>الاسم الكامل</td>
                            <td>المدرسة</td>
                            <td>الصف</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users_reg as $user)
                        <tr>
                            <td class="fs-20 pt-3">{{$loop->index+1}}</td>
                            <td>
                                <img src="{{asset('storage/users/students/avatars/'.$user->user->avatar)}}" alt="user-avatar" class="img-fluid img-blog-writer class="fs-18 pt-3" ">
                            </td>
                            <td class="fs-18 pt-3">{{$user->user->name." ".$user->user->lastname}}</td>
                            <td class="fs-18 pt-3">{{$user->user->school}}</td>
                            <td class="fs-18 pt-3">{{$user->user->level}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>


            <div class="container">
                <div class="p-tb-14 event-1">
                    <h1 class="fs-30 font-weight-bolder color-1">الفعاليات اخرى</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <div class="row">
                        @foreach($otherEvents as $event)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="" class="img-blog">
                                        <img class="img-fluid" src="{{asset('storage/events/'.$event->image)}}" alt="">
                                    </a>
                                    <div class="clblack">
                                        <div class="text-right p-t-14 p-lr-14">
                                            <a href="{{route('event.show',$event->id)}}" class="fs-24 font-weight-bolder clblack text-decoration-none">{{$event->name}}  </a>
                                            <div class="d-flex p-tb-10">
                                                <div class="fs-16 ml-3">
                                                    {{$event->date}}  <i class="ti-time ml-2"></i>
                                                </div>
                                                <div class="fs-16 ml-3">
                                                    <i class="ti-user ml-2"></i>
                                                    {{$event->participants}}
                                                </div>
                                            </div>
                                            <div class="text-right p-tb-10">
                                                <p class="fs-16 p-lr-7">
                                                    {!! \Illuminate\Support\Str::words($event->description, 10, ' ...')  !!}
                                                </p>
                                            </div>
                                            <div class="p-t-10 d-flex justify-content-center p-lr-14 p-b-24 text-centers">
                                                <div class="col-md-10">
                                                    <a href="{{route('event.show',$event->id)}}" class="btn btn-primary p-tb-10 fs-18">
                                                        سجل
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
