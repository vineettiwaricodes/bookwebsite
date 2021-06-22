<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1><?php echo e(__('messages.blog')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.blog')); ?></li>
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
                           <th><?php echo e(__('messages.id')); ?></th>
                           <th><?php echo e(__('messages.title')); ?></th>
                           <th><?php echo e(__('messages.description')); ?></th>
                           <th> <?php echo e(__('messages.photo')); ?></th>
                           <th><?php echo e(__('messages.action')); ?></th>
                           
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
                  <label for="name" class="control-label mb-1 dttablewidth"><?php echo e(__('messages.meta_title')); ?></label>
                  <input id="meta_title" value="<?= isset($data->meta_title)?$data->meta_title:""?>" name="meta_title" type="text" class="form-control" data-role="tagsinput" aria-invalid="false" placeholder="title">
                  </div>

                  <div class="form-group col-md-12">
                  <label for="name" class="control-label mb-1 dttablewidth">Meta Description </label>
                  <input id="meta_description" value="<?= isset($data->meta_description)?$data->meta_description:""?>" name="meta_description" type="text" class="form-control" data-role="description" aria-invalid="false" placeholder="Description">
                  </div>

                  <div class="form-group col-md-12">
                  <label for="name" class="control-label mb-1 dttablewidth"><?php echo e(__('messages.meta_keyword')); ?></label>
                  <input id="metakeyword" value="<?= isset($data->meta_keyword)?$data->meta_keyword:""?>" name="meta_keyword" type="text" class="form-control" data-role="tagsinput" aria-invalid="false" placeholder="<?php echo e(__('messages.meta_keyword')); ?>">
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
                  <label for="description" class="control-label mb-1"><?php echo e(__('messages.description')); ?><span class="reqfield">*</span>
                                          </label>
                                          <textarea name="description" id="description" class="editor"><?= isset($data->description)?$data->description:""?></textarea>
                                          <textarea name="description" class="w-100"><?= isset($data->description)?$data->description:""?></textarea>
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

<!-- preview -->

<div class="modal fade" id="viewblog" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
               <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="<?php echo e(asset('public/webpages/assets/image/others/blog-grid-1.jpg')); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            13
                                        </span>
                                        <span class="month">
                                            Aug
                                        </span>
                                    </div>
                                    <h3 class="title" id="edit-title"><a href="blog-details.php">How to Water and Care for Mounted</a>
                                    </h3>
                                </div>
                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Virtual reality and 3-D technology are already well-established in the
                                        entertainment...</p>
                                </article>
                                <a href="<?php echo e(url('blogdetail')); ?>" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
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


<!-- end preview -->

<script type="text/javascript" src="<?php echo e(asset('public/js/product.js').'?v=wewe3'); ?>"></script>
<script>
   CKEDITOR.replace('description');

   
 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookfactory-19\resources\views/admin/blog.blade.php ENDPATH**/ ?>