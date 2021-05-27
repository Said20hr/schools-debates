@extends('dashboard.authBase')

@section('content')

    <div class="container p-t-56 p-b-112"  dir="rtl">
        <div class="text-center p-b-60 p-t-28">
           <h1 class="font-weight-bold">  اختر عضويتك و ارسل طلب تسجيلك في مناظرات المدارس</h1>
        </div>

      <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
          <div class=" bg-secondary border-0">
              <ul class="nav nav-pills align-items-center d-flex justify-content-center" id="pills-tab">
                      <li class="col-md-6 p-0 text-center" style="border-radius: 0 0 15px 15px">
                          <a class="nav-link  align-items-center d-flex justify-content-center" id="pills-student-tab" data-toggle="tab"
                             href="#pills-student" role="tab" aria-controls="pills-student" >
                              <img src="{{asset('images/Illustration/student.svg')}}" alt="img-student" class="p-tb-5" width="" height="70">
                              <div class="text-center font-weight-bolder fs-22 m-lr-56">  متناظر</div>
                          </a>

                      </li>
                      <li class="col-md-6 p-0 text-center" style="border-radius: 0 0 15px 15px">
                          <a class="nav-link align-items-center d-flex justify-content-center" id="pills-coach-tab" data-toggle="tab" href="#pills-coach"
                             role="tab" aria-controls="pills-coach" >
                              <img src="{{asset('images/Illustration/trainer.svg')}}"alt="img-trainer" class="p-tb-5" width="" height="70">
                              <div class="text-center font-weight-bolder fs-22 m-lr-56">  مدرب</div>
                          </a>

                      </li>
                  </ul>
          </div>
          <div class=" bg-white" style="border-radius: 0 0 15px 15px">
              <div class="tab-content py-4 px-5" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                                          <div class="text-muted pb-3"> ﻻ تتعدي 512ميغا</div>
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
                                  <div class="m-tb-14">
                                      <p class="fs-20 p-tb-7 m-b-15"> لديك حساب ؟ <a href="{{ route('login') }}" class="color-1 font-weight-bold">سجل دخولك الى  حسابك</a></p>
                                  </div>
                              </div>
                          </div>
                  </form>
              </div>

              <div class="tab-pane fade" id="pills-coach" role="tabpanel" aria-labelledby="pills-coach-tab">
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                              <div class="m-tb-14">
                                  <p class="fs-20 p-tb-7 m-b-15"> لديك حساب ؟ <a href="{{ route('login') }}" class="color-1 font-weight-bold">سجل دخولك الى  حسابك</a></p>
                              </div>
                          </div>
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
