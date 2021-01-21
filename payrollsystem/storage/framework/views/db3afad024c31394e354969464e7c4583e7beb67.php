<?php $__env->startSection('content'); ?>
   <hr>	
	<h1 class="text-center">Departments</h1>	
	<hr>		
	<a href="<?php echo e(route('departments.create')); ?>" class="btn btn-primary">Create</a>
	<table class= "table table-hover">
		<thead>
			<th>Department name</th>			
			<th>Edit</th>			
			<th>Delete</th>							
		</thead>		
		<tbody>
			<?php if($departments->count() > 0): ?>
				<?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>
							<a href="<?php echo e(route('departments.show', ['slug' => $department->slug ])); ?>"><?php echo e($department->name); ?></a>
						</td>
						<td>
							<a href="<?php echo e(route('departments.edit', ['id' => $department->id ])); ?>" class="btn btn-xs btn-info">Edit</a>							
						</td>
						<td>
							<form action="<?php echo e(route('departments.destroy', ['id' => $department->id ])); ?>" method="POST">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

							
								<button class="btn btn-xs btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">No Departments yet</th>
				</tr>
			<?php endif; ?>		
		</tbody>	
	</table>
		<div class="text-center"><?php echo e($departments->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>