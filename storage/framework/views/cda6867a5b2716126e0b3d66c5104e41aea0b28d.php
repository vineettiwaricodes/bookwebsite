<?php $__env->startSection('content'); ?>


<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('messages.request_details')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.request_details')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>

<div class="content mt-3">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <?php if(Session::has('message')): ?>
            <div class="col-sm-12">
               <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('request')); ?>

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            </div>
            <?php endif; ?>

            <?php if(session('request')): ?>
           <div class="alert alert-success">
             <?php echo e(session('request')); ?>

             </div>
              <?php endif; ?>
            
            <div class="table-responsive dtdiv">
               <table  class="table table-striped table-bordered dttablewidth">
                  <thead>
                     <tr>
                        <th>Sr.No.</th>
                        <th>ISBN13</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Quantity</th>
                        <th>Email Id </th>
                        <th>Phone / Mobile no.</th>
                        <th>Date</th>
                        <th>action</th> 
                     </tr>
                     <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                     <td><?php echo e($b->id); ?></td>
                     <td><?php echo e($b->book_name); ?></td>
                     <td><?php echo e($b->title); ?></td>
                     <td><?php echo e($b->auther); ?></td>
                     <td><?php echo e($b->quantity); ?></td>
                     <td><?php echo e($b->email); ?></td>
                     <td><?php echo e($b->phone); ?></td>
                     <td><?php echo e($b->created_at); ?></td>
                     <td><a href="<?php echo e(url('admin/bookdelete')); ?>/<?php echo e($b->id); ?>" onclick="return confirm('Are You Sure ? ');"   rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;" > <i class="fa fa-trash f-s-25" style="font-size: x-large;"></i> </a></td>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
   </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\admin\request_list.blade.php ENDPATH**/ ?>