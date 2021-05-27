<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Template: <?php echo e($template->name); ?></h4>
                    </div>
                    <div class="card-body">
                        <h4>Name</h4>
                        <p><?php echo e($template->name); ?></p>
                        <h4>Subject</h4>
                        <p><?php echo e($template->subject); ?></p>
                        <h4>Content</h4>
                        <p><?php echo e($template->content); ?></p>


                        <a href="<?php echo e(route('mail.index')); ?>" class="btn btn-primary">Return</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/email/show.blade.php ENDPATH**/ ?>