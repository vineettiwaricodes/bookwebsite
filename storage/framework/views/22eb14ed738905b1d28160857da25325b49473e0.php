<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('messages.add_sepical_category')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.add_sepical_category')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="rowset">
      <div class="col-lg-8">
         <div class="card">
            <div class="card-header">
               <strong class="card-title"><?php echo e(__('messages.add_sepical_category')); ?></strong>
            </div>
            <div class="card-body">
               <div id="pay-invoice">
                  <div class="card-body">
                     <?php if(Session::has('message')): ?>
                     <div class="col-sm-12">
                        <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('message')); ?>

                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                     </div>
                     <?php endif; ?>
                     <form action="<?php echo e(url('admin/storesepicalcategory')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.title')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <input type="text" id="title" placeholder="<?php echo e(__('messages.title')); ?>" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.description')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <textarea class="form-control" name="description" id="description" placeholder="<?php echo e(__('messages.description')); ?>" required></textarea>
                        </div>
                        <div class="form-group col-md-12 paddiv">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.cate_gory')); ?>

                           <span class="reqfield">*</span>
                           </label>
                           <select name="category" id="categoryss" class="form-control" required >
                              <option value=""><?php echo e(__('messages.select_category')); ?></option>
                              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($ca->id); ?>"><?php echo e($ca->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.image')); ?>(542X370)
                           <span class="reqfield">*</span>
                           </label>
                           <input type="file" id="image" accept="image/*" class="form-control" name="image" required>
                        </div>
                        <div>
                            <?php if(Session::get("is_demo")=='1'): ?>
                                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary florig">
                                               <?php echo e(__('messages.save')); ?>

                                        </button>
                                     <?php else: ?>
                                        <button type="submit" class="btn btn-primary florig"><?php echo e(__('messages.submit')); ?></button>
                                     <?php endif; ?> 
                         
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\admin\sepical\add.blade.php ENDPATH**/ ?>