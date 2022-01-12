<!DOCTYPE html>
<html dir="rtl">
<?php echo $__env->make('frontend.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Header Start-->
    <?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header End-->
        <!-- nav start-->
    <?php echo $__env->make('frontend.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- nav end-->

    </div>
    <div id="container">
        <div class="container-fluid" style="width: 98%;">
            <div class="row">
                <!--rightcategory start-->
            <?php echo $__env->make('frontend.partials.rightcategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--rightcategory end-->
            <?php echo $__env->yieldContent('content'); ?>
            <!--leftcategory start-->
            <?php echo $__env->make('frontend.partials.leftcategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--leftcategory end-->

            </div>


        </div>
    </div>
    <!--Footer Start-->
<?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Footer End-->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JS Part End-->
</body>
</html><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/layouts/downloadfrontend.blade.php ENDPATH**/ ?>
