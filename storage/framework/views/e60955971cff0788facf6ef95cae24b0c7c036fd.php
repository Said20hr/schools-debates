<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('الاعضاء المسجلين')); ?></span></h2>
                            <div class="card-body">
                                <?php if(Session::has('message')): ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                    <?php if(Session::has('error_message')): ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-danger" role="alert"><?php echo e(Session::get('error_message')); ?></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <br>
                                <table class="table table-responsive-sm table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>اسم التفاعلية</th>
                                        <th>اسم المتناظر</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $eventsUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="fs-18">
                                            <td><?php echo e($loop->index+1); ?></td>
                                            <td><strong>
                                                    <a href="<?php echo e(route('events.show',$event->event_id)); ?>">
                                                        <?php echo e($event->event->name); ?>

                                                    </a></strong>
                                            </td>
                                            <td><strong>
                                                    <a href="<?php echo e(route('students.show',$event->user_id)); ?>">
                                                        <?php if($event->user_id && $event->user): ?>
                                                            <?php echo e($event->user->name." ".$event->user->lastname); ?>

                                                        <?php endif; ?>
                                                    </a>
                                                </strong>
                                            </td>
                                            <td>
                                                <form action="<?php echo e(route('eventsUsers.destroy', $event->id )); ?>" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/events/list.blade.php ENDPATH**/ ?>