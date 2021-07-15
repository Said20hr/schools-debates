<?php $__env->startSection('content'); ?>

        <div class="container-fluid text-right">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" dir="rtl">
                <div class="card">
                    <div class="card-header m-t-15">
                        <?php switch($membership):
                            case ('students'): ?>
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('المتناظرين')); ?></span></h2>
                            <?php break; ?>
                            <?php case ('coaches'): ?>
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('المدربين')); ?></span></h2>
                            <?php break; ?>
                            <?php case ('users'): ?>
                            <h2 class="fa fa-align-justify font-weight-bold m-lr-10"> <span class="m-r-10"><?php echo e(__('المسجلين الجدد')); ?></span></h2>
                        <?php endswitch; ?>

                    <div class="mx-3 m-t-35">
                        <?php switch($membership):
                            case ('students'): ?>
                            <a href="<?php echo e(route('students.create' )); ?>" class="btn btn-group btn-success fs-20 p-lr-25">
                               <?php echo e(__('اضف متناظر')); ?>

                            </a>
                            <?php break; ?>
                            <?php case ('coaches'): ?>
                            <a href="<?php echo e(route('coaches.create' )); ?>" class="btn btn-group btn-primary fs-20 p-lr-25">
                                <i class="cil-user-plus"></i>  <?php echo e(__('اضف مدرب')); ?> </a>
                            <?php break; ?>
                        <?php endswitch; ?>


                    </div>
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
                        <?php switch($membership):
                            case ('students'): ?>
                        <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                            <th>رقم العضوية</th>
                            <th>الاسم الاول و الثاني</th>
                            <th>الاسم العائلي</th>
                            <th>المدرسه</th>
                            <th>الصف</th>
                            <th>العضوية</th>
                            <th colspan="3">العمليات</th>
                            <th>المشاركات</th>
                          </tr>
                            <?php break; ?>
                            <?php case ('coaches'): ?>
                            <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                <th>رقم العضوية</th>
                                <th>الاسم الاول و الثاني</th>
                                <th>الاسم العائلي</th>
                                <th>المهنة</th>
                                <th>مكان العمل</th>
                                <th>العضوية</th>
                                <th colspan="3">العمليات</th>
                            </tr>
                            <?php break; ?>

                            <?php case ('users'): ?>
                            <tr class="text-right fs-18 p-tb-10 font-weight-bold ">
                                <th>رقم العضوية</th>
                                <th>الاسم الاول و الثاني</th>
                                <th>الاسم العائلي</th>
                                <th>الصورة الشخصية</th>
                                <th>العضوية</th>
                                <th colspan="3">العمليات</th>
                            </tr>
                        <?php endswitch; ?>
                        </thead>
                        <tbody>
                        <?php switch($membership):
                            case ('students'): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-right fs-17">
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name." ".$user->second_name); ?></td>
                                    <td><?php echo e($user->lastname); ?></td>
                                    <td><?php echo e($user->school); ?></td>
                                    <td><?php echo e($user->level); ?></td>
                                    <td>
                                        <?php if($user->status): ?>
                                            <span class="badge  badge-pill badge-success fs-15">متناظر مفعل </span>
                                        <?php else: ?>
                                            <span class="badge  badge-pill badge-warning fs-15"> متناظر غير مفعل </span>
                                        <?php endif; ?>

                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id )); ?>" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id . '/edit')); ?>" class="btn btn-block btn-success">تعديل</a>
                                    </td>
                                    <td>

                                        <?php if( $you->id !== $user->id ): ?>
                                            <form action="<?php echo e(route($membership.'.destroy', $user->id )); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-block btn-danger">  حذف </button>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('tournament.show',$user->id)); ?>" class="btn btn-block btn-info fs-15">
                                            المشاركات
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php break; ?>
                            <?php case ('coaches'): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-right fs-17">
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name." ".$user->second_name); ?></td>
                                    <td><?php echo e($user->lastname); ?></td>
                                    <td><?php echo e($user->job); ?></td>
                                    <td><?php echo e($user->work_place); ?></td>
                                    <td>
                                        <?php if($user->status): ?>
                                            <span class="badge  badge-pill badge-info fs-15">مدرب مفعل </span>
                                        <?php else: ?>
                                            <span class="badge  badge-pill badge-secondary fs-15"> مدرب غير مفعل </span>
                                        <?php endif; ?>

                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id )); ?>" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id . '/edit')); ?>" class="btn btn-block btn-success">  تعديل  </a>
                                    </td>
                                    <td>

                                        <?php if( $you->id !== $user->id ): ?>
                                            <form action="<?php echo e(route($membership.'.destroy', $user->id )); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-block btn-danger">  حذف <i class=""></i></button>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php break; ?>
                            <?php case ('users'): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-right fs-17">
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name." ".$user->second_name); ?></td>
                                    <td><?php echo e($user->lastname); ?></td>
                                    <?php if($user->role == 'student'): ?>
                                    <td><a href="<?php echo e(asset('storage/users/students/avatars/'.$user->avatar)); ?>" class="fs-13 font-weight-bolder" target="_blank">اضغط للمشاهدة</a></td>
                                    <?php endif; ?>
                                    <?php if($user->role == 'coach'): ?>
                                    <td><a href="<?php echo e(asset('storage/users/coaches/avatars/'.$user->avatar)); ?>" class="fs-13 font-weight-bolder" target="_blank">اضغط للمشاهدة</a></td>
                                    <?php endif; ?>
                                    <td>
                                        <?php if($user->role == 'student'): ?>
                                            <?php if($user->status): ?>
                                            <span class="badge  badge-pill badge-success fs-15">متناظر مفعل </span>
                                            <?php else: ?>
                                                <span class="badge  badge-pill badge-warning fs-15">متناظر غير مفعل </span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                            <?php if($user->role == 'coach'): ?>
                                                <?php if($user->status): ?>
                                                    <span class="badge  badge-pill badge-info fs-15">مدرب مفعل </span>
                                                <?php else: ?>
                                                    <span class="badge  badge-pill badge-secondary fs-15"> مدرب غير مفعل </span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if($user->role == 'admin'): ?>
                                                <span class="badge  badge-pill badge-info fs-15">المدير </span>
                                            <?php endif; ?>


                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id )); ?>" class="btn btn-block btn-primary">معاينة</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id . '/edit')); ?>" class="btn btn-block btn-success">تعديل</a>
                                    </td>

                                    <td>

                                        <?php if( $you->id !== $user->id ): ?>
                                            <form action="<?php echo e(route($membership.'.destroy', $user->id )); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-block btn-danger">  حذف </button>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endswitch; ?>

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


<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/admin/usersList.blade.php ENDPATH**/ ?>