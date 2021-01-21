<?php $__env->startSection('content'); ?>
	<div class="col-lg-12">
		<h1 class="page-header">New Department</h1>
	</div>
	

	<form action ="<?php echo e(route('departments.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		
		<div class="form-group col-lg-6">
			<label for="name">Department Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		
		<div class="form-group col-lg-12">			
			<button class ="btn.btn.success" type="submit">Save Department</button>			
		</div>
		
	</form>		   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>