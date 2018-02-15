<?php $__env->startSection('content'); ?>

<h1>Listagem dos serviços</h1>

<table>
	<tr>
		<th>Nome</th>
		<th>Descrição</th>
	</tr>
	<?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><?php echo e($servico->name); ?></td>
		<td><?php echo e($servico->descricao); ?></td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>