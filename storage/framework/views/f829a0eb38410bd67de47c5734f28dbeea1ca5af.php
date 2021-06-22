<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.about')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="about-heading">
      <h2><?php echo e(__('messages.about')); ?></h2>
      <p><?php echo e(__('messages.a1')); ?></p>
   </div>
   <div class="about-history-1">
     <?php echo html_entity_decode($page->description);?>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\user\aboutus.blade.php ENDPATH**/ ?>