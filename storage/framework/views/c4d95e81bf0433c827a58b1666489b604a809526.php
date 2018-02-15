<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(isset($title) ? $title : 'Central de Processos Digitais'); ?></title>
</head>
<body>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>