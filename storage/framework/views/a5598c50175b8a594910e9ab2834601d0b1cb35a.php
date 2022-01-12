<tr>
    <td><?php echo e($payment->user->F_name); ?></td>
    <td><?php echo e(number_format($payment->payment_amount)); ?></td>
    <td><?php echo e($payment->payment_method_format()); ?></td>
    <td><?php echo e($payment->payment_getway_name); ?></td>
    <td><?php echo e($payment->payment_res_name); ?></td>
    <td><?php echo e($payment->payment_created_at); ?></td>
    <td><?php echo e($payment->payment_status_format()); ?></td>
    <td>
    <td><?php echo e($payment->payment_created_at); ?></td>

    </td>

</tr>

<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/payment/columns.blade.php ENDPATH**/ ?>