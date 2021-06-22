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
                            <li class="breadcrumb-item active">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Cart Page Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container my-container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div id="google-map"></div>
                    </div>
                </div> -->


                <div class="row mt-60 ">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">About bookfactory</h3>
                                <p>BookFactory.com is operated by Sapna Infoway Private Limited , a Technology Company
                                    based out of Bangalore and has offices in New Delhi and Chennai.
                                <p>
                                    BookFactory.com an e-commerce or rather an e-tailing store works on the Mission to
                                    give people the most convenient , easy and secure shopping experience on the web.
                                </p>
                                <p>

                                    BookFactory.com has been noted as India’s fastest growing retailer on the web and
                                    currently has a catalogue spread of over 10 million books to browse from , over
                                    10,000 Electronics and Gadgets to explore and over 1,000 Audio Books to listen to!
                                </p>
                                <p>
                                    BookFactory.com is focused to introduce more and more catalogue’s in the exciting
                                    year of 2020-2021.</p>
                                <p>
                                    BookFactory.com is a team of experienced people from diverse backgrounds working
                                    together to fulfil 3 main objective's - benefiting customers of low prices,
                                    providing a vast catalogue selection and products and lastly a fast, reliable and a
                                    very safe payment and delivery option to the customers.</p>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row mt-60 ">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h5 class="ct_title">A Brief Stats of BoookFactory as on 1st April 2014:</h5>
                                <p>BoookFactory.com has over Half a Million (500,000) daily active & happy users and has over a Million (1,000,000) registered users.
                                <p>
                                BoookFactory.com ships over many thousand orders a day and is growing by the minute.
                                </p>
                                <p>

                                BoookFactory.com is Headquartered in Bangalore and has it's warehouses in New Delhi, Chennai and Bangalore.
                                </p>
                                <p>
                                This eCommerce store has been awarded the most promising e-tailing company 2013 and has got the unique tag of the most Prompt Order and Delivery channel.</p>
                                <p>
                                Our Mission is to give you the most convenient , easy and secure shopping experience on the web.</p>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row mt--60 ">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Location & Details</h3>
                                <p>It is a long established fact that readewill be distracted by the readable content of
                                    a page when looking
                                    at ilayout.</p>
                            </div>
                            <div class="address_wrapper">
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Address:</span> Rajat Vihar,Sector 62A, 
                                        Noida(U.P)</p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> Srrbooksfactory@gmail.com </p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone:</span> (+91)9837994651</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
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
                                            <label>Your Phone*</label>
                                            <input type="text" id="con_phone" name="con_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black"
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
                    </div> -->
                </div>
            </div>
        </main>
        <!-- Cart Page End -->
    </div>
    <!--=================================
  Brands Slider
===================================== -->

    <!--=================================
    Footer Area
===================================== -->
    <?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

</body>

</html><?php /**PATH /home/ao0bylx163io/public_html/demo.aximoinfotech.com/bookfactory/bookfactoryworking/resources/views/webpages/about.blade.php ENDPATH**/ ?>