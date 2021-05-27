<header class="">
    <nav class="navbar navbar-expand-lg  bg-secondary " dir="rtl">
        <div class="container col-md-8">
            <a class="navbar-brand" href="">
                <img class="logo" src="<?php echo e(URL::asset('images/debate-logo2.png')); ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto " id="navbarResponsive">
                <ul class="navbar-nav  mr-auto">

                    <?php if((request()->is('login'))): ?>
                    <li class="nav-item  text-right">
                        <a class="btn2 btn-outline-primary text-center p-tb-10 lh-40 p-lr-35" href="<?php echo e(route('register')); ?>"  >
                            تسجيّل
                        </a>
                    </li>
                    <?php endif; ?>
                        <?php if((request()->is('register'))): ?>
                    <li class="nav-item text-right">
                        <a class="btn2 btn-outline-primary text-center p-tb-10 lh-40 p-lr-35" href="<?php echo e(route('login')); ?>"  >
                            دخول
                        </a>
                    </li>
                        <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/includes/headerAuth.blade.php ENDPATH**/ ?>