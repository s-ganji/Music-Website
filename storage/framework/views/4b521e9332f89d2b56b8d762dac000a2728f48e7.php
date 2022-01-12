<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">رزرو کنسرت </h3>
    <?php if($concerts && count($concerts)>0): ?>
        <?php $__currentLoopData = $concerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">
                        <i class="icon-blue"></i>
                        <span> رزرو کنسرت<span> <?php echo e($concert->singer_Fname); ?> </span>   </span>
                    </h2>

                    <span><?php echo e($concert->created_at); ?></span> | 2 نظر

                    <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                </div>
                <div class="pcnt">
                    <div class="center">
                        <p></p>
                        <h2> <?php echo e($concert->singer_Fname); ?></h2>
                        <p></p>
                        <p>
                            <a href="https://nex1music.ir/tag/دانلود-آهنگ-جدید/">رزرو کنسرت جدید</a>
                            <strong><a href="https://nex1music.ir/tag/میلاد-جهان/"><?php echo e($concert->singer_Fname); ?></a></strong>
                        <p><strong><a href="https://nex1music.ir/tag/milad-jahan/"><?php echo e($concert->singer_Ename); ?></a></strong>
                        </p>
                        <p>
                            <img src="../posters/<?php echo e($concert->image_name); ?>"
                                 data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                 alt="میلاد جهان سلطان قلبم | دانلود آهنگ میلاد جهان به نام سلطان قلبم" class="loaded"
                                 data-was-processed="true" width="480" height="480">
                        </p>
                    </div>
                    <div style="font-size: 20px">
                        <label><b>نام خواننده :</b> </label>
                        <label><?php echo e($concert->singer_Fname); ?></label>
                        <br>
                        <label><b>تاریخ برگزاری :</b> </label>
                        <label><?php echo e($concert->date); ?></label>
                        <br>
                        <label><b>ساعت برگزاری:</b> </label>
                        <label><?php echo e($concert->clock); ?></label>
                        <br>
                        <label><b>قیمت بلیط:</b> </label>
                        <label><?php echo e($concert->price); ?></label>
                        <br>
                    </div>
                </div>
                <div class="psdown">
                    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag"><?php echo e($concert->subject); ?></a> ، <a
                                href="https://nex1music.ir/music/persian-music/" rel="category tag">کنسرت </a> | 7,239 بازدید</span>
                    <a href="<?php echo e(route('frontend.reserve.reserve',$concert->id)); ?>" class="more">رزرو کنسرت</a>
                </div>
            </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/concert/middlemain.blade.php ENDPATH**/ ?>