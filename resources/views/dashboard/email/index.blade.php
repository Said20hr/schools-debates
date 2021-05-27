@extends('dashboard.base')

@section('content')
    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-envelope font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('الرسائل ') }}</span></h2>
                            <div class="mx-3 m-t-35">


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
                                    <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                        <th>رقم الرسالة</th>
                                        <th>اسم المرسل</th>
                                        <th>الموضوع</th>
                                        <th>الايمايل</th>
                                        <th>رقم الهاتف</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr class="text-right fs-17 {{$message->read ?'bg-success' :''}}" >
                                            <td><a href="{{ route('mail.show', $message->id ) }}" class="font-weight-bolder">{{ $message->id }}</a></td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->phone }}</td>
                                            <td>
                                                <a href="{{ route('mail.edit', $message->id) }}" class="btn btn-block btn-primary">قراءة</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('mail.destroy', $message->id ) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger">  حذف </button>
                                                </form>
                                            </td>
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


@section('javascript')

@endsection

