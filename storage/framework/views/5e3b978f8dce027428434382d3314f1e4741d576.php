<tr>
<td><?php echo e($ticket->concert->singer_Fname); ?></td>
<td><?php echo e($ticket->concert->date); ?></td>
<td><?php echo e($ticket->concert->location); ?></td>
<td><?php echo e($ticket->concert->price); ?></td>
<td><?php echo e($ticket->seat_num); ?></td>
<td><?php echo e($ticket->status); ?></td>
<td><?php echo e($ticket->returnedMoney); ?></td>
<td>  <a href="<?php echo e(route('frontend.users.cancel',$ticket)); ?>">کنسل</a>
</td>
</tr>

<!-- --><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/users/item.blade.php ENDPATH**/ ?>