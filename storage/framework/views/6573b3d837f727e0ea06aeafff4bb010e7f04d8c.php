<?php $__env->startSection('content'); ?>
    <div class="container" dir="rtl">
        <div class="row justify-content-center">
            <div class="col-md-7 justify-content-center no-gutters bor-r5 p-0">
                <div class="card-group ">
                    <div class="card bor-r5">
                            <div class="card-header bg-primary p-tb-24 text-center" >
                                <div class="text-center font-weight-bolder fs-22 m-lr-56 text-white">هل نسيت كلمة السر ؟</div>
                            </div>
                        <div class="card-body p-t-20 p-b-40 text-right p-lr-56" >
                            <p class="text-muted mb-4 fs-20 p-tb-7">ادخل ايمايلك بشكل صحيح</p>
                            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-12 mb-4">
                                    <label for="email" class="form-label fs-18 pb-2">البريد الإلكتروني * </label>
                                    <div class="input-group mb-3">

                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                    </div>
                                    <?php $__errorArgs = ['email'];
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
                                <div class="col-md-12 text-center py-3">
                                    <button class="btn2 btn-primary col-md-6 fs-24 h-55 p-tb-10 lh-10 font-weight-bold" type="submit"><?php echo e(__('ارسل')); ?></button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center" style="border-radius: 0 0 15px 15px !important;">
                            <?php if(Route::has('password.request')): ?>
                                <p class="fs-20 p-tb-7 m-b-15">ليس لديك حساب ؟ <a href="<?php echo e(route('register')); ?>" class="color-1 font-weight-bold">أنشىء حسابك</a></p>
                            <?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.authBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>