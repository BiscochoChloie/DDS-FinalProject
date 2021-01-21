<?php $__env->startSection('content'); ?>
	<hr>	
	<h1 class="text-center">Dashboard</h1>	
	<hr>
		
	<div class="col-lg-3 text-center">
		<div class="panel panel-default">
			<div class="panel-heading">Payroll issued</div>
			<div class="panel-body"><?php echo e($payrolls->count()); ?></div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-info">
			<div class="panel-heading">Employee Count</div>
			<div class="panel-body"><?php echo e($employeesCount); ?></div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-primary">
			<div class="panel-heading">Role Count</div>
			<div class="panel-body"><?php echo e($roles); ?></div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-success">
			<div class="panel-heading">Department</div>
			<div class="panel-body"><?php echo e($departments); ?></div>		
		</div>
	</div>
	
	<hr>
	
	<h3>Latest Employees</h3>
	
	<table class= "table table-hover">
		<thead>	
			<tr>
				<th>Date Added</td>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Department</th>
			</tr>
		</thead>		
			
		<tbody>
			<?php if($employees->count()> 0): ?>
				<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>		
						<td><?php echo e($employee->created_at->toDateString()); ?></td>
						<td><?php echo e($employee->name); ?></td>
						<td><?php echo e($employee->email); ?></td>
						<td><?php echo e($employee->role['name']); ?></td>
						<td><?php echo e($employee->role['department']['name']); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			<?php endif; ?>
		</tbody>							
	</table>
	
	<hr>
	
	<h3>Latest issued payroll</h3>
	
	<table class= "table table-hover">
		<thead>	
			<tr>
				<th>Date-issued</td>
				<th>Name</th>
				<th>Over-Time</th>
				<th>Hours</th>
				<th>Rate</th>
				<th>Gross</th>
				<th>Deduction</th>
				<th>NetPay</th>
			</tr>
		</thead>		
			
		<tbody>
			<?php if($payrolls->count()> 0): ?>
				<?php $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>		
						<td><?php echo e($payroll->created_at->toDateString()); ?></td>
						<td><?php echo e($payroll->employee->name); ?></td>
						<td>
							<?php if($payroll->over_time): ?>
								<p><b>Yes</b></p>				
							<?php else: ?>
								<p><b>No</b></p>							
							<?php endif; ?>				
						</td>
						<td><?php echo e($payroll->hours); ?></td>
						<td><?php echo e($payroll->rate); ?></td>
						<td><?php echo e($payroll->gross); ?></td>
						<td><?php echo e($payroll->deduction); ?></td>
						<td><?php echo e($payroll->netpay); ?></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			<?php endif; ?>
		</tbody>							
	</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>