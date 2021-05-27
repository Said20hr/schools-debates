<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-secondary border-0">
                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">

                                    <div class="text-right">

                                        <div class="p-b-14 text-right ">
                                            <hr class="mb-4">
                                            <div class="row mb-2">
                                                <div class="col-md-6 mb-1">
                                                    <label for="name" class="form-label fs-16  pb-2 p-r-10">اسم المتناظر </label>
                                                    <div class="input-group mb-3">
                                                        <input id="name" class="form-control " type="text"
                                                               name="name" value="<?php echo e($note->user_id); ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-6 mb-1">
                                                    <label for="lastname" class="form-label fs-16  pb-2 p-r-10">نوع الملاحظة </label>
                                                    <div class="input-group mb-3">
                                                        <input id="lastname" class="form-control" type="text"
                                                               name="lastname" value="<?php echo e($note->type); ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="job" class="form-label fs-16  pb-2 p-r-10">موضوع الملاحظة </label>
                                                    <div class="input-group mb-3">
                                                        <input id="job" class="form-control " type="text"
                                                             name="job" value="<?php echo e($note->title); ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-6 mb-1">
                                                    <label for="name" class="form-label fs-16  pb-2 p-r-10"> الملاحظة </label>
                                                    <div class="input-group mb-3">
                                                        <textarea name="content" id="content" cols="30" rows="10"
                                                                  class="form-control p-tb-20 p-lr-20" disabled><?php echo e($note->content); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <a href="<?php echo e(route('notes.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                                        </div>
                                    </div>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/notes/noteShow.blade.php ENDPATH**/ ?>