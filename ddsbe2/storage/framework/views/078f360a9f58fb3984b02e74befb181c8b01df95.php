<?php $__env->startSection('content'); ?>

	<div class="col-lg-12">
		<h1 class="page-header">Payroll : <?php echo e($employee->name); ?>	
			<!--input type="text" id="filterInput" onkeyup="filterFunction()" placeholder="Search Employees...."-->
		</h1>	
	</div>

	<a href="<?php echo e(route('payrolls.create', ['id'=>$employee->id])); ?>" class="btn btn-primary">Create</a>
	<a href="<?php echo e(route('payrolls.pdf', ['id'=>$employee->id])); ?>" class="btn btn-info">Download all payroll listed</a>
	<a href="<?php echo e(route('payrolls.bin')); ?>" class="btn btn-danger">Recycle Bin</a>

	<br>
	<br>

	<?php if($employee->full_time): ?>
		<p><b>Full-Time</b> :  Yes</p>
		<p><b>Base Salary</b>: <?php echo e($employee->role->salary); ?></p>
	<?php else: ?>
		<p><b>Part-Time<b> : Yes</p>
		<br>
		<p><b>Base Salary<b>: 0</p>
	<?php endif; ?>
		

	<br>

	<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued</td>
			<th>Over-Time</th>
			<th>Hours</th>
			<th>Rate</th>
			<th>GrossPay</th>
			<th>Deduction</th>
			<th>NetPay</th>
			<th>Download</th>
			<th>Edit</th>	
			<th>Trash</th>
		</thead>		
			
		<tbody>
			<?php if($employee->payrolls->count()> 0): ?>
				<?php $__currentLoopData = $employee->payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>		
						<td><?php echo e($payroll->created_at->toDateString()); ?>

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
						
						<td><a href="<?php echo e(route('singlepayroll.pdf', ['id'=>$payroll->id])); ?>" class="btn btn-info">PDF</a></td>
						<td>
							<a href="<?php echo e(route('payrolls.edit', ['id' => $payroll->id])); ?>" class="btn btn-success">Edit</a>
						</td>
						<td>
							<form action="<?php echo e(route('payrolls.destroy', ['id' => $payroll->id])); ?>" method="POST">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>