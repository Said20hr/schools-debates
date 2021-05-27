@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12  no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-dark p-tb-14">
                                <div class="font-weight-bolder fs-24 m-lr-56">   اضافة مقالة </div>
                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="{{route('news.store')}}" dir="rtl" enctype="multipart/form-data">
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
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تفاصيل المقالة</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <label for="title" class="form-label fs-16  pb-2 p-r-10">العنوان * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text"
                                                                   placeholder="{{ __('العنوان …  ') }}" name="title" value="{{ old('title') }}" required autofocus>
                                                        </div>
                                                        @error('title')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label for="description" class="form-label fs-16  pb-2 p-r-10">اسم الكاتب * </label>
                                                        <div class="input-group mb-3">

                                                            <input id="author" class="form-control @error('author') is-invalid @enderror" type="text" placeholder="{{ __('اسم الكاتب … ') }}"
                                                                   name="author" value="{{ old('author') }}" required autofocus>
                                                        </div>
                                                        @error('author')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="image" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                        <div class="input-group mb-3">
                                                            <input class="form-control  @error('image') is-invalid @enderror p-tb-9 " id="image" type="file" name="image" placeholder="">
                                                        </div>
                                                        @error('image')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                        <div class="text-muted pb-3">250px x 250px</div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14"></textarea>
                                                        </div>
                                                        @error('description')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-2 text-center">
                                                <button class="btn btn-success col-md-4 fs-24 h-55 p-tb-10 lh-10 " type="submit">{{ __('حفظ') }}</button>
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
