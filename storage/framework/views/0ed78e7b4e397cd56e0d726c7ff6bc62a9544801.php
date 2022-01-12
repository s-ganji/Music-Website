<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="container-fluid" style="width: 90%">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="category.html">پروفایل </a></li>
            </ul>
            <!--Left Part Start -->
            <!--Left Part End -->
            <!--Middle Part Start-->
            <div id="content" >
                <div class="sdr2">
                    <h1>پروفایل شما </h1>
                    <div class="ps2 anm">
                        <div class="pcnt">
                            <div class="center">
                                <div class="row">
                                    <div class="col-md-7">
                                        <?php echo $__env->make('frontend.users.profileTable',$user, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </div>
                                <!--    <img src="image/profile.jpg" class="col-md-5 center profileImage"> -->
                                    <br>
                                    <br>
                                </div>
                                <!--this is table of information-->
                                <!--end of table of information-->

                                <!--Tickets-->

                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p class="profileEXE">بلیط های رزرو شده :  </p>
                                    <br>
                                    <br>
                                    <br>

                                </div>


                                <?php if($tickets ): ?>
                                    <table class="table table-bordered">
                                        <?php echo $__env->make('frontend.users.columns', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('frontend.users.item',$ticket, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>

                                <?php endif; ?>



                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="concert_upload.html">
                                    <button  align="left" class="ptofileButton" onClick="">ثبت کنسرت </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="psdown">
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/users/profile.blade.php ENDPATH**/ ?>