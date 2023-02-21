

<?php $__env->startSection('content'); ?>
<table>
<tr>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Группа</td>
    <td>Почта</td>
    <td>Телефон</td>
    <td>Фото</td>
</tr>
<?php $__currentLoopData = $stud; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obstud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($obstud->Name); ?></td>
    <td><?php echo e($obstud->Surname); ?></td>
    <td><?php echo e($obstud->Groups); ?></td>
    <td><?php echo e($obstud->email); ?></td>
    <td><?php echo e($obstud->number); ?></td>
    <td><img src="<?php echo e($obstud->img); ?>" alt="none"></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/snykbsph/gfbniet-m1/resources/views/listStudent.blade.php ENDPATH**/ ?>