<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
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
                                        <div class="text-right">
                                            <div class="p-b-14 text-right ">
                                                <div class="mb-3 font-weight-bolder color-1 fs-26"> فعالية</div>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="title" class="form-label fs-18  pb-2 p-r-10">عنوان الفعالية </label>
                                                        <div class="input-group mb-3">
                                                            <input id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="title" value="<?php echo e($event->name); ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="form-label fs-18  pb-2 p-r-10">مفتوحة للتسجيل </div>
                                                    <div class="col-md-8 mb-1">
                                                        <label class="c-switch c-switch-label c-switch-success">
                                                            <?php if($event->case): ?>
                                                                <input class="c-switch-input" type="checkbox" name="case" checked disabled>
                                                            <?php else: ?>
                                                                <input class="c-switch-input" type="checkbox" name="case" disabled>
                                                            <?php endif; ?>
                                                            <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label class="form-label fs-18  pb-2 p-r-10">المعنيين </label>
                                                        <input type="text" class="form-control" value="<?php echo e($event->participants); ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="date" class="form-label fs-16  pb-2 p-r-10">تاريخ الموعد * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="date" class="form-control" type="date" value="<?php echo e($event->date); ?>" disabled >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="description" class="form-label fs-18  pb-2 p-r-10">الوصف </label>
                                                        <div class="input-group mb-3">
                                                            <textarea name="description" class="form-control p-tb-14 p-lr-14" id="description" disabled>
                                                                <?php echo e($event->description); ?>

                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="image" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                        <div>
                                                            <img src="<?php echo e(asset('storage/events/'.$event->image)); ?>" alt="events-img" class="img-fluid" id="images" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-8 mb-1">
                                                        <label for="images" class="form-label fs-16  pb-2 p-r-10">ادراح الصور  </label>
                                                    </div>
                                                </div>

                                            </div>
                                                <div class="d-flex justify-content-start">
                                                    <a href="<?php echo e(route('events.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                                                    <a href="<?php echo e(route('events.edit', $event->id)); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10"><?php echo e(__('تعديل')); ?></a>
                                                </div>
                                        </div>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/events/read.blade.php ENDPATH**/ ?>