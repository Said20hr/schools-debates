<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <div class="text-center">
                    <h1 class="color-2 fs-42 fw-bold">الفعاليات</h1>
                </div>
                <div class="row p-t-74 p-b-42 p-tb-5-sm d-flex align-items-end">
                    <div class="col-lg-12 col-md-12 col-sm-12 p-t-36 order-md-2 order-lg-1">
                        <h1 class="fs-40 font-weight-bolder color-1">عنوان رئيسي</h1>
                        <div class="separator text-center m-tb-28"></div>
                        <p class="fs-22">
                            "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيومود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                        </p>
                    </div>
                </div>
                <!-- active events -->
                <div class="p-tb-56 event-1">
                    <h1 class="fs-30 font-weight-bold color-1">الفعاليات النشطة</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <div class="row">
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="" class="img-blog">
                                        <img class="img-fluid" src="<?php echo e(asset('storage/events/'.$event->image)); ?>" alt="">
                                    </a>
                                    <div class="clblack">
                                        <div class="text-right p-t-14 p-lr-14">
                                            <a href="<?php echo e(route('event.show',$event->id)); ?>" class="fs-24 font-weight-bolder clblack text-decoration-none"><?php echo e($event->name); ?>  </a>
                                            <div class="d-flex p-tb-10">
                                                <div class="fs-16 ml-3">
                                                    <?php echo e($event->date); ?>  <i class="ti-time ml-2"></i>
                                                </div>
                                                <div class="fs-16 ml-3">
                                                    <i class="ti-user ml-2"></i>
                                                    <?php echo e($event->participants); ?>

                                                </div>
                                            </div>
                                            <div class="text-right p-tb-10">
                                                <p class="fs-16 p-lr-7">
                                                    <?php echo \Illuminate\Support\Str::words($event->description, 10, ' ...'); ?>

                                                </p>
                                            </div>
                                            <div class="p-t-10 d-flex justify-content-center p-lr-28 p-b-24 text-center">
                                                <div class="col-md-12">
                                                    <a href="<?php echo e(route('event.show',$event->id.'#register')); ?>" class="btn btn-primary p-tb-6 fs-18">
                                                        سجل   <i class="ti-pencil"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!-- last events -->
                <div class="p-tb-56 event-2">
                    <h1 class="fs-30 font-weight-bold color-1">الفعاليات السابقة</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <div class="">
                    <div class="row  justify-content-md-center">
                        <div class="col-md-4">
                            <div class="card">
                                <a href="" class="">
                                    <img class="img-fluid" src="<?php echo e(asset('images/Placeholder/co-2.jpg')); ?>" alt="">
                                </a>
                                <div class="clblack">
                                    <div class="text-right p-tb-14 p-lr-14">
                                        <a href="" class="fs-22 font-weight-bolder clblack text-decoration-none">بطولة رسمية محليه</a>
                                        <div class="text-right p-tb-10">
                                            <p class="fs-16 p-lr-7">
                                                سيت أميت ,كونسيكتيتور أدايبا يسكي وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج…
                                            </p>
                                        </div>
                                        <div class="d-flex p-b-24 fs-20 text-center justify-content-around">
                                            <div class="d-flex align-items-center">
                                                <i class="ti-user"></i>
                                                <div class="mr-2"> 544 مشارك</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-crown"></i>
                                                <div class="mr-2">   20 فائز</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-id-badge"></i>
                                                <div class="mr-2">  20 مدرب</div>
                                            </div>
                                        </div>
                                        <div class="p-t-14 row p-lr-14 p-b-24">
                                            <div class=" text-center">
                                                <a class="btn btn-primary p-tb-10 col-md-8 fs-20">
                                                    اقرا المزيد  <i class="ti-eye mr-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="" class="">
                                    <img class="img-fluid" src="<?php echo e(asset('images/Placeholder/co-4.jpg')); ?>" alt="">
                                </a>
                                <div class="clblack">
                                    <div class="text-right p-tb-14 p-lr-14">
                                        <a href="" class="fs-22 font-weight-bolder clblack text-decoration-none">بطولة رسمية محليه</a>
                                        <div class="text-right p-tb-10">
                                            <p class="fs-16 p-lr-7">
                                                سيت أميت ,كونسيكتيتور أدايبا يسكي وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج…
                                            </p>
                                        </div>
                                        <div class="d-flex p-b-24 fs-20 text-center justify-content-around">
                                            <div class="d-flex align-items-center">
                                                <i class="ti-user"></i>
                                                <div class="mr-2"> 544 مشارك</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-crown"></i>
                                                <div class="mr-2">   20 فائز</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-id-badge"></i>
                                                <div class="mr-2">  20 مدرب</div>
                                            </div>
                                        </div>
                                        <div class="p-t-14 row p-lr-14 p-b-24">
                                            <div class=" text-center">
                                                <a class="btn btn-primary p-tb-10 col-md-8 fs-20">
                                                    اقرا المزيد  <i class="ti-eye mr-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="" class="">
                                    <img class="img-fluid" src="<?php echo e(asset('images/Placeholder/co-2.jpg')); ?>" alt="">
                                </a>
                                <div class="clblack">
                                    <div class="text-right p-tb-14 p-lr-14">
                                        <a href="" class="fs-22 font-weight-bolder clblack text-decoration-none">بطولة رسمية محليه</a>
                                        <div class="text-right p-tb-10">
                                            <p class="fs-16 p-lr-7">
                                                سيت أميت ,كونسيكتيتور أدايبا يسكي وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج…
                                            </p>
                                        </div>
                                        <div class="d-flex p-b-24 fs-20 text-center justify-content-around">
                                            <div class="d-flex align-items-center">
                                                <i class="ti-user"></i>
                                                <div class="mr-2"> 544 مشارك</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-crown"></i>
                                                <div class="mr-2">   20 فائز</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ti-id-badge"></i>
                                                <div class="mr-2">  20 مدرب</div>
                                            </div>
                                        </div>
                                        <div class="p-t-14 row p-lr-14 p-b-24">
                                            <div class=" text-center">
                                                <a class="btn btn-primary p-tb-10 col-md-8 fs-20">
                                                    اقرا المزيد  <i class="ti-eye mr-2"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/events.blade.php ENDPATH**/ ?>