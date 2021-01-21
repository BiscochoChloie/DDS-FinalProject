<?php $__env->startSection('content'); ?>
    <hr>	
		<h1 class="text-center">Roles</h1>	
	<hr> 

	<a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary">Create</a>
		
	<table class= "table table-hover">
		<thead>		
			<th>Name</th>
			<th>Department</th>
			<th>Salary</th>
			<th>Edit</th>
			<th>Trash</th>
		</thead>	
			
		<tbody>
			<?php if($roles->count()> 0): ?>
				<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>						
						<td><a href="<?php echo e(route('roles.show', ['slug' => $role->slug])); ?>" ><?php echo e($role->name); ?></a></td>						
						
						<td><?php echo e($role->department->name); ?></td>
						<td><?php echo e($role->salary); ?></td>	
						<td>
							<a href="<?php echo e(route('roles.edit', ['id' => $role->id])); ?>" class="btn btn-info">Edit</a>
						</td>
						<td>
							<form action="<?php echo e(route('roles.destroy', ['id' => $role->id])); ?>" method="POST">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

								<button class="btn btn-danger">Bin</button>
							</form>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
	<div class="text-center"><?php echo e($roles->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>