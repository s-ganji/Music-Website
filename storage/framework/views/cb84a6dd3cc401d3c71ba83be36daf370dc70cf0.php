<?php $__env->startSection('content'); ?>
    <div class="col-md-9 col-lg-9">
        <h1>لیست فایل ها </h1>
        <?php echo $__env->make('users.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if($musicvideos && count($musicvideos)>0): ?>
            <table class="table table-bordered">
                <thead>
                <?php echo $__env->make('admin.musicvideo.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </thead>
                <?php $__currentLoopData = $musicvideos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $musicvideo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('admin.musicvideo.columns',$musicvideo, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/musicvideo/list.blade.php ENDPATH**/ ?>