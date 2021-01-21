<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
		<h1 class="page-header">Bin</h1>
	</div>
	
	<table class= "table table-hover">
		<thead>
			
			<th>
				Name
			</th>
			
			<th>
				Restore
			</th>
			
			<th>
				Permanaently Destroy
			</th>
			
		</thead>
		
		<tbody>
			<?php if($employees->count() > 0): ?>
				<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						
						<td><?php echo e($employee->name); ?></td>
						
						<td>
							<a href="<?php echo e(route('employees.restore', ['id' => $employee->id])); ?>" class="btn btn-xs btn-info">Restore</a>
						</td>
						<td>
							<a href="<?php echo e(route('employees.kill', ['id' => $employee->id])); ?>" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">Bin Empty</th>
				</tr>
			<?php endif; ?>
		</tbody>
	
	</table>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>