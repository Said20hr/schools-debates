<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card border-dark ">
                        <?php switch($user->role):
                            case ('student'): ?>
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white"><?php echo e(__('  معاينة المتناظر')); ?> </div>
                            <?php break; ?>
                            <?php case ('coach'): ?>
                            <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white"><?php echo e(__('  معاينة المدرب')); ?> </div>
                            <?php break; ?>
                        <?php endswitch; ?>
                        <div class="card-body text-right" dir="rtl">
                            <br>
                            <?php if(session()->has('success_message')): ?>
                                <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                            <?php endif; ?>
                            <?php if(session()->has('error_message')): ?>
                                <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                            <?php endif; ?>
                                <?php if($user->status ): ?>
                                    <div class="mb-5">
                                       <div class="badge badge-success fs-20">عضو مفعل</div>
                                    </div>
                                <?php endif; ?>
                                <div class="row mb-2">

                                    <div class="col-md-4 mb-1">
                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">الاسم الاول  </label>
                                        <div class="input-group mb-3">

                                            <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                   name="name" value="<?php echo e($user->name); ?>"  disabled>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="second_name" class="form-label fs-16  pb-2 p-r-10">الاسم الثاني </label>
                                        <div class="input-group mb-3">
                                            <input id="second_name" class="form-control <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                   name="second_name" value="<?php echo e($user->second_name); ?>" disabled>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة  </label>
                                        <div class="input-group mb-3">

                                            <input id="lastname" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                   name="lastname" value="<?php echo e($user->lastname); ?>" disabled>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 mb-1">
                                        <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد  </label>
                                        <div class="input-group mb-3">
                                            <input id="birth_date" class="form-control <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"
                                                   name="birth_date" value="<?php echo e($user->birth_date); ?>"  disabled>
                                        </div>

                                    </div>

                                    <?php switch($user->role):
                                        case ('student'): ?>
                                        <div class="col-md-4 mb-1">
                                            <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة  </label>
                                            <div class="input-group mb-3">
                                                <input id="school" class="form-control <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="school" value="<?php echo e($user->school); ?>" disabled>
                                            </div>

                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف  </label>
                                            <div class="input-group mb-3">
                                                <input id="level" class="form-control <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="level" value="<?php echo e($user->level); ?>"  disabled>
                                            </div>

                                        </div>
                                        <?php break; ?>
                                        <?php case ('coach'): ?>
                                        <div class="col-md-4 mb-1">
                                            <label for="job" class="form-label fs-16  pb-2 p-r-10">العمل  </label>
                                            <div class="input-group mb-3">
                                                <input id="job" class="form-control <?php $__errorArgs = ['job'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="job" value="<?php echo e($user->job); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل  </label>
                                            <div class="input-group mb-3">
                                                <input id="work_place" class="form-control <?php $__errorArgs = ['work_place'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="work_place" value="<?php echo e($user->work_place); ?>" disabled>
                                            </div>

                                        </div>
                                        <?php break; ?>
                                    <?php endswitch; ?>

                                    <div class="mb-4 p-lr-20 border-bottom p-b-14 fs-20 font-weight-bolder color-1"><?php echo e(__('بيانات السكن')); ?> </div>
                                    <div class="row mb-2 p-lr-24">
                                        <div class="col-md-4 mb-1">
                                            <label for="region" class="form-label fs-16  pb-2 p-r-10">المنطقه</label>
                                            <div class="input-group mb-3">
                                                <input id="region" class="form-control <?php $__errorArgs = ['region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="region" value="<?php echo e($user->region); ?>">
                                            </div>
                                            <?php $__errorArgs = ['region'];
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
                                        <div class="col-md-4 mb-1">
                                            <label for="province" class="form-label fs-16  pb-2 p-r-10">القطعه  </label>
                                            <div class="input-group mb-3">
                                                <input id="province" class="form-control <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="province" value="<?php echo e($user->province); ?>"  >
                                            </div>
                                            <?php $__errorArgs = ['province'];
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
                                        <div class="col-md-4 mb-1">
                                            <label for="rue" class="form-label fs-16  pb-2 p-r-10">الشارع  </label>
                                            <div class="input-group mb-3">
                                                <input id="rue" class="form-control <?php $__errorArgs = ['rue'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="rue" value="<?php echo e($user->rue); ?>"  >
                                            </div>
                                            <?php $__errorArgs = ['rue'];
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
                                        <div class="col-md-4 mb-1">
                                            <label for="commune" class="form-label fs-16  pb-2 p-r-10">جاده ( اختياري )  </label>
                                            <div class="input-group mb-3">
                                                <input id="commune" class="form-control <?php $__errorArgs = ['commune'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="commune" value="<?php echo e($user->commune); ?>"  >
                                            </div>
                                            <?php $__errorArgs = ['commune'];
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
                                        <div class="col-md-4 mb-1">
                                            <label for="house" class="form-label fs-16  pb-2 p-r-10">منزل  </label>
                                            <div class="input-group mb-3">
                                                <input id="house" class="form-control <?php $__errorArgs = ['house'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                       name="house" value="<?php echo e($user->house); ?>">
                                            </div>
                                            <?php $__errorArgs = ['house'];
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
                                    <hr class="mb-4">
                                </div>
                                <hr class="mb-4">
                                <div class="row mb-2">
                                    <div class="col-md-4 mb-2">
                                        <label for="name" class="form-label fs-16  pb-2 p-r-10">البريد الالكتروني</label>
                                        <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="<?php echo e($user->email); ?>"
                                               name="email" value="<?php echo e(old('email')); ?>"  disabled>

                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف  </label>
                                        <div class="input-group mb-3">
                                            <input id="phone" class="form-control  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                                                   name="phone" value="<?php echo e($user->phone); ?>"   disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="created_at" class="form-label fs-16  pb-2 p-r-10">تاريخ التسجيل  </label>
                                        <div class="input-group mb-3">
                                            <input id="created_at" class="form-control  <?php $__errorArgs = ['created_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                   name="created_at" value="<?php echo e($user->created_at); ?>"   disabled>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row mb-2 mt-2">
                                    <div class="col-md-6 mb-2 text-center">
                                        <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                        <div class="d-flex justify-content-center p-tb-14">
                                            <?php if($user->id_carte): ?>
                                                <a href="<?php echo e(asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)); ?>" target="_blank" class="c-avatar-edit">
                                                    <img src="<?php echo e(asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)); ?>" class="c-avatar-img" alt="id_carte">
                                                </a>
                                            <?php else: ?>
                                            <div>
                                                <div>
                                                    <h3 class="badge fs-22 badge-light">صورة البطاقة المدنية خاطئة او غير موجودة</h3>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2 text-center">
                                        <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة الشخصية  </label>
                                        <div class="d-flex justify-content-center p-tb-14">
                                            <?php if($user->avatar): ?>
                                                <a href="<?php echo e(asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)); ?>" target="_blank" class="c-avatar-edit">
                                                    <img src="<?php echo e(asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)); ?>" class="c-avatar-img" alt="avatar">
                                                </a>
                                            <?php else: ?>
                                            <div>
                                                <div>
                                                    <h3 class="badge fs-22 badge-light">الصورة الشخصية غير موجودة</h3>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="d-flex justify-content-start">
                                    <a href="<?php echo e(route($membership.'.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                                    <a href="<?php echo e(url('admin/'.$membership.'/'. $user->id . '/edit')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10"><?php echo e(__('تعديل')); ?></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/admin/userShow.blade.php ENDPATH**/ ?>