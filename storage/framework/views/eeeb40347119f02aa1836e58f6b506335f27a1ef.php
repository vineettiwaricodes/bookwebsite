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
                                <img src="public/upload/author/<?php echo e($i->image); ?> "><br>
                                   
                                    <div class="hover-contents">
                                       
                                    
                                    </div>
									<div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails"><?php echo e($i->name); ?></a></h3>
                                    </div>
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
</html><?php /**PATH C:\xampp\htdocs\latestbook\resources\views/webpages/viewallbookbyauthor.blade.php ENDPATH**/ ?>