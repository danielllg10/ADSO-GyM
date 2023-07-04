<form action="<?php echo e(url('/pag_dash_provee/' . $proveedor->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PATCH')); ?>

    <?php if(session()->has('mensaje')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session()->get('mensaje')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->make('other_views.submenudashboar.dashboarprovee.formulario', ['modo' => 'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</form>
<?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarprovee/editar.blade.php ENDPATH**/ ?>