<?php $__env->startSection('content'); ?>

    <div class="container p-t-56 p-b-112"  dir="rtl">
        <div class="text-right p-b-60 p-t-28">
           <h1 class="fs-24 lh-18 font-weight-bolder color-1">  اختر عضويتك و ارسل طلب تسجيلك في مناظرات المدارس</h1>
        </div>

      <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
          <div class=" bg-secondary border-0">
              <ul class="nav nav-pills align-items-center d-flex justify-content-center" id="pills-tab">
                      <li class="col-md-6 p-0 text-center" style="border-radius: 0 0 15px 15px">
                          <a class="nav-link  align-items-center d-flex justify-content-center" id="pills-student-tab" data-toggle="tab"
                             href="#pills-student" role="tab" aria-controls="pills-student" >
                              <img src="<?php echo e(asset('images/Illustration/student.svg')); ?>" alt="img-student" class="p-tb-5" width="" height="65">
                              <div class="text-center font-weight-bolder fs-20 m-lr-56">  متناظر</div>
                          </a>

                      </li>
                      <li class="col-md-6 p-0 text-center" style="border-radius: 0 0 15px 15px">
                          <a class="nav-link align-items-center d-flex justify-content-center" id="pills-coach-tab" data-toggle="tab" href="#pills-coach"
                             role="tab" aria-controls="pills-coach" >
                              <img src="<?php echo e(asset('images/Illustration/trainer.svg')); ?>" alt="img-trainer" class="p-tb-5" width="" height="65">
                              <div class="text-center font-weight-bolder fs-20 m-lr-56">  مدرب</div>
                          </a>

                      </li>
                  </ul>
          </div>
          <div class=" bg-white" style="border-radius: 0 0 15px 15px">
              <div class="tab-content py-4 px-3" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
                  <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                      <input type="hidden" name="type" value="1" required>
                          <div class="text-right">
                              <?php if($errors): ?>
                                  <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="alert alert-danger" role="alert">
                                          <?php echo e($error); ?>

                                      </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php endif; ?>
                              <div class="p-b-14 text-right ">
                                  <legend class="mb-3 font-weight-bolder color-1 fs-22">البيانات الشخصية</legend>
                                  <hr class="mb-4">
                                  <div class="row mb-2">

                                      <div class="col-md-4 mb-1">
                                          <label for="name" class="form-label fs-15  pb-2 p-r-10">الاسم الاول * </label>
                                          <div class="input-group mb-3">

                                              <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                     placeholder="<?php echo e(__('الاسم الأول …  ')); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                          </div>
                                          <?php $__errorArgs = ['name'];
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
                                          <label for="second_name" class="form-label fs-15  pb-2 p-r-10">الاسم الثاني </label>
                                          <div class="input-group mb-3">
                                              <input id="second_name" class="form-control <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                     placeholder="<?php echo e(__('الاسم الثاني …  ')); ?>" name="second_name" value="<?php echo e(old('second_name')); ?>">
                                          </div>
                                          <?php $__errorArgs = ['second_name'];
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
                                          <label for="lastname" class="form-label fs-15  pb-2 p-r-10">اسم العائلة * </label>
                                          <div class="input-group mb-3">

                                              <input id="lastname" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('اسم العائلة … ')); ?>"
                                                     name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>
                                          </div>
                                          <?php $__errorArgs = ['lastname'];
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
                                  <div class="row mb-2">
                                      <div class="col-md-4 mb-1">
                                          <label for="birth_date" class="form-label fs-15  pb-2 p-r-10">تاريخ المبلاد * </label>
                                          <div class="input-group mb-3">
                                              <input id="birth_date" class="form-control <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> pt-2" type="date"
                                                     name="birth_date" value="<?php echo e(old('birth_date') ? old('birth_date') :'2021-06-20'); ?>" required autofocus
                                                     min="1940-01-01" max="2021-12-31">
                                          </div>
                                          <?php $__errorArgs = ['birth_date'];
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
                                          <label for="school" class="form-label fs-15  pb-2 p-r-10">المدرسة * </label>
                                          <div class="input-group mb-3">
                                              <input id="school" class="form-control <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                     placeholder="<?php echo e(__('المدرسة …  ')); ?>" name="school" value="<?php echo e(old('school')); ?>" required autofocus>
                                          </div>
                                          <?php $__errorArgs = ['school'];
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
                                          <label for="level" class="form-label fs-15  pb-2 p-r-10">الصف * </label>
                                          <div class="input-group mb-3">

                                              <input id="level" class="form-control <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('الصف … ')); ?>"
                                                     name="level" value="<?php echo e(old('level')); ?>" required autofocus>
                                          </div>
                                          <?php $__errorArgs = ['level'];
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
                                  <div class="row mb-2">
                                      <div class="col-md-12 mb-2">
                                          <div class="text-muted pb-3"> ﻻ تتعدي 512ميغا</div>
                                          <label for="id_carte" class="form-label fs-15  pb-2 p-r-10">البطاقة المدنية * </label>
                                          <div class="input-group mb-3">
                                              <input class="form-control  <?php $__errorArgs = ['id_carte'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-9 " id="id_carte" type="file" name="id_carte" placeholder="">
                                          </div>
                                          <?php $__errorArgs = ['id_carte'];
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
                                  <div class="row mb-2">
                                      <div class="col-md-6 mb-2">
                                          <label for="email" class="form-label fs-15  pb-2 p-r-10">البريد الإلكتروني * </label>
                                          <div class="input-group mb-3">

                                              <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('example@example.com')); ?>"
                                                     name="email" value="<?php echo e(old('email')); ?>" autofocus required>
                                          </div>
                                          <?php $__errorArgs = ['email'];
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
                                      <div class="col-md-6 mb-2">
                                          <label for="phone" class="form-label fs-15  pb-2 p-r-10">رقم الهاتف * </label>
                                          <div class="input-group mb-3">

                                              <input id="phone" class="form-control  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('رقم الهاتف')); ?>" name="phone" value="<?php echo e(old('phone')); ?>" autofocus  required>
                                          </div>
                                          <?php $__errorArgs = ['phone'];
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
                                  <div class="row mb-2">

                                      <div class="col-md-6 mb-2">
                                          <label for="password" class="form-label fs-15  pb-2 p-r-10">كلمة السر * </label>
                                          <div class="input-group mb-3">

                                              <input id="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="<?php echo e(__('كلمة السر')); ?>"
                                                     name="password" required>
                                          </div>
                                          <?php $__errorArgs = ['password'];
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

                                      <div class="col-md-6 mb-2">
                                          <label for="password_confirmation" class="form-label fs-15  pb-2 p-r-10">تأكيد كلمة السر *  </label>
                                          <div class="input-group mb-3">
                                              <input id="password_confirmation" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                     type="password" placeholder="<?php echo e(__(' تأكيد كلمة السر')); ?>" name="password_confirmation" required>
                                          </div>
                                      </div>

                                  </div>
                                  <hr class="mb-4">
                              </div>
                              <div class="mb-2 text-center">
                                  <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 " type="submit"><?php echo e(__('تسجيل')); ?></button>
                                  <div class="m-tb-14">
                                      <p class="fs-20 p-tb-7 m-b-15"> لديك حساب ؟ <a href="<?php echo e(route('login')); ?>" class="color-1 font-weight-bold">سجل دخولك الى  حسابك</a></p>
                                  </div>
                              </div>
                          </div>
                  </form>
              </div>

              <div class="tab-pane fade" id="pills-coach" role="tabpanel" aria-labelledby="pills-coach-tab">
                  <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="type" value="2" required>
                      <div class="text-right">
                          <?php if($errors->any()): ?>
                                  <div class="alert alert-danger" role="alert">
                                      خطأ في ادخال البيانات
                                  </div>
                          <?php endif; ?>
                          <div class="p-b-14 text-right ">
                              <legend class="mb-3 font-weight-bolder color-1 fs-22">البيانات الشخصية</legend>
                              <hr class="mb-4">
                              <div class="row mb-2">

                                  <div class="col-md-4 mb-1">
                                      <label for="name" class="form-label fs-15  pb-2 p-r-10">الاسم الاول * </label>
                                      <div class="input-group mb-3">

                                          <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                 placeholder="<?php echo e(__('الاسم الأول …  ')); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                      </div>
                                      <?php $__errorArgs = ['name'];
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
                                      <label for="second_name" class="form-label fs-15  pb-2 p-r-10">الاسم الثاني </label>
                                      <div class="input-group mb-3">
                                          <input id="second_name" class="form-control <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                 placeholder="<?php echo e(__('الاسم الثاني …  ')); ?>" name="second_name" value="<?php echo e(old('second_name')); ?>">
                                      </div>
                                      <?php $__errorArgs = ['second_name'];
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
                                      <label for="lastname" class="form-label fs-15  pb-2 p-r-10">اسم العائلة * </label>
                                      <div class="input-group mb-3">

                                          <input id="lastname" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('اسم العائلة … ')); ?>"
                                                 name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>
                                      </div>
                                      <?php $__errorArgs = ['lastname'];
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
                              <div class="row mb-2">
                                  <div class="col-md-4 mb-1">
                                      <label for="birth_date" class="form-label fs-15  pb-2 p-r-10">تاريخ المبلاد * </label>
                                      <div class="input-group mb-3">
                                          <input id="birth_date" class="form-control <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"
                                                 name="birth_date" value="<?php echo e(old('birth_date') ? old('birth_date') :'2021-06-20'); ?>" required autofocus
                                                 min="1940-01-01" max="2021-12-31">
                                      </div>
                                      <?php $__errorArgs = ['birth_date'];
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
                                      <label for="job" class="form-label fs-15  pb-2 p-r-10">المهنة * </label>
                                      <div class="input-group mb-3">
                                          <input id="job" class="form-control <?php $__errorArgs = ['job'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                 placeholder="<?php echo e(__('المهنة …  ')); ?>" name="job" value="<?php echo e(old('job')); ?>" required autofocus>
                                      </div>
                                      <?php $__errorArgs = ['job'];
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
                                      <label for="work_place" class="form-label fs-15  pb-2 p-r-10">مكان العمل * </label>
                                      <div class="input-group mb-3">

                                          <input id="work_place" class="form-control <?php $__errorArgs = ['work_place'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('مكان العمل … ')); ?>"
                                                 name="work_place" value="<?php echo e(old('work_place')); ?>" required autofocus>
                                      </div>
                                      <?php $__errorArgs = ['work_place'];
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
                              <div class="row mb-2">
                                  <div class="col-md-12 mb-2">
                                      <label for="id_carte" class="form-label fs-15  pb-2 p-r-10">البطاقة المدنية * </label>
                                      <div class="input-group mb-3">
                                          <input class="form-control  <?php $__errorArgs = ['id_carte'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-tb-9 " id="" type="file" name="id_carte" placeholder="">
                                      </div>
                                      <?php $__errorArgs = ['id_carte'];
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
                              <div class="row mb-2">
                                  <div class="col-md-6 mb-2">
                                      <label for="email" class="form-label fs-15  pb-2 p-r-10">البريد الإلكتروني * </label>
                                      <div class="input-group mb-3">

                                          <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('example@example.com')); ?>"
                                                 name="email" value="<?php echo e(old('email')); ?>" autofocus required>
                                      </div>
                                      <?php $__errorArgs = ['email'];
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
                                  <div class="col-md-6 mb-2">
                                      <label for="phone" class="form-label fs-15  pb-2 p-r-10">رقم الهاتف * </label>
                                      <div class="input-group mb-3">

                                          <input id="phone" class="form-control  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('رقم الهاتف')); ?>" name="phone" value="<?php echo e(old('phone')); ?>" autofocus  required>
                                      </div>
                                      <?php $__errorArgs = ['phone'];
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
                              <div class="row mb-2">

                                  <div class="col-md-6 mb-2">
                                      <label for="password" class="form-label fs-15  pb-2 p-r-10">كلمة السر * </label>
                                      <div class="input-group mb-3">

                                          <input id="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" placeholder="<?php echo e(__('كلمة السر')); ?>"
                                                 name="password" required>
                                      </div>
                                      <?php $__errorArgs = ['password'];
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

                                  <div class="col-md-6 mb-2">
                                      <label for="confirm_password" class="form-label fs-15  pb-2 p-r-10">تأكيد كلمة السر *  </label>
                                      <div class="input-group mb-3">
                                          <input id="confirm_password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="password" placeholder="<?php echo e(__(' تأكيد كلمة السر')); ?>" name="password_confirmation" required>
                                      </div>
                                  </div>

                              </div>
                              <hr class="mb-4">
                          </div>
                          <div class="mb-2 text-center">
                              <button class="btn2 btn-primary col-md-4 fs-24 h-55" type="submit"><?php echo e(__('تسجيل')); ?></button>
                              <div class="m-tb-14">
                                  <p class="fs-20 p-tb-7 m-b-15"> لديك حساب ؟ <a href="<?php echo e(route('login')); ?>" class="color-1 font-weight-bold">سجل دخولك الى  حسابك</a></p>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.authBase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/auth/register.blade.php ENDPATH**/ ?>