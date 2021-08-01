@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right m-b-56" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card border-dark ">
                        <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white">{{ __('  مشاركات المتناظر') }} </div>
                        <div class="card-body text-right">
                            <br>
                            @if(session()->has('success_message'))
                                <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                            @endif
                            @if(session()->has('error_message'))
                                <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                            @endif
                            @if($user->status)
                                <div class="mb-5">
                                    <div class="badge badge-success fs-22">متناظر مفعل</div>
                                    <div class="badge badge-danger fs-22"> رقم عضويه   {{ $user->id }}</div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6 my-4 text-center">
                                <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                <div class="d-flex justify-content-center p-tb-14">
                                    @if($user->id_carte)
                                        <a href="{{asset('storage/users/student/id_carte/'.$user->id_carte)}}" target="_blank" class="c-avatar-edit">
                                            <img src="{{asset('storage/users/student/id_carte/'.$user->id_carte)}}" class="c-avatar-img" alt="id_carte">
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
                                <div class="col-md-6 my-4 text-center">
                                <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة الشخصية  </label>
                                <div class="d-flex justify-content-center p-tb-14">
                                    @if($user->avatar)
                                        <a href="{{asset('storage/users/student/avatars/'.$user->avatar)}}" target="_blank" class="c-avatar-edit">
                                            <img src="{{asset('storage/users/student/avatars/'.$user->avatar)}}" class="c-avatar-img" alt="avatar">
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
                        </div>
                        <hr>
                        <div class="row">
                            @foreach($userstournament as $tournament)
                                <div class="col-lg-4">
                            <div class="list-group m-tb-28">
                                <div class="list-group-item bg-success clwhite">
                                    <div class="panel-heading d-flex justify-content-between align-items-center p-tb-7 "  style="display: flex;justify-content: space-between;cursor: pointer;">
                                        <div class="font-weight-bolder fs-18"> {{$tournament->name}}</div>
                                    </div>
                                </div>
                                <div class="list-group list1 bor3">
                                    <div class="list-group-item col-md-12">
                                        <div class="form-group">
                                            <label class="control-label fs-16 font-weight-bold">اسم البطولة او النشاط</label>
                                            <input type="text" class="form-control p-tb-10 clblack fs-17" disabled value="{{$tournament->name}}">
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12">
                                        <div class="form-group">
                                            <label class="control-label fs-16 font-weight-bold">تفاصيل البطولة او النشاط</label>
                                            <textarea  class="form-control p-tb-10 clblack fs-16" disabled>{{$tournament->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12 p-lr-28">
                                        <div class="control-label fs-16 font-weight-bold mb-2">تمميز</div>
                                        <label class="c-switch c-switch-label c-switch-opposite-success">
                                            @if($tournament->feature)
                                                <input class="c-switch-input" type="checkbox" disabled checked>
                                            @else
                                                <input class="c-switch-input" type="checkbox" disabled>
                                            @endif
                                            <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                        </label>
                                    </div>
                                    <div class="list-group-item col-md-12 p-lr-14">
                                        <div class="form-group ">
                                            <div class=col-form-label">
                                                <div class="form-check">
                                                    <input class="form-check-input"  type="radio" checked >
                                                    <label class="form-check-label fs-17" >{{$tournament->type}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12">
                                        <div class="d-flex text-end justify-content-between text-right">
                                            <a href="" type="button" class="btn btn-info btn-lg fs-18 p-tb-10 p-lr-10" >تعديل مشاركة
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('tournament.destroy', $tournament->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-lg  fs-18 p-tb-10 p-lr-10">  حذف مشاركة  <i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        </div>

                        <hr>
                        <form action="{{route('tournament.store')}}" method="POST" class="m-b-28">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="user">
                            <div class="col-lg-12 m-tb-14">
                                <div class="col-md-12 list-group m-tb-28">
                                        <div class="list-group-item active">
                                            <div class="panel-heading d-flex justify-content-between align-items-center p-tb-7 drop" data-target="1" style="display: flex;justify-content: space-between;cursor: pointer;">
                                                <div class="font-weight-bolder fs-22"> اضافة المشاركة 1</div>
                                                <i class="fa fa-angle-down fs-22 "></i>
                                            </div>
                                        </div>
                                    <div class="list-group list1 bor3">
                                            <div class="list-group-item col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label fs-22 font-weight-bolder">اسم البطولة او النشاط</label>
                                                    <input type="text" class="form-control p-tb-10 clblack fs-20" name="tournament[0][name]" placeholder="اسم...">
                                                </div>
                                            </div>
                                            <div class="list-group-item col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label fs-20 font-weight-bolder">تفاصيل البطولة او النشاط</label>
                                                    <textarea  class="form-control p-tb-10 clblack fs-18"
                                                               name="tournament[0][description]" rows="6">تفاصيل... </textarea>
                                                </div>
                                            </div>
                                            <div class="list-group-item col-md-12 p-lr-28">
                                                <div class="control-label fs-22 font-weight-bolder mb-2">تمميز</div>
                                                <label class="c-switch c-switch-label c-switch-opposite-success">
                                                    <input class="c-switch-input" type="checkbox" name="tournament[0][feature]">
                                                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                </label>
                                            </div>
                                            <div class="list-group-item col-md-12 p-lr-28">
                                                <div class="form-group ">
                                               <label class="control-label fs-22 font-weight-bolder">نوع البطولة</label>
                                                <div class=col-form-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio1-[0]" type="radio" value="البطولات الرسمية الدولية" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio1-[0]">البطولات الرسمية الدولية</label>
                                                    </div>
                                                    <div class="form-check fs-22">
                                                        <input class="form-check-input mb-2" id="radio3-[0]" type="radio" value="البطولات الرسمية المحليه" name="tournament[0][type]">
                                                        <label class="form-check-label " for="radio3-[0]"> البطولات الرسمية المحليه</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio2-[0]" type="radio" value="البطولات التفاعليه" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio2-[0]"> البطولات التفاعليه</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio3-[0]" type="radio" value="البطولات المفتوحه" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio3-[0]">البطولات المفتوحه</label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio3-[0]" type="radio" value="الانشطه و الفعاليات في مجال المناظرات" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio3-[0]">الانشطه و الفعاليات في مجال المناظرات</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="list-group-item col-md-12">
                                                <div class="d-flex text-end justify-content-start text-right">
                                                    <button type="button" class="btn btn-primary btn-lg add fs-20 p-tb-10 p-lr-10" data-id="0" >اضف مشاركة
                                                        <i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="field">
                                    <!--TO be appended here-->
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">{{ __('حفظ') }}</button>
                                <a href="{{ route('students.index') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('javascript')

@endsection
