<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                        
                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                    <?php if(session()->has('success_message')): ?>
                                        <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                                    <?php endif; ?>
                                    <?php if(session()->has('error_message')): ?>
                                        <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                                    <?php endif; ?>
                                    <form method="POST" action="<?php echo e(route('eventsUsers.store')); ?>" dir="rtl" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="text-right">
                                            <?php if($errors): ?>
                                                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php echo e($error); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">تسجيل متناظرين في تفاعلية</legend>
                                                <hr class="mb-4">
                                                <label for="title" class="form-label fs-18  pb-2 p-r-10">المسجلين في الفعالية </label>
                                               <div class="row">
                                                   <?php $__currentLoopData = $event->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       <div class="col-md-3 alert alert-info mx-2">
                                                           <?php echo e($user->id." - ".$user->name." ".$user->lastname); ?>

                                                       </div>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                               </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="title" class="form-label fs-18  pb-2 p-r-10">عنوان الفعالية </label>
                                                        <div class="input-group mb-3">

                                                            <input id="title" class="form-control" type="text"
                                                                    name="event" value="<?php echo e($event->name); ?>" disabled >
                                                            <input  type="hidden"
                                                                   name="event" value="<?php echo e($event->id); ?>" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-12 mb-1">
                                                        <label class="form-label fs-18  pb-2 p-r-10">المعنيين </label>
                                                        <select name="participants[]" id="" class="form-control fs-18" multiple>
                                                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($student->id); ?>" class="font-weight-bold text-dark p-tb-15"><span class="font-weight-bolder text-primary"><?php echo e(" - رقم  ".$student->id.": "); ?> </span><?php echo e($student->name." ".$student->lastname); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <button class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10" type="submit"><?php echo e(__('حفظ')); ?></button>
                                                <a href="<?php echo e(route('events.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10" type="submit"><?php echo e(__('العودة')); ?></a>

                                            </div>

                                        </div>
                                    </form>


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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/events/register.blade.php ENDPATH**/ ?>