<form action="<?php echo e(url('/pag_dash_ventas/'.$venta->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PATCH')); ?>


    <?php echo $__env->make('other_views.submenudashboar.dashboarventas.formulario',['modo'=>'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form> <?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarventas/editar.blade.php ENDPATH**/ ?>