<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                <img src="<?php echo e(asset('storage/users/student/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar3">
                                <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                            </div>
                            <div class="">
                                <a href="<?php echo e(route('user.show',$user->id)); ?>" class="color-1 fs-22 fw-bold m-t-20"><?php echo e($user->name." ".$user->second_name." ".$user->lastname); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nav flex-column text-right" >
                            <a href="<?php echo e(route('user.index')); ?>" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            <a href="<?php echo e(route('user.events')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right active text-white "><i class="fa fa-calendar m-lr-10"></i>  فعالياتي </a>
                            <a href="<?php echo e(route('user.notes')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-bell m-lr-10"></i> الملاحظات </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14">
                                        <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> فعالياتي </h1>
                                        <div class="separator text-center m-tb-28 mx-3"></div>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr class="bg-3 fs-20">
                                                <td></td>
                                                <td>اسم الفعالية</td>
                                                <td>تاريخ</td>
                                                <td>النشاط
                                                </td>
                                                <td>تاريخ التسجيل</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="fs-20 pt-3"><?php echo e($event->index+1); ?></td>
                                                    <td class="fs-18 pt-3"><?php echo e($event->event->name); ?></td>
                                                    <td class="fs-18 pt-3"><?php echo e($event->event->date); ?></td>
                                                    <td class="fs-18 pt-3">
                                                        <?php if($event->event->case): ?>
                                                            <div class="badge badge-success fs-18 p-lr-7 p-tb-5">مفتوحة</div>
                                                        <?php else: ?>
                                                            <div class="badge badge-danger fs-18 p-lr-7 p-tb-5">منتهية</div>
                                                        <?php endif; ?></td>
                                                    <td class="fs-18 pt-3"><?php echo e($event->event->created_at); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14">
                            <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> مشاركاتي </h1>
                            <div class="separator text-center m-tb-28 mx-3"></div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="bg-3 fs-20">
                                    <td></td>
                                    <td>المشاركة</td>
                                    <td>نوع المشاركة</td>
                                    <td>التميز</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $tournaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="fs-20 pt-3"><?php echo e($tournament->index+1); ?></td>
                                        <td class="fs-18 pt-3"><?php echo e($tournament->name); ?></td>
                                        <td class="fs-18 pt-3"><?php echo e($tournament->type); ?></td>
                                        <td class="fs-18 pt-3">
                                            <?php if($tournament->feature): ?>
                                                <div class="badge badge-success fs-18 p-lr-7 p-tb-5"><i class="fa fa-star cl11"></i>متميزة</div>
                                            <?php else: ?>
                                                <div class="badge badge-danger fs-18 p-lr-7 p-tb-5">غير متميزة</div>
                                            <?php endif; ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/profile/students/events.blade.php ENDPATH**/ ?>