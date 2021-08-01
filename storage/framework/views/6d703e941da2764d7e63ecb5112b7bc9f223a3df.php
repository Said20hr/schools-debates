<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/cropper.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Media</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div style="float:left;">
                            <?php if($parentFolder !== 'disable'): ?>
                                <a class="btn btn-primary mt-2" href="<?php echo e(route('media.folder.index', [ 'id' => $parentFolder ])); ?>">
                                    <i class="cil-level-up"></i>
                                    back
                                </a>
                            <?php endif; ?>
                            <a class="btn btn-primary mt-2" href="<?php echo e(route('media.folder.add', [ 'thisFolder' => $thisFolder ])); ?>">
                                <i class="cil-plus"></i> 
                                <i class="cil-folder"></i>
                                New folder
                            </a>
                        </div>
                        <div style="float:left;">
                            <form method="POST" action="<?php echo e(route('media.file.add')); ?>" enctype="multipart/form-data" id="file-file-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>" id="this-folder-id"/> 
                                <label class="btn btn-primary mt-2 ml-1">
                                    <i class="cil-plus"></i>
                                    <i class="cil-file"></i>
                                    New file <input type="file" name="file" id="file-file-input" hidden>
                                </label> 
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <table class="table table-striped table-bordered datatable">
                            <tbody>
                                <?php $__currentLoopData = $mediaFolders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaFolder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('media.folder.index', [ 'id' => $mediaFolder->id ])); ?>">
                                                <i class="cil-folder"></i> 
                                                <?php echo e($mediaFolder->name); ?>

                                            </a>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <button
                                                class="btn btn-primary file-change-folder-name"
                                                atr="<?php echo e($mediaFolder->id); ?>"
                                            >
                                                Rename
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <button 
                                                class="btn btn-primary file-move-folder"
                                                atr="<?php echo e($mediaFolder->id); ?>"
                                            >
                                                Move
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <?php if($mediaFolder->resource != 1): ?>
                                                <button 
                                                    class="btn btn-danger file-delete-folder"
                                                    atr="<?php echo e($mediaFolder->id); ?>"
                                                >
                                                    Delete
                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="click-file" atr="<?php echo e($media->id); ?>">
                                            <i class="cil-file"></i> 
                                            <?php echo e($media->name); ?>

                                        </td>
                                        <td>
                                            <a 
                                                href="<?php echo $media->getUrl(); ?>"
                                                class="btn btn-primary"
                                            >
                                                Open
                                            </a>
                                        </td>
                                        <td>
                                            <button
                                                class="btn btn-primary file-change-file-name"
                                                atr="<?php echo e($media->id); ?>"
                                            >
                                                Rename
                                            </button>
                                        </td>
                                        <td>
                                            <a 
                                                href="<?php echo e(route('media.file.copy', ['id' => $media->id, 'thisFolder' => $thisFolder])); ?>"
                                                class="btn btn-primary"
                                            >   
                                                Copy
                                            </a>
                                        </td>
                                        <td>
                                            <button 
                                                class="btn btn-primary file-move-file"
                                                atr="<?php echo e($media->id); ?>"
                                            >
                                                Move
                                            </button>
                                        </td>
                                        <td>
                                            <?php 
                                                $mime = explode('/', $media->mime_type);
                                                if($mime[0] === 'image'){
                                            ?>
                                                <button 
                                                    class="btn btn-success file-cropp-file"
                                                    atr="<?php echo e($media->id); ?>"
                                                >
                                                    Cropp
                                                </button>
                                            <?php 
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <button 
                                                class="btn btn-danger file-delete-file"
                                                atr="<?php echo e($media->id); ?>"
                                            >
                                                Delete
                                            </button>

                                            <!--
                                            <a 
                                                class="btn btn-danger" 
                                                href="<?php echo e(route('media.file.delete', ['id' => $media->id, 'thisFolder' => $thisFolder])); ?>"
                                            >
                                                Delete
                                            </a>
                                            -->
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4">

                    <div class="card border-primary" id="file-move-folder">
                            <div class="card-header">
                                <h4>Move folder</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('media.folder.move')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                    <input type="hidden" name="id" value="" id="file-move-folder-id">
                                    <table class="table table-striped table-bordered">
                                        <?php if($parentFolder !== 'disable'): ?>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="moveUp">
                                                </td>
                                                <td>
                                                    Move up
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $mediaFolders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaFolder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <input 
                                                        type="radio" 
                                                        name="folder" 
                                                        value="<?php echo e($mediaFolder->id); ?>"
                                                        class="file-move-folder-radio"
                                                    >
                                                </td>
                                                <td>
                                                    <?php echo e($mediaFolder->name); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-move-folder-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-move-file">
                            <div class="card-header">
                                <h4>Move file</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('media.file.move')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                    <input type="hidden" name="id" value="" id="file-move-file-id">
                                    <table class="table table-striped table-bordered">
                                        <?php if($parentFolder !== 'disable'): ?>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="moveUp">
                                                </td>
                                                <td>
                                                    Move up
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $mediaFolders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaFolder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="<?php echo e($mediaFolder->id); ?>">
                                                </td>
                                                <td>
                                                    <?php echo e($mediaFolder->name); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-move-file-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-rename-file-card">
                            <div class="card-header">
                                <h4>Rename file</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('media.file.update')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                    <input type="hidden" name="id" value="" id="file-rename-file-id">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="file-rename-file-name"
                                        class="form-control"
                                    >
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-rename-file-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="card border-primary" id="file-rename-folder-card">
                            <div class="card-header">
                                <h4>Rename folder</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('media.folder.update')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                    <input type="hidden" name="id" value="" id="file-rename-folder-id">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="file-rename-folder-name"
                                        class="form-control"
                                    >
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-rename-folder-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-info-card">
                            <div class="card-header">
                                <h4>File info</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>
                                            Name
                                        </td>
                                        <td id="file-div-name">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Real Name
                                        </td>
                                        <td id="file-div-real-name">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            URL
                                        </td>
                                        <td id="file-div-url">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            mime type
                                        </td>
                                        <td id="file-div-mime-type">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Size
                                        </td>
                                        <td id="file-div-size">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Created at
                                        </td>
                                        <td id="file-div-created-at">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Updated at
                                        </td>
                                        <td id="file-div-updated-at">

                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="remove-file-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete file</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="<?php echo e(route('media.file.delete')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                        <input type="hidden" name="id" value="" id="file-delete-file-id">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content-->
                        </div>
                        <!-- /.modal-dialog-->
                    </div>

                    <div class="modal fade" id="remove-folder-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete folder</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>If you delete a folder, all subfolders and files will also be deleted</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="<?php echo e(route('media.folder.delete')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="thisFolder" value="<?php echo e($thisFolder); ?>">
                                        <input type="hidden" name="id" value="" id="file-delete-folder-id">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content-->
                        </div>
                        <!-- /.modal-dialog-->
                    </div>

                    <div class="modal fade" id="cropp-img-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Cropp image</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <img src="" id="cropp-img-img" />


                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" type="button" id="cropp-img-save-button">Save</button>
                                </div>
                            </div>
                            <!-- /.modal-content-->
                        </div>
                        <!-- /.modal-dialog-->
                    </div>


                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
    #cropp-img-img{
        max-width:500px;
        max-height:500px;
    }

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e(asset('js/axios.min.js')); ?>"></script> 
<script src="<?php echo e(asset('js/cropper.js')); ?>"></script>
<script src="<?php echo e(asset('js/media.js')); ?>"></script> 
<script src="<?php echo e(asset('js/media-cropp.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saidhr20/dev/debates/schools-debates/resources/views/dashboard/media/index.blade.php ENDPATH**/ ?>