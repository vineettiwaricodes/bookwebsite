<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo e(__('messages.site_name')); ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <?php if(!isset($msg)): ?>
         <h2><?php echo e(__('messages.resetpassord')); ?></h2>
         <form action="<?php echo e(url('resetnewpwd')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="code" value="<?php echo e($code); ?>" />
            <input type="hidden" name="id" value="<?php echo e($id); ?>" />
            <div class="form-group">
               <label for="email"><?php echo e(__('messages.ent_new_pwd')); ?>:</label>
               <input type="password" required class="form-control" id="npwd" placeholder="<?php echo e(__('messages.ent_new_pwd')); ?>" name="npwd">
            </div>
            <div class="form-group">
               <label for="pwd"><?php echo e(__('messages.re_enter_pwd_en')); ?>:</label>
               <input type="password" required class="form-control" id="rpwd" placeholder="Enter Re-enter Password" name="rpwd" onchange="checkbothpwd(this.value)">
            </div>
            <button type="submit" class="btn btn-default"><?php echo e(__('messages.resetpassord')); ?></button>
         </form>
         <?php endif; ?> <?php if(isset($msg)): ?>
         <h3><?php echo e($msg); ?></h3>
         <?php endif; ?>
      </div>
   </body>
</html><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\user\resetpwd.blade.php ENDPATH**/ ?>