<tr>
    <td><?php echo e($album->id); ?></td>
    <td><?php echo e($album->F_name); ?></td>
    <td><?php echo e($album->singer_Fname); ?></td>
    <td><?php echo e($album->subject); ?></td>
    <td><?php echo e($album->category); ?></td>
    <td><?php echo e($album->type); ?></td>
    <td><?php echo e($album->file_size); ?></td>
    <td><?php echo e($album->file_name); ?></td>

    <td>
        <a href="<?php echo e(route('admin.albums.edit',[$album->id])); ?>">Edit</a>
    </td>
</tr><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/album/columns.blade.php ENDPATH**/ ?>