<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="container-fluid " style="width: 90%">
            <div class="col-lg-9 col-md-9">
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="music_upload.html">آپلود موزیک ویدئو  </a></li>
                </ul>
            </div>


            <!--Middle Part Start-->
            <?php echo $__env->make('users.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-sm-9" id="content">
                <h1 class="title" style="color: seagreen;">آپلود موزیک ویدئو </h1>
                <br>
                <form class="text-center " method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">نام فارسی موزیک ویدئو  :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="F_name" placeholder="نام کامل فارسی موزیک ویدئو را وارد کنید"
                                   value="<?php echo e(old('F_name',isset($musicvideoItem) ? $musicvideoItem->F_name : '')); ?>" name="F_name">
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label  class="col-sm-4 control-label">نام انگلیسی موزیک ویدئو  :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="E_name" placeholder="نام کامل انگلیسی موزیک ویدئو را وارد کنید"
                                       value="<?php echo e(old('E_name',isset($musicvideoItem) ? $musicvideoItem->E_name : '')); ?>" name="E_name">
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام فارسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Fname" placeholder="نام کامل فارسی خواننده را وارد کنید " value="<?php echo e(old('singer_Fname',isset($musicvideoItem) ? $musicvideoItem->singer_Fname : '')); ?>" name="singer_Fname">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">نام انگلیسی خواننده : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="singer_Ename" placeholder="نام کامل انگلیسی خواننده را وارد کنید " value="<?php echo e(old('singer_Ename',isset($musicvideoItem) ? $musicvideoItem->singer_Ename : '')); ?>" name="singer_Ename">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">موضوع : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="subject" placeholder=" موضوع آهنگ را وارد نمایید" value="<?php echo e(old('subject',isset($musicvideoItem) ? $musicvideoItem->subject : '')); ?>" name="subject">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">دسته بندی موزیک ویدئو </label>
                            <div class="col-sm-8">
                                <select class="select2" id="category" name="category[]"  multiple>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                       
                        <br>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">فایل: </label>
                            <div class="col-sm-10">
                                <input type="file" name="musicvideoItem" >
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">پوستر: </label>
                            <div class="col-sm-10">
                                <input type="file" name="musicvideoposter" >
                            </div>
                        </div>

                        <br><br><br>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/musicvideo/create.blade.php ENDPATH**/ ?>