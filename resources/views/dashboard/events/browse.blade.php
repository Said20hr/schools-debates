@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                        <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('الفعاليات') }}</span></h2>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <a href="{{ route('events.create' ) }}" class="btn btn-group btn-success fs-20 p-lr-25">
                                اضف تفاعلية</a>
                            </div>
                            <br>
                                <table class="table table-responsive-sm table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>اسم التفاعلية</th>
                                    <th>الموعد</th>
                                    <th>المشاركين</th>
                                    <th>الحالة</th>
                                    <th>الصورة</th>
                                    <th>التسجيل</th>
                                    <th colspan="3">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                    <tr class="fs-18">
                                        <td><strong>{{ $event->name }}</strong></td>
                                        <td><strong>{{date('d-m-Y', strtotime($event->time))}}</strong></td>
                                        <td><strong>{{ $event->participants }}</strong></td>
                                        <td>
                                            @if($event->case)
                                                <div class="badge badge-success fs-18 p-lr-7 p-tb-5">مفتوحة</div>
                                            @else
                                            <div class="badge badge-danger fs-18 p-lr-7 p-tb-5">منتهية</div>
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{asset('storage/events/'.$event->image)}}" alt="event-img" class="img-fluid" width="100" height="50">
                                        </td>
                                        <td>
                                            <a href="{{route('event.register',$event->id)}}" class="btn btn-block btn-info">سجل متفاعلبن</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('events.show', $event->id ) }}" class="btn btn-block btn-primary">معاينة</a>
                                        </td>

                                        <td>
                                            <a href="{{ route('events.edit',$event->id) }}" class="btn btn-block btn-success">  تعديل  </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('events.destroy', $event->id ) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection
