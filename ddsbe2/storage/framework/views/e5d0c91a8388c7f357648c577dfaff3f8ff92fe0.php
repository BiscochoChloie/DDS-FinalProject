<?php $__env->startSection('content'); ?>

	<hr>	
		<h1 class="text-center">Roles</h1>	
	<hr>   	   
	<form action ="<?php echo e(route('roles.store')); ?>" method="POST">
		<?php echo e(csrf_field()); ?>

		
		<div class="form-group col-lg-6">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		
		<div class="form-group col-lg-6">
			<label for="salary">Salary</label>
			<input type="number" name="salary" class="form-control">
		</div>
		
		<div class="form-group col-lg-12">
			<label for="department">Select a department</label>
			<select name="department_id"  cols="5" rows="5" class="form-control">
				<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		
		<div class="form-group">
			<div class="text-center">
				<button class ="btn.btn.success" type="submit">Create</button>
			</div>
		</div>
	</form>	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>