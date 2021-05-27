<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-secondary border-0">
                                <div class="col-md-12 p-0 text-center" style="border-radius: 0 0 15px 15px">
                                        <a class="align-items-center d-flex justify-content-center bg-dark text-white p-tb-10">
                                            <img src="<?php echo e(asset('images/Illustration/student.svg')); ?>" alt="img-student" class="p-tb-5" width="" height="70">
                                            <div class="text-center font-weight-bolder fs-22 m-lr-56">   اضافة عضو النادي </div>
                                        </a>
                                </div>

                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <form method="POST" action="<?php echo e(route('members.store')); ?>" dir="rtl" enctype="multipart/form-data">
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
                                                    <legend class="mb-3 font-weight-bolder color-1 fs-26">البيانات الشخصية</legend>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('الاسم الأول …  ')); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                                            </div>
                                                            <?php $__errorArgs = ['name'];
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
                                                            <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة * </label>
                                                            <div class="input-group mb-3">

                                                                <input id="lastname" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('اسم العائلة … ')); ?>"
                                                                       name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>
                                                            </div>
                                                            <?php $__errorArgs = ['lastname'];
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
                                                            <label for="job" class="form-label fs-16  pb-2 p-r-10">المهنة * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="job" class="form-control <?php $__errorArgs = ['job'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__(' … المهنة ')); ?>" name="job" value="<?php echo e(old('job')); ?>" required autofocus>
                                                            </div>
                                                            <?php $__errorArgs = ['job'];
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
                                                        <div class="col-md-6 mb-2">
                                                            <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                            <div class="input-group mb-3">
                                                                <input class="form-control  <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-9 " id="avatar" type="file" name="avatar" placeholder="">
                                                            </div>
                                                            <?php $__errorArgs = ['avatar'];
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-2 text-center">
                                                    <button class="btn btn-success col-md-4 fs-24 h-55 p-tb-10 lh-10 " type="submit"><?php echo e(__('حفظ')); ?></button>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/members/create.blade.php ENDPATH**/ ?>