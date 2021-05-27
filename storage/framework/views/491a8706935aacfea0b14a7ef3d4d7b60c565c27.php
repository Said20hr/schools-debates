<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12  no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="<?php echo e(route('mail.update',$message->id)); ?>" dir="rtl" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="text-right">
                                            <?php if($errors): ?>
                                                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php echo e($error); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">الرسالة</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-4 mb-1">
                                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">اسم المرسل * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="name" class="form-control" value="<?php echo e($message->name); ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="author" class="form-label fs-16  pb-2 p-r-10">الايمايل * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="author" class="form-control" value="<?php echo e($message->email); ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="phone" class="form-control" value="<?php echo e($message->phone); ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="subject" class="form-label fs-16  pb-2 p-r-10">موضوع الرسالة *  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="subject" class="form-control" value="<?php echo e($message->subject); ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-1">
                                                            <label for="time" class="form-label fs-16  pb-2 p-r-10">تاريخ * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="time" class="form-control" value="<?php echo e($message->created_at->format('Y/m/d H:m')); ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-1">
                                                            <label class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                            <div class="input-group mb-3">
                                                            <textarea n cols="30" rows="10" class="form-control p-tb-14 p-lr-14" disabled>
                                                                <?php echo e($message->message); ?>

                                                            </textarea>
                                                        </div>
                                                        </div>
                                                    </div>
                                            </div>
                                                <?php if(!$message->read): ?>
                                                <div class=" mb-4">
                                                  <div class="fs-22 p-lr-12">  رسالة مقروءة</div>
                                                    <label class="c-switch c-switch-info m-lr-15 m-tb-10">
                                                        <input class="c-switch-input" type="checkbox" name="read"><span class="c-switch-slider" ></span>
                                                    </label>
                                                </div>
                                                <?php endif; ?>
                                            <div class="d-flex justify-content-start">
                                                <?php if(!$message->read): ?>
                                                <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10"><?php echo e(__('حفظ')); ?></button>
                                                <?php endif; ?>
                                                <a href="<?php echo e(route('mail.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/email/edit.blade.php ENDPATH**/ ?>