<tr class="profileTRstyle">
    <th class="profileTicket">نام و نام خانوادگی  :</th>
    <th class="profileTicket"><?php echo e($ticket->user->F_name); ?></th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">نام کنسرت:</th>
    <th class="profileTicket"><?php echo e($ticket->concert->singer_Fname); ?></th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">تاریخ برگزاری کنسرت : </th>
    <th class="profileTicket"><?php echo e($ticket->concert->date); ?></th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">محل برگزاری  : </th>
    <th class="profileTicket"><?php echo e($ticket->concert->location); ?></th>
</tr>
<tr class="profileTRstyle">
    <th class="profileTicket">مقدار پرداختی شما : </th>
    <th class="profileTicket"><?php echo e($ticket->concert->price); ?></th>
</tr><?php /**PATH C:\xampp\htdocs\laramusic\resources\views/frontend/reserve/info.blade.php ENDPATH**/ ?>