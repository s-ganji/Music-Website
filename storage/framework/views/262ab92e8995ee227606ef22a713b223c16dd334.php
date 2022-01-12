<?php $__env->startSection('content'); ?>
    <div class="col-md-9 col-lg-9">
    <h1>لیست کاربران </h1>
    <?php echo $__env->make('users.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($users && count($users)>0): ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>شناسه</th>
                <th>نام کاربری</th>
                <th>نام و نام خانوادگی</th>
                <th>تلفن</th>
                <th>ایمیل</th>
                <th>نقش کاربری</th>
                <th>شهر</th>
                <th>استان</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('admin.user.item',$user, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/user/usersList.blade.php ENDPATH**/ ?>