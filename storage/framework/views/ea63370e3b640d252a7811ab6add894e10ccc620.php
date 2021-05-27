<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">

                                    <form method="POST" action="<?php echo e(route('events.store')); ?>" dir="rtl" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                        <div class="text-right">
                                                <?php if($errors): ?>
                                                    <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="alert alert-danger" role="alert">
                                                            <?php echo e($error); ?>

                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                <div class="p-b-14 text-right ">
                                                    <legend class="mb-3 font-weight-bolder color-1 fs-26">اضافة فعالية</legend>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 mb-1">
                                                            <label for="title" class="form-label fs-18  pb-2 p-r-10">عنوان الفعالية </label>
                                                            <div class="input-group mb-3">

                                                                <input id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفعالية …  ')); ?>" name="title" value="<?php echo e(old('title')); ?>" required autofocus>

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
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="form-label fs-18  pb-2 p-r-10">مفتوحة للتسجيل </div>
                                                        <div class="col-md-8 mb-1">
                                                            <label class="c-switch c-switch-label c-switch-success">
                                                                <input class="c-switch-input" type="checkbox" name="case" checked>
                                                                <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 mb-1">
                                                            <label class="form-label fs-18  pb-2 p-r-10">المعنيين </label>
                                                            <select name="participants" id="" class="form-control p-lr-20">
                                                                <option value="الجميع" selected>الجميع</option>
                                                                <option value="المتناظرين">المتناظرين</option>
                                                                <option value="المتناظرين و المدربن">المتناظرين و المدربن</option>
                                                                <option value="المدربين">المدربين </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 mb-1">
                                                            <label for="date" class="form-label fs-16  pb-2 p-r-10">تاريخ الموعد * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="date" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"
                                                                       name="date" value="<?php echo e(old('date')); ?>" required autofocus
                                                                       min="1940-01-01" max="2021-12-31">
                                                            </div>
                                                            <?php $__errorArgs = ['date'];
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
                                                        <div class="col-md-8 mb-1">
                                                            <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description" id="" cols="30" rows="10" class="form-control p-tb-14 p-lr-14"></textarea>
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
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 mb-1">
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
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 mb-1">
                                                            <label for="images" class="form-label fs-16  pb-2 p-r-10">ادراح الصور  </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control  <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-9 " id="images" type="file" name="images" multiple placeholder="">
                                                            </div>
                                                            <?php $__errorArgs = ['images'];
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
                                                <div class="mb-2 text-center">
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 " type="submit"><?php echo e(__('حفظ')); ?></button>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/events/create.blade.php ENDPATH**/ ?>