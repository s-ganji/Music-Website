<tr>
    <td><?php echo e($user -> id); ?></td>
    <td><?php echo e($user -> username); ?></td>
    <td><?php echo e($user -> F_name); ?></td>
    <td><?php echo e($user -> phone); ?></td>
    <td><?php echo e($user -> email); ?></td>
    <td><?php echo e($user -> role); ?></td>
    <td><?php echo e($user -> city); ?></td>
    <td><?php echo e($user -> state); ?></td>
    <td style="text-align: center;">
        <?php echo $__env->make('admin.user.operations',$user, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
</tr>
<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/user/item.blade.php ENDPATH**/ ?>