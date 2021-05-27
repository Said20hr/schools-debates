<?php $__env->startSection('content'); ?>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">

            <img src="<?php echo e(asset('images/Illustration/5283-ai.svg')); ?>" alt="" class="img-fluid">
          <div class="clearfix text-center">
              <h2 class="pt-2">! أنت ضائع.</h2>
            <p class="fs-26">الصفحة التي تبحث عنها غير موجودة.</p>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.errorBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/errors/404.blade.php ENDPATH**/ ?>