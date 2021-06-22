<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('webpages/include/head-link')
</head>

<body>
    <div class="site-wrapper" id="top">
        @include('webpages/include/header')
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container my-container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Cart Page Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container my-container pt-3 pb-3">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div id="google-map"></div>
                    </div>
                </div> -->


                <div class="row mt-60 ">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            @if (session('message'))
                        <div class="alert alert-success">
                       {{ session('message') }}
                            </div>
                             @endif
                            <form  action="{{url('storecontact')}}" method="post"   class="contact-form">
                            {{csrf_field()}}
                            <!-- <form id="contact-form" action="php/mail.php" method="post" class="contact-form"> -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                       
                                            <label>Your Name <span class="required">*</span></label>
                                            <labal style="color: red;" >{{$errors->first('name')}} </labal>
                                            <input type="text" id="con_name" name="name" class="form-control"
                                               >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                       
                                            <label>Your Email <span class="required">*</span></label>
                                            <labal style="color: red;" >{{$errors->first('email')}} </labal>
                                            <input type="email" id="con_email" name="email" class="form-control"
                                              >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        
                                            <label>Your Phone*</label>
                                            <labal style="color: red;" >{{$errors->first('phone')}} </labal>
                                            <input type="text" id="con_phone" name="phone" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        
                                            <label>Your Subject*</label>
                                            <labal style="color: red;" >{{$errors->first('subject')}} </labal>
                                            <input type="text" id="con_phone" name="subject" class="form-control"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                       
                                            <label>Your Message*</label>
                                            <labal style="color: red;" >{{$errors->first('message')}} </labal>
                                            <textarea id="con_message" name="message"
                                                class="form-control"   ></textarea>
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
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 p-5">
                    <div class=""><img src="{{asset('public/webpages/assets/image/contact-image.png')}}" alt=""> </div>
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
                                        <p><span>Address:</span> Rajat Vihar,Sector 62A,Noida (U.P)</p>
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
    @include('webpages/include/footer')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>

</body>

</html>