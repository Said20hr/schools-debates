<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                <img src="<?php echo e(asset('storage/users/student/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar3">
                                <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                            </div>
                            <div class="">
                                <h3 class="color-1 fs-22 fw-bold m-t-20"><?php echo e($user->name." ".$user->second_name." ".$user->lastname); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nav flex-column text-right" >
                            <a href="<?php echo e(route('user.index')); ?>" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            <a href="<?php echo e(route('user.events')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i>  فعالياتي </a>
                            <a href="<?php echo e(route('user.notes')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right  active text-white "><i class="fa fa-bell m-lr-10"></i> الملاحظات </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="d-flex align-items-start">
                            <div>
                                <div>
                                    <div class="card border-secondary" style="box-shadow: 0 3px 5px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.13);">
                                        <div class="card-header" style="border-radius: 15px 15px 0 0 ">
                                            <h2 class="font-weight-bolder color-1 fs-24 p-tb-14"> الملاحظات</h2>
                                        </div>
                                        <div class="p-t-28 p-lr-20">
                                            <?php if(session()->has('success_message')): ?>
                                                <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                                            <?php endif; ?>
                                            <?php if(session()->has('error_message')): ?>
                                                <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body m-tb-28">
                                            <form action="<?php echo e(route('user.store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="container">
                                                    <div class="row p-lr-28">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="type" class="form-label fs-16  pb-2 p-r-10 clblack">نوع الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <select name="type" id="type" class="form-control <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                                    <option value="اضافة مشاركة">اضافة مشاركة</option>
                                                                    <option value="تعديل مشاركة">تعديل مشاركة</option>
                                                                    <option value="تعديل الملف الشخصي">تعديل الملف الشخصي</option>
                                                                    <option value="اخر…">اخر…</option>
                                                                </select>
                                                            </div>
                                                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        </div>
                                                        <div class="row p-lr-28">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="title" class="form-label fs-16  pb-2 p-r-10 clblack">موضوع الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('موضوع')); ?>" name="title" value="<?php echo e(old('title')); ?>" autofocus  required>
                                                            </div>
                                                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="content" class="form-label fs-16 clblack pb-2 p-r-10">الملاحظة * </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="content" id="content" cols="30" rows="10"
                                                                          class="form-control p-tb-20 p-lr-20" value="محتوى الملاحظة"></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="text-danger mb-2" role="alert">
                                                                <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="btn2 btn-primary col-md-6 fs-24  p-tb-10 lh-10 font-weight-bold col-lg-3" type="submit"><?php echo e(__('أرسل الملاحظة')); ?></button>
                                                        </div>
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
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/profile/students/notes.blade.php ENDPATH**/ ?>