<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="container-fluid " style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">ایجاد دسته بندی جدید  </a></li>
                </ul>
            </div>
            <!--Middle Part Start-->
            <?php echo $__env->make('users.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">ایجاد دسته بندی جدید</h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">عنوان  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name"
                                   value="<?php echo e(old('name',isset($catItem) ? $catItem->name : '')); ?>" name="name">
                        </div>


                        <div class="buttons">
                            <div class="pull-right">                          
                                <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/category/create.blade.php ENDPATH**/ ?>