
<?php $__env->startSection('container'); ?>
<form action="/create" method="POST">
<?php echo csrf_field(); ?>
<table>
    <tr>
        <td>Nama :</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>email :</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>kelas :</td>
        <td><input type="text" name="kelas"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="INPUT"></td>
    </tr>
</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Username\Desktop\ujikom\resources\views/create.blade.php ENDPATH**/ ?>