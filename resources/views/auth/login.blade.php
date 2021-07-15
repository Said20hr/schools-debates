@extends('dashboard.authBase')

@section('content')

    <div class="container p-t-56 p-b-112"  dir="rtl">
        <div class="text-center p-b-50 p-t-28">
            <h1 class="fs-30 font-weight-bolder color-1">  سجل الدخول لحسابك  في مناظرات المدارس</h1>
        </div>

      <div class="row justify-content-center">
        <div class="col-md-7 justify-content-center no-gutters bor-r5 p-lr-15-sm">
            <div class="p-t-28 text-right">
                @if(session()->has('success_message'))
                    <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                @endif
                @if(session()->has('error_message'))
                    <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                @endif
            </div>
          <div class="card-group">
            <div class="card bor-r5 ">
                <div class="card-header bg-primary p-tb-24 text-center" >
                    <div class="text-center font-weight-bolder fs-22 m-lr-56 text-white">سجل الدخول</div>
                </div>
                <div class="card-body p-t-60 p-b-40 text-right " >
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-md-12 mb-4">
                        <label for="email" class="form-label fs-18 pb-2">البريد الإلكتروني * </label>
                        <div class="input-group mb-3">
                            <input id="email" class="form-control @error('email') is-invalid @enderror p-lr-35" type="text" placeholder="{{ __('example@example.com') }}"
                                   name="email" value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                        <div class="text-danger mb-2" role="alert">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="phone" class="form-label fs-18 ">كلمة السر * </label>
                        <div class="text-muted pb-3">٦ أحرف على الأقل</div>
                        <div class="input-group mb-3">
                            <input class="form-control  @error('password') is-invalid @enderror p-lr-35" type="password" placeholder="{{ __('كلمة السر') }}"
                                   name="password" required>
                        </div>
                        @error('password')
                        <div class="text-danger mb-2" role="alert">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror

                    </div>
                    <div class="col-md-12 text-center py-4 mt-4">
                        <button class="btn2 btn-primary col-md-6 fs-24 h-55 p-tb-10 lh-10 font-weight-bold" type="submit">{{ __('دخول') }}</button>
                    </div>
                    <div class="col-md-12 text-center ">
                        <a href="{{ route('password.request') }}" class="btn btn-link px-0 col-6 clblack font-weight-bold fs-16">{{ __('نسيت كلمة السر ؟') }}</a>
                    </div>

                </form>
                </div>
                <div class="card-footer text-center" style="border-radius: 0 0 15px 15px !important;">
                    @if (Route::has('password.request'))
                        <p class="fs-20 p-tb-7 m-b-15">ليس لديك حساب ؟ <a href="{{ route('register') }}" class="color-1 font-weight-bold">أنشىء حسابك</a></p>
                    @endif
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
