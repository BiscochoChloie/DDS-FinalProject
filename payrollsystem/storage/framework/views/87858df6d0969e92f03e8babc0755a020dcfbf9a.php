<?php $__env->startSection('content'); ?>
	<div class="col-lg-12">
		<h1 class="page-header">Employee: <?php echo e($employee->name); ?><h1>
	</div>
	
	<?php if(auth()->guard()->check()): ?>
		<a href="<?php echo e(route('employees.edit',['id'=>$employee->id])); ?>" class="btn btn-primary">Edit</a>	
		<a href="<?php echo e(route('employees.destroy',['id'=>$employee->id])); ?>" class="btn btn-danger">Delete</a>
		<a href="<?php echo e(route('payrolls.pdf',['id'=>$employee->id])); ?>" class="btn btn-info">Download PDF</a>
	<?php endif; ?>
	
	<br>
	<br>
	
	<table style="width:100% ">
		<tr>
			<th>Name:</th>
			<td><?php echo e($employee->name); ?></td>		
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo e($employee->email); ?></td>
		</tr>		
		<tr>
			<th>Department</th>
			<td><?php echo e($employee->role->department->name); ?></td>
		</tr>										
		<tr>
			<th>Role</th>
			<td><?php echo e($employee->role->name); ?></td>
		</tr>	
		<tr>
			<th>Salary</th>
			<td><?php echo e($employee->role->salary); ?></td>			
		</tr>			
		<tr>
			<th>street</th>
			<td><?php echo e($employee->street); ?></td>			
		</tr>
		<tr>
			<th>town</th>
			<td><?php echo e($employee->town); ?></td>			
		</tr>
		<tr>
			<th>city</th>
			<td><?php echo e($employee->city); ?></td>			
		</tr>
		<tr>
			<th>country</th>
			<td><?php echo e($employee->country); ?></td>	
		</tr>		
	</table>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>