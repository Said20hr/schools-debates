<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="مناظرات المدارس">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--===============================================================================================-->
    <title><?php echo e(config('app.name', 'مناظرات المدارس')); ?></title>
    <!--===============================================================================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon/favicon-16x16.png')); ?>">
    <link rel="mask-icon" href="<?php echo e(asset('favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <!--===============================================================================================-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('/dist/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/dist/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/dist/src/bootoast.css')); ?>" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/themify-icons.css')); ?>">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/ie7/ie7.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/style.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/util.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/custom.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/main.css")); ?>>


    <!--===============================================================================================-->

</head>
<body>
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Scripts -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('/dist/src/bootoast.js')); ?>"></script>
<script src="<?php echo e(asset('js/vue.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/layouts/app.blade.php ENDPATH**/ ?>