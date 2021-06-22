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
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container pb-5  pt-4">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<!-- <th class="pro-remove"></th> -->
												<th class="pro-thumbnail">Title</th>
											
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
												<th class="pro-subtotal">Action</th>
											</tr>
										</thead>
										<tbody>
											<!-- Product Row -->
											<tr>
												<!-- <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td> -->
												<td class="pro-thumbnail d-flex flex-row justify-content-start"><a href="#">
													 <img src="<?php echo e(asset('public/webpages/assets/image/products/product-1.jpg')); ?>"> </a>
													 <span class='ml-1'><?php echo e($product[0]->name); ?></span>
											
											</td>
												
												<td class="pro-price"><span>₹<?php echo e($product[0]->price); ?></span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" class="form-control text-center"
																value="1">
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span>₹<?php echo e($product[0]->price); ?></span></td>
												<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td>
											</tr>
											<!-- Product Row -->
										
											<!-- Discount Row  -->
											
										</tbody>
									</table>
								</div>
							</form>
						</div>

						<div class="col-lg-4 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Order Summary</span></h4>
									<p>Sub Total <span class="text-primary">₹<?php echo e($product[0]->price); ?></span></p>
									<p>Shipping Cost <span class="text-primary">₹00.00</span></p>
									<h2> <strong>To Pay </strong> <span class="text-primary"> <strong>₹<?php echo e($product[0]->price); ?></strong> </span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="<?php echo e(url('checkout')); ?>/<?php echo e($product[0]->id); ?>" class="checkout-btn c-btn btn--primary">Proceed to  Checkout</a>
									<!-- <button class="update-btn c-btn btn-outlined">Update Cart</button> -->
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
					
						<!-- Cart Summary -->
						
					</div>
				</div>
			</div>
		</main>
		<!-- Cart Page End -->
	</div>

<?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\webpages\cart.blade.php ENDPATH**/ ?>