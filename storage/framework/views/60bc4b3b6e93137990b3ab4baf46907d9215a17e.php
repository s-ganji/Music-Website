<!--right Part Start -->
    <aside id="column-left" class="col-lg-3 col-md-3 col-sm-12 hidden-xs">
        <h3 class="subtitle">دسته بندی ها</h3>
        <div class="box-category">
            <ul id="cat_accordion">
                    <ul>

                        <li><a>آهنگ ها</a> <span class="down"></span>
                            <ul>
                                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('frontend.musics.happy',$id=$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li><a>موزیک ویدئو</a>
                            <span class="down"></span>
                            <ul>
                                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('frontend.musicvideos.happy',$id=$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </li>
                        <li><a> آلبوم </a> <span class="down"></span>
                            <ul>
                                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('frontend.musicvideos.happy',$id=$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </li>
                    </ul>
            </ul>
        </div>
    </aside>
    <!--right Part End -->

<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/partials/rightcategory.blade.php ENDPATH**/ ?>