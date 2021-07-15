<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-13 p-tb-10-md p-tb-5-sm">

        <div class="container p-tb-112">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="text-center p-tb-28 bor4"  style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                            <div class="pos-relative d-inline-block p-lr-10">
                                <img src="<?php echo e(asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)); ?>" alt="" class="img-blog-avatar3">
                                <span class="avatar-check pointer" data-toggle="tooltip" data-placement="right" title="عضوية مفعلة"><i class="ti-check font-weight-bolder" ></i></span>
                            </div>
                            <div class="">
                                <h3 class="color-1 fs-22 fw-bold m-t-20"><?php echo e($user->name." ".$user->second_name." ".$user->lastname); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="nav flex-column text-right" >
                            <a href="<?php echo e(route('user.index')); ?>" class="border-0 nav-link  p-tb-14 fs-17 font-weight-bolder text-right active text-white"><i class="fa fa-user m-lr-10"></i>ملفي الشخصي</a>
                            <?php if($user->role =='student'): ?>
                            <a href="<?php echo e(route('user.events')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i>  فعالياتي </a>
                            <a href="<?php echo e(route('user.notes')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-bell m-lr-10"></i> الملاحظات </a>
                            <?php else: ?>
                            <a href="<?php echo e(route('users.notes')); ?>" class="border-0 nav-link p-tb-14 fs-17 font-weight-bolder text-right color-1"><i class="fa fa-calendar m-lr-10"></i> ملاحظات المتناظرين </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="d-flex align-items-start">
                            <div>
                                <div style=" box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                                        <div class="card p-tb-7">
                                            <div class="card-header p-tb-10 fs-20 font-weight-bolder color-1"><?php echo e(__('تعديل الملف الشخصي')); ?> </div>
                                            <div class="card-body text-right ">
                                                <br>
                                                <?php if(session()->has('success_message')): ?>
                                                    <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                                                <?php endif; ?>
                                                <?php if(session()->has('error_message')): ?>
                                                    <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                                                <?php endif; ?>
                                                <form method="POST" action="<?php echo e(route('user.update',$user->id)); ?>" dir="rtl" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="row mb-2 p-lr-24">
                                                        <div class="col-md-4 mb-1">
                                                            <label  class="form-label fs-16  pb-2 p-r-10">الاسم الاول  </label>
                                                            <div class="input-group mb-3">
                                                                <input  class="form-control" type="text" disabled value="<?php echo e(auth()->user()->name); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="second_name" class="form-label fs-16  pb-2 p-r-10">الاسم الثاني </label>
                                                            <div class="input-group mb-3">
                                                                <input id="second_name" class="form-control" type="text" disabled value="<?php echo e(auth()->user()->second_name); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="lastname" class="form-label fs-16  pb-2 p-r-10">اسم العائلة  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="lastname" class="form-control" type="text" disabled value="<?php echo e(auth()->user()->lastname); ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-2 p-lr-24">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="birth_date" class="form-label fs-16  pb-2 p-r-10">تاريخ المبلاد  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="birth_date" class="form-control" type="date" disabled value="<?php echo e(auth()->user()->birth_date); ?>">
                                                            </div>
                                                        </div>

                                                        <?php switch($user->role):
                                                            case ('student'): ?>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="school" class="form-label fs-16  pb-2 p-r-10">المدرسة  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="school" class="form-control" type="text" name="school" disabled value="<?php echo e(auth()->user()->school); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="level" class="form-label fs-16  pb-2 p-r-10">الصف  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="level" class="form-control" type="text" disabled value="<?php echo e(auth()->user()->level); ?>">
                                                                </div>
                                                            </div>
                                                            <?php break; ?>
                                                            <?php case ('coach'): ?>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="job" class="form-label fs-16  pb-2 p-r-10">العمل  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="job" class="form-control" type="text" disabled value="<?php echo e(auth()->user()->job); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <label for="work_place" class="form-label fs-16  pb-2 p-r-10">مكان العمل  </label>
                                                                <div class="input-group mb-3">
                                                                    <input id="work_place" class="form-control" type="text" disabled value="<?php echo e(auth()->user()->work_place); ?>">
                                                                </div>
                                                            </div>
                                                            <?php break; ?>
                                                        <?php endswitch; ?>
                                                    </div>
                                                    <hr class="mb-3">
                                                    <?php if(!$user->region): ?>
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
                                                                       name="region" value="<?php echo e(old('region')); ?>">
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
                                                                           name="province" value="<?php echo e(old('province')); ?>"  >
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
                                                                           name="rue" value="<?php echo e(old('rue')); ?>"  >
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
                                                                       name="commune" value="<?php echo e(old('commune')); ?>"  >
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
                                                                       name="house" value="<?php echo e(old('house')); ?>">
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
                                                    <?php endif; ?>
                                                    <div class="row mb-2 p-lr-24">
                                                        <div class="col-md-6 mb-2">
                                                            <label for="name" class="form-label fs-16  pb-2 p-r-10">البريد الالكتروني</label>
                                                            <input id="email" class="form-control" type="text"  value="<?php echo e(auth()->user()->email); ?>"  disabled>

                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <label for="phone" class="form-label fs-16  pb-2 p-r-10">رقم الهاتف  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone" class="form-control" type="text"  name="phone" value="<?php echo e(auth()->user()->phone); ?>" disabled>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="row mb-2 p-lr-24">
                                                        <div class="col-md-6 mb-2 text-center">
                                                            <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                                            <div class="d-flex justify-content-center p-tb-14">
                                                                <?php if($user->id_carte): ?>
                                                                    <a href="<?php echo e(asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)); ?>" target="_blank" class="c-avatar-edit">
                                                                        <img src="<?php echo e(asset('storage/users/'.$user->role.'/id_carte/'.$user->id_carte)); ?>" class="img-fluid" alt="id_carte">
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
                                                                    <div>
                                                                        <a href="<?php echo e(asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)); ?>" target="_blank" class="c-avatar-edit">
                                                                            <img src="<?php echo e(asset('storage/users/'.$user->role.'/avatars/'.$user->avatar)); ?>" class="img-blog-avatar2" alt="avatar">
                                                                        </a>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div>
                                                                        <h3 class="badge fs-22 badge-light">الصورة الشخصية خاطئة او غير موجودة</h3>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div>
                                                                <div class="input-group mb-3 ">
                                                                    <input class="form-control  <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-12" id="avatar" type="file" name="avatar" placeholder="">
                                                                </div>
                                                                <?php $__errorArgs = ['avatar'];
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
                                                    </div>
                                                    <hr class="mb-4">
                                                    <div class="d-flex justify-content-start">
                                                        <button class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-l-10" type="submit"><?php echo e(__('حفظ')); ?></button>
                                                        <a href="" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
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
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/profile/students/index.blade.php ENDPATH**/ ?>