<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right m-b-56" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card border-dark ">
                        <div class="card-header p-tb-15 fs-24 font-weight-bold text-center bg-primary text-white"><?php echo e(__('  مشاركات المتناظر')); ?> </div>
                        <div class="card-body text-right">
                            <br>
                            <?php if(session()->has('success_message')): ?>
                                <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                            <?php endif; ?>
                            <?php if(session()->has('error_message')): ?>
                                <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                            <?php endif; ?>
                            <?php if($user->status): ?>
                                <div class="mb-5">
                                    <div class="badge badge-success fs-22">متناظر مفعل</div>
                                    <div class="badge badge-danger fs-22"> رقم عضويه   <?php echo e($user->id); ?></div>
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
                            </div>
                            <div class="row">
                                <div class="col-md-6 my-4 text-center">
                                <label for="id_carte" class="form-label fs-16 pb-2 p-r-10">البطاقة المدنية  </label>
                                <div class="d-flex justify-content-center p-tb-14">
                                    <?php if($user->id_carte): ?>
                                        <a href="<?php echo e(asset('storage/users/students/id_carte/'.$user->id_carte)); ?>" target="_blank" class="c-avatar-edit">
                                            <img src="<?php echo e(asset('storage/users/students/id_carte/'.$user->id_carte)); ?>" class="c-avatar-img" alt="id_carte">
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
                                <div class="col-md-6 my-4 text-center">
                                <label for="avatar" class="form-label fs-16  pb-2 p-r-10">الصورة الشخصية  </label>
                                <div class="d-flex justify-content-center p-tb-14">
                                    <?php if($user->avatar): ?>
                                        <a href="<?php echo e(asset('storage/users/students/avatars/'.$user->avatar)); ?>" target="_blank" class="c-avatar-edit">
                                            <img src="<?php echo e(asset('storage/users/students/avatars/'.$user->avatar)); ?>" class="c-avatar-img" alt="avatar">
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
                        </div>
                        <hr>
                        <div class="row">
                            <?php $__currentLoopData = $userstournament; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4">
                            <div class="list-group m-tb-28">
                                <div class="list-group-item bg-success clwhite">
                                    <div class="panel-heading d-flex justify-content-between align-items-center p-tb-7 "  style="display: flex;justify-content: space-between;cursor: pointer;">
                                        <div class="font-weight-bolder fs-18"> <?php echo e($tournament->name); ?></div>
                                    </div>
                                </div>
                                <div class="list-group list1 bor3">
                                    <div class="list-group-item col-md-12">
                                        <div class="form-group">
                                            <label class="control-label fs-16 font-weight-bold">اسم البطولة او النشاط</label>
                                            <input type="text" class="form-control p-tb-10 clblack fs-17" disabled value="<?php echo e($tournament->name); ?>">
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12">
                                        <div class="form-group">
                                            <label class="control-label fs-16 font-weight-bold">تفاصيل البطولة او النشاط</label>
                                            <textarea  class="form-control p-tb-10 clblack fs-16" disabled><?php echo e($tournament->description); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12 p-lr-28">
                                        <div class="control-label fs-16 font-weight-bold mb-2">تمميز</div>
                                        <label class="c-switch c-switch-label c-switch-opposite-success">
                                            <?php if($tournament->feature): ?>
                                                <input class="c-switch-input" type="checkbox" disabled checked>
                                            <?php else: ?>
                                                <input class="c-switch-input" type="checkbox" disabled>
                                            <?php endif; ?>
                                            <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                        </label>
                                    </div>
                                    <div class="list-group-item col-md-12 p-lr-14">
                                        <div class="form-group ">
                                            <div class=col-form-label">
                                                <div class="form-check">
                                                    <input class="form-check-input"  type="radio" checked >
                                                    <label class="form-check-label fs-17" ><?php echo e($tournament->type); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item col-md-12">
                                        <div class="d-flex text-end justify-content-between text-right">
                                            <a href="" type="button" class="btn btn-info btn-lg fs-18 p-tb-10 p-lr-10" >تعديل مشاركة
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="<?php echo e(route('tournament.destroy', $tournament->id )); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-lg  fs-18 p-tb-10 p-lr-10">  حذف مشاركة  <i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <hr>
                        <form action="<?php echo e(route('tournament.store')); ?>" method="POST" class="m-b-28">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($user->id); ?>" name="user">
                            <div class="col-lg-12 m-tb-14">
                                <div class="col-md-12 list-group m-tb-28">
                                        <div class="list-group-item active">
                                            <div class="panel-heading d-flex justify-content-between align-items-center p-tb-7 drop" data-target="1" style="display: flex;justify-content: space-between;cursor: pointer;">
                                                <div class="font-weight-bolder fs-22"> اضافة المشاركة 1</div>
                                                <i class="fa fa-angle-down fs-22 "></i>
                                            </div>
                                        </div>
                                    <div class="list-group list1 bor3">
                                            <div class="list-group-item col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label fs-22 font-weight-bolder">اسم البطولة او النشاط</label>
                                                    <input type="text" class="form-control p-tb-10 clblack fs-20" name="tournament[0][name]" placeholder="اسم...">
                                                </div>
                                            </div>
                                            <div class="list-group-item col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label fs-20 font-weight-bolder">تفاصيل البطولة او النشاط</label>
                                                    <textarea  class="form-control p-tb-10 clblack fs-18"
                                                               name="tournament[0][description]" rows="6">تفاصيل... </textarea>
                                                </div>
                                            </div>
                                            <div class="list-group-item col-md-12 p-lr-28">
                                                <div class="control-label fs-22 font-weight-bolder mb-2">تمميز</div>
                                                <label class="c-switch c-switch-label c-switch-opposite-success">
                                                    <input class="c-switch-input" type="checkbox" name="tournament[0][feature]">
                                                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                                </label>
                                            </div>
                                            <div class="list-group-item col-md-12 p-lr-28">
                                                <div class="form-group ">
                                               <label class="control-label fs-22 font-weight-bolder">نوع البطولة</label>
                                                <div class=col-form-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio1-[0]" type="radio" value="البطولات الرسمية الدولية" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio1-[0]">البطولات الرسمية الدولية</label>
                                                    </div>
                                                    <div class="form-check fs-22">
                                                        <input class="form-check-input mb-2" id="radio3-[0]" type="radio" value="البطولات الرسمية المحليه" name="tournament[0][type]">
                                                        <label class="form-check-label " for="radio3-[0]"> البطولات الرسمية المحليه</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio2-[0]" type="radio" value="البطولات التفاعليه" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio2-[0]"> البطولات التفاعليه</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio3-[0]" type="radio" value="البطولات المفتوحه" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio3-[0]">البطولات المفتوحه</label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radio3-[0]" type="radio" value="الانشطه و الفعاليات في مجال المناظرات" name="tournament[0][type]">
                                                        <label class="form-check-label fs-22" for="radio3-[0]">الانشطه و الفعاليات في مجال المناظرات</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="list-group-item col-md-12">
                                                <div class="d-flex text-end justify-content-start text-right">
                                                    <button type="button" class="btn btn-primary btn-lg add fs-20 p-tb-10 p-lr-10" data-id="0" >اضف مشاركة
                                                        <i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="field">
                                    <!--TO be appended here-->
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-success p-tb-10 m-r-10"><?php echo e(__('حفظ')); ?></button>
                                <a href="<?php echo e(route('students.index')); ?>" class="btn col-md-2 btn-lg fs-20 fw-bolder btn-primary p-tb-10 m-r-10"><?php echo e(__('العودة')); ?></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/tournament/Edit-show.blade.php ENDPATH**/ ?>