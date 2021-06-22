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
                            <li class="breadcrumb-item active">My Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <div class="page-section inner-page-sec-padding">
            <div class="container pt-3 pb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i
                                            class="fas fa-tachometer-alt"></i>
                                        Dashboard</a>
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                    <a href="#download" data-toggle="tab"><i class="fas fa-download"></i> Download</a>
                                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                        Payment
                                        Method</a>
                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                        address</a>
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                        Details</a>
                                    <a href="login-register.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            <div class="welcome mb-20">
                                                <p> <strong> </strong> </p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check &amp; view
                                                your
                                                recent orders, manage your shipping and billing addresses and edit your
                                                password and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$45</td>
                                                            <td><a href="cart.php" class="btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Katopeno Altuni</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$100</td>
                                                            <td><a href="cart.php" class="btn">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Murikhete Paris</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$99</td>
                                                            <td><a href="cart.php" class="btn">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katopeno Altuni</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <div class="w-100 flex-row d-flex justify-content-between">
                                                <h3>Billing Address</h3><a href="#"
                                                    class="h-50 btn btn-outlined--white btn-sm" data-toggle="modal"
                                                    data-target="#add-new-address-Modal">
                                                    Add New Address</a>
                                            </div>

                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>
                                            <a href="#" class="btn btn--primary" data-toggle="modal"
                                                data-target="#add-new-address-Modal"><i class="fa fa-edit"></i>Edit
                                                Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input id="first-name" placeholder="First Name" type="text">
                                                        </div>
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input id="last-name" placeholder="Last Name" type="text">
                                                        </div>
                                                        <div class="col-12  mb--30">
                                                            <input id="display-name" placeholder="Display Name"
                                                                type="text">
                                                        </div>
                                                        <div class="col-12  mb--30">
                                                            <input id="email" placeholder="Email Address" type="email">
                                                        </div>
                                                        <div class="col-12  mb--30">
                                                            <h4>Password change</h4>
                                                        </div>
                                                        <div class="col-12  mb--30">
                                                            <input id="current-pwd" placeholder="Current Password"
                                                                type="password">
                                                        </div>
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input id="new-pwd" placeholder="New Password"
                                                                type="password">
                                                        </div>
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input id="confirm-pwd" placeholder="Confirm Password"
                                                                type="password">
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn--primary">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- add new address -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="add-new-address-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <div class="row checkout-form">
                        <div class="col-md-6 col-12 mb--20">
                            <label>First Name*</label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Last Name*</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                        <!-- <div class="col-12 mb--20">
												<label>Company Name</label>
												<input type="text" placeholder="Company Name">
											</div> -->
                        <!-- <div class="col-12 col-12 mb--20">
												<label>Country*</label>
												<select class="nice-select">
													<option>Bangladesh</option>
													<option>China</option>
													<option>country</option>
													<option>India</option>
													<option>Japan</option>
												</select>
											</div> -->
                        <div class="col-md-6 col-12 mb--20">
                            <label>Email Address*</label>
                            <input type="email" placeholder="Email Address">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Phone no*</label>
                            <input type="text" placeholder="Phone number">
                        </div>
                        <div class="col-12 mb--20">
                            <label>Address*</label>
                            <input type="text" placeholder="Address line 1">
                            <input type="text" placeholder="Address line 2">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Landmark</label>
                            <input type="text" placeholder="Zip Code">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Pincode</label>
                            <input type="text" placeholder="Zip Code">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>State*</label>
                            <input type="text" placeholder="State">
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Town/City*</label>
                            <input type="text" placeholder="Town/City">
                        </div>

						<div class="col-md-6 col-12 mb--20">
						<button class="btn btn--primary">Submit </button>
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



    <?php echo $__env->make('webpages/include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\bookfactory\resources\views\webpages\my-account.blade.php ENDPATH**/ ?>