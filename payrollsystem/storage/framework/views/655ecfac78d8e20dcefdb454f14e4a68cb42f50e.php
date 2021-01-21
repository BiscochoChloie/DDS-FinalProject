<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
		<h1 class="page-header">Role: <?php echo e($role->name); ?></h1>
		<h2>Salary: <?php echo e($role->salary); ?></h2>
	</div>
	<br>
	<table class= "table table-hover">
		<thead>
			<th>Employee</th>
			<th>Email</th>
			<th>Full-Time</th>
			<th>Department</th>
		</thead>
		
		<tbody>
			<?php if($role->employees->count() > 0): ?>
				<?php $__currentLoopData = $role->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($employee->name); ?></td>
						<td><?php echo e($employee->email); ?></td>
						<td><?php if($employee->full_time): ?>
								<p> Yes</p>
							<?php else: ?>
								<p>Part-Time</p>
							<?php endif; ?>
						</td>
						<td><?php echo e($role->department->name); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">No Employee assigned to this role yet</th>
				</tr>
			<?php endif; ?>		
		</tbody>	
	</table>
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>