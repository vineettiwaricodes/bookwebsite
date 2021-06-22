<html>
	<head>
		@include('webpages/include/head-link')
	</head>
	<body>
		 @include('webpages/include/header')




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
			
			@foreach($data as $i)
				<div class="col-lg-4">
			
                   
                    <div class="single-slide mb-3">
                        <div style="border-bottom: none; border-top: none;" class="product-card">
                            <div class="product-header">
                            
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                <img src="public/upload/publisher/{{$i->image}} "><br>
                                   
                                    <div class="hover-contents">
                                       
                                    
                                    </div>
									<div class="product-header">
                                                <a href="productdetails" class="author">
                                               book factory
                                                </a>
                                                <h3><a href="productdetails">{{$i->name}}</a></h3>
                                    </div>
                                </div>
								
                            </div>
							
                        </div>
						
                    </div>
					
                    </div>
					@endforeach
					
                   
					 
			
		
	</div>
	


</div>

</div>
	

</div>	
</div>



		  <!--=================================
    Footer Area
    ===================================== -->
    @include('webpages/include/footer')
	</body>
</html>