<!DOCTYPE html>
<html lang="zxx">

<head>
<?php echo $__env->make('webpages/include/head-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
</head>

<body>
    <div class="site-wrapper" id="top">
    <?php echo $__env->make('webpages/include/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container my-container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Request A Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- contact area Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container my-container">
                <div class="row d-flex flex-row justify-content-center">
                    <div class="col-lg-6">
                        <div class="contact_form mt-3">
                    
                            <h3 class="ct_title">Request For Your  Book </h3><img class="img" src="public/webpages/assets/image/books.jpeg"><br><br>
                            <?php if(session('request')): ?>
                        <div class="alert alert-success">
                       <?php echo e(session('request')); ?>

                            </div>
                             <?php endif; ?>
                            <!-- <form id="contact-form" action="<?php echo e(url('book_request')); ?>" method="post" class="contact-form"> -->
                            <form  action="<?php echo e(url('book_request')); ?>" method="post" class="contact-form">
                            <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                                      
                                            <label> ISBN13: <span class="required">*</span></label>
                                            <input type="number" id="con_name" name="book_name" class="form-control" >
                                            <label style="color:red"><?php echo e($errors->first('book_name')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Book Title: <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="title" class="form-control"
                                                >
                                                <label style="color:red"><?php echo e($errors->first('title')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Author: <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="auther" class="form-control"
                                                >
                                                <label style="color:red"><?php echo e($errors->first('auther')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Quantity: <span class="required">*</span></label>
                                            <input type="number" id="con_name" name="quantity" class="form-control"
                                                >
                                                <label style="color:red"><?php echo e($errors->first('quantity')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Email Id <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="email" class="form-control"
                                                >
                                                <label style="color:red"><?php echo e($errors->first('email')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone / Mobile no.</label>
                                            <input type="number" id="con_email" name="phone" class="form-control"
                                                >
                                                <label style="color:red"><?php echo e($errors->first('phone')); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black w-100"
                                                name="submit">send</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div id="google-map"></div>
                    </div> -->
                </div>
            </div>
        </main>
        <!-- contact area End -->
      
    </div>
    <!--=================================
  Brands Slider
===================================== -->

    <!--=================================
    Footer Area
===================================== -->
<?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /home/ao0bylx163io/public_html/demo.aximoinfotech.com/bookfactory/bookfactoryworking/resources/views/webpages/request-a-book.blade.php ENDPATH**/ ?>