<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
</head>
<body>
    <div id="app">
        <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
		
		<div class="container">
			<div class="row">
				<div class="box">					
					<?php echo $__env->yieldContent('content'); ?>					
				</div>
			<div>
		</div>
		
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		<?php if(Session::has('success')): ?>
			toastr.success("<?php echo e(Session::get('success')); ?>")		
		<?php endif; ?>
		
		<?php if(Session::has('info')): ?>
			toastr.info("<?php echo e(Session::get('info')); ?>")		
		<?php endif; ?>	
	</script>
</body>
</html>
