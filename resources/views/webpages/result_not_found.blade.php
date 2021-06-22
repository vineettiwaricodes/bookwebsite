<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('webpages/include/head-link')
</head>

<body>
    <div class="site-wrapper" id="top">
        @include('webpages/include/header')
        <section class="breadcrumb-section pt-3">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Results</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container" style="background-color:#fff" >
                <div class="row">
                    <div class="col-lg-9 order-lg-2">
                        <div class="shop-toolbar with-sidebar mb--30 bgAndShodow2">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-2 col-sm-6">
                                    <!-- Product View Mode -->
                                    <div class="product-view-mode">
                                        <a href="#" class="sorting-btn active" data-target="grid"><i
                                                class="fas fa-th"></i></a>
                                        <!-- <a href="#" class="sorting-btn" data-target="grid-four">
                                            <span class="grid-four-icon">
                                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                            </span>
                                        </a> -->
                                        <a href="#" class="sorting-btn" data-target="list "><i
                                                class="fas fa-list"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-sm-6  mt--10 mt-sm--0">
                                    <span class="toolbar-status">
                                    Search (599 results found)
                                    </span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                                    <!-- <div class="sorting-selection">
                                        <span>Show:</span>
                                        <select class="form-control nice-select sort-select">
                                            <option value="" selected="selected">3</option>
                                            <option value="">9</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">12</option>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                                    <div class="sorting-selection">
                                        <span>Sort By:</span>
                                        <select class="form-control nice-select sort-select mr-0">
                                           
                                            <option value="">Name (A - Z)</option>
                                            <option value="">Name (Z - A)</option>
                                            <option value="">Price (Low &gt; High)</option>
                                            <option value="">Price (High &gt; Low)</option>
                                            <option value="">Rating (Highest)</option>
                                            <option value="">Rating (Lowest)</option>
                                            <option value="">Model (A - Z)</option>
                                            <option value="">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-toolbar d-none">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-2 col-sm-6">
                                    <!-- Product View Mode -->
                                    <div class="product-view-mode">
                                        <a href="#" class="sorting-btn active" data-target="grid"><i
                                                class="fas fa-th"></i></a>
                                        <a href="#" class="sorting-btn" data-target="grid-four">
                                            <span class="grid-four-icon">
                                                <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="sorting-btn" data-target="list "><i
                                                class="fas fa-list"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
                                    <span class="toolbar-status">
                                        Showing 1 to 9 of 14 (2 Pages)
                                    </span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                                    <div class="sorting-selection">
                                        <span>Show:</span>
                                        <select class="form-control nice-select sort-select">
                                            <option value="" selected="selected">3</option>
                                            <option value="">9</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                                    <div class="sorting-selection">
                                        <span>Sort By:</span>
                                        <select class="form-control nice-select sort-select mr-0">
                                            <option value="" selected="selected">Default Sorting</option>
                                            <option value="">Sort
                                                By:Name (A - Z)</option>
                                            <option value="">Sort
                                                By:Name (Z - A)</option>
                                            <option value="">Sort
                                                By:Price (Low &gt; High)</option>
                                            <option value="">Sort
                                                By:Price (High &gt; Low)</option>
                                            <option value="">Sort
                                                By:Rating (Highest)</option>
                                            <option value="">Sort
                                                By:Rating (Lowest)</option>
                                            <option value="">Sort
                                                By:Model (A - Z)</option>
                                            <option value="">Sort
                                                By:Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
                            <div class="col-lg-4 col-6 p-md-3 p-2 bgAndShodow">
                               
                            <h6 style="color: red;  text-align: center;" >Result not found ! Try again !! </h6>


                            </div>
                           
                          
                        </div>
                        <!-- Pagination Block -->
                        <!-- <div class="row pt--30">
                            <div class="col-md-12">
                                <div class="pagination-block">
                                    <ul class="pagination-btns flex-center">
                                        <li><a href="" class="single-btn prev-btn ">|<i
                                                    class="zmdi zmdi-chevron-left"></i> </a></li>
                                        <li><a href="" class="single-btn prev-btn "><i
                                                    class="zmdi zmdi-chevron-left"></i> </a></li>
                                        <li class="active"><a href="" class="single-btn">1</a></li>
                                        <li><a href="" class="single-btn">2</a></li>
                                        <li><a href="" class="single-btn">3</a></li>
                                        <li><a href="" class="single-btn">4</a></li>
                                        <li><a href="" class="single-btn next-btn"><i
                                                    class="zmdi zmdi-chevron-right"></i></a></li>
                                        <li><a href="" class="single-btn next-btn"><i
                                                    class="zmdi zmdi-chevron-right"></i>|</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- Modal -->
                        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
                            aria-labelledby="quickModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="product-details-modal">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <!-- Product Details Slider Big Image-->
                                                <div class="product-details-slider sb-slick-slider arrow-type-two"
                                                    data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-1.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-2.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-3.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-4.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-5.jpg')}}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <!-- Product Details Slider Nav -->
                                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                                    data-slick-setting='{
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
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-1.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-2.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-3.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-4.jpg')}}"
                                                            alt="">
                                                    </div>
                                                    <div class="single-slide">
                                                        <img src="{{asset('public/webpages/assets/image/products/product-details-5.jpg')}}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mt--30 mt-lg--30">
                                                <div class="product-details-info pl-lg--30 ">
                                                    <p class="tag-block">Tags: <a href="#">Movado</a>, <a
                                                            href="#">Omega</a></p>
                                                    <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                                    <ul class="list-unstyled">
                                                        <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                                        <li>Brands: <a href="#" class="list-value font-weight-bold">
                                                                Canon</a></li>
                                                        <li>Product Code: <span class="list-value"> model1</span></li>
                                                        <li>Reward Points: <span class="list-value"> 200</span></li>
                                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                                    </ul>
                                                    <div class="price-block">
                                                        <span class="price-new">£73.79</span>
                                                        <del class="price-old">£91.86</del>
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
                                                        <p>Long printed dress with thin adjustable straps. V-neckline
                                                            and wiring under the Dust with ruffles at the bottom
                                                            of the
                                                            dress.</p>
                                                    </article>
                                                    <div class="add-to-cart-row">
                                                        <div class="count-input-block">
                                                            <span class="widget-label">Qty</span>
                                                            <input type="number" class="form-control text-center"
                                                                value="1">
                                                        </div>
                                                        <div class="add-cart-btn">
                                                            <a href="" class="btn btn-outlined--primary"><span
                                                                    class="plus-icon">+</span>Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="compare-wishlist-row">
                                                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to
                                                            Wish List</a>
                                                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to
                                                            Compare</a>
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
                    </div>
                    <div class="col-lg-3 d-none d-sm-block  mt--40 mt-lg--0">
                        <div class="inner-page-sidebar">

                            <div class="single-block">
                                <h3 class="sidebar-title">Filter Applied</h3>

                                <!-- Accordion -->
                                <div class="accordion" id="accordionExample">
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0 d-flex flex-row align-items-center justify-content-between">
                                                <button class="btn" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Authors <i class="fa  fa-angle-down"></i>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div
                                                    class="type row w-100 p-0 m-0 mt-2 d-flex flex-column justify-content-start border-bottom">

                                                    <div class="content d-flex flex-column mt-2 ">

                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Author 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>


                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0 d-flex flex-row align-items-center justify-content-between">
                                                <button class="btn  collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    Binding <i class="fa  fa-angle-down"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div
                                                    class="type row w-100 p-0 m-0 mt-2 d-flex flex-column justify-content-start border-bottom">

                                                    <div class="content d-flex flex-column mt-2 ">

                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Binding 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>


                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0 d-flex flex-row align-items-center justify-content-between">
                                                <button class="btn  collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    Laungauge <i class="fa  fa-angle-down"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div
                                                    class="type row w-100 p-0 m-0 mt-2 d-flex flex-column justify-content-start border-bottom">

                                                    <div class="content d-flex flex-column mt-2 ">

                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container-checkbox">Langauge 11
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>


                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gkjhkjlk;l -->



                            </div>
                            <!-- Price -->
                            <!-- <div class="single-block">
								<h3 class="sidebar-title">Fillter By Price</h3>
								<div class="range-slider pt--30">
									<div class="sb-range-slider"></div>
									<div class="slider-price">
										<p>
											<input type="text" id="amount" readonly="">
										</p>
									</div>
								</div>
							</div> -->
                            <!-- Size -->
                            <!-- <div class="single-block">
								<h3 class="sidebar-title">Manufacturer</h3>
								<ul class="sidebar-menu--shop menu-type-2">
									<li><a href="">Christian Dior <span>(5)</span></a></li>
									<li><a href="">Diesel <span>(8)</span></a></li>
									<li><a href="">Ferragamo <span>(11)</span></a></li>
									<li><a href="">Hermes <span>(14)</span></a></li>
									<li><a href="">Louis Vuitton <span>(12)</span></a></li>
									<li><a href="">Tommy Hilfiger <span>(0)</span></a></li>
									<li><a href="">Versace <span>(0)</span></a></li>
								</ul>
							</div> -->
                            <!-- Color -->
                            <!-- <div class="single-block">
								<h3 class="sidebar-title">Select By Color</h3>
								<ul class="sidebar-menu--shop menu-type-2">
									<li><a href="">Black <span>(5)</span></a></li>
									<li><a href="">Blue <span>(6)</span></a></li>
									<li><a href="">Brown <span>(4)</span></a></li>
									<li><a href="">Green <span>(7)</span></a></li>
									<li><a href="">Pink <span>(6)</span></a></li>
									<li><a href="">Red <span>(5)</span></a></li>
									<li><a href="">White <span>(8)</span></a></li>
									<li><a href="">Yellow <span>(11)</span> </a></li>
								</ul>
							</div> -->
                            <!-- Promotion Block -->
                            <!-- <div class="single-block">
								<a href="" class="promo-image sidebar">
									<img src="{{asset('public/webpages/assets/image/others/home-side-promo.jpg')}}" alt="">
								</a>
							</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--=================================
  Brands Slider
===================================== -->
    <!-- <section class="section-margin">

        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>Buy Books by Publisher & Author</h2>
            </div>
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
                    <img src="{{asset('public/webpages/assets/image/others/brand-1.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-2.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-3.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-4.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-5.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-6.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-1.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('public/webpages/assets/image/others/brand-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!--=================================
    Footer Area
===================================== -->
    @include('webpages/include/footer')
</body>

</html>