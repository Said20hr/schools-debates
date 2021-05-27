<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                        <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('الفعاليات')); ?></span></h2>
                        <div class="card-body">
                            <?php if(Session::has('message')): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <a href="<?php echo e(route('students.create' )); ?>" class="btn btn-group btn-success fs-20 p-lr-25">
                                اضف تفاعلية</a>
                            </div>
                            <br>
                            <table class="table table-responsive-sm table-striped">
                                <thead>
                                <tr>
                                    <th>اسم التفاعية</th>
                                    <th>Subject</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><strong><?php echo e($mail->name); ?></strong></td>
                                        <td><strong><?php echo e($mail->subject); ?></strong></td>
                                        <td>
                                            <a href="<?php echo e(route('prepareSend', ['id' => $mail->id] )); ?>" class="btn btn-warning">Send</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('/mail/' . $mail->id)); ?>" class="btn btn-primary">View</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(url('/mail/' . $mail->id . '/edit')); ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('mail.destroy', $mail->id )); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($events->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/events/browse.blade.php ENDPATH**/ ?>