@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('ملاحظات المتناظرين ') }}</span></h2>
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
                                        <th>رقم </th>
                                        <th>اسم المتناظر</th>
                                        <th>نوع الملاحظة</th>
                                        <th>موضوع الملاحظة</th>
                                        <th>الحالة</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($notes as $note)
                                        <tr class="text-right fs-17">
                                            <td>{{ $note->id }}</td>
                                            <td>{{ $note->user_id }}</td>
                                            <td>{{ $note->type }}</td>
                                            <td>{{ $note->title }}</td>
                                            <td><div class="badge badge-warning">{{ $note->status }}</div></td>
                                            <td>
                                                <a href="{{ route('notes.show', $note->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('notes.destroy', $note->id ) }}" method="POST">
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

