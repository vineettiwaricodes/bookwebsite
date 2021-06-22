<div class="site-header header-3  d-none d-lg-block ">
    <div class="container-fluid header-top-strip">
        <div class="row">
            <div class="col-lg-4">

                <ul class="header-top-list">
                    <li class="dropdown-trigger currency-dropdown"><a href="">₹ INR </a><i
                            class="fas fa-chevron-down dropdown-arrow"></i>
                       <!--  <ul class="dropdown-box">
                            <li><a href="#"></a></li>
                        </ul>
 -->
                    </li>


                    <!-- <li class="dropdown-trigger language-dropdown"><a href=""><span class="flag-img"><img
                                            src="image/icon/eng-flag.png" alt=""></span>en-gb </a><i
                                    class="fas fa-chevron-down dropdown-arrow"></i>
                                <ul class="dropdown-box">
                                    <li> <a href=""> <span class="flag-img"><img src="image/icon/eng-flag.png"
                                                    alt=""></span>English</a></li>
                                    <li> <a href=""> <span class="flag-img"><img src="image/icon/germany-flag.png"
                                                    alt=""></span>Germany</a></li>
                                </ul>
                            </li> -->
                </ul>
            </div>
            <div class="col-lg-8 flex-lg-right">
                <ul class="header-top-list">
                    <!-- <li><a href=""><i class="icons-left fas fa-random"></i>My Compare</a>
                            </li> -->
                    <?php if(Auth::user()): ?>
                    <li class="dropdown-trigger language-dropdown"><a href="wishlist"><i class=" text-danger  icons-left far fa-heart"></i>
                            wishlist (<?php echo e(session('count')); ?>) |</a>
                    </li>   
                    <?php else: ?>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i
                                class="icons-left text-danger fas fa-lock"></i> Wishlist (0) |</a>
                    </li>
                    <?php endif; ?>

                    <?php if(Auth::user()): ?>
                    <li class="dropdown-trigger language-dropdown"><a href="<?php echo e(url('my-account')); ?>"><i style="color: blue"  
                                class="icons-left  fas fa-user"></i>
                            My Account |</a><i class="fas fa-chevron-down dropdown-arrow"></i>
                        <ul class="dropdown-box">
                            <li> <a href="<?php echo e(url('my-account')); ?>">My Account</a></li>
                            <li> <a href="<?php echo e(url('order-complete')); ?>">Order History</a></li>
                            <li> <a href="">Transactions</a></li>
                            <li> <a href="">Downloads</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="dropdown-trigger language-dropdown"><a href="#" data-toggle="modal" data-target="#myModal"><i style="color: blue"  
                                class="icons-left  fas fa-user"></i>
                            My Account |</a><i class="fas fa-chevron-down dropdown-arrow"></i>
                        <ul class="dropdown-box">
                       <?php if(Auth::user()): ?>
                            <li> <a href="<?php echo e(url('my-account')); ?>">My Account</a></li>
                       

                            <li> <a href="<?php echo e(url('my-account#orders')); ?>">Order History</a></li>
                            <li> <a href="">Transactions</a></li>
                            <li> <a href="">Downloads</a></li>
                        <?php else: ?>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">My Account</a></li>
                       

                            <li> <a href="<?php echo e(url('my-account#orders')); ?>">Order History</a></li>
                            <li> <a href="">Transactions</a></li>
                            <li> <a href="">Downloads</a></li>
                        <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>


                    <li><a href="<?php echo e(url('contact')); ?>"><i class="icons-left text-success fas fa-phone"></i> Contact |</a>
                    </li>
                    <li><a href="<?php echo e(url('check_out')); ?>"><i class="icons-left text-danger fas fa-share"></i> Checkout |</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#trackOrderModal"><i class="icon-left text-success text- fas fa-truck-moving"></i> Track Order |</a>
                    </li>
                    <?php if(Auth::user()): ?>
                    <li><a href="logout">Sign out |</a></li>
                    <?php else: ?>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i
                                class="icons-left text-danger fas fa-lock"></i> Sign 
                            In |</a>
                    </li>
                    <?php endif; ?>
                   
                </ul>
            </div>
        </div>

    </div>

    <input type="hidden" id="select_cate_name" value="<?=isset($_GET['ca'])?$_GET['ca']:'All'; ?>" />
      <input type="hidden" id="select_cate_id" value="<?=isset($_GET['ca'])?$_GET['ca']:'0'; ?>" />
    <div class="header-middle pt--10 pb--10">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="<?php echo e(url('index')); ?>" class="site-brand">
                        <img src="<?php echo e(asset('public/webpages/assets/image/logo.png')); ?>" alt="">
                    </a>
                </div>
                <div class="col-lg-7 d-flex flex-row justify-content-start align-item-center ">
                    <nav class="category-nav " style="width:30%" id="category-nav-hm">
                        <div>
                            <a href="javascript:void(0)" class="category-trigger" id="category-trigger-hm"><i
                                    class="fa fa-bars"></i>
                                Categories</a>
                                <ul class="category-menu">
                                </ul>
                        </div>
                    </nav>

                    <div class="header-search-block   d-flex flex-row justify-content-start align-item-center"
                        style="width:60%; position:relative">
                        <form  action="<?php echo e(url('search')); ?>" method="post" class="w-100">
                     <?php echo e(csrf_field()); ?>

                        <input    type="text" required name="search_product" placeholder="Search Books by title,Author,Isbn"  id="search_product"   value="<?=isset($_GET['s'])?$_GET['s']:''; ?>" onfocus="changesearcat()" class="w-100">

                        <a href="<?php echo e(url('/result')); ?>"> <button  class="search-btn" type="submit">Search</button></a>
                        <div class="show-result-product w-100 border container">
                     
                         </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="main-navigation  flex-lg-right">
                        <div class="cart-widget ">
                            <!-- <div class="login-block">
                                        <a href="#" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="#">Register</a>
                                    </div> -->
                            <div class="cart-block ">
                                <div class="cart-total ">
                                    <!-- <span class="text-number">
                                        1
                                    </span> -->

<!-- 
<div style="color: green"><svg   xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2e3292" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path  d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div> -->


                                  <a href="<?php echo e(url('cartdata')); ?>"><h5><span style="color: green" class="text-item">
                                        <strong>

<i style="color: green" class='fas fa-cart-plus'><sup>2</sup></i>

                                    <i>  My Cart</i></strong>
                                    </span></h5></a>
                                   <!--  <span class="price">
                                        ₹0
                                        <i class="fas fa-chevron-down"></i>
                                    </span> -->
<!-- 
                                 <img src="public/webpages/assets/image/cart.png" width="87px" height="auto">

                                  <img
                                    src="<?php echo e(asset('public/webpages/assets/image/cart.png' )); ?>"> -->



                                </div>



                                <div class="cart-dropdown-block">
                                    <div class=" single-cart-block ">
                                        <div class="cart-product">
                                            <a href="<?php echo e(url('cart')); ?>" class="image">
                                                <img
                                                    src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">
                                            </a>
                                            <div class="content">
                                                <h3 class="title"><a href="<?php echo e(url('cart')); ?>"></a></h3>
                                                
                                                <p class="price"><span class="qty">1 ×</span> ₹ </p>
                                                <button class="cross-btn"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" single-cart-block ">
                                        <div class="btn-block">
                                            <a href="<?php echo e(url('cartdata')); ?>" class="btn">View Cart <i
                                                    class="fas fa-chevron-right"></i></a>
                                            <a href="" class="btn btn--primary">Check Out <i
                                                    class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
 <div class="header-bottom header-top-strip bg-primary">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <nav class="category-nav white-nav  " id="category-nav-hb">
                        <div>
                            <a href="javascript:void(0)" class="category-trigger" id="category-trigger-hb"><i
                                    class="fa fa-bars"></i>
                             Books  Categories</a>
                            
                        </div>
                    </nav>
                </div>

                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right main-menu--white li-last-0">
                            <li class="menu-item has-children">
                                 <a class="category-trigger" href="javascript:void(0)">EXAMS  

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">



<!-- 
                                            <img class="dropdown" 
                                                    src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>> -->
                                            



                                  </a> 








                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CA & CPT  </a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>SSC Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>IAS Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>GATE Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CET</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Law Exam</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Railway Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Olympiad</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Other Exams</a></li>
                                </ul>

                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children">
                                <a class="pp" href="javascript:void(0)">ACADEMICS 

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">
                                
                                  </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Law</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Medicine</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>School</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CBSE Books</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>ICSE Books</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>ISC Books</a></li>

                                </ul>
                                <!-- <ul class="sub-menu four-column">
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Fullwidth</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Fullwidth</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Product Details
                                                        1</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Product Details Page</a></li>
                                                    <li><a href="#">Product Details
                                                            Affiliate</a></li>
                                                    <li><a href="#">Product Details Group</a>
                                                    </li>
                                                    <li><a href="#">Product Details
                                                            Variables</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Product Details
                                                        2</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">left Thumbnail</a>
                                                    </li>
                                                    <li><a href="#">Right
                                                            Thumbnail</a></li>
                                                    <li><a href="#">Left Gallery</a>
                                                    </li>
                                                    <li><a href="#">Right Gallery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                            </li>
                            <!-- Pages -->
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">CHILDREN

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">

                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Teenage</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Activity</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Comics</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Charts</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Study Skills</a></li>

                                </ul>
                            </li>
                            <!-- Blog -->
                            <li class="menu-item has-children ">
                                <a href="javascript:void(0)">REGIONALS


                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Kannada</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Tamil</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Telugu</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Hindi</a></li>

                                </ul>
                                <!-- <ul class="sub-menu three-column">
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Full Widh (Default)</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                                <ul class="mega-single-block">
                                                  
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
                                                </h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Image Format (Default)</a></li>
                                                    <li><a href="#">Gallery Format</a></li>
                                                    <li><a href="#">Audio Format</a></li>
                                                    <li><a href="#">Video Format</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->


                            </li>
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">HEALTH CARE


                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">

                                </a>

                                <!-- <ul class="sub-menu">
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Face Masks</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Handwash</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Sanitizer</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Face Shields</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Thermometers</a></li>
                                            
                                        </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   

</div>
<div class="site-mobile-menu">
    <header  class="mobile-header d-block d-lg-none pt--10 pb-md--10">
        <div class="container-fluid">
            <div class="row align-items-sm-end align-items-center">
             
                <div  class="col-md-5 order-3 order-md-2 d-flex flex-row justify-content-start align-item-center">


                    <div class="input-group mb-3">
                        <div class="input-group-prepend ">
                            <span class="input-group-text bg-color-mobile"> <i class="fa fa-bars"></i> </span>
                        </div>
                        <input type="search" class="form-control" aria-label="Amount (to the nearest dollar)"
                            placeholder="Enter keyword to search">
                        <a href="<?php echo e(url('result')); ?>" class="input-group-append">
                            <span class="input-group-text bg-color-mobile"> <i class="fa fa-search"></i> </span>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 col-5  ">
                    <div class="mobile-header-btns header-top-widget">
                        <ul class="header-links pl-2 ">
                        <li class="sin-link">
                                <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                        class="ion-navicon"></i></a>
                            </li>
                            <li class="sin-link">
                                <a href="#" class="cart-link link-icon"><i class="ion-bag"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-7 order-md-3">
                    <a href="<?php echo e(url('index')); ?>" class="site-brand">
                        <img src="<?php echo e(asset('public/webpages/assets/image/logo.png')); ?>"  alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--Off Canvas Navigation Start-->
    <aside class="off-canvas-wrapper">
        <div class="btn-close-off-canvas">
            <i class="ion-android-close"></i>
        </div>
        <div class="off-canvas-inner">
            <!-- search box start -->
            <div class="search-box offcanvas d-none">
                <form>
                    <input type="text" placeholder="Search Here">
                    <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
            <!-- search box end -->
            <!-- mobile menu start -->
            <div class="mobile-navigation">

                <div class="w-100  d-flex justify-content-start align-items-center d-flex ">
                    <!-- <img src="<?php echo e(asset('public/webpages/assets/image/user-profile.png')); ?>" width="40px" alt=""> -->
                     <a href="<?php echo e(url('index')); ?>" class="site-brand">
                        <img style="margin-right: 40px;" src="<?php echo e(asset('public/webpages/assets/image/logo.png')); ?>" alt="" height="auto" width="280px">
                    </a>
                    <!-- <h6 style="color: green" class="mt-3 ">Welcome to Books Factory </h6> -->
                </div>
                <h6 style="color: green; margin-left: 10px; margin-bottom: 20px; margin-top: 4px;"><i><b>Welcome to Books Factory</b></i> </h6>
                <!-- mobile menu navigation start -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu main-mobile-menu">

                       

                        <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center"> 
                                 <!--  <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  -->
<i class='fab fa-leanpub'></i>
                                  <span>Exams</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">

                                <a href="#">
                              <i class='fas fa-share'></i>  CA & CPT</a><br>
                                    <a href="#">   <i class='fas fa-share'></i>  SSC Exams</a><br>
                                    <a href="#">   <i class='fas fa-share'></i>  IAS Exams</a><br>
                                    <a href="#">   <i class='fas fa-share'></i>  GATE Exams</a><br>
                                    <a href="#">  <i class='fas fa-share'></i> CET</a><br>
                                    <a href="#">  <i class='fas fa-share'></i> Law Exam</a><br>
                                    <a href="#">  <i class='fas fa-share'></i> Railway Exams</a><br>
                                    <a href="#">  <i class='fas fa-share'></i> Olympiad</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Other Exams</a>
                                    
                                  

                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center">  <!-- <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt=""> -->
                                  <i class='fas fa-university'></i>
                                   <span>Academics</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"><i class='fas fa-share'></i> Law </a><br>
                                    <a href="#"><i class='fas fa-share'></i> Medicine</a><br>
                                    <a href="#"><i class='fas fa-share'></i> School</a><br>
                                      <a href="#"><i class='fas fa-share'></i> CBSE Books</a><br>
                                        <a href="#"><i class='fas fa-share'></i> ICSE Books</a><br>
                                          <a href="#"><i class='fas fa-share'></i> ISC Books</a>
                                  
                                  

                                </li>
                            </ul>
                        </li>

                        
                        <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center">  <!-- <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  --> 
                                    <i class="fas fa-child"></i>
                                    <span>Children</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"><i class='fas fa-share'></i> Teenage</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Activity</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Comics</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Charts</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Study Skills</a>
                                  
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center"> 
                                  <!-- <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  -->
                                  <i class='fas fa-mosque'></i>
                                   <span>Regionals</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"><i class='fas fa-share'></i> Kannada</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Tamil</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Telugu</a><br>
                                    <a href="#"><i class='fas fa-share'></i> Hindi</a>
                                  

                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center"> 
                                 <!--  <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">   -->
                                 <i class='fas fa-briefcase-medical'></i>
                                  <span>Health Care</span> <i class="fas fa-angle-down ml-auto"></i></a>
                        <!--     <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"> </a>
                                    <a href="#">Central Govt Exam</a>
                                    <a href="#">CET</a>
                                    <a href="#">Defence Exams</a>
                                  

                                </li>
                            </ul> -->
                        </li>

                     <!--    <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center">  <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  <span>Exam</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"> CA & CPT Exams</a>
                                    <a href="#">Central Govt Exam</a>
                                    <a href="#">CET</a>
                                    <a href="#">Defence Exams</a>
                                  

                                </li>
                            </ul>
                        </li>
 -->
                   <!--      <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center">  <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  <span>Exam</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"> CA & CPT Exams</a>
                                    <a href="#">Central Govt Exam</a>
                                    <a href="#">CET</a>
                                    <a href="#">Defence Exams</a>
                                  

                                </li>
                            </ul>
                        </li> -->

                   <!--      <li class="menu-item-has-children">
                                 <a href="#" class="d-flex flex-row justify-content-start align-items-center">  <img src="<?php echo e(asset('public/webpages/assets/image/m-menu/1.png')); ?>" alt="">  <span>Exam</span> <i class="fas fa-angle-down ml-auto"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">


                                    <a href="#"> CA & CPT Exams</a>
                                    <a href="#">Central Govt Exam</a>
                                    <a href="#">CET</a>
                                    <a href="#">Defence Exams</a>
                                  

                                </li>
                            </ul>
                        </li> -->
                        
                       
                       
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->
            <nav class="off-canvas-nav">
                <ul class="mobile-menu menu-block-2">
                    <!--<li class="menu-item-has-children">-->
                    <!--    <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>-->
                    <!--    <ul class="sub-menu">-->
                    <!--        <li> <a href="#">USD $</a></li>-->
                    <!--        <li> <a href="#">EUR €</a></li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                    <!--<li class="menu-item-has-children">-->
                    <!--    <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>-->
                    <!--    <ul class="sub-menu">-->
                    <!--        <li>Eng</li>-->
                    <!--        <li>Ban</li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                    <li class="menu-item-has-children">
                        <a href="<?php echo e(url('my-account')); ?>">My Account <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo e(url('my-account')); ?>">My Account</a></li>
                            <li><a href="<?php echo e(url('order-complete')); ?>">Order History</a></li>
                            <li><a href="">Transactions</a></li>
                            <li><a href="">Downloads</a></li>
                        </ul>
                    </li>
                </ul>
                 <div class="off-canvas-bottom">
                <div class="contact-list mb--10">
                    <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(+91)9837994651</a>
                    <a href="" class="sin-contact"><i class="fas fa-envelope"></i>
                    Srrbooksfactory@gmail.com</a>
                </div>
                <div class="off-canvas-social">
                    <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            </nav>
        <!--     <div class="off-canvas-bottom">
                <div class="contact-list mb--10">
                    <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(+91) 78790220</a>
                    <a href="" class="sin-contact"><i class="fas fa-envelope"></i>info@bookfactory.com</a>
                </div>
                <div class="off-canvas-social">
                    <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div> -->
        </div>
    </aside>
    <!--Off Canvas Navigation End-->
</div>
<div class="sticky-init fixed-header common-sticky" id="hide-sticky-header-m">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <a href="<?php echo e(url('index')); ?>" class="site-brand">
                    <img src="<?php echo e(asset('public/webpages/assets/image/logo.png')); ?>" alt="">
                </a>
            </div>
            <div style="margin-bottom: 2px;" class="col-lg-7 d-flex flex-row justify-content-start align-item-center  ">
                <nav class="category-nav " style="width:30%" id="category-nav-sticky">
                    <div>
                        <a href="javascript:void(0)" class="category-trigger" id="category-trigger-sticky"><i
                                class="fa fa-bars"></i>
                            Categories</a>
                        <ul class="category-menu">
                           
                            <!-- <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                <ul class="sub-menu">
                                    <li class="single-block">
                                        <h3 class="title">WHEEL SIMULATORS</h3>
                                        <ul>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="single-block">
                                        <h3 class="title">WHEEL SIMULATORS</h3>
                                        <ul>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="single-block">
                                        <h3 class="title">WHEEL SIMULATORS</h3>
                                        <ul>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="single-block">
                                        <h3 class="title">WHEEL SIMULATORS</h3>
                                        <ul>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                           
                        </ul>
                    </div>
                </nav>
                <div class="header-search-block  d-flex flex-row justify-content-start align-item-center  "
                    style="width:100%">
                    <input type="text" placeholder="Search Books by title , Author , Isbn">
                    <a href="<?php echo e(url('/result')); ?>"> <button>Search</button></a>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="main-navigation flex-lg-right">
                    <div class="cart-widget">
                        <!-- <div class="login-block">
                                        <a href="#" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="#">Register</a>
                                    </div> -->
                        <div class="cart-block">
                            <div class="cart-total">
                              <!--   <span class="text-number">
                                    1
                                </span>
                                <span class="text-item">
                                    <strong> My cart</strong>
                                </span>
                                <span class="price">
                                    ₹0
                                    <i class="fas fa-chevron-down"></i>
                                </span> -->

 <h5><span style="color: green" class="text-item">
                                        <strong>

<i style="color: green" class='fas fa-cart-plus'><sup>2</sup></i>

                                     <i> My Cart</i></strong>
                                    </span></h5>


                            </div>
                            <div class="cart-dropdown-block">
                                <div class=" single-cart-block ">
                                    <div class="cart-product">
                                        <a href="#" class="image">
                                        <img
                                                    src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>">
                                        </a>
                                        <div class="content">
                                            <h3 class="title"><a href="<?php echo e(url('cart')); ?>"></a></h3>
                                            <p class="price"><span class="qty">1 ×</span> ₹</p>
                                            <button class="cross-btn"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" single-cart-block ">
                                    <div class="btn-block">
                                        <a href="#" class="btn">View Cart <i class="fas fa-chevron-right"></i></a>
                                        <a href="" class="btn btn--primary">Check Out <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <div class="header-bottom header-top-strip bg-primary">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <nav class="category-nav white-nav  " id="category-nav-hb">
                        <div>
                            <a href="javascript:void(0)" class="category-trigger" id="category-trigger-hb"><i
                                    class="fa fa-bars"></i>
                             Books  Categories</a>
                            
                        </div>
                    </nav>
                </div>

                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right main-menu--white li-last-0">
                            <li class="menu-item has-children">
                                 <a class="category-trigger" href="javascript:void(0)">EXAMS  

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">



<!-- 
                                            <img class="dropdown" 
                                                    src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>> -->
                                            



                                  </a> 








                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CA & CPT  </a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>SSC Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>IAS Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>GATE Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CET</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Law Exam</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Railway Exams</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Olympiad</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Other Exams</a></li>
                                </ul>

                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children">
                                <a class="pp" href="javascript:void(0)">ACADEMICS 

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">
                                
                                  </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Law</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Medicine</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>School</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>CBSE Books</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>ICSE Books</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>ISC Books</a></li>

                                </ul>
                                <!-- <ul class="sub-menu four-column">
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Fullwidth</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Fullwidth</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"> <a href="javascript:void(0)">Product Details
                                                        1</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Product Details Page</a></li>
                                                    <li><a href="#">Product Details
                                                            Affiliate</a></li>
                                                    <li><a href="#">Product Details Group</a>
                                                    </li>
                                                    <li><a href="#">Product Details
                                                            Variables</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-25">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Product Details
                                                        2</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">left Thumbnail</a>
                                                    </li>
                                                    <li><a href="#">Right
                                                            Thumbnail</a></li>
                                                    <li><a href="#">Left Gallery</a>
                                                    </li>
                                                    <li><a href="#">Right Gallery</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                            </li>
                            <!-- Pages -->
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">CHILDREN

                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">

                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Teenage</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Activity</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Comics</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Charts</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Study Skills</a></li>

                                </ul>
                            </li>
                            <!-- Blog -->
                            <li class="menu-item has-children ">
                                <a href="javascript:void(0)">REGIONALS


                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Kannada</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Tamil</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Telugu</a></li>
                                    <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Hindi</a></li>

                                </ul>
                                <!-- <ul class="sub-menu three-column">
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Full Widh (Default)</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                                <ul class="mega-single-block">
                                                  
                                                    <li><a href="#">left Sidebar</a></li>
                                                    <li><a href="#">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="cus-col-33">
                                                <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
                                                </h3>
                                                <ul class="mega-single-block">
                                                    <li><a href="#">Image Format (Default)</a></li>
                                                    <li><a href="#">Gallery Format</a></li>
                                                    <li><a href="#">Audio Format</a></li>
                                                    <li><a href="#">Video Format</a></li>
                                                    <li><a href="#">left Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->


                            </li>
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">HEALTH CARE


                                     <img style="padding-left: 3px" src="<?php echo e(asset('public/webpages/assets/image/icons2.png')); ?>" width="13px" height="auto"  alt="">

                                </a>

                                <!-- <ul class="sub-menu">
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Face Masks</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Handwash</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Sanitizer</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Face Shields</a></li>
                                            <li><a href="#"><i class="pr-2 fas fa-chevron-right"></i>Thermometers</a></li>
                                            
                                        </ul> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body login-modal-bf">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login"
                            role="tab" aria-controls="pills-login" aria-selected="true">Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-Register-tab" data-toggle="pill" href="#pills-Register" role="tab"
                            aria-controls="pills-Register" aria-selected="false">Register</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                        aria-labelledby="pills-login-tab">

                        <form>
                            <div class="login-form">


                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                    <span id="login_error_msg"></span>
                                        <label for="email">Enter your email address here...</label>
                                        <!-- <input class="mb-0 form-control" type="email" id="email1"
                                            placeholder="Enter you email address here..."> -->
                
                                 <input type="email" name="login_email" class="mb-0 form-control" value="<?php echo e(isset($_COOKIE['user_email'])?$_COOKIE['user_email']:''); ?>" placeholder="Enter Your Email"  id="value">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="password">Password</label>
                                        <!-- <input class="mb-0 form-control" type="password" id="login-password"
                                            placeholder="Enter your password"> -->

                                            <input type="password" class=" form-control" value="<?php echo e(isset($_COOKIE['password'])?$_COOKIE['password']:''); ?>" name="login_password" placeholder="Enter Password"  id="value"> 
                                             
<div class="check">
                                            <input class="mt-1" type="checkbox" <?php echo isset($_COOKIE[ 'rem_me'])? "checked": ''?> id="html" name="login_remember"> 

                                    <label class="mt-3 remember" for="html">
                                    <span><?php echo e(__('messages.rem_me')); ?></span>
                                    </label></div>

 
                                        <h6 class="w-100 text-left ">  <a href="javascript:forgotmodel()"><?php echo e(__('messages.lost_pwd')); ?></a></h6>
                              
                                    
                                         
                                       
                                     
                                  
                               


                                    </div>

                                    <div class="col-md-12">
                                        <input type="button" class="btn text-white product-buy-button" name="btnlogin" onclick="loginuser('login_')" value="<?php echo e(__('messages.login')); ?>" class="regiterbtn" style="background-color: <?= Session::get('site_color') ?> !important"/>
                                    </div> 
                                    <?php if(Session::get("facebook_active")): ?>
                              <div class="button-facebook">
                                 <a href="<?php echo e(url('auth/facebook')); ?>">
                                 <img src="<?php echo e(asset('public/Ecommerce/images/facebook.png')); ?>">
                                 </a>
                              </div>
                              <?php endif; ?>
                              <?php if(Session::get("google_active")): ?>
                              <div class="button-facebook">
                                 <a href="<?php echo e(url('auth/google')); ?>">
                                 <img src="<?php echo e(asset('public/Ecommerce/images/google.png')); ?>">
                                 </a>
                              </div>
                              <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-Register" role="tabpanel" aria-labelledby="pills-Register-tab">
                        <form >
                            <div class="login-form">

                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                    <span id="reg_success_msg"></span>
                                    <span id="reg_error_msg"></span>
                                        <label for="email">Full Name</label>
                                        
                                           
                                 
                                 <input class="mb-0 form-control" type="text" name="first_name"  id="value" placeholder="<?php echo e(__('messages.name')); ?>">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="email">Email</label>
                                        <!-- <input class="mb-0 form-control" type="email" id="email"
                                            placeholder="Enter Your Email Address Here.."> -->
                                            <input  class="mb-0 form-control" type="email"  name="reg_email"  id="value" placeholder="<?php echo e(__('messages.email')); ?>">
                                 
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label for="email">Phone</label>
                                        <!-- <input class="mb-0 form-control" type="email" id="email"
                                            placeholder="Enter Your Email Address Here.."> -->
                                            <input  class="mb-0 form-control" type="text" name="reg_phone" id="value" placeholder="<?php echo e(__('messages.phone')); ?>">
                                 
                                    </div>
                                    <div class="col-lg-6 mb--20">
                                        <label for="password">Password</label>
                                        <!-- <input class="mb-0 form-control" type="password" id="password"
                                            placeholder="Enter your password"> -->
                                            <input class="mb-0 form-control" type="password" name="reg_password"  id="value" placeholder="<?php echo e(__('messages.password')); ?>">
                                    </div>
                                    <div class="col-lg-6 mb--20">
                                        <label for="password">Repeat Password</label>
                                        <!-- <input class="mb-0 form-control" type="password" id="repeat-password"
                                            placeholder="Repeat your password"> -->
                                            <input class="mb-0 form-control" type="password" name="confirm_password" id="value" placeholder="<?php echo e(__('messages.confirm_password')); ?>">
                                    </div>
                                    <div class="col-md-12">
                                    <input  class="btn text-white product-buy-button" type="button" name="btnsubmit" onclick="registeruser()" value="REGISTER" class="regiterbtn" style="background-color: <?= Session::get('site_color') ?> !important"/>
                                       <!--  <a href="#" class="btn text-danger product-buy-button">Register</a> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="trackOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Track Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="#">
                            <div class="login-form p-1">

                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="email">Enter Your Email id</label>
                                        <input class="mb-0 form-control" type="text" id="name"
                                            placeholder="">
                                    </div>
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="email">Enter Your Order Id</label>
                                        <input class="mb-0 form-control" type="text" id="name"
                                            placeholder="">
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <a href="#" class="btn product-buy-button">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </form>
            </div>
         
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\latestbook\resources\views/webpages/include/header.blade.php ENDPATH**/ ?>