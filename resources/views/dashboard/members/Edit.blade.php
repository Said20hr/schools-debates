@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-secondary border-0">
                                <div class="col-md-12 p-0 text-center" style="border-radius: 0 0 15px 15px">
                                    <a class="align-items-center d-flex justify-content-center bg-gradient-warning text-white p-tb-10" id="pills-student-tab" data-toggle="tab"
                                       href="#pills-student" role="tab" aria-controls="pills-student" >
                                        <img src="{{asset('images/Illustration/student.svg')}}" alt="img-student" class="p-tb-5" width="" height="70">
                                        <div class="text-center font-weight-bolder fs-22 m-lr-56">   تعديل عضو النادي </div>
                                    </a>
                                </div>

                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="{{route('members.update',$member->id)}}" dir="rtl" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="text-right">
                                            @if($errors)
                                                @foreach($errors as $error)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{$error}}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">البيانات الشخصية</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                                                  name="name" value="{{ $member->name }}" required autofocus>
                                                        </div>
                                                        @error('name')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة * </label>
                                                        <div class="input-group mb-3">

                                                            <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text" placeholder="{{ __('اسم العائلة … ') }}"
                                                                   name="lastname" value="{{ $member->lastname }}" required autofocus>
                                                        </div>
                                                        @error('lastname')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="job" class="form-label fs-16  pb-2 p-r-10">المهنة * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="job" class="form-control @error('job') is-invalid @enderror" type="text"
                                                                   placeholder="{{ __(' … المهنة ') }}" name="job" value="{{ $member->job }}" required autofocus>
                                                        </div>
                                                        @error('job')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-2">

                                                            <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control  @error('avatar') is-invalid @enderror p-tb-9 " id="avatar" type="file" name="avatar" placeholder="">
                                                            </div>
                                                            @error('avatar')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        @if($member->avatar)
                                                            <div>
                                                                <a href="{{asset('storage/members/'.$member->avatar)}}" target="_blank" class="c-avatar-edit">
                                                                    <img src="{{asset('storage/members/'.$member->avatar)}}" class="bor3" alt="avatar" width="100" height="100">
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div>
                                                                <h3 class="badge fs-22 badge-light">الصورة خاطئة او غير موجودة</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="d-flex justify-content-start">
                                                    <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">{{ __('حفظ') }}</button>
                                                    <a href="{{ route('members.index') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
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

@endsection

@section('javascript')

@endsection
