<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm" dir="rtl">

        <section class="p-tb-112">
            <?php if($user->role=="student"): ?>
                <div class="container p-tb-28 text-right">
                    <div class="text-center mb-5">
                        <div class="pos-relative d-inline-block p-lr-10">
                            <img src="<?php echo e(asset('storage/users/student/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar2">
                            <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                        </div>
                        <h1 class="color-1 fs-28 fw-bold m-tb-20"><?php echo e($user->name." ".$user->second_name." ".$user->lastname); ?></h1>
                    </div>

                    <div class="d-flex justify-content-between text-center p-tb-28 p-lr-56 bgwhite bor-r5" style="  box-shadow: 0 4px 7px rgba(0,0,0,0.29), 0 3px 3px rgba(0,0,0,0.23);">
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-location-pin"></i>
                                الدولة :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <img src="<?php echo e(asset('images/Icons/flag-round-250.png')); ?>" alt="" width="30">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    الكويت
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-user"></i>
                                العضوية :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($role); ?>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-crown"></i>
                                المشاركات :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-20 font-weight-bold m-lr-7">
                                    <?php echo e(count($user->tournaments)); ?>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-briefcase"></i>
                                المدرسة :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($user->school); ?>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-bag"></i>
                                الصف :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($user->level); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container mt-5">
                <div class="row">
                    <!--1 -->
                    <?php if(count($tournaments_1) > 0): ?>
                        <div class="col-md-6 mb-5">
                        <div class="text-center color-1 fs-24 font-weight-bolder mb-4">
                            عدد المشاركات في البطولات الرسمية الدولية : <?php echo e(count($tournaments_1)); ?>

                        </div>
                        <?php $__currentLoopData = $tournaments_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card bg-primary clwhite">
                            <div class="p-tb-16 border-bottom p-lr-26">
                                <div class="d-flex justify-content-between align-content-center">
                                    <div class="fs-22 fw-bold ">
                                        <?php if($tournament->feature): ?>
                                        <i class="fa fa-star cl11" data-toggle="tooltip" data-placement="right" title="مميز"></i>
                                        <?php endif; ?>
                                            <?php echo e($tournament->name); ?>

                                    </div>
                                    <div class="p-t-7">
                                        <i class="fa fa-plus-circle font-weight-bolder fs-22 pointer pointer plus" data-id="<?php echo e($loop->index); ?>"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tb-20 p-lr-28 card-<?php echo e($loop->index); ?>" style="display: none">
                                <p class="fs-18">
                              <?php echo e($tournament->description); ?>

                                </p>
                            </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <!--2 -->
                    <?php if(count($tournaments_2) > 0): ?>
                        <div class="col-md-6 mb-5">
                        <div class="text-center color-1 fs-24 font-weight-bolder mb-4">
                            عدد المشاركات في البطولات الرسمية المحليه: <?php echo e(count($tournaments_2)); ?>

                        </div>
                        <?php $__currentLoopData = $tournaments_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card bg-success clwhite">
                            <div class="p-tb-16 border-bottom p-lr-26">
                                <div class="d-flex justify-content-between align-content-center">
                                    <div class="fs-22 fw-bold ">
                                        <?php if($tournament->feature): ?>
                                            <i class="fa fa-star cl11" data-toggle="tooltip" data-placement="right" title="مميز"></i>
                                        <?php endif; ?>
                                        <?php echo e($tournament->name); ?>

                                    </div>
                                    <div class="p-t-7">
                                        <i class="fa fa-plus-circle font-weight-bolder fs-22 pointer pointer plus-2" data-id="<?php echo e($loop->index); ?>"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tb-20 p-lr-28 card-2-<?php echo e($loop->index); ?>" style="display: none">
                                <p class="fs-18">
                                    <?php echo e($tournament->description); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <!--3 -->
                    <?php if(count($tournaments_3) > 0): ?>
                        <div class="col-md-6 mb-5">
                        <div class="text-center color-1 fs-24 font-weight-bolder mb-4">
                            عدد المشاركات في البطولات التفاعليه: <?php echo e(count($tournaments_3)); ?>

                        </div>
                        <?php $__currentLoopData = $tournaments_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card bg-warning clwhite">
                                    <div class="p-tb-16 border-bottom p-lr-26">
                                        <div class="d-flex justify-content-between align-content-center">
                                    <div class="fs-22 fw-bold ">
                                        <?php if($tournament->feature): ?>
                                            <i class="fa fa-star cl11" data-toggle="tooltip" data-placement="right" title="مميز"></i>
                                        <?php endif; ?>
                                        <?php echo e($tournament->name); ?>

                                    </div>
                                    <div class="p-t-7">
                                        <i class="fa fa-plus-circle font-weight-bolder fs-22 pointer plus-3" data-id="<?php echo e($loop->index); ?>"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="p-tb-20 p-lr-28 card-3-<?php echo e($loop->index); ?>" style="display: none">
                                <p class="fs-18 ">
                                    <?php echo e($tournament->description); ?>

                                </p>
                            </div>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <!--4 -->
                    <?php if(count($tournaments_4) > 0): ?>
                        <div class="col-md-6 mb-5">
                        <div class="text-center color-1 fs-24 font-weight-bolder mb-4">
                            عدد المشاركات البطولات المفتوحه : <?php echo e(count($tournaments_4)); ?>

                        </div>
                        <?php $__currentLoopData = $tournaments_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card bg-danger clwhite">
                                    <div class="p-tb-16 border-bottom p-lr-26">
                                        <div class="d-flex justify-content-between align-content-center">
                                            <div class="fs-22 fw-bold ">
                                                <?php if($tournament->feature): ?>
                                                    <i class="fa fa-star cl11" data-toggle="tooltip" data-placement="right" title="مميز"></i>
                                                <?php endif; ?>
                                                <?php echo e($tournament->name); ?>

                                            </div>
                                            <div class="p-t-7">
                                                <i class="fa fa-plus-circle font-weight-bolder fs-22 pointer plus-4" data-id="<?php echo e($loop->index); ?>"></i>
                                            </div>
                                        </div>
                            </div>
                            <div class="p-tb-20 p-lr-28 card-4-<?php echo e($loop->index); ?>" style="display: none">
                                <p class="fs-18 ">
                                    <?php echo e($tournament->description); ?>

                                </p>
                            </div>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(count($tournaments_5) > 0): ?>
                        <div class="col-md-6 mb-5">
                        <div class="text-center color-1 fs-24 font-weight-bolder mb-4">
                            الانشطه و الفعاليات في مجال المناظرات : <?php echo e(count($tournaments_5)); ?>

                        </div>
                        <?php $__currentLoopData = $tournaments_5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card bg-dark clwhite">
                                    <div class="p-tb-16 border-bottom p-lr-26">
                                        <div class="d-flex justify-content-between align-content-center">
                                            <div class="fs-22 fw-bold ">
                                                <?php if($tournament->feature): ?>
                                                    <i class="fa fa-star cl11" data-toggle="tooltip" data-placement="right" title="مميز"></i>
                                                <?php endif; ?>
                                                <?php echo e($tournament->name); ?>

                                            </div>
                                            <div class="p-t-7">
                                                <i class="fa fa-plus-circle font-weight-bolder fs-22 pointer plus-5" data-id="<?php echo e($loop->index); ?>"></i>
                                            </div>
                                        </div>
                                    </div>
                            <div class="p-tb-20 p-lr-28 card-5-<?php echo e($loop->index); ?>" style="display: none">
                                <p class="fs-18 ">
                                    <?php echo e($tournament->description); ?>

                                </p>
                            </div>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                <!--else1 -->
                    <?php if(count($tournaments_1) < 1): ?>
                        <div class="col-md-12 mb-5 text-center">
                            <div class="fs-20 color-1 text-center">
                                ﻻ توجد اي مشاركة في البطولات الرسمية الدولية…
                            </div>
                        </div>
                    <?php endif; ?>
                <!--else2 -->
                    <?php if(count($tournaments_2) < 1): ?>
                        <div class="col-md-12 mb-5 text-center">
                            <div class="fs-20 color-1 text-center">
                                ﻻ توجد اي مشاركة في البطولات الرسمية المحليه…
                            </div>

                        </div>
                    <?php endif; ?>
                <!--else3 -->
                    <?php if(count($tournaments_3) < 1): ?>
                        <div class="col-md-12 mb-5 text-center">
                            <div class="fs-20 color-1 text-center">
                                ﻻ توجد اي مشاركة في البطولات التفاعليه…
                            </div>
                        </div>
                    <?php endif; ?>
                <!--else4 -->
                    <?php if(count($tournaments_4) < 1): ?>
                        <div class="col-md-12 mb-5 text-center">
                            <div class="fs-20 color-1 text-center">
                                ﻻ توجد اي مشاركة في البطولات المفتوحه…
                            </div>
                        </div>
                    <?php endif; ?>
                <!--else5 -->
                    <?php if(count($tournaments_5) < 1): ?>
                        <div class="col-md-12 mb-5 text-center">
                            <div class="fs-20 color-1 text-center">
                                ﻻ توجد اي مشاركة في الانشطه و الفعاليات في مجال المناظرات …
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php else: ?>
                <div class="container p-tb-28 text-right">
                    <div class="text-center mb-5">
                        <div class="pos-relative d-inline-block p-lr-10">
                            <img src="<?php echo e(asset('storage/users/coach/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar2">
                            <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                        </div>
                        <h1 class="color-1 fs-28 fw-bold m-tb-20"><?php echo e($user->name." ".$user->second_name." ".$user->lastname); ?></h1>
                    </div>

                    <div class="d-flex justify-content-between text-center p-tb-28 p-lr-56 bgwhite bor-r5" style="  box-shadow: 0 4px 7px rgba(0,0,0,0.29), 0 3px 3px rgba(0,0,0,0.23);">
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-location-pin"></i>
                                الدولة :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <img src="<?php echo e(asset('images/Icons/flag-round-250.png')); ?>" alt="" width="30">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    الكويت
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-user"></i>
                                العضوية :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($role); ?>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-briefcase"></i>
                                المهنة :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($user->job); ?>

                                </div>
                            </div>
                        </div>
                        <div class="list-group-item-accent-light">
                            <div class="fs-26 font-weight-bolder">
                                <i class="ti-bag"></i>
                                مكان العمل :
                            </div>
                            <div class="d-flex justify-content-center align-content-center p-tb-20">
                                <div class="fs-18 font-weight-bold m-lr-7">
                                    <?php echo e($user->work_place); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
        </section>



    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/users/show.blade.php ENDPATH**/ ?>