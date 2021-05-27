<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-14 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <h1 class="color-2 fs-42 fw-bold mb-4"> <?php echo e($blog->name); ?> </h1>
                <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14">
                        <img class="img-fluid" src="<?php echo e(asset('storage/blogs/'.$blog->image)); ?>" alt="" style="border-radius: 25px">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 p-tb-14" >
                    <div class="d-flex justify-content-between col-md-8 m-tb-14">
                        <div class="fs-24 font-weight-bold"><?php echo e($blog->created_at); ?><i class="ti-time ml-2"></i></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="fs-40 font-weight-bolder color-1">الوصف</h1>
                        <div class="separator text-center m-tb-28"></div>
                        <p class="fs-20">
                            <?php echo $blog->text; ?>

                        </p>
                    </div>
                </div>
                <div id="register" class="d-block justify-content-center m-tb-56">
                    <?php if(session()->has('success_message')): ?>
                        <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                    <?php endif; ?>
                    <?php if(session()->has('error_message')): ?>
                        <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                    <?php endif; ?>
                </div>
            </div>


            <div class="container">
                <div class="p-tb-14 event-1">
                    <h1 class="fs-30 font-weight-bolder color-1">آخر الأخبار</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <div class="row">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-sm-12 m-b-50">
                                <div class="card" style="  box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);">
                                    <div class="card-body text-center">
                                        <div class="">
                                            <img class="img-fluid" src="<?php echo e(asset('storage/blogs/'.$blog->image)); ?>" alt="">
                                        </div>
                                        <div class="clblack">
                                            <div class="text-right p-t-14 p-lr-14">
                                                <a href="<?php echo e(route('blog.show',$blog->id)); ?>" class="fs-19 font-weight-bolder clblack text-decoration-none"><?php echo e($blog->title); ?> </a>
                                                <div class="text-right p-tb-10">
                                                    <p class="fs-14 p-lr-7">
                                                        سيت أميت ,كونسيكتيتور أدايبا يسكي وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                                    </p>
                                                </div>
                                                <div class="p-t-10 text-center">
                                                    <a href="<?php echo e(route('blog.show',$blog->id)); ?>" class="btn btn-primary p-tb-10 col-md-8">
                                                        طالع
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
                                <form class="d-flex mt-4" action="<?php echo e(route('newsletter')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/pages/BlogSingle.blade.php ENDPATH**/ ?>