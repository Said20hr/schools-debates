@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card border-dark ">
                        @switch($user->role)
                            @case('student')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  تعديل المتناظر') }} </div>
                            @break
                            @case('coach')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  تعديل المدرب') }} </div>
                            @break
                        @endswitch
                    <div class="card-body text-right">
                        <br>
                        @if(session()->has('success_message'))
                            <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                        @endif
                        @if(session()->has('error_message'))
                            <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                        @endif
                        <form method="POST" action="/admin/{{$membership}}/{{ $user->id }}" dir="rtl" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="p-tb-14">
                                <div class="card">
                                    <div class="card-header fs-20 font-weight-bolder bg-3 ">تفعيل العضوية</div>
                                    <div class="card-body">
                                        <label class="c-switch c-switch-label c-switch-success">
                                            @if($user->status)
                                            <input class="c-switch-input" type="checkbox" name="status" checked>
                                            @else
                                                <input class="c-switch-input" type="checkbox" name="status">
                                            @endif
                                                <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-md-4 mb-1">
                                    <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول  </label>
                                    <div class="input-group mb-3">

                                        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                              name="name" value="{{ $user->name }}"  >

                                    </div>
                                    @error('name')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-1">
                                    <label for="second_name" class="form-label fs-16  pb-2 p-r-10">الاسم الثاني </label>
                                    <div class="input-group mb-3">
                                        <input id="second_name" class="form-control @error('second_name') is-invalid @enderror" type="text"
                                               name="second_name" value="{{ $user->second_name }}">
                                    </div>
                                    @error('second_name')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-1">
                                    <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة  </label>
                                    <div class="input-group mb-3">

                                        <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text"
                                               name="lastname" value="{{ $user->lastname }}"  >
                                    </div>
                                    @error('lastname')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 mb-1">
                                    <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد  </label>
                                    <div class="input-group mb-3">
                                        <input id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" type="date"
                                               name="birth_date" value="{{ $user->birth_date   }}">
                                    </div>
                                    @error('birth_date')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>

                                @switch($user->role)
                                    @case('student')
                                    <div class="col-md-4 mb-1">
                                        <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة  </label>
                                        <div class="input-group mb-3">
                                            <input id="school" class="form-control @error('school') is-invalid @enderror" type="text"
                                                   name="school" value="{{ $user->school }}"  >
                                        </div>
                                        @error('school')
                                        <div class="text-danger mb-2" role="alert">
                                            <strong>{{$message}}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف  </label>
                                        <div class="input-group mb-3">
                                            <input id="level" class="form-control @error('level') is-invalid @enderror" type="text"
                                                   name="level" value="{{ $user->level }}"  >
                                        </div>
                                        @error('level')
                                        <div class="text-danger mb-2" role="alert">
                                            <strong>{{$message}}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    @break
                                    @case('coach')
                                    <div class="col-md-4 mb-1">
                                        <label for="job" class="form-label fs-16  pb-2 p-r-10">العمل  </label>
                                        <div class="input-group mb-3">
                                            <input id="job" class="form-control @error('job') is-invalid @enderror" type="text"
                                                   name="job" value="{{ $user->job }}"  >
                                        </div>
                                        @error('job')
                                        <div class="text-danger mb-2" role="alert">
                                            <strong>{{$message}}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل  </label>
                                        <div class="input-group mb-3">
                                            <input id="work_place" class="form-control @error('work_place') is-invalid @enderror" type="text"
                                                   name="work_place" value="{{ $user->work_place }}"  >
                                        </div>
                                        @error('work_place')
                                        <div class="text-danger mb-2" role="alert">
                                            <strong>{{$message}}</strong>
                                        </div>
                                        @enderror
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
                                <div class="col-md-6 mb-2">
                                    <label for="name" class="form-label fs-16  pb-2 p-r-10">البريد الالكتروني</label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{$user->email}}"
                                           name="email" value="{{ old('email') }}"  disabled>
                                    @error('email')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف  </label>
                                    <div class="input-group mb-3">

                                        <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="text"  name="phone" value="{{ $user->phone }}"   >
                                    </div>
                                    @error('phone')
                                    <div class="text-danger mb-2" role="alert">
                                        <strong>{{$message}}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row mb-2 mt-2">
                                <div class="col-md-6 mb-2 text-center">
                                    <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                    <div class="d-flex justify-content-center p-tb-14">
                                        @if($user->id_carte)
                                            <a href="{{asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)}}" target="_blank" class="c-avatar-edit">
                                                <img src="{{asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)}}" class="c-avatar-img" alt="id_carte">
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
                                            @if($membership == 'users')
                                            <div>
                                                <a href="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" target="_blank" class="c-avatar-edit">
                                                    <img src="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" class="c-avatar-img" alt="avatar">
                                                </a>
                                            </div>
                                            @else
                                                <div>
                                                <a href="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" target="_blank" class="c-avatar-edit">
                                                    <img src="{{asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)}}" class="c-avatar-img" alt="avatar">
                                                </a>
                                                </div>
                                        @endif

                                        @else
                                            <div>
                                            <h3 class="badge fs-22 badge-light">الصورة الشخصية خاطئة او غير موجودة</h3>
                                        </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="input-group mb-3 ">
                                            <input class="form-control  @error('avatar') is-invalid @enderror   " id="avatar" type="file" name="avatar" placeholder="">
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
                                <button class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-l-10" type="submit">{{ __('حفظ') }}</button>
                                <a href="{{ route($membership.'.index') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
                            </div>

                        </form>
                    </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection
