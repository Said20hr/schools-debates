@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13 py-5">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                @if($user->avatar)
                                    <img src="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" alt="" class="img-blog-avatar3">
                                @else
                                    <img src="{{asset('images/Placeholder/avatar2.svg')}}" alt="" class="img-blog-avatar3">
                                @endif
                                <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                            </div>
                            <div class="">
                                <h3 class="color-1 fs-22 fw-bold m-t-20">{{$user->name." ".$user->second_name." ".$user->lastname}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nav flex-column text-right" >
                            <a href="{{route('user.index')}}" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right active text-white"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            @if($user->role =='student')
                                <a href="{{route('user.events')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i>  فعالياتي </a>
                                <a href="{{route('user.notes')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-bell m-lr-10"></i> الملاحظات </a>
                            @endif
                            @if($user->role =='coach')
                                <a href="{{route('users.notes')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i> ملاحظات المتناظرين </a>
                            @endif
                            @if($user->role =='admin')
                                <a href="{{route('admin')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-external-link m-lr-10"></i> منصة الادمين </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="d-block card" style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                        <div class="card p-tb-7">
                                            <div class="card-header p-tb-10 fs-20 font-weight-bolder color-1">{{ __('تعديل الملف الشخصي') }} </div>
                                            <div class="card-body text-right ">
                                                <br>
                                                @if(session()->has('success_message'))
                                                    <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                                                @endif
                                                @if(session()->has('error_message'))
                                                    <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                                                @endif
                                                <form method="POST" action="{{route('user.update',$user->id)}}" dir="rtl" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row mb-2 p-lr-14">
                                                        <div class="col-md-4 mb-1">
                                                            <label  class="form-label fs-16  pb-2 p-r-10">الاسم الاول  </label>
                                                            <div class="input-group mb-3">
                                                                <input  class="form-control" type="text" disabled value="{{auth()->user()->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="second_name" class="form-label fs-16  pb-2 p-r-10">الاسم الثاني </label>
                                                            <div class="input-group mb-3">
                                                                <input id="second_name" class="form-control" type="text" disabled value="{{auth()->user()->second_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="lastname" class="form-control" type="text" disabled value="{{auth()->user()->lastname}}">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-2 p-lr-14">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="birth_date" class="form-control" type="date" disabled value="{{auth()->user()->birth_date}}">
                                                            </div>
                                                        </div>

                                                        @switch($user->role)
                                                            @case('student')
                                                            <div class="col-md-4 mb-1">
                                                                <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="school" class="form-control" type="text" name="school" disabled value="{{auth()->user()->school}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="level" class="form-control" type="text" disabled value="{{auth()->user()->level}}">
                                                                </div>
                                                            </div>
                                                            @break
                                                            @case('coach')
                                                            <div class="col-md-4 mb-1">
                                                                <label for="job" class="form-label fs-16  pb-2 p-r-10">العمل  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="job" class="form-control" type="text" disabled value="{{auth()->user()->job}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="work_place" class="form-control" type="text" disabled value="{{auth()->user()->work_place}}">
                                                                </div>
                                                            </div>
                                                            @break
                                                        @endswitch
                                                    </div>
                                                    <hr class="mb-3">
                                                    @if(!$user->region)
                                                        <div class="mb-4 p-lr-20 border-bottom p-b-14 fs-20 font-weight-bolder color-1">{{ __('بيانات السكن') }} </div>
                                                        <div class="row mb-2 p-lr-14">
                                                            <div class="col-md-4 mb-1">
                                                                <label for="region" class="form-label fs-16  pb-2 p-r-10">المنطقه</label>
                                                                <div class="input-group mb-3">
                                                                    <input id="region" class="form-control @error('region') is-invalid @enderror" type="text"
                                                                           name="region" value="{{ old('region')   }}">
                                                                </div>
                                                                @error('region')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="province" class="form-label fs-16  pb-2 p-r-10">القطعه  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="province" class="form-control @error('province') is-invalid @enderror" type="text"
                                                                           name="province" value="{{ old('province') }}"  >
                                                                </div>
                                                                @error('province')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="rue" class="form-label fs-16  pb-2 p-r-10">الشارع  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="rue" class="form-control @error('rue') is-invalid @enderror" type="text"
                                                                           name="rue" value="{{ old('rue') }}"  >
                                                                </div>
                                                                @error('rue')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="commune" class="form-label fs-16  pb-2 p-r-10">جاده ( اختياري )  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="commune" class="form-control @error('commune') is-invalid @enderror" type="text"
                                                                           name="commune" value="{{ old('commune')}}"  >
                                                                </div>
                                                                @error('commune')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="house" class="form-label fs-16  pb-2 p-r-10">منزل  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="house" class="form-control @error('house') is-invalid @enderror" type="text"
                                                                           name="house" value="{{ old('house') }}">
                                                                </div>
                                                                @error('house')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <hr class="mb-4">
                                                    @endif
                                                    <div class="row mb-2 p-lr-14">
                                                        <div class="col-md-6 mb-2">
                                                            <label for="name" class="form-label fs-16  pb-2 p-r-10">البريد الالكتروني</label>
                                                            <input id="email" class="form-control" type="text"  value="{{ auth()->user()->email}}"  disabled>

                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone" class="form-control" type="text"  name="phone" value="{{ auth()->user()->phone }}" disabled>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2 p-lr-14">
                                                        <div class="col-md-6 mb-2 text-center">
                                                            <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                                            <div class="d-flex justify-content-center p-tb-14">
                                                                @if($user->id_carte)
                                                                    <a href="{{asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)}}" target="_blank" class="c-avatar-edit">
                                                                        <img src="{{asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)}}" class="img-fluid" alt="id_carte">
                                                                    </a>
                                                                @else
                                                                    <div>
                                                                        <div>
                                                                            <h3 class="badge fs-16 badge-light">صورة البطاقة المدنية خاطئة او غير موجودة</h3>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2 text-center">
                                                            <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة الشخصية  </label>
                                                            <div class="d-flex justify-content-center p-tb-14">
                                                                @if($user->avatar)
                                                                    <div>
                                                                        <a href="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" target="_blank" class="c-avatar-edit">
                                                                            <img src="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" class="img-blog-avatar2" alt="avatar">
                                                                        </a>
                                                                    </div>
                                                                @else
                                                                    <div>
                                                                        <div class="badge fs-16 badge-light">الصورة الشخصية خاطئة او غير موجودة</div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div>
                                                                <div class="input-group mb-3 ">
                                                                    <input class="form-control  @error('avatar') is-invalid @enderror p-tb-12 p-lr-20" id="avatar" type="file" name="avatar" placeholder="">
                                                                </div>
                                                                @error('avatar')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="d-flex justify-content-start">
                                                        <button class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-l-10 bor-r5" type="submit">{{ __('حفظ') }}</button>
                                                        <a href="" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
