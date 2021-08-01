<?php $__env->startSection('content'); ?>


<div class="container-fluid" >
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12" dir="rtl">
        <div class="card">
          <div class="card-header text-right"><h4>عناصر القائمة </h4></div>
            <div class="card-body">
                <div class="row mb-3 ml-3">
                    <a class="btn btn-lg btn-primary" href="<?php echo e(route('menu.create')); ?>">إضافة عنصر قائمة جديد </a>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <form action="<?php echo e(route('menu.index')); ?>" methos="GET">
                            <select class="form-control" name="menu">
                                <?php $__currentLoopData = $menulist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($menu1->id == $thisMenu): ?>
                                        <option value="<?php echo e($menu1->id); ?>" selected><?php echo e($menu1->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($menu1->id); ?>"><?php echo e($menu1->name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-primary">قائمة التغيير</button>
                        </form>
                    </div>
                </div>
<?php

    function renderDropdownForMenuEdit($data, $role){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<tr>';
            echo '<td>';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . '"></i>';
            }
            echo '</td>';
            echo '<td>' . $data['slug'] . '</td>';
            echo '<td>' . $data['name'] . '</td>';
            echo '<td></td>';
            echo '<td>' . $data['sequence'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-primary" href="' . route('menu.show', ['id' => $data['id']]) . '">مشاهده</a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-success" href="' . route('menu.edit', ['id' => $data['id']]) . '">تعديل</a>';
            echo '</td>';
            echo '<td>';
            echo '<a class="btn btn-danger" href="' . route('menu.delete', ['id' => $data['id']]) . '">حذف</a>';
            echo '</td>';
            echo '</tr>';
            renderDropdownForMenuEdit( $data['elements'], $role );
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<tr>';
                    echo '<td>';
                    echo '<i class="cil-arrow-thick-to-right"></i>';
                    echo '</td>';
                    echo '<td>' . $data[$i]['slug'] . '</td>';
                    echo '<td>' . $data[$i]['name'] . '</td>';
                    echo '<td>' . $data[$i]['href'] . '</td>';
                    echo '<td>' . $data[$i]['sequence'] . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-primary" href="' . route('menu.show', ['id' => $data[$i]['id']]) . '">مشاهده</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-success" href="' . route('menu.edit', ['id' => $data[$i]['id']]) . '">تعديل</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-danger" href="' . route('menu.delete', ['id' => $data[$i]['id']]) . '">حذف</a>';
                    echo '</td>';
                    echo '</tr>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdownForMenuEdit( $data[$i], $role );
                }
            }
        }
    }

              ?>


                <table class="table table-striped table-bordered datatable">
                    <thead class="text-right">
                        <tr>
                            <th>الأيقونة</th>
                            <th>نوع</th>
                            <th>اسم</th>
                            <th>لرابط</th>
                            <th>التسلسل</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
            
                <?php $__currentLoopData = $menuToEdit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($menuel['slug'] === 'link'): ?>
                        <tr>
                            <td>
                                <?php if($menuel['hasIcon'] === true): ?>
                                    <?php if($menuel['iconType'] === 'coreui'): ?>
                                        <i class="<?php echo e($menuel['icon']); ?>"></i>
                                    <?php endif; ?>
                                <?php endif; ?> 
                            </td>
                            <td>
                                <?php echo e($menuel['slug']); ?>

                            </td>
                            <td>
                                <?php echo e($menuel['name']); ?>

                            </td>
                            <td>
                                <?php echo e($menuel['href']); ?>

                            </td>
                            <td>
                                <?php echo e($menuel['sequence']); ?>

                            </td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(route('menu.show', ['id' => $menuel['id']])); ?>">مشاهده</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('menu.edit', ['id' => $menuel['id']])); ?>">تعديل</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="<?php echo e(route('menu.delete', ['id' => $menuel['id']])); ?>">حذف</a>
                            </td>
                        </tr>
                    <?php elseif($menuel['slug'] === 'dropdown'): ?>
                      <?php renderDropdownForMenuEdit($menuel, $role) ?>
                    <?php elseif($menuel['slug'] === 'title'): ?>
                        <tr>
                            <td>
                                <?php if($menuel['hasIcon'] === true): ?>
                                    <?php if($menuel['iconType'] === 'coreui'): ?>
                                        <svg class="">
                                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#<?php echo e($menuel['icon']); ?>"></use>
                                        </svg> 
                                        <i class="<?php echo e($menuel['icon']); ?>"></i> 
                                    <?php endif; ?>
                                <?php endif; ?> 
                            </td>
                            <td>
                                <?php echo e($menuel['slug']); ?>

                            </td>
                            <td>
                                <?php echo e($menuel['name']); ?>

                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <?php echo e($menuel['sequence']); ?>

                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('menu.up', ['id' => $menuel['id']])); ?>">
                                    <i class="cil-arrow-thick-top"></i> 
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('menu.down', ['id' => $menuel['id']])); ?>">
                                    <i class="cil-arrow-thick-bottom"></i>  
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(route('menu.show', ['id' => $menuel['id']])); ?>">مشاهده</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('menu.edit', ['id' => $menuel['id']])); ?>">تعديل</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="<?php echo e(route('menu.delete', ['id' => $menuel['id']])); ?>">حذف</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>

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
<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/editmenu/index.blade.php ENDPATH**/ ?>