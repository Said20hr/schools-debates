<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                        <div class="col-md-12  no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                        <div class="text-right">
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تفاصيل المقالة</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <label for="title" class="form-label fs-16  pb-2 p-r-10">العنوان * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="title" class="form-control"  value="<?php echo e($blog->title); ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label for="description" class="form-label fs-16  pb-2 p-r-10">اسم الكاتب * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="author" class="form-control" value="<?php echo e($blog->author); ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-2">
                                                        <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14" disabled>
                                                                <?php echo $blog->text; ?>

                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <a href="<?php echo e(route('news.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                                                <a href="<?php echo e(route('news.edit', $blog->id)); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">تعديل</a>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/blog/show.blade.php ENDPATH**/ ?>