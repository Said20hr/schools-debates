<?php $__env->startSection('content'); ?>


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12 text-right" dir="rtl">
        <div class="card">
          <div class="card-header"><h4>قائمة القوائم</h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="<?php echo e(route('menu.menu.create')); ?>">إضافة قائمة جديدة</a>
                </div>
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>اسم</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php $__currentLoopData = $menulist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($menu1->name); ?>

                                </td>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo e(route('menu.index', ['menu' => $menu1->id] )); ?>">مشاهده</a>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo e(route('menu.menu.edit', ['id' => $menu1->id] )); ?>">تعديل</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="<?php echo e(route('menu.menu.delete', ['id' => $menu1->id] )); ?>">حذف</a>
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
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/editmenu/menu/index.blade.php ENDPATH**/ ?>