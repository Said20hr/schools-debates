<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                <img src="<?php echo e(asset('storage/users/coach/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar3">
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
                            <a href="<?php echo e(route('users.notes')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right active text-white "><i class="fa fa-calendar m-lr-10"></i> ملاحظات المتناظرين </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14">
                            <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> ملاحظات المتناظرين </h1>
                            <div class="separator text-center m-tb-28 mx-3"></div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="bg-3 fs-20">
                                    <th>رقم </th>
                                    <th>اسم المتناظر</th>
                                    <th>نوع الملاحظة</th>
                                    <th>موضوع الملاحظة</th>
                                    <th>الحالة</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($note->id); ?></td>
                                        <td><?php echo e($note->user_id); ?></td>
                                        <td><?php echo e($note->type); ?></td>
                                        <td><?php echo e($note->title); ?></td>
                                        <td><div class="badge badge-warning"><?php echo e($note->status); ?></div></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/profile/coaches/notes.blade.php ENDPATH**/ ?>