@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                       {{-- @switch($user->role)
                            @case('student')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  تعديل المتناظر') }} </div>
                            @break
                            @case('coach')
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  تعديل المدرب') }} </div>
                            @break
                        @endswitch--}}
                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-secondary border-0">
                                @switch($membership)
                                    @case('students')
                                    <div class="col-md-12 p-0 text-center" style="border-radius: 0 0 15px 15px">
                                        <a class="align-items-center d-flex justify-content-center bg-gradient-warning text-white p-tb-10" id="pills-student-tab" data-toggle="tab"
                                           href="#pills-student" role="tab" aria-controls="pills-student" >
                                            <img src="{{asset('images/Illustration/student.svg')}}" alt="img-student" class="p-tb-5" width="" height="70">
                                            <div class="text-center font-weight-bolder fs-22 m-lr-56">  متناظر</div>
                                        </a>
                                    </div>
                                    @break
                                    @case('coaches')
                                    <div class="col-md-12 p-0 text-center" style="border-radius: 0 0 15px 15px">
                                        <a class="align-items-center d-flex justify-content-center bg-gradient-warning text-white p-tb-10" id="pills-coach-tab" data-toggle="tab" href="#pills-coach"
                                           role="tab" aria-controls="pills-coach" >
                                            <img src="{{asset('images/Illustration/trainer.svg')}}"alt="img-trainer" class="p-tb-5" width="" height="70">
                                            <div class="text-center font-weight-bolder fs-22 m-lr-56">  مدرب</div>
                                        </a>

                                    </div>
                                    @break
                                @endswitch
                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    @switch($membership)
                                        @case('students')
                                        <form method="POST" action="{{route('students.store')}}" dir="rtl" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="1" required>
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

                                                        <div class="col-md-4 mb-1">
                                                            <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('الاسم الأول …  ') }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                                                       placeholder="{{ __('الاسم الثاني …  ') }}" name="second_name" value="{{ old('second_name') }}">
                                                            </div>
                                                            @error('second_name')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text" placeholder="{{ __('اسم العائلة … ') }}"
                                                                       name="lastname" value="{{ old('lastname') }}" required autofocus>
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
                                                            <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" type="date"
                                                                       name="birth_date" value="{{ old('birth_date') ? old('birth_date') :'2021-06-20'  }}" required autofocus
                                                                       min="1940-01-01" max="2021-12-31">
                                                            </div>
                                                            @error('birth_date')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="school" class="form-control @error('school') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('المدرسة …  ') }}" name="school" value="{{ old('school') }}" required autofocus>
                                                            </div>
                                                            @error('school')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="level" class="form-control @error('level') is-invalid @enderror" type="text" placeholder="{{ __('الصف … ') }}"
                                                                       name="level" value="{{ old('level') }}" required autofocus>
                                                            </div>
                                                            @error('level')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-12 mb-2">
                                                            <label for="id_carte" class="form-label fs-16  pb-2 p-r-10">البطاقة المدنية * </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control  @error('id_carte') is-invalid @enderror p-tb-9 " id="id_carte" type="file" name="id_carte" placeholder="">
                                                            </div>
                                                            @error('id_carte')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 mb-2">
                                                            <label for="email" class="form-label fs-16  pb-2 p-r-10">البريد الإلكتروني * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('example@example.com') }}"
                                                                       name="email" value="{{ old('email') }}" autofocus required>
                                                            </div>
                                                            @error('email')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="text" placeholder="{{ __('رقم الهاتف') }}" name="phone" value="{{ old('phone') }}" autofocus  required>
                                                            </div>
                                                            @error('phone')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">

                                                        <div class="col-md-6 mb-2">
                                                            <label for="password" class="form-label fs-16  pb-2 p-r-10">كلمة السر * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="password" class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="{{ __('كلمة السر') }}"
                                                                       name="password" required>
                                                            </div>
                                                            @error('password')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-2">
                                                            <label for="password_confirmation" class="form-label fs-16  pb-2 p-r-10">تأكيد كلمة السر *  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="password_confirmation" class="form-control @error('password') is-invalid @enderror"
                                                                       type="password" placeholder="{{ __(' تأكيد كلمة السر') }}" name="password_confirmation" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr class="mb-4">
                                                </div>
                                                <div class="mb-2 text-center">
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 " type="submit">{{ __('تسجيل') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                        @break
                                        @case('coaches')
                                        <form method="POST" action="{{ route('coaches.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="2" required>
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

                                                        <div class="col-md-4 mb-1">
                                                            <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('الاسم الأول …  ') }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                                                       placeholder="{{ __('الاسم الثاني …  ') }}" name="second_name" value="{{ old('second_name') }}">
                                                            </div>
                                                            @error('second_name')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="lastname" class="form-control @error('lastname') is-invalid @enderror" type="text" placeholder="{{ __('اسم العائلة … ') }}"
                                                                       name="lastname" value="{{ old('lastname') }}" required autofocus>
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
                                                            <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" type="date"
                                                                       name="birth_date" value="{{ old('birth_date') ? old('birth_date') :'2021-06-20'  }}" required autofocus
                                                                       min="1940-01-01" max="2021-12-31">
                                                            </div>
                                                            @error('birth_date')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="job" class="form-label fs-16  pb-2 p-r-10">المهنة * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="job" class="form-control @error('job') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('المهنة …  ') }}" name="job" value="{{ old('job') }}" required autofocus>
                                                            </div>
                                                            @error('job')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="work_place" class="form-control @error('work_place') is-invalid @enderror" type="text" placeholder="{{ __('مكان العمل … ') }}"
                                                                       name="work_place" value="{{ old('work_place') }}" required autofocus>
                                                            </div>
                                                            @error('work_place')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-12 mb-2">
                                                            <label for="id_carte" class="form-label fs-16  pb-2 p-r-10">البطاقة المدنية * </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control  @error('id_carte') is-invalid @enderror p-tb-9 " id="" type="file" name="id_carte" placeholder="">
                                                            </div>
                                                            @error('id_carte')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 mb-2">
                                                            <label for="email" class="form-label fs-16  pb-2 p-r-10">البريد الإلكتروني * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('example@example.com') }}"
                                                                       name="email" value="{{ old('email') }}" autofocus required>
                                                            </div>
                                                            @error('email')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="text" placeholder="{{ __('رقم الهاتف') }}" name="phone" value="{{ old('phone') }}" autofocus  required>
                                                            </div>
                                                            @error('phone')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">

                                                        <div class="col-md-6 mb-2">
                                                            <label for="password" class="form-label fs-16  pb-2 p-r-10">كلمة السر * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="password" class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="{{ __('كلمة السر') }}"
                                                                       name="password" required>
                                                            </div>
                                                            @error('password')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-2">
                                                            <label for="confirm_password" class="form-label fs-16  pb-2 p-r-10">تأكيد كلمة السر *  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="confirm_password" class="form-control @error('password') is-invalid @enderror"
                                                                       type="password" placeholder="{{ __(' تأكيد كلمة السر') }}" name="password_confirmation" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr class="mb-4">
                                                </div>
                                                <div class="mb-2 text-center">
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55" type="submit">{{ __('تسجيل') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                        @break
                                    @endswitch
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
