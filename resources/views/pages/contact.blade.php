@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13">

        <section class="p-t-100 p-b-28">
            <div class="container text-right">
                <div class="text-center">
                    <h1 class="color-2 fs-38 fw-bold pt-lg-5 pt-xl-5">تواصل معنا</h1>
                </div>
                <div class="p-tb-56">
                    <div class="row">
                        <div class="col-md-8">
                       <div class="card border-secondary" style="box-shadow: 0 3px 5px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.13);">
                           <div class="card-header" style="border-radius: 15px 15px 0 0 ">
                               <h2 class="font-weight-bolder color-1 fs-19 lh-18 p-tb-7">لا تتردد في التواصل بنا، يسعدنا تلقي طلباتكم واستفساراتكم.</h2>
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
                               <form action="{{route('contact.store')}}" method="POST">
                                   @csrf
                               <div class="container">
                                   <div class="row p-lr-28 p-lr-10-sm">
                                       <div class="col-md-6 mb-3">
                                           <label for="name" class="form-label fs-15 pb-2 p-r-10 clblack">الأسم * </label>
                                           <div class="input-group mb-2">
                                               <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" 
                                                      placeholder="{{ __('اكتب أسمك هنا') }}" name="name" value="{{ Auth::user() ? Auth::user()->name :  old('name') }}" {{Auth::user()? 'disabled' :'required' }} autofocus>
                                           </div>
                                           @error('name')
                                           <div class="text-danger mb-2" role="alert">
                                               <strong>{{$message}}</strong>
                                           </div>
                                           @enderror
                                       </div>
                                       <div class="col-md-6 mb-3">
                                           <label for="phone" class="form-label fs-15 pb-2 p-r-10 clblack">رقم الهاتف * </label>
                                           <div class="input-group mb-3">
                                               <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="text" placeholder="{{ __('أكتب رقم الهاتف هنا') }}" name="phone"
                                                      value="{{Auth::user() ? Auth::user()->phone :  old('phone') }}" autofocus  {{Auth::user() ? 'disabled' :'required' }}>
                                           </div>
                                           @error('phone')
                                           <div class="text-danger mb-2" role="alert">
                                               <strong>{{$message}}</strong>
                                           </div>
                                           @enderror
                                       </div>
                                       <div class="col-md-6 mb-3">
                                           <label for="email" class="form-label fs-15 pb-2 p-r-10 clblack">البريد الإلكتروني * </label>
                                           <div class="input-group mb-3">
                                               <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('example@example.com') }}"
                                                      name="email" value="{{ Auth::user() ? Auth::user()->email :  old('email') }}" autofocus {{Auth::user()? 'disabled' :'required' }}>
                                           </div>
                                           @error('email')
                                           <div class="text-danger mb-2" role="alert">
                                               <strong>{{$message}}</strong>
                                           </div>
                                           @enderror
                                       </div>
                                       <div class="col-md-6 mb-3">
                                           <label for="subject" class="form-label fs-15 pb-2 p-r-10 clblack">موضوع الرسالة * </label>
                                           <div class="input-group mb-3">
                                               <input id="subject" class="form-control @error('subject') is-invalid @enderror" type="text" placeholder="{{ __('موضوع') }}" name="subject" value="{{ old('subject') }}" autofocus  required>
                                           </div>
                                           @error('subject')
                                           <div class="text-danger mb-2" role="alert">
                                               <strong>{{$message}}</strong>
                                           </div>
                                           @enderror
                                       </div>
                                       <div class="col-md-12 mb-3">
                                           <label for="message" class="form-label fs-15 clblack pb-2 p-r-10">رسالتك * </label>
                                           <div class="input-group mb-3">
                                               <textarea name="message" id="message" cols="30" rows="10" class="form-control p-tb-20 p-lr-20" value="محتوى الرسالة"></textarea>
                                           </div>
                                           @error('phone')
                                           <div class="text-danger mb-2" role="alert">
                                               <strong>{{$message}}</strong>
                                           </div>
                                           @enderror
                                       </div>
                                       <div class="col-md-12">
                                           <button class="btn2 btn-primary col-md-6 fs-20 p-tb-10 lh-10 font-weight-bold col-lg-3" type="submit">{{ __('أرسل الرسالة') }}</button>
                                       </div>
                               </div>
                               </div>
                               </form>
                           </div>
                       </div>
                   </div>
                        <div class="col-md-4">
                            <div class="card border-secondary" style="box-shadow: 0 3px 5px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.13);">
                                <div class="card-header" style="border-radius: 15px 15px 0 0 ">
                                    <h2 class="font-weight-bolder color-1 fs-19 p-tb-7">ابقى على تواصل</h2>
                                </div>

                                <div class="card-body bg-white m-t-28">
                                    <div class="container p-lr-14">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="ml-5">
                                                <i class="ti-home color-2 fs-42"></i>
                                            </div>
                                            <div class="cn-info-content p-t-7">
                                                <h4 class="fs-22 font-weight-bold color-1 mb-2">العنوان</h4>
                                                {{$content->address}}
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="ml-5">
                                                <i class="ti-email color-2 fs-42"></i>
                                            </div>
                                            <div class="cn-info-content p-t-7">
                                                <h4 class="fs-22 font-weight-bold color-1 mb-2">البريد الإلكتروني</h4>
                                                {{$content->email_1}}<br>  {{$content->email_2}}
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="ml-5">
                                                <i class="ti-mobile color-2 fs-42"></i>
                                            </div>
                                            <div class="cn-info-content p-t-7">
                                                <h4 class="fs-22 font-weight-bold color-1 mb-2">رقم الهاتف</h4>
                                                {{$content->phone_2}}<br>  {{$content->phone_1}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <iframe width="100%" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=7&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
@endsection
