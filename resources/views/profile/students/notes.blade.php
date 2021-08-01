@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

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
                            <a href="{{route('user.index')}}" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            <a href="{{route('user.events')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i>  فعالياتي </a>
                            <a href="{{route('user.notes')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right  active text-white "><i class="fa fa-bell m-lr-10"></i> الملاحظات </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="d-flex align-items-start">
                            <div>
                                <div>
                                    <div class="card border-secondary" style="box-shadow: 0 3px 5px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.13);">
                                        <div class="card-header" style="border-radius: 15px 15px 0 0 ">
                                            <h2 class="font-weight-bolder color-1 fs-24 p-tb-14"> الملاحظات</h2>
                                        </div>
                                        <div class="p-t-28 p-lr-20">
                                            @if(session()->has('success_message'))
                                                <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                                            @endif
                                            @if(session()->has('error_message'))
                                                <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                                            @endif
                                        </div>
                                        <div class="card-body m-tb-28">
                                            <form action="{{route('user.store')}}" method="POST">
                                                @csrf
                                                <div class="container">
                                                    <div class="row p-lr-28">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="type" class="form-label fs-16  pb-2 p-r-10 clblack">نوع الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                                                                    <option value="اضافة مشاركة">اضافة مشاركة</option>
                                                                    <option value="تعديل مشاركة">تعديل مشاركة</option>
                                                                    <option value="تعديل الملف الشخصي">تعديل الملف الشخصي</option>
                                                                    <option value="اخر…">اخر…</option>
                                                                </select>
                                                            </div>
                                                            @error('title')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        </div>
                                                        <div class="row p-lr-28">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="title" class="form-label fs-16  pb-2 p-r-10 clblack">موضوع الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" placeholder="{{ __('موضوع') }}" name="title" value="{{ old('title') }}" autofocus  required>
                                                            </div>
                                                            @error('title')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="content" class="form-label fs-16 clblack pb-2 p-r-10">الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="content" id="content" cols="30" rows="10"
                                                                          class="form-control p-tb-20 p-lr-20" value="محتوى الملاحظة"></textarea>
                                                            </div>
                                                            @error('note')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="btn2 btn-primary col-md-6 fs-24  p-tb-10 lh-10 font-weight-bold col-lg-3" type="submit">{{ __('أرسل الملاحظة') }}</button>
                                                        </div>
                                                    </div>
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


        </div>
    </div>

@endsection
