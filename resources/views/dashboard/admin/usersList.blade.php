@extends('dashboard.base')

@section('content')

        <div class="container-fluid text-right">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                <div class="card">
                    <div class="card-header m-t-15">
                        @switch($membership)
                            @case('students')
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('المتناظرين') }}</span></h2>
                            @break
                            @case('coaches')
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('المدربين') }}</span></h2>
                            @break
                            @case('users')
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('المسجلين الجدد') }}</span></h2>
                        @endswitch

                    <div class="mx-3 m-t-35">
                        @switch($membership)
                            @case('students')
                            <a href="{{ route('students.create' ) }}" class="btn btn-group btn-success fs-20 p-lr-25">
                               {{ __('اضف متناظر') }}
                            </a>
                            @break
                            @case('coaches')
                            <a href="{{ route('coaches.create' ) }}" class="btn btn-group btn-primary fs-20 p-lr-25">
                                <i class="cil-user-plus"></i>  {{ __('اضف مدرب') }} </a>
                            @break
                        @endswitch


                    </div>
                            <div class="p-t-28 p-lr-20">
                            @if(session()->has('success_message'))
                                <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                            @endif
                            @if(session()->has('error_message'))
                                <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                            @endif
                            </div>

                    <div class="card-body">

                        <table class="table table-responsive-sm table-striped table-bordered">
                        <thead>
                        @switch($membership)
                            @case('students')
                        <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                            <th>رقم العضوية</th>
                            <th>الاسم الاول و الثاني</th>
                            <th>الاسم العائلي</th>
                            <th>المدرسه</th>
                            <th>الصف</th>
                            <th>العضوية</th>
                            <th colspan="3">العمليات</th>
                            <th>المشاركات</th>
                          </tr>
                            @break
                            @case('coaches')
                            <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                <th>رقم العضوية</th>
                                <th>الاسم الاول و الثاني</th>
                                <th>الاسم العائلي</th>
                                <th>البريد الالكتروني</th>
                                <th>المهنة</th>
                                <th>مكان العمل</th>
                                <th>العضوية</th>
                                <th colspan="3">العمليات</th>
                            </tr>
                            @break

                            @case('users')
                            <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                <th>رقم العضوية</th>
                                <th>الاسم الاول و الثاني</th>
                                <th>الاسم العائلي</th>
                                <th>البريد الالكتروني</th>
                                <th>الصورة الشخصية</th>
                                <th>العضوية</th>
                                <th colspan="3">العمليات</th>
                            </tr>
                        @endswitch
                        </thead>
                        <tbody>
                        @switch($membership)
                            @case('students')
                            @foreach($users as $user)
                                <tr class="text-right fs-17">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name." ".$user->second_name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->school }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        @if($user->status)
                                            <span class="badge  badge-pill badge-success fs-15">متناظر مفعل </span>
                                        @else
                                            <span class="badge  badge-pill badge-warning fs-15"> متناظر غير مفعل </span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id . '/edit') }}" class="btn btn-block btn-success">تعديل</a>
                                    </td>
                                    <td>

                                        @if( $you->id !== $user->id )
                                            <form action="{{ route($membership.'.destroy', $user->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-block btn-danger">  حذف </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('tournament.show',$user->id)}}" class="btn btn-block btn-info fs-15">
                                            المشاركات
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            @break
                            @case('coaches')
                            @foreach($users as $user)
                                <tr class="text-right fs-17">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name." ".$user->second_name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->job }}</td>
                                    <td>{{ $user->work_place }}</td>
                                    <td>
                                        @if($user->status)
                                            <span class="badge  badge-pill badge-info fs-15">مدرب مفعل </span>
                                        @else
                                            <span class="badge  badge-pill badge-secondary fs-15"> مدرب غير مفعل </span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id . '/edit') }}" class="btn btn-block btn-success">  تعديل  </a>
                                    </td>
                                    <td>

                                        @if( $you->id !== $user->id )
                                            <form action="{{ route($membership.'.destroy', $user->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            @break
                            @case('users')
                            @foreach($users as $user)
                                <tr class="text-right fs-17">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name." ".$user->second_name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->role == 'student')
                                    <td><a href="{{asset('storage/users/students/avatars/'.$user->avatar)}}" class="fs-13 font-weight-bolder" target="_blank">اضغط للمشاهدة</a></td>
                                    @endif
                                    @if($user->role == 'coach')
                                    <td><a href="{{asset('storage/users/coaches/avatars/'.$user->avatar)}}" class="fs-13 font-weight-bolder" target="_blank">اضغط للمشاهدة</a></td>
                                    @endif
                                    <td>
                                        @if($user->role == 'student')
                                            @if($user->status)
                                            <span class="badge  badge-pill badge-success fs-15">متناظر مفعل </span>
                                            @else
                                                <span class="badge  badge-pill badge-warning fs-15">متناظر غير مفعل </span>
                                            @endif
                                        @endif
                                            @if($user->role == 'coach')
                                                @if($user->status)
                                                    <span class="badge  badge-pill badge-info fs-15">مدرب مفعل </span>
                                                @else
                                                    <span class="badge  badge-pill badge-secondary fs-15"> مدرب غير مفعل </span>
                                                @endif
                                            @endif
                                            @if($user->role == 'admin')
                                                <span class="badge  badge-pill badge-info fs-15">المدير </span>
                                            @endif


                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/'.$membership.'/'. $user->id . '/edit') }}" class="btn btn-block btn-success">تعديل</a>
                                    </td>

                                    <td>

                                        @if( $you->id !== $user->id )
                                            <form action="{{ route($membership.'.destroy', $user->id ) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-block btn-danger">  حذف </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endswitch

                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

