<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
		<h1 class="page-header">Department: <?php echo e($department->name); ?></h1>
	</div>
		

	<table class= "table table-hover">
		<thead>
			<th>Role</th>
			<th>Salary</th>
		</thead>
		
		<tbody>
			<?php if($department->roles->count() > 0): ?>
				<?php $__currentLoopData = $department->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<a href="<?php echo e(route('roles.show', ['slug'=>$role->slug])); ?>"><?php echo e($role->name); ?></a>
						</td>
						<td><?php echo e($role->salary); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">No Roles assigned in this department yet</th>
				</tr>
			<?php endif; ?>
		
		</tbody>
	
	</table>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>