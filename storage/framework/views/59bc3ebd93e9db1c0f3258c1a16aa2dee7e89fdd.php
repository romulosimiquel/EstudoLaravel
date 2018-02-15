<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(isset($title) ? $title : 'Xananana'); ?></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo e(url('public/assets/painel/css/style.css')); ?>">
</head>
<body>

	<?php echo $__env->yieldContent('content'); ?>

</body>
</html>