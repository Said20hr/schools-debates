<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                    <div class="card">
                        <div class="card-header m-t-15">
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('ملاحظات المتناظرين ')); ?></span></h2>
                            <div class="p-t-28 p-lr-20">
                                <?php if(session()->has('success_message')): ?>
                                    <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                                <?php endif; ?>
                                <?php if(session()->has('error_message')): ?>
                                    <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="card-body">

                                <table class="table table-responsive-sm table-striped table-bordered">
                                    <thead>
                                    <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                        <th>رقم </th>
                                        <th>اسم المتناظر</th>
                                        <th>نوع الملاحظة</th>
                                        <th>موضوع الملاحظة</th>
                                        <th>الحالة</th>
                                        <th colspan="3">العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-right fs-17">
                                            <td><?php echo e($note->id); ?></td>
                                            <td><?php echo e($note->user_id); ?></td>
                                            <td><?php echo e($note->type); ?></td>
                                            <td><?php echo e($note->title); ?></td>
                                            <td><div class="badge badge-warning"><?php echo e($note->status); ?></div></td>
                                            <td>
                                                <a href="<?php echo e(route('notes.show', $note->id )); ?>" class="btn btn-block btn-primary">معاينة</a>
                                            </td>
                                            <td>
                                                <form action="<?php echo e(route('notes.destroy', $note->id )); ?>" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-block btn-danger">  حذف </button>
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


<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/notes/notesList.blade.php ENDPATH**/ ?>