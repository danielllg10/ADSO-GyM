<form action="<?php echo e(url('pag_dash_provee')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('other_views.submenudashboar.dashboarprovee.formulario',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form><?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarprovee/crear.blade.php ENDPATH**/ ?>