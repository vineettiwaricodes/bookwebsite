<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('Add Author')); ?></h1>
         </div>
      </div>
   </div>
   <div class="content mt-3">
      <div class="col-12">
         <div class="card">
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
               <button  data-toggle="modal" data-target="#addauthor" class="btn btn-primary btn-flat m-b-30 m-t-30" ><?php echo e(__('Add Author')); ?></button>
               <div class="table-responsive dtdiv">
                  <table id="authorTable" class="table table-striped table-bordered dttablewidth">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.id')); ?></th>
                        
                           <th> <?php echo e(__('messages.name')); ?></th>
                           <th>Image</th>
                           <th>Action</th>
                           
                          
                           
                        </tr>
                       
                     </thead>    
               
                  </table>
               </div>
            </div>
         </div>
      </div>


      <div class="modal fade" id="addauthor" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel"><?php echo e(__('Add Author')); ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="<?php echo e(url('admin/add_author')); ?>" method="POST" enctype="multipart/form-data" >
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="" value="2"/>
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.name')); ?><span class="reqfield">*</span></label>
                        <input id="title" name="name" type="text" class="form-control" required  placeholder="<?php echo e(__('messages.title')); ?>">
                     </div>

                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('Image')); ?><span class="reqfield">*</span></label>
                        <input id="image" name="image" type="file" class="form-control" required  placeholder="<?php echo e(__('image')); ?>">
                     </div>
                  </div>
                  
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.cancel')); ?></button>
                  
                        <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
                     
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade" id="editauth" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">
               Edit Author
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
            <form action="<?php echo e(url('admin/updateauthor')); ?>" method="POST" >
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="id" id="id" value="">
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.name')); ?><span class="reqfield">*</span></label>
                        <input id="edit-title" name="title" type="text" class="form-control" required value=""  placeholder="<?php echo e(__('messages.title')); ?>">
                     </div>

                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('Image')); ?><span class="reqfield">*</span></label>
                        <input id="edit-image" name="image" type="file" class="form-control" required value=""  placeholder="<?php echo e(__('image')); ?>">
                     </div>
                  </div>
                  
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.cancel')); ?></button>
                  
                        <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
                     
               </div>
            </form>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookfactory-19\resources\views/admin/Addauthor.blade.php ENDPATH**/ ?>