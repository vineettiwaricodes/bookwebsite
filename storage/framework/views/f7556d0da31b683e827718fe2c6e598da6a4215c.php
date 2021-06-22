<html>
	<head>
		<?php echo $__env->make('webpages/include/head-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<body>
		 <?php echo $__env->make('webpages/include/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<div class="row">
<div class="col-10">
	<div class="row">
	<div style="margin-left: 20px;" class="col-3">
		<div class="left-background">
			<div class="filter"><h6 class="filter-1">Filters<br> Applied</h6>
			<p class="clear">Clear all</p></div>
					<p class="paragraph-filter">Add Filters for more accurate results</p>
                 			<div class="author-border" class="d-flex">
                 				<h6 class="authors">Authors</h6>
                 				<select class="option-2">
		                             <option><b>Authors</b></option>
                                  </select>
                 				<!-- <h6 class="arrow"><i class='fas fa-angle-down'></i>

                 				</h6> -->
                 			</div>
                 			<div style="margin-top: 14px;" class="author-border" class="d-flex">
                 				<h6 class="authors">Binding</h6>
                 					<select class="option-2">
		<option><b>Authors</b></option>
                          </select>
                            <!--     <h6 class="arrow"><i class='fas fa-angle-down'></i></h6> -->
                 				
                 			</div>
                 			<div style="margin-top: 14px;" class="author-border" class="d-flex">
                 				<h6 class="authors">Language</h6>
                 					<select class="option-1">
		                                <option><b>Authors</b></option>		
                                      </select>
                 				<!-- <h6 style="margin-left: 50%;"><i class='fas fa-angle-down'></i></h6> -->	
                 			</div>

                 			<div style="margin-top: 14px;" class="author-border" class="d-flex">
                 				<h6 class="authors">Publishers</h6>
                 					<select class="option-3">
		                                  <option><b>Authors</b></option>		
                                      </select>
                 				<!-- <h6 style="margin-left: 48%;"><i class='fas fa-angle-down'></i></h6> -->
                 			</div>
		                    </div>
	                       </div>
	


	<div class="col-8">
	<div class="release d-flex">
		<h6 class="release-header"><b>NEW RELEASES</b>

(6465 results found)

</h6>
<select class="option">
	<option><b>By Relevance</b></option>
		<option><b>Price:High to Low</b></option>
		<option><b>Price:Low to high</b></option>
</select>
<div>
<input class="search" placeholder="Search titles" type="search">


	</div>
	</div>
	
<div class="release-1 ">
	<div class="row">
		<div class="col-12">
			<div class="row up mt-3">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4">
                
                    <div class="single-slide mb-3">
                        <div style="border-bottom: none; border-top: none;" class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                <img src="public/upload/product/<?php echo e($i['basic_image']); ?> "><br>
                                   
                                    <div class="hover-contents">
                                       
                                    
                                    </div>
                                </div>
                                 <div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails"><?php echo e($i->name); ?></a></h3>
                                               </div>
                                <div class="price-block">
                                    <span class="price">₹<?php echo e($i->selling_price); ?></span>
                                    <del class="price-old">₹<?php echo e($i->MRP); ?></del>
                                    <span class="price-discount"><?php echo e($i->discount); ?>%
                                    <span> off</span></span>
                                </div><br>                                     
      <div class="fe1"  class="pb-5">
        <button class="fe_button">
<div class="fe_icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
</div>
       <h6 class="fe_heading">ADD TO CART</h6></button>
    </div> 
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  
			
		
	</div>



</div>

</div>
	

</div>	
</div>



		  <!--=================================
    Footer Area
    ===================================== -->
    <?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\xampp\htdocs\latestbook\resources\views/webpages/viewbookbyauthor.blade.php ENDPATH**/ ?>