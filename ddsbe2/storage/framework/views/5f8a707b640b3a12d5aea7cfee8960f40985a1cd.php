<?php $__env->startSection('content'); ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit Role : <?php echo e($role->name); ?>

       </div>
	   
	   <div class="panel-body">
			<form action ="<?php echo e(route('roles.update', ['id'=>$role->id])); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" value="<?php echo e($role->name); ?>" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="salary">Salary</label>
					<input type="number" name="salary" value="<?php echo e($role->salary); ?>" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="department">Select a department</label>
					<select name="department_id" id="department"  cols="5" rows="5" class="form-control">
						<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($department->id); ?>"
								<?php if($role->department->id == $department->id): ?>
									selected							
								<?php endif; ?>
							   ><?php echo e($department->name); ?>

							</option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class ="btn.btn.success" type="submit">Update</button>
					</div>
				</div>
			</form>	
	    </div>
	</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>