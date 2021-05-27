@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('الاخبار ') }}</span></h2>
                            <div class="mx-3 m-t-35">
                                <a href="{{ route('news.create' ) }}" class="btn btn-group btn-success fs-20 p-lr-25">
                                    {{ __('اضف مقالة') }}
                                </a>

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
                                        <th>رقم المفالة </th>
                                        <th>العنوان</th>
                                        <th>الوصف</th>
                                        <th>الصورة</th>
                                        <th>الكاتب</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr class="text-right fs-17">
                                            <td>{{ $blog->id }}</td>
                                            <td>
                                                {!! \Illuminate\Support\Str::words($blog->title, 5, ' ..........') !!}
                                            </td>
                                            <td >
                                                {!! \Illuminate\Support\Str::words($blog->text, 5, ' ..........') !!}
                                            </td>
                                            <td>
                                                <img src="{{asset('storage/blogs/'.$blog->image)}}" class="bor3" alt="avatar" width="100" height="100">
                                            </td>
                                            <td>{{ $blog->author }}</td>
                                            <td>
                                                <a href="{{ route('news.show', $blog->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('news.edit', $blog->id) }}" class="btn btn-block btn-success">تعديل</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('news.destroy', $blog->id ) }}" method="POST">
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

