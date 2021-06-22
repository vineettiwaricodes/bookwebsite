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
                            <li class="breadcrumb-item"><a href="<?php echo e(url('index')); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="pb-4">
            <div class="container my-container pt-3 pb-3 mb-3">
                <div class="row  mb--40">


                    <div class="col-lg-5 mb--30 " >
                        <div class="row no-gutters">
                            <div class="col-sm-9 mb--15 mb-sm--0 order-sm-2 ">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                        "slidesToShow": 1,
                        "arrows": false,
                        "fade": true,
                        "draggable": false,
                        "swipe": false,
                        "asNavFor": ".product-slider-nav"
                        }'>             
                                    <div class="single-slide">
                                        <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-1.jpg')); ?>"
                                            alt=""> -->
                                            
                                            <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->basic_image)); ?> " alt="image" >
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="additional-image">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 ">
                                <!-- Product Details Slider Nav -->
                                <div class="mr-sm--15 product-slider-nav sb-slick-slider arrow-type-two vertical-slider"
                                    data-slick-setting='{
                                "infinite":true,
                                  "autoplay": true,
                                  "autoplaySpeed": 8000,
                                  "slidesToShow": 3,
                                  "arrows": true,
                                  "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
                                  "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
                                  "asNavFor": ".product-details-slider",
                                  "focusOnSelect": true,
                                  "vertical":true
                                  }' data-slick-responsive='[
                                {"breakpoint":991, "settings": {"slidesToShow": 3} },
                                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                                {"breakpoint":575, "settings": 
                                {"slidesToShow": 3,
    
                                  "vertical":false
                                } 
                              }
                            ]'>

                           
                                    <div class="single-slide">
                                    <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                         
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="<?php echo e(url('public/upload/product/'.$productdetail[0]->additional_image)); ?>"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










<!-- hover start -->




              <!--   hover end -->
                











                    <div class="col-lg-7">
                        <div class="product-details-info w-100 h-100">
                            <!-- <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p> -->
                            <div class="border-bottom">
                                <h3 class="product-title mt-2 mb-1"><?php echo e($productdetail[0]->name); ?></h3>
                                <p class=" mb-1">by K Bhyrappa (Author),Sapna Book House (Publisher)</p>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                        <span>(88 Customers)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-7 border-right border-bottom">

                                    <div class="row">
                                        <div class="col-12 df-row-ss">

                                            <div class="w-50 df-col-ss">
                                                <span class="price-new my-price pl-2">₹<?php echo e($productdetail[0]->price); ?></span>
                                                <small>inclusive all taxes</small>
                                            </div>
                                            <div class="w-50 df-col-ss qty-row pr-2">
                                                <div class="df-row-ee w-100">
                                                    <label for="Qty" class="pr-1"><strong>Qty </strong> </label>
                                                    <select class=" form-control h-25 w-50 ml-2 qty-control"
                                                        aria-label="Default select example">
                                                        <option selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>

                                                <p class="ml-auto qty-text">Buy in Bullk ?</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 df-row-cc mt-2">
                                            <a href="<?php echo e(url('cart')); ?>/<?php echo e($productdetail[0]->id); ?>" class="btn  product-buy-button">ADD TO CART</a>
                                            <div class="btn  product-buy-button">BUY NOW</div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="w-100 df-row-cc">

                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('public/webpages/assets/image/box.png')); ?>" alt=""
                                                        class="delivery-icon">
                                                    <span class="delivery-span">In Stock</span>
                                                </div>
                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('public/webpages/assets/image/delivery-man.png')); ?>"
                                                        alt="" class="delivery-icon">
                                                    <span class="delivery-span">Guaranteed Services</span>
                                                </div>

                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('public/webpages/assets/image/international.png')); ?>"
                                                        alt="" class="delivery-icon">

                                                    <span class="delivery-span">International Shipping</span>
                                                </div>
                                                <div class="w-25 df-col-cc">
                                                    <img src="<?php echo e(asset('public/webpages/assets/image/delivery.png')); ?>"
                                                        alt="" class="delivery-icon">
                                                    <span class="delivery-span">Free Home Delivery</span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 print-on-demand-div">
                                            <a href="#" class="border p-1"> <i class="fas fa-print"></i><strong> Print On
                                                    Demand |  <span class="red-color"> Non-Returnable</span> </strong>  </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div>
                                        <p class="check-text "><strong>Check Delivery</strong> </p>
                                        <div>
                                            <i class="fas fa-truck"></i>
                                            <input type="number" placeholder="Enter Pincode" class="pincode-input"><i
                                                class="fas fa-arrow-right"></i>
                                        </div>
                                        <small class="pt-2">Enter pincode for exact delivery dates / charges and to know
                                            if express delivery is available</small>
                                    </div>
                                    <div class="mt-4 pincode-store df-row-ss">
                                        <img src="<?php echo e(asset('public/webpages/assets/image/shop.png')); ?>" alt=""
                                            class="shop-icon">

                                        <div class="">
                                            <a href="#">
                                                <p class="pincode-text"><strong>Check Availability at Stores</strong>
                                                </p>
                                            </a>
                                            <p class="pincode-text-1">CLICK HERE</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 border-right mt-4">

                                            <div class="p-3 delivery-div">
                                                <p class="m-0">Offers on the product</p>
                                                <div class="w-100 df-row-ss">
                                                    <div class="mr-2">
                                                        <i class="fas fa-tag"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <p class="m-0">Coupon Code: AWESOME10</p>
                                                        <p class="m-0">Get 10% off on minimum order of Rs 500 (max
                                                            discount Rs
                                                            75). View Terms.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- <div class="price-block">
                                <span class="price-new">₹200</span>
                                <del class="price-old">₹200</del> <br>
                                <small>inclusive all taxes</small>
                            </div> -->

                            <!-- <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="">(1 Reviews)</a> <span>|</span>
                                    <a href="">Write a review</a>
                                </div>
                            </div> -->
                            <!-- <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the Dust
                                    with ruffles at the bottom of the
                                    dress.</p>
                            </article> -->
                            <div>

                            </div>
                            <!-- <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Qty</span>
                                    <input type="number" id="quantity" name="quantity" min="1" max="5">
                                    
                                </div>
                                <div class="add-cart-btn">
                                    <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to
                                        Cart</a>
                                </div>
                            </div> -->
                            <!-- <div class="compare-wishlist-row">
                                <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                            </div> -->
                        </div>
                    </div>
                </div>







  <div class="col-lg-4">
                    <div class="main-navigation  flex-lg-right">
                        <div class="cart-widget ">
                           
                            <div class="cart-block-23">
                            <b> <i style="font-size: 20px;" class='far fa-share-square'></i></b> <b style=" border-bottom: 2px solid green; font-size: 19px;">Share:</b>
                         
                          <a class="cart-block-24" style="margin-left: 5px" href="">  <i style="color: blue; font-size: 18px;" class="fab fa-facebook"></i></a>

                          <a class="cart-block-24" style="margin-left: 3px" href="">  <i style="color: red; font-size: 18px;" class="fab fa-instagram"></i></a>

                           <a class="cart-block-24" style="margin-left: 3px" href=""> <i style=" color: green; font-size: 18px;" class="fab fa-whatsapp"></i></a>

                        <a class="cart-block-24" style="margin-left: 3px" href="">   <i  style=" color: red; font-size: 18px;" class="fab fa-pinterest"></i></a>
                    


                            


                            </div>
                        </div>

                    </div>
                </div>

  

 







               

            </div>








          
                    <div class="container my-container pt-3 pb-3">
                        <div class="sb-custom-tab review-tab section-padding ">
                            <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                                        aria-controls="tab-1" aria-selected="true">
                                        DESCRIPTION
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                                        aria-controls="tab-2" aria-selected="true">
                                        REVIEWS (1)
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content space-db--20" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="product-spec-h4">Product Specifications</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div style="text-align: center;" class="col-12 mt-2 border-bottom">
                                            <h5>Book Description</h5>
                                            <p><?php echo e($productdetail[0]->description); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center mt-2">
                                            <h5>Book Specifications</h5>
                                        </div>



                                   
                         


                                    </div>



                                         <div class="row  pt-2">
                                            <div  class="mx-auto col-10">
                                                <div  class="row ">
                                                    <div class=" col-4 specifications ">
                                                       <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>ISBN-13 :</strong></span>
                                                                        
                                                                        <span>9789389555523</span>
                                                    </div>
                                                      <div class=" col-4 specifications">
                                                    <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Language :</strong></span>
                                                                        <span>
                                                                Kannada</span>
                                                    </div>
                                                      <div class=" col-4 specifications">
                                                     <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Binding :</strong></span>
                                                                        <span>Paper Back</span>
                                                    </div><br><br>

                                                      <div class=" col-4 specifications">
                                                    <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Publisher :</strong></span>
                                                                        <span>Book Factory</span>
                                                    </div>
                                                        <div class=" col-4 specifications">
                                                 <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Publishing
                                                                    Date :</strong></span>
                                                                    <span>
                                                                2019</span>
                                                    </div>

                                                           <div class=" col-4 specifications">
                                               <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Author :
                                                                </strong></span>
                                                                </span>
                                                                <span>
                                                                Mr. Ram singh</span>
                                                    </div><br><br>

                                                              <div class=" col-4 specifications">
                                              <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Product
                                                                    Edition :</strong></span>
                                                             <span>1</span>
                                                    </div>

                                                                   <div class=" col-4 specifications">
                                              <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>H x L x W :
                                                                </strong></span>
                                                           <span>15cm X 180cm X 29cm</span>
                                                    </div>


                                                              <div class=" col-4 specifications">
                                              <span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Weight :
                                                                </strong></span>
                                                           <span>400gm </span>
                                                    </div>



                                                    


                                                </div>
                                            </div>
                                        </div>




                                </div>






<!-- start -->



                                       
                            <!--             <div style="margin-left: 150px;" class="col-12  w-100">
                                            <div class="row  mt-3">
                                                <div class="col-md-4">
                                                    <div style="margin-left: 90px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>ISBN-13</strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>9789389555523</span></div>
                                                    </div>
                                                    <div style="margin-left: 90px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Language</strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>
                                                                Kannada</span></div>

                                                    </div>
                                                    <div style="margin-left: 90px;"  class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Binding</strong></span>
                                                        </div>
                                                        <div class="col-md-8"><span>Paper Back</span></div>
                                                    </div>
                                                    <div style="margin-left: 90px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Publisher</strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>Book Factory</span></div>
                                                    </div>
                                                    <div style="margin-left: 90px;"  class="row">
                                                        <div class="col-md-5"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Publishing
                                                                    Date</strong></span>
                                                        </div>
                                                        <div class="col-md-5"><span>
                                                                2019</span></div>
                                                    </div>

                                                </div>

                                                

                                                <div style="margin-left: 0px;" class="col-md-6">

                                                    <div style="margin-left: 50px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Author
                                                                </strong></span>
                                                        </div>
                                                        <div class="col-md-8"><span>
                                                                Mr. Ram singh</span></div>
                                                    </div>
                                                    <div style="margin-left: 50px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Product
                                                                    Edition</strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>1</span></div>
                                                    </div>
                                                    <div style="margin-left: 50px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>H x L x W
                                                                </strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>15cm X 180cm X 29cm</span></div>
                                                    </div>
                                                    <div style="margin-left: 50px;" class="row">
                                                        <div class="col-md-4"><span><strong><i
                                                                        class="fas fa-angle-right mr-2"></i>Weight
                                                                </strong></span>
                                                        </div>
                                                        <div class="col-md-4"><span>400gm </span></div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>  
 -->


<!-- end -->














                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <div class="review-wrapper">
                                        <h2 class="title-lg mb--20">1 REVIEW FOR AUCTOR GRAVIDA ENIM</h2>
                                        <div class="review-comment mb--20">
                                            <div class="avatar">
                                                <img src="image/icon/author-logo.png" alt="">
                                            </div>
                                            <div class="text">
                                                <div class="rating-block mb--15">
                                                    <span class="ion-android-star-outline star_on"></span>
                                                    <span class="ion-android-star-outline star_on"></span>
                                                    <span class="ion-android-star-outline star_on"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                    <span class="ion-android-star-outline"></span>
                                                </div>
                                                <h6 class="author">ADMIN – <span class="font-weight-400">March 23,
                                                        2015</span>
                                                </h6>
                                                <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan
                                                    elit odio
                                                    quis mi.</p>
                                            </div>
                                        </div>
                                        <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
                                        <div class="rating-row pt-2">
                                            <p class="d-block">Your Rating</p>
                                            <span class="rating-widget-block">
                                                <input type="radio" name="star" id="star1">
                                                <label for="star1"></label>
                                                <input type="radio" name="star" id="star2">
                                                <label for="star2"></label>
                                                <input type="radio" name="star" id="star3">
                                                <label for="star3"></label>
                                                <input type="radio" name="star" id="star4">
                                                <label for="star4"></label>
                                                <input type="radio" name="star" id="star5">
                                                <label for="star5"></label>
                                            </span>
                                            <form action="./" class="mt--15 site-form ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="message">Comment</label>
                                                            <textarea name="message" id="message" cols="30" rows="10"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="name">Name *</label>
                                                            <input type="text" id="name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="email">Email *</label>
                                                            <input type="text" id="email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="website">Website</label>
                                                            <input type="text" id="website" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="submit-btn">
                                                            <a href="#" class="btn btn-black">Post Comment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              
          
    </div>



<!-- most recent view book -->



 <section class="">
       
        <div class="container my-container pt-3 pb-3 mt-3">
            <div style="border-bottom: 1px solid #ececec" class="w-100 pb-2 d-flex flex-row align-items-center mb-4">
                <h5> <strong>Most Recent View Books</strong> </h5>
                <a href="#" class="mr-3 btn btn--primary view-all-btn ml-auto"> View all </a>
            </div>
          

   <section class="section-margin">
            <div  class=" container pad-1 my-container pt-3 pb-3">
             
            
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 1800,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 2} }
            ]'>
                    <div  class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                               
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="Demo image_size" src="<?php echo e(asset('public/webpages/assets/image/products/sachin.jpg')); ?>" alt=""><br>
                                    
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                       
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%

                                        <span> off</span>



                                    </span>
                                </div><br>


                    <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 




                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                           <!--  <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                     <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
            <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                                <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                           <!--  <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>







        </div>
    </section>






<!-- most recent book end -->







    <!--=================================
    RELATED PRODUCTS BOOKS
===================================== -->
   

 
                <div style="border-bottom: 1px solid #ececec" class="w-100 pb-2 d-flex flex-row align-items-center mb-4">
                    <h5 style="margin-left: 13px;"> <strong> Related Products</strong> </h5>
                    <a href="#" class="mr-3 btn btn--primary view-all-btn ml-auto"> View all</a>
                </div>




   <section class="section-margin">
            <div  class=" container pad-1 my-container pt-3 pb-3">
             
            
                <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed":1800,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 2} }
            ]'>
                    <div  class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                               
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/sachin.jpg')); ?>" alt=""><br>
                                    
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%

                                        <span> off</span>



                                    </span>
                                </div><br>


                    <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 




                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                           <!--  <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                     <div class="single-slide">
                        <div class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                
                 <div class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div  id="op" class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                   
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                           <!--  <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                
                 <div class="single-slide">
                        <div  class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img class="image_size" src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>" alt=""><br>
                                    
                                    <div class="hover-contents">
                                        <a href="<?php echo e(url('product-details')); ?>" class="hover-image">
                                            <!-- <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"
                                                alt=""> -->
                                        </a>
                                        <div class="hover-btns">
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">harry potter</a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹200</span>
                                    <del class="price-old">₹200</del>
                                    <span class="price-discount">20%
                                    <span> off</span></span>
                                </div><br>
                                     
      <div class="chi1"  class="pb-5">
        <button class="chi_button">

<div class="chi_icon">
    

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="chi_heading">ADD TO CART</h6></button>
    </div> 


                            </div>
                        </div>
                    </div>
                
                






                    </div>
                </div>
            </div>
        </section>









    <!-- Modal -->
    <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-details-modal">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product Details Slider Big Image-->
                            <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                            </div>
                            <!-- Product Details Slider Nav -->
                            <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-details-4.jpg')); ?>"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30 ">
                                <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                <ul class="list-unstyled">
                                    <li>Ex Tax: <span class="list-value"> ₹200</span></li>
                                    <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                    <li>Product Code: <span class="list-value"> model1</span></li>
                                    <li>Reward Points: <span class="list-value"> 200</span></li>
                                    <li>Availability: <span class="list-value"> In Stock</span></li>
                                </ul>
                                <div class="price-block">
                                    <span class="price-new">₹200</span>
                                    <del class="price-old">₹200</del>
                                </div>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                    </div>
                                    <div class="review-widget">
                                        <a href="">(1 Reviews)</a> <span>|</span>
                                        <a href="">Write a review</a>
                                    </div>
                                </div>
                                <article class="product-details-article">
                                    <h4 class="sr-only">Product Summery</h4>
                                    <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                        under the Dust with ruffles at the bottom
                                        of the
                                        dress.</p>
                                </article>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">Qty</span>
                                        <input type="number" class="form-control text-center" value="1">
                                    </div>
                                    <div class="add-cart-btn">
                                        <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add
                                            to Cart</a>
                                    </div>
                                </div>
                                <div class="compare-wishlist-row">
                                    <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                    <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="widget-social-share">
                        <span class="widget-label">Share:</span>
                        <div class="modal-social-share">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <section class="">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container my-container">
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
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-4.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-5.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-2.jpg')); ?>">
                </div>
                <div class="single-slide">
                    <img src="<?php echo e(asset('public/webpages/assets/image/products/product-3.jpg')); ?>">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
    <?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\latestbook\resources\views/webpages/product-details.blade.php ENDPATH**/ ?>