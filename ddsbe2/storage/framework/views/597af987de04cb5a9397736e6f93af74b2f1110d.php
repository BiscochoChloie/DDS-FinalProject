<?php $__env->startSection('content'); ?>

	<hr>	
		<h1 class="text-center">Employees</h1>	
	<hr> 
	
	<a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">Create</a>
	<a href="<?php echo e(route('employees.bin')); ?>" class="btn btn-danger">Recycle Bin</a>
	
	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>					
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Edit</th>	
			<th>Trash</th>
		</thead>		
			
		<tbody>
			<?php if($employees->count()> 0): ?>
				<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>								
						<td><a href="<?php echo e(route('employees.show', ['id' => $employee->id])); ?>"><?php echo e($employee->name); ?></a></td>
						<td><?php echo e($employee->email); ?></td>
						<td><?php echo e($employee->role['name']); ?></td>
						<td>
							<a href="<?php echo e(route('employees.edit', ['id' => $employee->id])); ?>" class="btn btn-info">Edit</a>
						</td>
						<td>
							<form action="<?php echo e(route('employees.destroy', ['id' => $employee->id])); ?>" method="POST">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

								<button class="btn btn-danger">Bin</button>
							</form>
						</td>
						<td>
							<a href="<?php echo e(route('payrolls.show', ['id' => $employee->id])); ?>" class="btn btn-info">Payroll</a>
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
	<div class="text-center"><?php echo e($employees->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>