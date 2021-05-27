@extends('layouts.app')

@section('content')
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <section class="p-tb-112 ">
            <div class="text-center">
                <h1 class="color-2 fs-42 fw-bold">من نحن ؟</h1>
            </div>
            <div class="container text-right">
                <div class="row p-tb-25  p-tb-5-sm d-flex align-items-end">
                    <div class="col-lg-8 col-md-4 col-sm-12 p-t-36 order-md-2 order-lg-1">
                        <h1 class="fs-40 font-weight-bolder color-1">عنوان رئيسي</h1>
                        <div class="separator text-center m-tb-14"></div>
                        <p class="fs-22">
                            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيومود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 p-tb-25-sm order-md-1 order-lg-2">
                        <img src="{{asset('images/6673.svg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- active events -->

                <div class="row p-tb-25   p-b-14 p-tb-5-sm d-flex align-items-end">
                    <div class="col-lg-12 col-md-12 col-sm-12 p-t-36 order-md-2 order-lg-1">
                        <h1 class="fs-40 font-weight-bolder color-1">عنوان رئيسي</h1>
                        <div class="separator text-center m-tb-14"></div>
                        <p class="fs-22">
                            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيومود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        </p>
                    </div>
                </div>
                <!-- active events -->
                <div class="row p-tb-25   p-tb-5-sm d-flex align-items-end">
                    <div class="col-lg-8 col-md-4 col-sm-12 p-t-36 order-md-2 order-lg-1">
                        <h1 class="fs-40 font-weight-bolder color-1">عنوان رئيسي</h1>
                        <div class="separator text-center m-tb-14"></div>
                        <p class="fs-22">
                            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيومود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 p-tb-25-sm order-md-1 order-lg-2">
                        <img src="{{asset('images/6673.svg')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section>
        <section class="bg-3 p-tb-28">
            <div class=" p-tb-28 text-center">
                <div class="container newletter">
                    <div class="d-flex justify-content-start mr-auto ">
                        <div class="col-lg-9 col-md-2 col-sm-12">
                            <div class="text-center">
                                <h1 class="fs-38 fw-bold m-tb-14">الإشتراك فى القائمة البريدية</h1>
                                <p class="fs-19">أشترك فى القائمة البريدية لمتابعة أخر عروضنا وأخبارنا</p>
                                <form class="d-flex mt-4" action="{{route('newsletter')}}" method="POST">
                                    @csrf
                                    <div class="offset-2"></div>
                                    <input type="email" name="email" class="form-control col-md-6 p-lr-28" placeholder="بريدك الالكترونى" required="required" style="border-radius: 0 25px 25px 0">
                                    <input type="submit" class="btn btn-primary col-md-2 fs-19 font-weight-bold p-lr-7" value="الإشتراك" style="border-radius: 25px 0 0  25px ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
