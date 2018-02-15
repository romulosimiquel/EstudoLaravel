<?php $__env->startSection('content'); ?>

<h1>Home Page do Site - Teste</h1>
<?php echo e($teste = 'Não existe'); ?> - - <?php echo e($teste2); ?> - - <?php echo e($teste3); ?> -- <!-- <?php echo $xss; ?> -->

</br>

<?php if( $var1 == '123' ): ?>
<p>É igual</p>
<?php else: ?>
<p>É diferente</p>
<?php endif; ?>

<?php if (! ( $var1 == '123' )): ?>
<p>É diferente</p>
<?php endif; ?>

<?php for( $i = $valor; $i < 10; $i++ ): ?>
	<p>Valor: <?php echo e($i); ?></p>
<?php endfor; ?>

<?php $__empty_1 = true; $__currentLoopData = $arrayData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<p>Valor: <?php echo e($array); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<p>Não existe itens</p>
<?php endif; ?>

<?php
?>

<?php echo $__env->make('site.includes.sidebar', compact('var1'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<?php $__env->stopPush(); ?>
<?php echo $__env->make('site.templates.template1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>