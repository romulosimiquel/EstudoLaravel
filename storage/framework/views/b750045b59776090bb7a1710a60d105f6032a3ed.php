<?php $__env->startSection('content'); ?>

<h1>Serviços Page do Site - Teste</h1>
<?php echo e($teste); ?> - - <?php echo e($teste2); ?> - - <?php echo e($teste3); ?>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.template.template1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>