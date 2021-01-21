<?php $__env->startSection('content'); ?>

	<div class="col-lg-12">
		<h1 class="page-header">Update Employee: <?php echo e($employee->name); ?></h1>
	</div>
		
	<form action="<?php echo e(route('employees.update', ['id'=>$employee->id])); ?>" method="POST">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

			
		<div class="form-group col-md-6">
			<label for="name">Name: </label>
			<input type="text" name="name" value="<?php echo e($employee->name); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="email">Email: </label>
			<input type="email" name="email" value="<?php echo e($employee->email); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-md-12">
			<label for="street">Street: </label>
			<input type="text" name="street" value="<?php echo e($employee->street); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="town">Town: </label>
			<input type="text" name="town" value="<?php echo e($employee->street); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-lg-4">
			<label for="city">City: </label>
			<input type="text" name="city" value="<?php echo e($employee->city); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-md-2">
			<label for="country">Country: </label>
			<input type="text" name="country"  value= "<?php echo e($employee->country); ?>" class="form-control">		
		</div>
		
		<div class="form-group col-lg-6">
			<label for="role">Select a Role</label>
			<select name="role_id"  cols="5" rows="5" class="form-control">
				<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($role->id); ?>"
						<?php if($employee->role->id == $role->id): ?>
							selected							
						<?php endif; ?>						
					><?php echo e($role->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
					
		<div class="form-group col-lg-6">
			<label for="full_time">Position:	</label>
			<select name="full_time" id="full_time" class="form-control">
				<option value="1">Full-Time</option>
				<option value="0">Part-Time</option>					
			</select>
		</div>
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Update Changes</button>
		</div>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>