<?php $__env->startSection('content'); ?>
    <div class="home-hero bg-images-14 p-tb-10-md p-tb-5-sm">

        <section class="p-t-112 p-b-28">
            <div class="container p-tb-28 text-right">
                <div class="d-block justify-content-center m-tb-56">
                    <?php if(session()->has('success_message')): ?>
                        <div>
                            <h1 class="color-2 fs-42 fw-bold mb-4"><?php echo e(session()->get('success_message')); ?></h1>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('error_message')): ?>
                        <div class="alert alert-danger fs-20"><?php echo e(session()->get('error_message')); ?></div>
                    <?php endif; ?>
                </div>
            <div class="m-tb-56 col-lg-3">
                <a href="<?php echo e(route('event.index')); ?>" class="btn btn-primary btn-lg p-lr-25 p-tb-10"> العودة</a>
            </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<script>
    import App from "../../../public/js/app";
    export default {
        components: {App}
    }
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/pages/eventRegistred.blade.php ENDPATH**/ ?>