@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5">
                                    @if(session()->has('success_message'))
                                        <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                                    @endif
                                    @if(session()->has('error_message'))
                                        <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                                    @endif
                                    @if($edit)
                                    <form method="POST" action="{{ route('homepageContent.update',$content->id) }}" dir="rtl" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @else
                                            <form method="POST" action="{{ route('homepageContent.store') }}" dir="rtl" enctype="multipart/form-data">
                                                @csrf
                                                @endif
                                            <div class="text-right">
                                            @if($errors)
                                                @foreach($errors as $error)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{$error}}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">محتوى الموقع</legend>
                                                <hr class="mb-4">
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                    <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة الرئيسية</div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title1" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title1" class="form-control @error('title1') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة الاولى … ') }}" name="title1" value="{{$edit ? $content->title_1 : old('title1') }}">
                                                            </div>
                                                            @error('title1')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title2" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثانية </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title2" class="form-control @error('title2') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة الثانية … ') }}" name="title2" value="{{$edit ? $content->title_2 : old('title2') }}">
                                                            </div>
                                                            @error('title2')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description1" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description1" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_1 : ''}}</textarea>
                                                            </div>
                                                            @error('description1')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description2" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثانية  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description2" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_2 : ''}}</textarea>
                                                            </div>
                                                            @error('description2')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="description3" class="form-label fs-18  pb-2 p-r-10">وصف علبة المتناظرين </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description3" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->note_1 : ''}}</textarea>
                                                            </div>
                                                            @error('description3')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="description4" class="form-label fs-18  pb-2 p-r-10">وصف علبة المدربين  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description4" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->note_2 : ''}}</textarea>
                                                            </div>
                                                            @error('description4')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="description5" class="form-label fs-18  pb-2 p-r-10">وصف علبة التفاعليات  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description5" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->note_3 : ''}}</textarea>
                                                            </div>
                                                            @error('description5')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة من نحن </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title3" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title3" class="form-control @error('title3') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة الاولى … ') }}" name="title3" value="{{$edit ? $content->title_3 : old('title3') }}">
                                                            </div>
                                                            @error('title3')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title4" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثانية </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title4" class="form-control @error('title4') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة الثانية … ') }}" name="title4" value="{{$edit ? $content->title_4 : old('title4') }}">
                                                            </div>
                                                            @error('title4')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description6" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description6" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_3 : ''}}</textarea>
                                                            </div>
                                                            @error('description6')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description7" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثانية  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description7" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_4 : ''}}</textarea>
                                                            </div>
                                                            @error('description7')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class=" mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title5" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثالثة </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title5" class="form-control @error('title1') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة الثالثة … ') }}" name="title5" value="{{$edit ? $content->title_5 : old('title5') }}">
                                                            </div>
                                                            @error('title5')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description8" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثالثة </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description8" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_5 : ''}}</textarea>
                                                            </div>
                                                            @error('description8')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة الفعاليات </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title6" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title6" class="form-control @error('title1') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الفقرة  … ') }}" name="title6" value="{{$edit ? $content->title_6 : old('title6') }}">
                                                            </div>
                                                            @error('title6')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description9" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description9" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->text_6 : ''}}</textarea>
                                                            </div>
                                                            @error('description9')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى التواصل </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-12 mb-1">
                                                            <label for="address" class="form-label fs-18  pb-2 p-r-10">عنوان الموقع </label>
                                                            <div class="input-group mb-3">
                                                                <input id="address" class="form-control @error('address') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('عنوان الموقع  … ') }}" name="address" value="{{$edit ? $content->address : old('address') }}">
                                                            </div>
                                                            @error('address')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="phone_1" class="form-label fs-18  pb-2 p-r-10">رقم الهاتف 1</label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone_1" class="form-control @error('phone_1') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رقم الهاتف 1  … ') }}" name="phone_1" value="{{$edit ? $content->phone_1 : old('phone_1') }}">
                                                            </div>
                                                            @error('phone_1')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="phone_2" class="form-label fs-18  pb-2 p-r-10">رقم الهاتف 2</label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone_2" class="form-control @error('phone_2') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رقم الهاتف 2  … ') }}" name="phone_2" value="{{$edit ? $content->phone_2 : old('phone_2') }}">
                                                            </div>
                                                            @error('phone_2')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="email_1" class="form-label fs-18  pb-2 p-r-10">البريد الإلكتروني 1</label>
                                                            <div class="input-group mb-3">
                                                                <input id="email_1" class="form-control @error('email_1') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('البريد الإلكتروني 1  … ') }}" name="email_1" value="{{$edit ? $content->email_1 : old('email_1') }}">
                                                            </div>
                                                            @error('email_1')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="email_2" class="form-label fs-18  pb-2 p-r-10">البريد الإلكتروني 2</label>
                                                            <div class="input-group mb-3">
                                                                <input id="email_2" class="form-control @error('email_2') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('البريد الإلكتروني21  … ') }}" name="email_2" value="{{$edit ? $content->email_2 : old('email_2') }}">
                                                            </div>
                                                            @error('email_2')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="fb" class="form-label fs-18  pb-2 p-r-10">رابط الفايسبوك  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="fb" class="form-control @error('fb') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رابط الفايسبوك  … ') }}" name="fb" value="{{$edit ? $content->fb : old('fb') }}">
                                                            </div>
                                                            @error('fb')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="yt" class="form-label fs-18  pb-2 p-r-10">رابط اليوتيوب </label>
                                                            <div class="input-group mb-3">
                                                                <input id="yt" class="form-control @error('yt') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رابط اليوتيوب   … ') }}" name="yt" value="{{$edit ? $content->yt : old('yt') }}">
                                                            </div>
                                                            @error('yt')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="ig" class="form-label fs-18  pb-2 p-r-10">رابط الانستاغرام  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="ig" class="form-control @error('ig') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رابط الانستاغرام  … ') }}" name="ig" value="{{$edit ? $content->ig : old('ig') }}">
                                                            </div>
                                                            @error('ig')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3 mb-1">
                                                            <label for="tw" class="form-label fs-18  pb-2 p-r-10">رابط تويتر  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="tw" class="form-control @error('tw') is-invalid @enderror" type="text"
                                                                       placeholder="{{ __('رابط تويتر  … ') }}" name="tw" value="{{$edit ? $content->tw : old('tw') }}">
                                                            </div>
                                                            @error('tw')
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12 mb-1">
                                                            <label for="description10" class="form-label fs-18  pb-2 p-r-10">التعريف بالموقع </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description10" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14">{{$edit ? $content->description : ''}}</textarea>
                                                            </div>
                                                            @error('description10')
                                                                <div class="text-danger mb-2" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="mb-2 text-center">
                                                @if($edit)
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 bor-r5" type="submit">{{ __('عدل') }}</button>
                                                @else
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 bor-r5" type="submit">{{ __('حفظ') }}</button>
                                                @endif
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
