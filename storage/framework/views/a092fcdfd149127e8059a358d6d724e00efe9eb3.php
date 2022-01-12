<?php $__env->startSection('content'); ?>
    <!--Middle Part Start-->

    <div id="content" class="col-lg-7 col-md-7 col-sm-12">
        <h3 class="subtitle">رسید خرید </h3>
                <div class="sdr">
                    <div class="ps anm">
                        <div class="pstop ">
                            <h2 class="">رسید خرید بلیط کنسرت شما
                            </h2>
                        </div>
                        <div class="pcnt">
                            <table class="profileTable" align="center">
                                <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
                               <?php echo $__env->make('frontend.payment.factor',$ticket, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </thead>
                            </table>
                        </div>
                        <div class="psdown">

                            <a href="<?php echo e(route('frontend.users.index')); ?>" class="more">تایید</a>

                        </div>

                    </div>
                </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/payment/payment.blade.php ENDPATH**/ ?>