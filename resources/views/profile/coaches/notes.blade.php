@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                <img src="{{asset('storage/users/coach/avatars/'.$user->avatar)}}" alt="" class="img-blog-avatar3">
                                <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                            </div>
                            <div class="">
                                <a href="{{route('user.show',$user->id)}}" class="color-1 fs-22 fw-bold m-t-20">{{$user->name." ".$user->second_name." ".$user->lastname}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nav flex-column text-right" >
                            <a href="{{route('user.index')}}" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            <a href="{{route('users.notes')}}" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right active text-white "><i class="fa fa-calendar m-lr-10"></i> ملاحظات المتناظرين </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14">
                            <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> ملاحظات المتناظرين </h1>
                            <div class="separator text-center m-tb-28 mx-3"></div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="bg-3 fs-20">
                                    <th>رقم </th>
                                    <th>اسم المتناظر</th>
                                    <th>نوع الملاحظة</th>
                                    <th>موضوع الملاحظة</th>
                                    <th>الحالة</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $note)
                                    <tr>
                                        <td>{{ $note->id }}</td>
                                        <td>{{ $note->user_id }}</td>
                                        <td>{{ $note->type }}</td>
                                        <td>{{ $note->title }}</td>
                                        <td><div class="badge badge-warning">{{ $note->status }}</div></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
