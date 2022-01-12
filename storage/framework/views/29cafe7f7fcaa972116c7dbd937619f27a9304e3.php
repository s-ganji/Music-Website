<!--Middle Part Start-->

<div id="content" class="col-lg-7 col-md-7 col-sm-12">
    <h3 class="subtitle">دانلود آهنگ </h3>
    <?php if($musics && count($musics)>0): ?>
        <?php $__currentLoopData = $musics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $music): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="sdr">
            <div class="ps anm">
                <div class="pstop ">
                    <h2 class="">
                        <i class="icon-blue"></i>
                        <span> دانلود آهنگ<span> <?php echo e($music->singer_Fname); ?> </span>به نام <span> <?php echo e($music->F_name); ?> </span>  </span>
                    </h2>

                    <span><?php echo e($music->created_at); ?></span> | 2 نظر

                    <a id="p2_like" class="like f14" rel="85424" style="float: left"><i class="icn_like"></i> +44</a>
                </div>
                <div class="pcnt">
                    <div class="center">
                        <p></p>
                        <h2><?php echo e($music->F_name); ?> <?php echo e($music->singer_Fname); ?></h2>
                        <p></p>
                        <p>
                            <a href="https://nex1music.ir/tag/دانلود-آهنگ-جدید/">دانلود آهنگ جدید</a>
                            <strong><a href="https://nex1music.ir/tag/میلاد-جهان/"><?php echo e($music->singer_Fname); ?></a></strong> به نام
                            <strong><a href="https://nex1music.ir/tag/سلطان-قلبم/"><?php echo e($music->F_name); ?></a></strong></p>
                        <p><strong><a href="https://nex1music.ir/tag/milad-jahan/"><?php echo e($music->singer_Ename); ?></a></strong> - <strong><a
                                        href="https://nex1music.ir/tag/soltane-ghalbam/"><?php echo e($music->E_name); ?></a></strong>
                        </p>
                        <p>
                            <img src="../posters/<?php echo e($music->image_name); ?>"
                                 data-src="https://nex1music.ir/upload/2019-07-13/milad-jahan-soltane-ghalbam-2019-07-13-22-03-34.jpg"
                                 alt="میلاد جهان سلطان قلبم | دانلود آهنگ میلاد جهان به نام سلطان قلبم" class="loaded"
                                 data-was-processed="true" width="480" height="480">
                        </p>
                    </div>
                </div>
                <div class="psdown">
                    <span>موضوع : <a href="https://nex1music.ir/music/" rel="category tag"><?php echo e($music->subject); ?></a> ، <a
                                href="https://nex1music.ir/music/persian-music/" rel="category tag">موزیک <?php echo e($music->type); ?></a> | 7,239 بازدید</span>
                    <a href="<?php echo e(route('frontend.musics.index',$music->id)); ?>" class="more">دانلود آهنگ</a>
                </div>
            </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/music/middlemain.blade.php ENDPATH**/ ?>