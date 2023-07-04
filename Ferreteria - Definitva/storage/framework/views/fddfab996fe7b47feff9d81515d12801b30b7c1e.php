<form action="<?php echo e(url('/pag_dash_productos')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('other_views.submenudashboar.dashboarproductos.formulario',['modo'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    
    
    
    </form><?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarproductos/crear.blade.php ENDPATH**/ ?>