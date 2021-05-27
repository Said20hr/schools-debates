<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12  no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-dark p-tb-14">
                                <div class="font-weight-bolder fs-24 m-lr-56">   تعديل المقالة </div>
                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="<?php echo e(route('news.update',$blog->id)); ?>" dir="rtl" enctype="multipart/form-data">
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
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تفاصيل المقالة</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <label for="title" class="form-label fs-16  pb-2 p-r-10">العنوان * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                    name="title" value="<?php echo e($blog->title); ?>" required autofocus>
                                                        </div>
                                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label for="description" class="form-label fs-16  pb-2 p-r-10">اسم الكاتب * </label>
                                                        <div class="input-group mb-3">

                                                            <input id="author" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                   name="author" value="<?php echo e($blog->author); ?>" required autofocus>
                                                        </div>
                                                        <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="image" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                        <div class="input-group mb-3">
                                                            <input class="form-control  <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-9 " id="image" type="file" name="image" placeholder="">
                                                        </div>
                                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <div class="text-muted pb-3">250px x 250px</div>
                                                        <?php if($blog->image): ?>
                                                            <div>
                                                                <a href="<?php echo e(asset('storage/blogs/'.$blog->image)); ?>" target="_blank" class="c-avatar-edit">
                                                                    <img src="<?php echo e(asset('storage/blogs/'.$blog->image)); ?>" class="bor3" alt="avatar" width="100" height="100">
                                                                </a>
                                                            </div>
                                                        <?php else: ?>
                                                            <div>
                                                                <h3 class="badge fs-22 badge-light">الصورة خاطئة او غير موجودة</h3>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14" >
                                                                <?php echo e($blog->text); ?>

                                                            </textarea>
                                                        </div>
                                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger mb-2" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="d-flex justify-content-start">
                                                    <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10"><?php echo e(__('حفظ')); ?></button>
                                                    <a href="<?php echo e(route('news.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/blog/edit.blade.php ENDPATH**/ ?>