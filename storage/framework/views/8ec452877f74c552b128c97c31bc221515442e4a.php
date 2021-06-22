
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('messages.blog')); ?></h1>
         </div>
      </div>
   </div>
 <!--   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.blog')); ?></li>
            </ol>
         </div>
      </div>
   </div> -->
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
               <button  data-toggle="modal" data-target="#adduser" class="btn btn-primary btn-flat m-b-30 m-t-30" ><?php echo e(__('messages.add_blog')); ?></button>
               <div class="table-responsive dtdiv">
                  <table id="blogTable" class="table table-striped table-bordered dttablewidth">
                     <thead>
                        <tr>
                           <th style="vertical-align: top;"><?php echo e(__('messages.id')); ?></th>
                           <th style="vertical-align: top;"><?php echo e(__('messages.title')); ?></th>
                           <th style="vertical-align: top;"><?php echo e(__('messages.description')); ?></th>
                           <th style="vertical-align: top;"> <?php echo e(__('messages.photo')); ?></th>
                           <th style="vertical-align: top;"><?php echo e(__('messages.action')); ?></th>
                           
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel"><?php echo e(__('messages.add_blog')); ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="<?php echo e(url('admin/blog_add')); ?>" method="POST" enctype="multipart/form-data" >
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="" value="2"/>
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.title')); ?><span class="reqfield">*</span></label>
                        <input id="title" name="title" type="text" class="form-control" required  placeholder="<?php echo e(__('messages.title')); ?>">
                     </div>
                  </div>
                  
                  <div class="form-group col-md-12">
                     <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.description')); ?> <span class="reqfield">*</span></label>
                     <textarea class="form-control" placeholder="<?php echo e(__('messages.description')); ?>" name="description" id="description" ></textarea>
                  </div>
                   
                   
                  <div class="form-group col-md-12">
                     <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.photo')); ?> <span class="reqfield">*</span></label>
                     
                     <input id="photo" name="photo" type="file" class="form-control" required  placeholder="<?php echo e(__('messages.photo')); ?>">
                  </div>
                  
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.cancel')); ?></button>
                     <?php if(Session::get("is_demo")=='1'): ?>
                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                 <?php echo e(__('messages.save')); ?>

                        </button>
                     <?php else: ?>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
                     <?php endif; ?> 
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="editblog" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel">
                  <?php echo e(__('messages.edit_blog')); ?>

               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="<?php echo e(url('admin/updateblog')); ?>" method="post" enctype="multipart/form-data" >
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="id" id="id" value='<?php echo e($blog[0]->id); ?>'/>
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.title')); ?><span class="reqfield">*</span></label>
                        <input id="edit_title" name="name" type="text" class="form-control" value='<?php echo e($blog[0]->title); ?>' required  placeholder="<?php echo e(__('messages.title')); ?>" id="edit_title"  >
                     </div>
                     
                  </div>
                  <div class="form-group col-md-12 paddiv">
                  <div class="form-group col-md-12">
                     <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.description')); ?> <span class="reqfield">*</span></label>
                     <textarea class="form-control"  id="edit_description"   name="description" id="description" ><?php echo e($blog[0]->description); ?></textarea>
                  </div>
                     
                  </div>
                  <div class="col-md-12">
                  <img src="<?php echo e(asset('public/upload/img/blog/'.$blog[0]->photo)); ?>"height="100px"width="100px"  alt="photo"  >
                  </div>
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1"><?php echo e(__('messages.photo')); ?><span class="reqfield">*</span></label>
                        <input id="edit_photo" name="name" type="file" class="form-control"  required   >
                     </div>
                     
                  </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('messages.cancel')); ?></button>
                     <?php if(Session::get("is_demo")=='1'): ?>
                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                 <?php echo e(__('messages.save')); ?>

                        </button>
                     <?php else: ?>
                         <button type="submit" class="btn btn-primary"><?php echo e(__('messages.submit')); ?></button>
                     <?php endif; ?>
               
                     </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ao0bylx163io/public_html/demo.aximoinfotech.com/bookfactory/bookfactoryworking/resources/views/admin/blog.blade.php ENDPATH**/ ?>