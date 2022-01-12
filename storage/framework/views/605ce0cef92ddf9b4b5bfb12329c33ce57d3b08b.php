<?php $__env->startSection('content'); ?>
    <!--Middle Part Start-->

    <div id="content" class="col-lg-7 col-md-7 col-sm-12">
        <h3 class="subtitle">رزرو بلیط کنسرت </h3>
        <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">  اطلاعات بلیط :
                    </h2>
                </div>
                <div class="pcnt">
                    <table class="profileTable" align="center">
                        <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
                        <?php echo $__env->make('frontend.reserve.info',$ticket, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </thead>
                    </table>
                    <h5 style="float: right">  لطفا شماره صندلی خود را انتخاب نمایید :
                    </h5>
                </div>
                <form action="<?php echo e(route('frontend.reserve.store')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group col-md-3"  >
                    <br/>
                    <select id="inputState" name="seat_num" class="form-control" >
                        
                        <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($number); ?>"><?php echo e($number); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                        <input type="hidden" value="<?php echo e($ticket->id); ?>" name="ticket">

                </div>
                <div class="psdown">


                    <input type="submit" value="رزرو" class="more">

                </div>
                </form>


            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/reserve/reserve.blade.php ENDPATH**/ ?>