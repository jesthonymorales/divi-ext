<?php $__env->startSection('content'); ?>
  <?php if($fields): ?>
		
		<?php echo e($fields['page_sub_title']); ?>

		<?php echo $fields['ingredients']; ?>


	<?php endif; ?>	
	<?php the_content() ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>