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
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<?php if($data): ?>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container my-container pb-5  pt-4">
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
											
											<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
											
												<!-- <td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td> -->
												<td class="pro-thumbnail d-flex flex-row justify-content-start"><a href="#">
												<img src="public/upload/product/<?php echo e($i['product']['basic_image']); ?>"></a>
													 <span class='ml-1'></span>
											
											</td>
												
												<td><span>₹<?php echo e($i['product']['price']); ?></span>
												<input type="hidden" class="iprice" value="<?php echo e($i['product']['price']); ?>">
												</td>
												<td>
												<input type="number" min='0' max='10' onChange="sumTotal()" value="1" class="number">
												</td>
												<td class="product1_total_price">0</td>
												<td class="pro-remove"><a href="deletecartdata/<?php echo e($i->id); ?>"><i class="far fa-trash-alt"></i></a>
												</td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
									<p>Sub Total <span class="text-primary" id="gtotal"></span></p>
									<p>Shipping Cost <span class="text-primary">₹00.00</span></p>
									<h2> <strong>To Pay </strong> <span class="text-primary"> <strong>₹</strong> </span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="<?php echo e(url('checkout')); ?>" class="checkout-btn c-btn btn--primary">Proceed to  Checkout</a>
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
		<?php else: ?>
		<img src="https://www.webtoffee.com/wp-content/themes/webtoffee/assets/images/empty-cart.svg"
		style="height:300px; margin-left:500px;" >
		<?php endif; ?>
		<!-- Cart Page End -->
	</div>

<?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
var gt=0;
var price = document.getElementsByClassName('iprice');
var number = document.getElementsByClassName('number');
var total = document.getElementsByClassName('product1_total_price');
var gtotal = document.getElementById("gtotal");

function sumTotal(){
	gt=0;
	for(i=0;i<price.length;i++)
	{
		total[i].innerText = (price[i].value)*(number[i].value);
		gt=gt+(price[i].value)*(number[i].value);
	}
	gtotal.innerText = gt;
}
sumTotal();
</script>
</body>



</html><?php /**PATH C:\xampp\htdocs\latestbook\resources\views/webpages/cart.blade.php ENDPATH**/ ?>