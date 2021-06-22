 <?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<div class="breadcrumbs">
    <div class="col-sm-4 float-right-1">
        <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1><?php echo e(__('messages.Slider')); ?>

                </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
        <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><?php echo e(__('messages.Slider')); ?>

                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 ban col-md-12">
                    <?php if(session('slider')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('slider')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if(session('delete')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('delete')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if(session('update')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('update')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <?php echo e(__('messages.sli_edit_sec')); ?>

                            </div>
                            <form id="imageUploadForm" action="<?php echo e(url('admin/left_data')); ?>" enctype="multipart/form-data" method="post">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" class="form-control" name="id" value='<?php echo e($editslider[0]->id); ?>' >
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider_1')); ?>:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="title" id="title" value="<?php echo e($editslider[0]->title); ?>" class="form-control" required placeholder="Title ">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.sub_title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="subtitle" id="subtitle" value="<?php echo e($editslider[0]->subtitle); ?>" class="form-control" required placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.url_link')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="urllink" id="subtitle" value="<?php echo e($editslider[0]->urllink); ?>" class="form-control" required placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider')); ?> (542X708)
                                            </label>
                                        </div>
                                        </div>
                                        
                                        <img src="<?php echo e($editslider[0]->photo); ?>" alt="Photo" width="200px" height="200px">
                                        
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" value="<?php echo e($editslider[0]->photo); ?>" name="photo" id="upload_image1" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider_2')); ?>:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="title2" id="title2" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.sub_title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="subtitle2" id="subtitle2" class="form-control" placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.url_link')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="urllink2" id="subtitle2" class="form-control" placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider')); ?> (542X708)
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" name="photo2" id="upload_image2" class="form-control-file">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider_3')); ?>:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="title3" id="title3" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.sub_title')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="subtitle3" id="subtitle3" class="form-control" placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.url_link')); ?>

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="url" id="urllink3" class="form-control" placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label"><?php echo e(__('messages.Slider')); ?> (542X708)
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" name="photo3" id="upload_image3" class="form-control-file">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row form-group btncenter">

                                    <?php if(Session::get("is_demo")=='1'): ?>
                                    <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-secondary d-flex justify-content-center mt-3 righttag">
                                        <?php echo e(__('messages.update')); ?>

                                    </button>
                                    <?php else: ?>
                                    <button type="submit" class="btn btn-primary d-flex justify-content-center mt-3 righttag">
                                        <?php echo e(__('messages.update')); ?>

                                    </button>
                                    <?php endif; ?>

                                    <button type="reset" class="btn btn-danger d-flex justify-content-center mt-3">
                                        <?php echo e(__('messages.cancel')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive dtdiv">
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ao0bylx163io/public_html/demo.aximoinfotech.com/bookfactory/bookfactoryworking/resources/views/admin/slider/edit_slider_left.blade.php ENDPATH**/ ?>