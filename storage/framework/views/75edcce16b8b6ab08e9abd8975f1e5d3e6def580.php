<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="">
                <img class="logo" src="<?php echo e(URL::asset('images/debate-logo2.png')); ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav navs-top">
                    <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">الرئيسية</a>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('about')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('about.index')); ?>">من نحن ؟</a>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('member')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('member.index')); ?>">اعضاء النادي</a>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('event')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('event.index')); ?>">الفعاليات</a>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('contact')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">اتصل بنا</a>
                    </li>
                    <li class="nav-item <?php echo e((request()->is('blog')) ? 'active' : ''); ?> p-t-5">
                        <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">آخر الأخبار</a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item text-right">
                        <a class="btn btn-outline-primary text-center p-tb-7 lh-40 p-lr-35" href="<?php echo e(route('login')); ?>"  >
                            دخول
                        </a>
                    </li>
                    <li class="nav-item  text-right">
                        <a class="btn btn-primary text-center p-tb-7 lh-40 p-lr-35" href="<?php echo e(route('register')); ?>"  >
                            تسجيّل
                        </a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item p-tb-5 text-right">
                            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-primary text-center p-tb-7 p-lr-25" >
                                عضويتي
                            </a>
                        </li>
                        <li class="nav-item p-tb-5 text-right">

                                <form action="<?php echo e(url('/logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-primary text-center p-tb-7 p-lr-25 fs-18">
                                         تسجيل الخروج
                                    </button>
                                </form>
                        </li>

                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/includes/header.blade.php ENDPATH**/ ?>