<?php $__env->startSection('content'); ?>
	
<div class="panel panel-default col-lg-8">
	<div class="panel-heading">
		<b> Edit Department:</b> <?php echo e($department->name); ?>

   </div>
   
   <div class="panel-body">
		<form action ="<?php echo e(route('departments.update', ['id'=>$department->id])); ?>" method="POST">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="<?php echo e($department->name); ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<div class="text-center">
					<button class ="btn.btn.success" type="submit">Update Department</button>
				</div>
			</div>
			
		</form>	
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>