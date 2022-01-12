<!DOCTYPE html>
<html dir="rtl">
<?php echo $__env->make('admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Header Start-->
       <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Header End-->
        <!-- nav start-->
        <?php echo $__env->make('admin.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- nav end-->
    </div>
    <div id="container">
        <div class="container-fluid" style="width: 98%;">
            <div class="row">
                <?php echo $__env->make('admin.partials.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <!--Footer Start-->
   <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="<?php echo e(asset('js/jquery-2.1.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.easing-1.3.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.dcjqaccordion.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/custom-admin.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('bower_components\select2\dist\js\select2.full.min.js')); ?>"></script>


<!-- JS Part End-->
</body>
</html><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/layouts/admin.blade.php ENDPATH**/ ?>