<tr>
    <td><?php echo e($file->id); ?></td>
    <td><?php echo e($file->F_name); ?></td>
    <td><?php echo e($file->singer_Fname); ?></td>
    <td><?php echo e($file->subject); ?></td>
    <td><?php echo e($file->category); ?></td>
    <td><?php echo e($file->type); ?></td>
    <td><?php echo e($file->file_size); ?></td>
    <td><?php echo e($file->file_name); ?></td>

    <td>
        <?php echo $__env->make('admin.music.operations',$file, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </td>
</tr><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/music/columns.blade.php ENDPATH**/ ?>