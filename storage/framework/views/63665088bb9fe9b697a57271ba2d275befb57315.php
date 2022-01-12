<tr>
        <td><?php echo e($category->id); ?></td>
        <td><?php echo e($category->name); ?></td>
        <td>
         <a href="<?php echo e(route('admin.categories.edit',[$category->id])); ?>">ویرایش</a>
        <a href="<?php echo e(route('admin.categories.remove',[$category->id])); ?>">حذف</a>
        </td>
</tr>


<?php /**PATH C:\xampp\htdocs\laramusic\resources\views/admin/category/item.blade.php ENDPATH**/ ?>