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
							<li class="breadcrumb-item active">Wishlist</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Wishlist Page Start -->
		<div class="cart_area inner-page-sec-padding-bottom">
			<div class="container my-container">
				<div class="row">
					<div class="col-12">
						<form action="./">
							<!-- Cart Table -->
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Product</th>
											<th class="pro-price">Price</th>
											<th class="pro-quantity">Quantity</th>
											<th class="pro-subtotal">Total</th>
											<th class="pro-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
									@foreach($data as $i)
										<tr>
										
											<td class="pro-thumbnail"><a href="#">  <img src="public/upload/product/{{ $i['basic_image'] }} "></a></td>
											<td class="pro-title"><a href="#">{{$i['product']['name']}}</a></td>
											<td class="pro-price"><span>${{$i['product']['price']}}</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$395.00</span></td>
											<td class="pro-remove"><a href="{{url('deletewishlist/'.$i->id)}}"><i class="far fa-trash-alt"></i></a></td>
											
										</tr>
										@endforeach
										
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Cart Page End -->
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
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
					  <img src="{{asset('assets/image/products/product-details-1.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-2.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-3.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-4.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-5.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-1.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-2.jpg')}}" alt="">
				</div>
				<div class="single-slide">
					  <img src="{{asset('assets/image/products/product-details-3.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--=================================
    Footer Area
===================================== -->
@include('webpages/include/footer')
</body>

</html>