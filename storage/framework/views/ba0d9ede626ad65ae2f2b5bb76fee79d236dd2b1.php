<?php $__env->startSection('content'); ?>

    <div class="container p-t-56 p-b-112"  dir="rtl">
        <div class="text-center p-b-60 p-t-28">
            <h1 class="font-weight-bold">  سجل الدخول لحسابك  في مناظرات المدارس</h1>
        </div>

      <div class="row justify-content-center">
        <div class="col-md-7 justify-content-center no-gutters bor-r5 p-0">
            <div class="p-t-28 text-right">
                <?php if(session()->has('success_message')): ?>
                    <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                <?php endif; ?>
                <?php if(session()->has('error_message')): ?>
                    <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                <?php endif; ?>
            </div>
          <div class="card-group ">
            <div class="card bor-r5 ">
                <div class="card-header bg-primary p-tb-24 text-center" >
                    <div class="text-center font-weight-bolder fs-22 m-lr-56 text-white">سجل الدخول</div>
                </div>
                <div class="card-body p-t-60 p-b-40 text-right p-lr-56" >
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-12 mb-4">
                        <label for="email" class="form-label fs-18 pb-2">البريد الإلكتروني * </label>
                        <div class="input-group mb-3">
                            <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-lr-35" type="text" placeholder="<?php echo e(__('example@example.com')); ?>"
                                   name="email" value="<?php echo e(old('email')); ?>" required>
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
                    <div class="col-md-12 mb-4">
                        <label for="phone" class="form-label fs-18 ">كلمة السر * </label>
                        <div class="text-muted pb-3">٦ أحرف على الأقل</div>
                        <div class="input-group mb-3">
                            <input class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-lr-35" type="password" placeholder="<?php echo e(__('كلمة السر')); ?>"
                                   name="password" required>
                        </div>
                        <?php $__errorArgs = ['password'];
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
                    <div class="col-md-12 text-center py-4 mt-4">
                        <button class="btn2 btn-primary col-md-6 fs-24 h-55 p-tb-10 lh-10 font-weight-bold" type="submit"><?php echo e(__('دخول')); ?></button>
                    </div>
                    <div class="col-md-12 text-center ">
                        <a href="<?php echo e(route('password.request')); ?>" class="btn btn-link px-0 col-6 clblack font-weight-bold fs-16"><?php echo e(__('نسيت كلمة السر ؟')); ?></a>
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

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.authBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/auth/login.blade.php ENDPATH**/ ?>