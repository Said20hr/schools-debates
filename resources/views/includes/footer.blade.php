<footer class="footer text-right" dir="rtl">
    <div class="container p-tb-48">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="footer-site-logo d-block mb-4"> <img src="{{ URL::asset('images/debate-logo2.png')}}" width="200" height="100"></a>
                    <div class="p-l-28 text-right">
                        <p class="fs-18 lh-18">
                            {{$content->description}}
                        </p>
                    </div>

                </div>
                <div class="col-md-2 text-right">
                    <h2 class="font-weight-bold fs-26 mb-4">روابط سريعة</h2>
                    <ul class="list-unstyled nav-links">
                        <li class="p-tb-5"><a href="{{route('about.index')}}" class="fs-16">من نحن ؟</a></li>
                        <li class="p-tb-5"><a href="{{route('blog.index')}}" class="fs-16">آخر الأخبار</a></li>
                        <li class="p-tb-5"><a href="{{route('member.index')}}" class="fs-16">اعضاء النادي</a></li>
                        <li class="p-tb-5"><a href="{{route('event.index')}}" class="fs-16">الفعاليات</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-right">
                    <h2 class="font-weight-bold fs-26 mb-4">عن الموقع</h2>
                    <ul class="list-unstyled nav-links">
                        <li class="p-tb-5"><a href="#" class="fs-16 text-muted">سياسة الخصوصية</a></li>
                        <li class="p-tb-5"><a href="#" class="fs-16 text-muted">الأحكام والشروط </a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <h2 class="font-weight-bold fs-26 mb-4">تواصل معنا</h2>
                    <div class="contact-footer">
                        <div class="address m-b-28 text-right">
                            <h5 class="font-weight-bold">العنوان</h5>
                            <p class="fs-16">{{$content->address}}</p>
                        </div>
                        <div class="col-md-9 d-xl-flex d-lg-flex d-sm-flex justify-content-between m-tb-28">
                            <div class="phone m-b-10">
                                <h5 class="font-weight-bold">رقم الهاتف</h5>
                                <a href="" class="fs-16">{{$content->phone_1}}</a>
                            </div>
                            <div class="mobile m-b-10">
                                <h5 class="font-weight-bold">رقم الجوال</h5>
                                <a href="" class="fs-16">{{$content->phone_2}}</a>
                            </div>
                        </div>
                    </div>
                    <ul class="social d-flex justify-content-start col-md-8">
                        <li class="m-l-20"><a href="{{$content->ig}}" class="fs-30" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li class="m-l-20"><a href="{{$content->ty}}" class="fs-30" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="m-l-20"><a href="{{$content->fb}}" class="fs-30" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="m-l-20"><a href="{{$content->yt}}" class="fs-30" target="_blank"><span class="icon-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

</footer>
<div class="under-footer text-right" dir="rtl">
    <div class="container p-tb-20">
        <div class="row p-lr-10">
            <div class="col-lg-12">
                <p class="m-b-5 fs-20 text-white-75"> جميع الحقوق محفوظة &copy; 2021</p>
            </div>
        </div>
    </div>
</div>
