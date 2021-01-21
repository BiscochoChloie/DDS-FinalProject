<html>
<head>
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="box">
			<h1 class="page-header">Payslip</h1>
			
			<address id="address-header">
				<p><?php echo e($payroll->employee->name); ?></p>
				<p><?php echo e($payroll->employee->email); ?></p>
				<p><?php echo e($payroll->employee->street); ?></p>
				<p><?php echo e($payroll->employee->town); ?></p>
				<p><?php echo e($payroll->employee->city); ?></p>
				<p><?php echo e($payroll->employee->country); ?></p>
			</address>		
			
			<hr>
			<p><b>Department: </b> <?php echo e($payroll->employee->role->department->name); ?></p>
			<p><b>Role: </b> <?php echo e($payroll->employee->role->name); ?></p>
				
			<?php if($payroll->employee->full_time): ?>
				<p><b>Full-Time</b> :  Yes</p>
				<p><b>Base Salary</b>: <?php echo e($payroll->employee->role->salary); ?></p>
			<?php else: ?>
				<p><b>Part-Time</b> : Yes</p>
				<p><b>Base Salary</b>: 0</p>
			<?php endif; ?>				
			<hr>
			<table style= "width:100%">
				<thead>
					<tr>	
						<th>Date-issued</td>
						<th>Over-Time</th>
						<th>Hours</th>
						<th>Rate</th>
						<th>GrossPay</th>
						<th>Deduction</th>
						<th>NetPay</th>
					</tr>
				</thead>									
				<tbody>			
					<tr>		
						<td><?php echo e($payroll->created_at->toDateString()); ?>

						<td>
							<?php if($payroll->over_time): ?>
								<b>Yes</b>				
							<?php else: ?>
								<b>No</b>							
							<?php endif; ?>				
						</td>
						<td><?php echo e($payroll->hours); ?></td>
						<td><?php echo e($payroll->rate); ?></td>
						<td><?php echo e($payroll->gross); ?></td>	
						<td><?php echo e($payroll->deduction); ?></td>
						<td><?php echo e($payroll->netpay); ?></td>						
					</tr>					
				</tbody>																			
			</table>					
		</div>
	</div>
	
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
