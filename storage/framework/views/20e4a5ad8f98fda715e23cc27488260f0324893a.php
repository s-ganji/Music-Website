<?php $__env->startSection('content'); ?>
<div id="container">
    <div class="container-fluid" style="width: 90%">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="music_upload.html">آپلود آهنگ  </a></li>
        </ul>

        <!--Middle Part Start-->
        <?php echo $__env->make('users.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-9" id="content">
            <h1 class="title" style="color: seagreen;">آپلود آهنگ </h1>
            <br>
            <form class="text-center " method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label  class="col-sm-4 control-label">نام فارسی آهنگ  :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="F_name" placeholder="نام کامل فارسی آهنگ را وارد کنید"
                               value="<?php echo e(old('F_name',isset($fileItem) ? $fileItem->F_name : '')); ?>" name="F_name">
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label">نام انگلیسی آهنگ  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="E_name" placeholder="نام کامل انگلیسی آهنگ را وارد کنید"
                                   value="<?php echo e(old('E_name',isset($fileItem) ? $fileItem->E_name : '')); ?>" name="E_name">
                        </div>
                    </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام فارسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید " value="<?php echo e(old('singer_Fname',isset($fileItem) ? $fileItem->singer_Fname : '')); ?>" name="singer_Fname">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام انگلیسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید " value="<?php echo e(old('singer_Ename',isset($fileItem) ? $fileItem->singer_Ename : '')); ?>" name="singer_Ename">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">موضوع : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="subject" placeholder=" موضوع آهنگ را وارد نمایید" value="<?php echo e(old('subject',isset($fileItem) ? $fileItem->subject : '')); ?>" name="subject">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">دسته بندی آهنگ </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="category" name="category">
                                    <option value="شاد" <?php echo e(isset($fileItem) && $fileItem->category == 'شاد'? 'selected' : ''); ?>>شاد </option>
                                    <option value="غمگین" <?php echo e(isset($fileItem) && $fileItem->category == 'غمگین'? 'selected' : ''); ?>>غمگین</option>
                                    <option value="پاپ" <?php echo e(isset($fileItem) && $fileItem->category == 'پاپ'? 'selected' : ''); ?>>پاپ </option>
                                    <option value="سنتی" <?php echo e(isset($fileItem) && $fileItem->category == 'سنتی'? 'selected' : ''); ?>>سنتی</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                    <div class="form-group">
                            <label class="col-sm-4 control-label">نوع آهنگ </label>
                            <div class="col-sm-8">
                                <select class="form-control" id="type" name="type">
                                    <option value="ایرانی" <?php echo e(isset($fileItem) && $fileItem->type == 'ایرانی'? 'selected' : ''); ?>>ایرانی </option>
                                    <option value="خارجی" <?php echo e(isset($fileItem) && $fileItem->type == 'خارجی'? 'selected' : ''); ?>>خارجی</option>

                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 control-label" for="Lyrics">متن آهنگ </label>
                            <div class="col-md-8 col-sm-8">
                                <textarea name="Lyrics" rows="10" id="Lyrics" class="form-control"><?php echo e(old('Lyrics',isset($fileItem) ? $fileItem->Lyrics : '')); ?></textarea>
                            </div>
                        </div>
                        <br><br><br>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">فایل: </label>
                        <div class="col-sm-10">
                            <input type="file" name="fileItem" >
                        </div>
                    </div>

                    <br><br><br>
                    <div class="buttons">
                        <div class="pull-right">                            &nbsp;
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/music/create.blade.php ENDPATH**/ ?>