<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">

                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class="bg-secondary border-0">
                                <div class="col-md-12 p-0 text-center" style="border-radius: 0 0 15px 15px">
                                    <a class="align-items-center d-flex justify-content-center bg-gradient-warning text-white p-tb-10" id="pills-student-tab" data-toggle="tab"
                                       href="#pills-student" role="tab" aria-controls="pills-student" >
                                        <img src="<?php echo e(asset('images/Illustration/student.svg')); ?>" alt="img-student" class="p-tb-5" width="" height="70">
                                        <div class="text-center font-weight-bolder fs-22 m-lr-56">   تعديل عضو النادي </div>
                                    </a>
                                </div>

                            </div>
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5" id="pills-tabContent">
                                
                                        <div class="text-right">
                                          
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">البيانات الشخصية</legend>
                                                <hr class="mb-4">
                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-1">
                                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="name" class="form-control " type="text"
                                                                   name="name" value="<?php echo e($member->name); ?>" disabled>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة * </label>
                                                        <div class="input-group mb-3">

                                                            <input id="lastname" class="form-control" type="text" placeholder="<?php echo e(__('اسم العائلة … ')); ?>"
                                                                   name="lastname" value="<?php echo e($member->lastname); ?>" disabled>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="job" class="form-label fs-16  pb-2 p-r-10">المهنة * </label>
                                                        <div class="input-group mb-3">
                                                            <input id="job" class="form-control " type="text"
                                                                   placeholder="<?php echo e(__(' … المهنة ')); ?>" name="job" value="<?php echo e($member->job); ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <img src="<?php echo e(asset('storage/members/'.$member->avatar)); ?>" class="img-fluid" alt="">
                                                        <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة * </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start">
                                                <a href="<?php echo e(route('members.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                                                <a href="<?php echo e(route('members.edit', $member->id)); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10">تعديل</a>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/members/read.blade.php ENDPATH**/ ?>