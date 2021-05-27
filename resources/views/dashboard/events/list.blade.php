@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10">{{ __('الاعضاء المسجلين') }}</span></h2>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        </div>
                                    </div>
                                @endif
                                    @if(Session::has('error_message'))
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-danger" role="alert">{{ Session::get('error_message') }}</div>
                                            </div>
                                        </div>
                                    @endif
                                <br>
                                <table class="table table-responsive-sm table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>اسم التفاعلية</th>
                                        <th>اسم المتناظر</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($eventsUser as $event)
                                        <tr class="fs-18">
                                            <td>{{$loop->index+1}}</td>
                                            <td><strong>
                                                    <a href="{{route('events.show',$event->event_id)}}">
                                                        {{ $event->event->name }}
                                                    </a></strong>
                                            </td>
                                            <td><strong>
                                                    <a href="{{route('students.show',$event->user_id)}}">
                                                        @if($event->user_id && $event->user)
                                                            {{ $event->user->name." ".$event->user->lastname }}
                                                        @endif
                                                    </a>
                                                </strong>
                                            </td>
                                            <td>
                                                <form action="{{ route('eventsUsers.destroy', $event->id ) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
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
