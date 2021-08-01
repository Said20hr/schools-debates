
      
    <div class="c-wrapper">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span>
        </button>

        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show"
        responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
            use App\MenuBuilder\FreelyPositionedMenus;
            if(isset($appMenus['top menu'])){
                FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
            }
        ?>  
        <ul class="c-header-nav ml-auto mr-4">


          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="<?php echo e(url('/assets/img/avatars/10.jpg')); ?>" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0" dir="rtl">
              <div class="dropdown-header bg-light py-2 text-right"><strong>الحساب</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon ml-2">
                  <use xlink:href="<?php echo e(url('/icons/sprites/free.svg#cil-user')); ?>"></use>
                </svg>  الملف الشخصي  </a><a class="dropdown-item" href="#">
                <svg class="c-icon ml-2">
                  <use xlink:href="<?php echo e(url('/icons/sprites/free.svg#cil-settings')); ?>"></use>
                </svg> تعديل </a><a class="dropdown-item" href="#">



                <svg class="c-icon ml-2">
                  <use xlink:href="<?php echo e(url('/icons/sprites/free.svg#cil-account-logout')); ?>"></use>
                </svg>
                <form action="<?php echo e(url('/logout')); ?>" method="POST"> <?php echo csrf_field(); ?> <button type="submit" class="btn btn-ghost-dark btn-block">تسجيل الخروج</button></form></a>

            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <?php $segments = ''; ?>
            <?php for($i = 1; $i <= count(Request::segments()); $i++): ?>
                <?php $segments .= '/'. Request::segment($i); ?>
                <?php if($i < count(Request::segments())): ?>
                    <li class="breadcrumb-item"><?php echo e(Request::segment($i)); ?></li>
                <?php else: ?>
                    <li class="breadcrumb-item active"><?php echo e(Request::segment($i)); ?></li>
                <?php endif; ?>
            <?php endfor; ?>
          </ol>
        </div>
    </header><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/shared/header.blade.php ENDPATH**/ ?>