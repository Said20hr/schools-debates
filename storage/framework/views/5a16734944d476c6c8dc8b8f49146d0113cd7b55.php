<?php $__env->startSection('content'); ?>

    <div class="container-fluid text-right" dir="rtl">
        <div class="animated fadeIn">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card ">
                        <div class="col-md-12 justify-content-center no-gutters bor-r5 p-0" style=" box-shadow: 0 5px 10px rgba(0,0,0,0.13), 0 3px 3px rgba(0,0,0,0.17);">
                            <div class=" bg-white" style="border-radius: 0 0 15px 15px">
                                <div class="py-4 px-5">
                                    <?php if(session()->has('success_message')): ?>
                                        <div class="alert alert-success fs-20"><?php echo e(session()->get('success_message')); ?></div>
                                    <?php endif; ?>
                                    <?php if(session()->has('error_message')): ?>
                                        <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                                    <?php endif; ?>
                                    <?php if($edit): ?>
                                    <form method="POST" action="<?php echo e(route('homepageContent.update',$content->id)); ?>" dir="rtl" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <?php else: ?>
                                            <form method="POST" action="<?php echo e(route('homepageContent.store')); ?>" dir="rtl" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php endif; ?>
                                            <div class="text-right">
                                            <?php if($errors): ?>
                                                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php echo e($error); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <div class="p-b-14 text-right ">
                                                <legend class="mb-3 font-weight-bolder color-1 fs-26">محتوى الموقع</legend>
                                                <hr class="mb-4">
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                    <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة الرئيسية</div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title1" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title1" class="form-control <?php $__errorArgs = ['title1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة الاولى … ')); ?>" name="title1" value="<?php echo e($edit ? $content->title_1 : old('title1')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title1'];
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
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title2" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثانية </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title2" class="form-control <?php $__errorArgs = ['title2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة الثانية … ')); ?>" name="title2" value="<?php echo e($edit ? $content->title_2 : old('title2')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title2'];
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
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description1" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description1" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_1 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description1'];
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
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description2" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثانية  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description2" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_2 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description2'];
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
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="description3" class="form-label fs-18  pb-2 p-r-10">وصف علبة المتناظرين </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description3" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->note_1 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description3'];
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
                                                            <label for="description4" class="form-label fs-18  pb-2 p-r-10">وصف علبة المدربين  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description4" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->note_2 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description4'];
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
                                                            <label for="description5" class="form-label fs-18  pb-2 p-r-10">وصف علبة التفاعليات  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description5" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->note_3 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description5'];
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
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة من نحن </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title3" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title3" class="form-control <?php $__errorArgs = ['title3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة الاولى … ')); ?>" name="title3" value="<?php echo e($edit ? $content->title_3 : old('title3')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title3'];
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
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title4" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثانية </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title4" class="form-control <?php $__errorArgs = ['title4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة الثانية … ')); ?>" name="title4" value="<?php echo e($edit ? $content->title_4 : old('title4')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title4'];
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
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description6" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الاولى </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description6" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_3 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description6'];
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
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description7" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثانية  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description7" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_4 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description7'];
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
                                                    <div class=" mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title5" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة الثالثة </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title5" class="form-control <?php $__errorArgs = ['title1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة الثالثة … ')); ?>" name="title5" value="<?php echo e($edit ? $content->title_5 : old('title5')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title5'];
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
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description8" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة الثالثة </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description8" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_5 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description8'];
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
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى الصفحة الفعاليات </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="title6" class="form-label fs-18  pb-2 p-r-10">عنوان الفقرة </label>
                                                            <div class="input-group mb-3">
                                                                <input id="title6" class="form-control <?php $__errorArgs = ['title1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الفقرة  … ')); ?>" name="title6" value="<?php echo e($edit ? $content->title_6 : old('title6')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['title6'];
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
                                                    <div class="row mt-1 mb-2 px-4">
                                                        <div class="col-md-6 mb-1">
                                                            <label for="description9" class="form-label fs-18  pb-2 p-r-10">وصف الفقرة  </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description9" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->text_6 : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description9'];
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
                                                <div class="card border-info">
                                                    <div class="card-header">
                                                        <div class="mb-3 font-weight-bolder color-1 fs-20">محتوى التواصل </div>
                                                    </div>
                                                    <div class="row mt-3 mb-2 px-4">
                                                        <div class="col-md-12 mb-1">
                                                            <label for="address" class="form-label fs-18  pb-2 p-r-10">عنوان الموقع </label>
                                                            <div class="input-group mb-3">
                                                                <input id="address" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('عنوان الموقع  … ')); ?>" name="address" value="<?php echo e($edit ? $content->address : old('address')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['address'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="phone_1" class="form-label fs-18  pb-2 p-r-10">رقم الهاتف 1</label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone_1" class="form-control <?php $__errorArgs = ['phone_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رقم الهاتف 1  … ')); ?>" name="phone_1" value="<?php echo e($edit ? $content->phone_1 : old('phone_1')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['phone_1'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="phone_2" class="form-label fs-18  pb-2 p-r-10">رقم الهاتف 2</label>
                                                            <div class="input-group mb-3">
                                                                <input id="phone_2" class="form-control <?php $__errorArgs = ['phone_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رقم الهاتف 2  … ')); ?>" name="phone_2" value="<?php echo e($edit ? $content->phone_2 : old('phone_2')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['phone_2'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="email_1" class="form-label fs-18  pb-2 p-r-10">البريد الإلكتروني 1</label>
                                                            <div class="input-group mb-3">
                                                                <input id="email_1" class="form-control <?php $__errorArgs = ['email_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('البريد الإلكتروني 1  … ')); ?>" name="email_1" value="<?php echo e($edit ? $content->email_1 : old('email_1')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['email_1'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="email_2" class="form-label fs-18  pb-2 p-r-10">البريد الإلكتروني 2</label>
                                                            <div class="input-group mb-3">
                                                                <input id="email_2" class="form-control <?php $__errorArgs = ['email_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('البريد الإلكتروني21  … ')); ?>" name="email_2" value="<?php echo e($edit ? $content->email_2 : old('email_2')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['email_2'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="fb" class="form-label fs-18  pb-2 p-r-10">رابط الفايسبوك  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="fb" class="form-control <?php $__errorArgs = ['fb'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رابط الفايسبوك  … ')); ?>" name="fb" value="<?php echo e($edit ? $content->fb : old('fb')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['fb'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="yt" class="form-label fs-18  pb-2 p-r-10">رابط اليوتيوب </label>
                                                            <div class="input-group mb-3">
                                                                <input id="yt" class="form-control <?php $__errorArgs = ['yt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رابط اليوتيوب   … ')); ?>" name="yt" value="<?php echo e($edit ? $content->yt : old('yt')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['yt'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="ig" class="form-label fs-18  pb-2 p-r-10">رابط الانستاغرام  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="ig" class="form-control <?php $__errorArgs = ['ig'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رابط الانستاغرام  … ')); ?>" name="ig" value="<?php echo e($edit ? $content->ig : old('ig')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['ig'];
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
                                                        <div class="col-md-3 mb-1">
                                                            <label for="tw" class="form-label fs-18  pb-2 p-r-10">رابط تويتر  </label>
                                                            <div class="input-group mb-3">
                                                                <input id="tw" class="form-control <?php $__errorArgs = ['tw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                                                       placeholder="<?php echo e(__('رابط تويتر  … ')); ?>" name="tw" value="<?php echo e($edit ? $content->tw : old('tw')); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['tw'];
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
                                                        <div class="col-md-12 mb-1">
                                                            <label for="description10" class="form-label fs-18  pb-2 p-r-10">التعريف بالموقع </label>
                                                            <div class="input-group mb-3">
                                                                <textarea name="description10" id="" cols="30" rows="10"
                                                                          class="form-control p-tb-14 p-lr-14"><?php echo e($edit ? $content->description : ''); ?></textarea>
                                                            </div>
                                                            <?php $__errorArgs = ['description10'];
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

                                            </div>
                                            <div class="mb-2 text-center">
                                                <?php if($edit): ?>
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 bor-r5" type="submit"><?php echo e(__('عدل')); ?></button>
                                                <?php else: ?>
                                                    <button class="btn2 btn-primary col-md-4 fs-24 h-55 p-tb-10 lh-10 bor-r5" type="submit"><?php echo e(__('حفظ')); ?></button>
                                                <?php endif; ?>
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

<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/content/index.blade.php ENDPATH**/ ?>