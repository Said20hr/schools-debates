@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card border-dark ">
                        @switch($user->role)
                            @case('student')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  معاينة المتناظر') }} </div>
                            @break
                            @case('coach')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  معاينة المدرب') }} </div>
                            @break
                        @endswitch
                        <div class="card-body text-right" dir="rtl">
                            <br>
                            @if(session()->has('success_message'))
                                <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                            @endif
                            @if(session()->has('error_message'))
                                <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                            @endif
                                @if($user->status )
                                    <div class="mb-5">
                                       <div class="badge badge-success fs-20">عضو مفعل</div>
                                    </div>
                                @endif
                                <div class="row mb-2">

                                    <div class="col-md-4 mb-1">
                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول  </label>
                                        <div class="input-group mb-3">

                                            <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                                   name="name" value="{{ $user->name }}"  disabled>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="second_name" class="form-label fs-16  pb-2 p-r-10">الاسم الثاني </label>
                                        <div class="input-group mb-3">
                                            <input id="second_name" class="form-control @error('second_name') is-invalid @enderror" type="text"
                                                   name="second_name" value="{{ $user->second_name }}" disabled>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة  </label>
                                        <div class="input-group mb-3">

                                            <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text"
                                                   name="lastname" value="{{ $user->lastname }}" disabled>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mb-1">
                                        <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد  </label>
                                        <div class="input-group mb-3">
                                            <input id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" type="date"
                                                   name="birth_date" value="{{ $user->birth_date   }}"  disabled>
                                        </div>

                                    </div>

                                    @switch($user->role)
                                        @case('student')
                                        <div class="col-md-4 mb-1">
                                            <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة  </label>
                                            <div class="input-group mb-3">
                                                <input id="school" class="form-control @error('school') is-invalid @enderror" type="text"
                                                       name="school" value="{{ $user->school }}" disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف  </label>
                                            <div class="input-group mb-3">
                                                <input id="level" class="form-control @error('level') is-invalid @enderror" type="text"
                                                       name="level" value="{{ $user->level }}"  disabled>
                                            </div>

                                        </div>
                                        @break
                                        @case('coach')
                                        <div class="col-md-4 mb-1">
                                            <label for="job" class="form-label fs-16  pb-2 p-r-10">العمل  </label>
                                            <div class="input-group mb-3">
                                                <input id="job" class="form-control @error('job') is-invalid @enderror" type="text"
                                                       name="job" value="{{ $user->job }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل  </label>
                                            <div class="input-group mb-3">
                                                <input id="work_place" class="form-control @error('work_place') is-invalid @enderror" type="text"
                                                       name="work_place" value="{{ $user->work_place }}" disabled>
                                            </div>

                                        </div>
                                        @break
                                    @endswitch

                                    <div class="mb-4 p-lr-20 border-bottom p-b-14 fs-20 font-weight-bolder color-1">{{ __('بيانات السكن') }} </div>
                                    <div class="row mb-2 p-lr-24">
                                        <div class="col-md-4 mb-1">
                                            <label for="region" class="form-label fs-16  pb-2 p-r-10">المنطقه</label>
                                            <div class="input-group mb-3">
                                                <input id="region" class="form-control @error('region') is-invalid @enderror" type="text"
                                                       name="region" value="{{ $user->region   }}">
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
                                                       name="province" value="{{ $user->province }}"  >
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
                                                       name="rue" value="{{ $user->rue }}"  >
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
                                                       name="commune" value="{{ $user->commune }}"  >
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
                                                       name="house" value="{{ $user->house }}">
                                            </div>
                                            @error('house')
                                            <div class="text-danger mb-2" role="alert">
                                                <strong>{{$message}}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                </div>
                                <hr class="mb-4">
                                <div class="row mb-2">
                                    <div class="col-md-4 mb-2">
                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">البريد الالكتروني</label>
                                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{$user->email}}"
                                               name="email" value="{{ old('email') }}"  disabled>

                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف  </label>
                                        <div class="input-group mb-3">
                                            <input id="phone" class="form-control  @error('phone') is-invalid @enderror " type="text"
                                                   name="phone" value="{{ $user->phone }}"   disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="created_at" class="form-label fs-16  pb-2 p-r-10">تاريخ التسجيل  </label>
                                        <div class="input-group mb-3">
                                            <input id="created_at" class="form-control  @error('created_at') is-invalid @enderror" type="text"
                                                   name="created_at" value="{{ $user->created_at }}"   disabled>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row mb-2 mt-2">
                                    <div class="col-md-6 mb-2 text-center">
                                        <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                        <div class="d-flex justify-content-center p-tb-14">
                                            @if($user->id_carte)
                                                <a href="{{asset('storage/users/'.$user->id_carte.'/id_carte/'.$user->id_carte)}}" target="_blank" class="c-avatar-edit">
                                                    <img src="{{asset('storage/users/'.$user->id_carte.'/id_carte/'.$user->id_carte)}}"  alt="id_carte" width="300" height="250">
                                                </a>
                                            @else
                                            <div>
                                                <div>
                                                    <h3 class="badge fs-22 badge-light">صورة البطاقة المدنية خاطئة او غير موجودة</h3>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2 text-center">
                                        <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة الشخصية  </label>
                                        <div class="d-flex justify-content-center p-tb-14">
                                            @if($user->avatar)
                                                <a href="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" target="_blank" class="c-avatar-edit">
                                                    <img src="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" class="c-avatar-img" alt="avatar">
                                                </a>
                                            @else
                                            <div>
                                                <div>
                                                    <h3 class="badge fs-22 badge-light">الصورة الشخصية غير موجودة</h3>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route($membership.'.index') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
                                    <a href="{{ url('admin/'.$membership.'/'. $user->id . '/edit') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">{{ __('تعديل') }}</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('javascript')

@endsection
