@extends('dashboard.base')

@section('content')

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12  no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-dark p-tb-14">
                                <div class="font-weight-bolder fs-24 m-lr-56">   تعديل المقالة </div>
                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="{{route('news.update',$blog->id)}}" dir="rtl" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
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
                                                                    name="title" value="{{ $blog->title }}" required autofocus>
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

                                                            <input id="author" class="form-control @error('author') is-invalid @enderror" type="text"
                                                                   name="author" value="{{$blog->author }}" required autofocus>
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
                                                        @if($blog->image)
                                                            <div>
                                                                <a href="{{asset('storage/blogs/'.$blog->image)}}" target="_blank" class="c-avatar-edit">
                                                                    <img src="{{asset('storage/blogs/'.$blog->image)}}" class="bor3" alt="avatar" width="100" height="100">
                                                                </a>
                                                            </div>
                                                        @else
                                                            <div>
                                                                <h3 class="badge fs-22 badge-light">الصورة خاطئة او غير موجودة</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14" >
                                                                {{$blog->text }}
                                                            </textarea>
                                                        </div>
                                                        @error('description')
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong>{{$message}}</strong>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="d-flex justify-content-start">
                                                    <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">{{ __('حفظ') }}</button>
                                                    <a href="{{ route('news.index') }}" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10">{{ __('العودة') }}</a>
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
