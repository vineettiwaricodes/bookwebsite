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
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact 02</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- contact area Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="con_name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="con_email" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
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
                    <div class="col-lg-6">
                        <div id="google-map"></div>
                    </div>
                </div>
            </div>
        </main>
        <!-- contact area End -->
        <div class="contact-bottom-info inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Phone</h3>
                                <p>1800.123.4569<br> 1800.123.7777</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Email</h3>
                                <p>contact@yoursite.com <br> info@lawyersattorneys.com</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <div class="content">
                                <h3 class="title">Come To See Us</h3>
                                <p>7/135 Saint St. London <br> 1130/5 Louis III St. New York</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <div class="content">
                                <h3 class="title">Pustok Social</h3>
                                <ul class="social-list list-inline">
                                    <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a></li>
                                    <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                                    <li class="single-social google"><a href=""><i class="ion ion-social-googleplus-outline"></i></a></li>
                                    <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->
                </div>
            </div>
        </div>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-2.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-3.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-4.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-5.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-6.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="image/others/brand-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
<?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\webpages\contact-2.blade.php ENDPATH**/ ?>