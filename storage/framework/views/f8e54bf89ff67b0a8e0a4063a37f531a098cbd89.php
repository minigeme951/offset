

<?php $__env->startSection('content'); ?>
<table style="border: 1px solid black">
<tr style="border: 1px solid black">
    <td  style="border: 1px solid black">Имя</td>
    <td style="border: 1px solid black">Фамилия</td>
    <td style="border: 1px solid black">Группа</td>
    <td style="border: 1px solid black">Почта</td>
    <td style="border: 1px solid black">Телефон</td>
    <td style="border: 1px solid black">Фото</td>
</tr>
<?php $__currentLoopData = $stud; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obstud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="border: 1px solid black">
    <td style="border: 1px solid black; padding: 8px"><?php echo e($obstud->Name); ?></td>
    <td style="border: 1px solid black; padding: 8px"><?php echo e($obstud->Surname); ?></td>
    <td style="border: 1px solid black; padding: 8px"><?php echo e($obstud->Groups); ?></td>
    <td style="border: 1px solid black; padding: 8px"><?php echo e($obstud->email); ?></td>
    <td style="border: 1px solid black; padding: 8px"><?php echo e($obstud->number); ?></td>
    <td style="border: 1px solid black; padding: 8px"><img src="<?php echo e($obstud->img); ?>" alt="none"></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/snykbsph/gfbniet-m1/resources/views/listStudent.blade.php ENDPATH**/ ?>