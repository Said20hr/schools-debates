<?php $__env->startSection('content'); ?>

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> <?php echo e(__('Create Note')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('notes.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="<?php echo e(__('Title')); ?>" name="title" required autofocus>
                            </div>

                            <div class="form-group row">
                                <label>Content</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="<?php echo e(__('Content..')); ?>" required></textarea>
                            </div>

                            <div class="form-group row">
                                <label>Applies to date</label>
                                <input type="date" class="form-control" name="applies_to_date" required/>
                            </div>

                            <div class="form-group row">
                                <label>Status</label>
                                <select class="form-control" name="status_id">
                                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($status->id); ?>"><?php echo e($status->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label>Note type</label>
                                <input class="form-control" type="text" placeholder="<?php echo e(__('Note type')); ?>" name="note_type" required>
                            </div>
 
                            <button class="btn btn-block btn-success" type="submit"><?php echo e(__('Add')); ?></button>
                            <a href="<?php echo e(route('notes.index')); ?>" class="btn btn-block btn-primary"><?php echo e(__('Return')); ?></a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/notes/create.blade.php ENDPATH**/ ?>