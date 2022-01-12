<!DOCTYPE html>
<html dir="rtl">
<?php echo $__env->make('users.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <!-- Top Bar End-->
        <!-- Header Start-->
        <?php echo $__env->make('users.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
       <?php echo $__env->make('users.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main آقایانu End-->
    </div>

    <?php echo $__env->yieldContent('content'); ?>
    <!--Footer Start-->
    <?php echo $__env->make('users.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Footer End-->
</div>

<!-- JS Part Start-->
<script type="text/javascript" src="<?php echo e(asset('js/jquery-2.1.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.easing-1.3.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.dcjqaccordion.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
<!-- JS Part End-->
</body>
</html><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/layouts/users.blade.php ENDPATH**/ ?>