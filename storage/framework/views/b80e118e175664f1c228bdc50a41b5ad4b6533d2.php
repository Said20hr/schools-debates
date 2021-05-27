<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-14 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <h1 class="color-2 fs-42 fw-bold mb-4"> فعالية <?php echo e($event->name); ?> </h1>
                    <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-tb-14">
                            <img class="img-fluid" src="<?php echo e(asset('storage/events/'.$event->image)); ?>" alt="" style="border-radius: 25px">
                        </div>
                    </div>
                <div class="col-lg-8 col-md-12 col-sm-12 p-tb-14" >
                    <div class="d-flex justify-content-between col-md-8 m-tb-14">
                        <div class="fs-24 font-weight-bold"><?php echo e($event->date); ?><i class="ti-time ml-2"></i></div>
                        <div class="fs-24 font-weight-bold"><i class="ti-user ml-2"></i>  عدد المسجلين (<?php echo e($count_participants); ?>) </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1 class="fs-40 font-weight-bolder color-1">الوصف</h1>
                        <div class="separator text-center m-tb-28"></div>
                        <p class="fs-20">
                            <?php echo $event->description; ?>

                        </p>
                    </div>
                </div>
                <div id="register" class="d-block justify-content-center m-tb-56">
                    <?php if(session()->has('success_message')): ?>
                        <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                    <?php endif; ?>
                    <?php if(session()->has('error_message')): ?>
                        <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                    <?php endif; ?>
                </div>

                <div class="card-body bg-white"  style="border-top:10px #0d4d6c solid   ;box-shadow: 0 5px 10px rgba(0,0,0,0.19), 0 2px 2px rgba(0,0,0,0.23);">
                    <?php if($event->case): ?>
                    <?php if(auth()->check()): ?>
                        <?php if($eventsUser_exist): ?>
                            <div class="p-t-24 fs-24 font-weight-bolder text-center color-1">
                                <i class="ti-check-box fw-bolder m-lr-14"></i>مسجل في هذه الغعالية
                            </div>
                        <?php else: ?>
                            <?php if(auth()->user()->role == 'student'): ?>
                                <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3">التسجيل في الفعالية</h1>
                                <div class="separator text-center m-tb-28 mx-3"></div>
                                <div class="container p-tb-28">
                            <form action="<?php echo e(route('event.store')); ?>" method="POST" >
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="event" value="<?php echo e($event->id); ?>">
                                <div class="row p-lr-28 p-t-14">
                            <div class="col-md-4 mb-3">
                                <label for="name" class="form-label fs-16 pb-2 p-r-10 clblack">الاسم الاول * </label>
                                <div class="input-group mb-2">
                                    <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="name" value="<?php echo e(auth()->user()->name); ?>" required disabled>
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
                            <div class="col-md-4 mb-3">
                                <label for="second_name" class="form-label fs-16 pb-2 p-r-10 clblack">الاسم الثاني * </label>
                                <div class="input-group mb-2">
                                    <input id="second_name" class="form-control <?php $__errorArgs = ['second_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="second_name" value="<?php echo e(auth()->user()->second_name); ?>" required disabled>
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
                            <div class="col-md-4 mb-3">
                                <label for="lastname" class="form-label fs-16 pb-2 p-r-10 clblack">اسم العائلة * </label>
                                <div class="input-group mb-2">
                                    <input id="lastname" class="form-control <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="lastname" value="<?php echo e(auth()->user()->lastname); ?>" required disabled>
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
                            <div class="col-md-4 mb-3">
                                <label for="email" class="form-label fs-16  pb-2 p-r-10 clblack">البريد الإلكتروني * </label>
                                <div class="input-group mb-3">
                                    <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="email" value="<?php echo e(auth()->user()->email); ?>"  required disabled>
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
                            <div class="col-md-4 mb-3">
                                <label for="school" class="form-label fs-16  pb-2 p-r-10 clblack">المدرسة * </label>
                                <div class="input-group mb-3">
                                    <input id="school" class="form-control <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="school" value="<?php echo e(auth()->user()->school); ?>"  required disabled>
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
                            <div class="col-md-4 mb-3">
                                <label for="level" class="form-label fs-16  pb-2 p-r-10 clblack">الصف * </label>
                                <div class="input-group mb-3">
                                    <input id="level" class="form-control <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                           name="level" value="<?php echo e(auth()->user()->level); ?>"  required disabled>
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
                           <div class="d-flex justify-content-center">
                            <div class="col-md-3 m-tb-7">
                                <button type="submit" class="btn btn-primary p-tb-12 fs-20">
                                    سجل
                                </button>
                            </div>
                           </div>
                        </div>*
                            </form>
                        </div>
                            <?php else: ?>
                                <div class="d-block mt-4 text-center">
                                    <div class="fs-22 font-weight-bold color-1 mb-2">
                                        فقط الاعضاء (المتناظرين) يمكنهم التسجيل في هذه الفعالية
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="d-block mt-4 text-center">
                            <div class="fs-22 font-weight-bold color-1 mb-2">
                                فقط الاعضاء (المتناظرين) يمكنهم التسجيل في هذه الفعالية
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-3 m-tb-7 text-center">
                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary p-tb-12 fs-20">
                                        سجل دخولك بحسابك (متناظر)
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php else: ?>
                        <div class="d-block mt-4 text-center">
                            <div class="fs-22 font-weight-bold color-1 mb-2">
                                هذه الفعالية مغلوقة
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if(count($users_reg)>0): ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 p-tb-14 m-tb-56">
                    <h1 class="fs-30 font-weight-bolder color-1 mt-3 mx-3"> آخر  المسجلين </h1>
                    <div class="separator text-center m-tb-28 mx-3"></div>
                    <table class="table  table-striped">
                        <thead>
                        <tr class="bg-3">
                            <td></td>
                            <td>الصورة</td>
                            <td>الاسم الكامل</td>
                            <td>المدرسة</td>
                            <td>الصف</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users_reg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="fs-20 pt-3"><?php echo e($loop->index+1); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/users/students/avatars/'.$user->user->avatar)); ?>" alt="user-avatar" class="img-fluid img-blog-writer class="fs-18 pt-3" ">
                            </td>
                            <td class="fs-18 pt-3"><?php echo e($user->user->name." ".$user->user->lastname); ?></td>
                            <td class="fs-18 pt-3"><?php echo e($user->user->school); ?></td>
                            <td class="fs-18 pt-3"><?php echo e($user->user->level); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>


            <div class="container">
                <div class="p-tb-14 event-1">
                    <h1 class="fs-30 font-weight-bolder color-1">الفعاليات اخرى</h1>
                    <div class="separator text-center m-tb-28"></div>
                    <div class="row">
                        <?php $__currentLoopData = $otherEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="" class="img-blog">
                                        <img class="img-fluid" src="<?php echo e(asset('storage/events/'.$event->image)); ?>" alt="">
                                    </a>
                                    <div class="clblack">
                                        <div class="text-right p-t-14 p-lr-14">
                                            <a href="<?php echo e(route('event.show',$event->id)); ?>" class="fs-24 font-weight-bolder clblack text-decoration-none"><?php echo e($event->name); ?>  </a>
                                            <div class="d-flex p-tb-10">
                                                <div class="fs-16 ml-3">
                                                    <?php echo e($event->date); ?>  <i class="ti-time ml-2"></i>
                                                </div>
                                                <div class="fs-16 ml-3">
                                                    <i class="ti-user ml-2"></i>
                                                    <?php echo e($event->participants); ?>

                                                </div>
                                            </div>
                                            <div class="text-right p-tb-10">
                                                <p class="fs-16 p-lr-7">
                                                    <?php echo \Illuminate\Support\Str::words($event->description, 10, ' ...'); ?>

                                                </p>
                                            </div>
                                            <div class="p-t-10 d-flex justify-content-center p-lr-14 p-b-24 text-centers">
                                                <div class="col-md-10">
                                                    <a href="<?php echo e(route('event.show',$event->id)); ?>" class="btn btn-primary p-tb-10 fs-18">
                                                        سجل
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-3 p-tb-28">
            <div class=" p-tb-28 text-center">
                <div class="container newletter">
                    <div class="d-flex justify-content-start mr-auto ">
                        <div class="col-lg-9 col-md-2 col-sm-12">
                            <div class="text-center">
                                <h1 class="fs-38 fw-bold m-tb-14">الإشتراك فى القائمة البريدية</h1>
                                <p class="fs-19">أشترك فى القائمة البريدية لمتابعة أخر عروضنا وأخبارنا</p>
                                <form class="d-flex mt-4" action="<?php echo e(route('newsletter')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="offset-2"></div>
                                    <input type="email" name="email" class="form-control col-md-6 p-lr-28" placeholder="بريدك الالكترونى" required="required" style="border-radius: 0 25px 25px 0">
                                    <input type="submit" class="btn btn-primary col-md-2 fs-19 font-weight-bold p-lr-7" value="الإشتراك" style="border-radius: 25px 0 0  25px ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/pages/EventSingle.blade.php ENDPATH**/ ?>