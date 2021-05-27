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
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    @if(session()->has('success_message'))
                                        <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                                    @endif
                                    @if(session()->has('error_message'))
                                        <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                                    @endif
                                    <form method="POST" action="{{route('events.update',$event->id)}}" dir="rtl" enctype="multipart/form-data">
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
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تعديل فعالية</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="title" class="form-label fs-18  pb-2 p-r-10">عنوان الفعالية </label>
                                                        <div class="input-group mb-3">

                                                            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text"
                                                                   placeholder="{{ __('عنوان الفعالية …  ') }}" name="title" value="{{$event->name }}" required autofocus>

                                                        </div>
                                                        @error('title')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="form-label fs-18  pb-2 p-r-10">مفتوحة للتسجيل </div>
                                                    <div class="col-md-8 mb-1">
                                                        <label class="c-switch c-switch-label c-switch-success">
                                                            @if($event->case)
                                                                <input class="c-switch-input" type="checkbox" name="case" checked>
                                                            @else
                                                                <input class="c-switch-input" type="checkbox" name="case">
                                                            @endif
                                                            <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label class="form-label fs-18  pb-2 p-r-10">المعنيين </label>
                                                        <select name="participants" id="" class="form-control p-lr-20">
                                                            <option value="{{$event->participants}}" aria-checked="">{{$event->participants}}</option>
                                                            <option value="الجميع">الجميع</option>
                                                            <option value="المتناظرين">المتناظرين</option>
                                                            <option value="المتناظرين و المدربن">المتناظرين و المدربن</option>
                                                            <option value="المدربين">المدربين </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="date" class="form-label fs-16  pb-2 p-r-10">تاريخ الموعد * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="date" class="form-control @error('date') is-invalid @enderror" type="date"
                                                                   name="date" value="{{ $event->date }}" required >
                                                        </div>
                                                        @error('date')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14">
                                                                {{$event->description}}
                                                            </textarea>
                                                        </div>
                                                        @error('description')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <img src="{{asset('storage/events/'.$event->image)}}" alt="" class="img-fluid">
                                                        <label for="image" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                        <div class="input-group mb-3">
                                                            <input class="form-control  @error('image') is-invalid @enderror p-tb-9 " id="image" type="file" name="image" placeholder="">
                                                        </div>
                                                        @error('image')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="images" class="form-label fs-16  pb-2 p-r-10">ادراح الصور  </label>
                                                        <div class="input-group mb-3">
                                                            <input class="form-control  @error('images') is-invalid @enderror p-tb-9 " id="images" type="file" name="images" multiple placeholder="">
                                                        </div>
                                                        @error('images')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="d-flex justify-content-start">
                                                <button class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10" type="submit">{{ __('حفظ') }}</button>
                                                <a href="{{route('events.index')}}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10" type="submit">{{ __('العودة') }}</a>

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
