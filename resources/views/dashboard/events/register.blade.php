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
                                    <form method="POST" action="{{route('eventsUsers.store')}}" dir="rtl" enctype="multipart/form-data">
                                        @csrf
                                        <div class="text-right">
                                            @if($errors)
                                                @foreach($errors as $error)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{$error}}
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تسجيل متناظرين في تفاعلية</legend>
                                                <hr class="mb-4">
                                                <label for="title" class="form-label fs-18  pb-2 p-r-10">المسجلين في الفعالية </label>
                                               <div class="row">
                                                   @foreach($event->users as $user)
                                                       <div class="col-md-3 alert alert-info mx-2">
                                                           {{$user->id." - ".$user->name." ".$user->lastname}}
                                                       </div>
                                                   @endforeach

                                               </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="title" class="form-label fs-18  pb-2 p-r-10">عنوان الفعالية </label>
                                                        <div class="input-group mb-3">

                                                            <input id="title" class="form-control" type="text"
                                                                    name="event" value="{{$event->name }}" disabled >
                                                            <input  type="hidden"
                                                                   name="event" value="{{$event->id }}" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label class="form-label fs-18  pb-2 p-r-10">المعنيين </label>
                                                        <select name="participants[]" id="" class="form-control fs-18" multiple>
                                                           @foreach($users as $student)
                                                                <option value="{{$student->id}}" class="font-weight-bold text-dark p-tb-15"><span class="font-weight-bolder text-primary">{{" - رقم  ".$student->id.": "}} </span>{{$student->name." ".$student->lastname}}</option>
                                                            @endforeach
                                                        </select>
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
