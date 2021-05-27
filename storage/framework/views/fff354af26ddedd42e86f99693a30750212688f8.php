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
                                <a href="<?php echo e(route('events.create' )); ?>" class="btn btn-group btn-success fs-20 p-lr-25">
                                اضف تفاعلية</a>
                            </div>
                            <br>
                                <table class="table table-responsive-sm table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>اسم التفاعلية</th>
                                    <th>الموعد</th>
                                    <th>المشاركين</th>
                                    <th>الحالة</th>
                                    <th>الصورة</th>
                                    <th colspan="3">العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="fs-18">
                                        <td><strong><?php echo e($event->name); ?></strong></td>
                                        <td><strong><?php echo e(date('d-m-Y', strtotime($event->time))); ?></strong></td>
                                        <td><strong><?php echo e($event->participants); ?></strong></td>
                                        <td>
                                            <?php if($event->case): ?>
                                                <div class="badge badge-success fs-18 p-lr-7 p-tb-5">مفتوحة</div>
                                            <?php else: ?>
                                            <div class="badge badge-danger fs-18 p-lr-7 p-tb-5">منتهية</div>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo e(asset('storage/events/'.$event->image)); ?>" alt="event-img" class="img-fluid" width="100">
                                        </td>

                                        <td>
                                            <a href="<?php echo e(route('events.show', $event->id )); ?>" class="btn btn-block btn-primary">معاينة</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('events.edit',$event->id)); ?>" class="btn btn-block btn-success">  تعديل  </a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('events.destroy', $event->id )); ?>" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
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