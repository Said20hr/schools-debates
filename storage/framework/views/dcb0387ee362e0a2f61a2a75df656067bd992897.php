<!DOCTYPE html>
<!--
* CoreUI Free Laravel Bootstrap Admin Template
* @version  v2.0.1
* @link  https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="ar">
  <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="keyword" content="">
        <title>لوحة التحكم</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- Icons-->
    <link href="<?php echo e(asset('css/free.min.css')); ?>" rel="stylesheet"> <!-- icons -->
    <link href="<?php echo e(asset('css/flag-icon.min.css')); ?>" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/util.css')); ?>" rel="stylesheet">



    <?php echo $__env->yieldContent('css'); ?>

    <!-- Global site tag (gtag.js) - Google Analytics-->
     <link href="<?php echo e(asset('css/coreui-chartjs.css')); ?>" rel="stylesheet">
  </head>



  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show text-right" id="sidebar">

      <?php echo $__env->make('dashboard.shared.nav-builder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('dashboard.shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="c-body">

        <main class="c-main">

          <?php echo $__env->yieldContent('content'); ?>

        </main>
        <?php echo $__env->make('dashboard.shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </div>



    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo e(asset('js/coreui.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/coreui-utils.js')); ?>"></script>
    <script src="<?php echo e(asset('https://kit.fontawesome.com/c729ebc618.js')); ?>" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/dist/src/bootoast.js')); ?>"></script>
    <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/coreui-chartjs.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('js/charts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <?php echo $__env->yieldContent('javascript'); ?>




  </body>
</html>
<?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/base.blade.php ENDPATH**/ ?>