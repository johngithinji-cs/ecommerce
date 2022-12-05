</head>
<body>
<!-- Header -->
<header class="header">
	<div class="header-top d-none d-lg-block">
		<div class="container">
			<div class="row justify-content-between align-items-center">

				<div class="col-xl-6 col-lg-6">
					<div class="header-details">
						<ul>
							<li>
								<h6>We provides  <span>ALL</span>   types of furniture</h6>
							</li>
							<li><h6>Need Furniture?</h6></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="header-left">
						<ul>
							<li><a class="popup-toggle"><i class="feather-user"></i>Login / Register</a></li>
							<li>
								<a class="language-dropdown-active" href="#"><img src="<?php echo base_url('assets/theme/assets/img/icons/flag-icon.svg')?>" alt="" class="me-2">English <i class="fi-rs-angle-small-down"></i></a>
								<ul class="language-dropdown">
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-fr.png')?>" alt="">Français</a>
									</li>
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-dt.png')?>" alt="">Deutsch</a>
									</li>
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-ru.png')?>" alt="">Pусский</a>
									</li>
								</ul>
							</li>
							<li>
								<a class="language-dropdown-active" href="#">USD <i class="fi-rs-angle-small-down"></i></a>
								<ul class="language-dropdown">
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-fr.png')?>" alt="">INR</a>
									</li>
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-dt.png')?>" alt="">MBP</a>
									</li>
									<li>
										<a href="#"><img src="<?php echo base_url('assets/theme/assets/img/flags/flag-ru.png')?>" alt="">EU</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-middle d-none d-lg-block">
		<div class="container">
			<div class="header-col">
				<div class="logo header-logo">
					<a href="<?php echo base_url('assets/theme/index.html')?>" class="d-none d-lg-block"><img style='max-width:100px' src="<?php echo base_url('assets/theme/assets/img/logo.png')?>" alt="logo"></a>
					<a href="<?php echo base_url('assets/theme/index.html')?>" class="d-lg-none d-sm-block"><img src="<?php echo base_url('assets/theme/assets/img/logo-01.png')?>" alt="logo"></a>
				</div>
				<div class="header-right">
					<div class="header-search">
						<form method="get" action="<?php echo base_url('home/search')?>">
							<!-- <select class="select-active">
								<option>Select Category</option>
								<option>628233</option>
								<option>528233</option>
								<option>228233</option>
								<option>428233</option>
								<option>128233</option>
							</select> -->
							<input type="text" placeholder="Search for furnitures, categories available and more" name="search">
							<input type="submit" name="form-submit" class="submit-btn popup-toggle3" value="SEARCH">
						</form>
					</div>
					<div class="header-details">
						<div class="header-inner">
							<label class="file-uploaded ml-15 me-2">
								Upload Design<input type="file">
							</label>
							<div class="header-inner-icon ">
								<a class="small-cart-icon" href="javascript:;">
									<i class="feather-heart"></i>
									<span class="pro-count blue">0</span>
								</a>
								<div class="cart-dropdown-wrap">
									<ul>
										<li>
											<div class="shopping-cart-img">
												<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-02.jpg')?>" alt=""></a>
											</div>
											<div class="shopping-cart-title">
												<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Products Available</a></h4>
												<h4>(x 10)</h4>
											</div>
											<div class="shopping-cart-value">
												<h2>$15.00</h2>
											</div>
										</li>
										<li>
											<div class="shopping-cart-img">
												<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-03.jpg')?>" alt=""></a>
											</div>
											<div class="shopping-cart-title">
												<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Heat Meter </a></h4>
												<h4>(x 10)</h4>
											</div>
											<div class="shopping-cart-value">
												<h2>$18.00</h2>
											</div>
										</li>
									</ul>
									<div class="shopping-cart-footer">
										<div class="shopping-cart-total">
											<h4>Total <span>$3000.00</span></h4>
										</div>
										<div class="shopping-cart-btn">
											<a href="<?php echo base_url('assets/theme/cart.html')?>" class="outline">View cart</a>
											<a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a>
										</div>
									</div>
								</div>
							</div>
							<div class="header-inner-icon ">
								<a class="small-cart-icon me-3" href="javascript:;">
									<i class="feather-shopping-bag"></i>
									<span class="pro-count blue">1</span>
								</a>
								<a href="<?php echo base_url('assets/theme/cart.html')?>" class="me-3">
									<span class="lable d-block mt-0">Cart</span>
									<span class="cart-amout d-block ">$0.00</span>
								</a>
								<div class="cart-dropdown-wrap">
									<ul>
										<li>
											<div class="shopping-cart-img">
												<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-01.jpg')?>" alt=""></a>
											</div>
											<div class="shopping-cart-title">
												<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Antiseptic Spray</a></h4>
												<h4>(x 10)</h4>
											</div>
											<div class="shopping-cart-value">
												<h2>$32.00</h2>
											</div>
										</li>
										<li>
											<div class="shopping-cart-img">
												<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-02.jpg')?>" alt=""></a>
											</div>
											<div class="shopping-cart-title">
												<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Liver Detox Pills </a></h4>
												<h4>(x 10)</h4>
											</div>
											<div class="shopping-cart-value">
												<h2>$32.00</h2>
											</div>
										</li>
										<li>
											<div class="shopping-cart-img">
												<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-03.jpg')?>" alt=""></a>
											</div>
											<div class="shopping-cart-title">
												<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Heat Meter </a></h4>
												<h4>(x 10)</h4>
											</div>
											<div class="shopping-cart-value">
												<h2>$32.00</h2>
											</div>
										</li>
									</ul>
									<div class="shopping-cart-footer">
										<div class="shopping-cart-total">
											<h4>Total <span>$4000.00</span></h4>
										</div>
										<div class="shopping-cart-btn">
											<a href="<?php echo base_url('assets/theme/cart.html')?>" class="outline">View cart</a>
											<a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom sticky-bar">
		<div class="container">
			<div class="header-col">
				<div class="logo header-logo d-block d-lg-none">
					<a href="<?php echo base_url('assets/theme/index.html')?>" class="d-none d-lg-block"><img src="<?php echo base_url('assets/theme/assets/img/logo.png')?>" alt="logo"></a>
					<a href="<?php echo base_url('assets/theme/index.html')?>" class="d-sm-block"><img src="<?php echo base_url('assets/theme/assets/img/logo-01.png')?>" alt="logo"></a>
				</div>
				<div class="header-nav d-none d-lg-flex">
					<div class="main-menu d-none d-lg-block">
						<nav>
							<ul>
								<li>
									<a class="active" href="#">All Categories <i class="fi-rs-angle-down"></i></a>
									<ul class="has-submenu">
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Wooden furniture</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Metalic furniture</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Bamboo furniture</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Plastic furniture</a></li>
										<li><a href="<?Php echo base_url('assets/theme/view-product.html')?>">Glass furniture</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">blackwood furniture</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Wooden furniture <i class="fi-rs-angle-down"></i></a>
									<ul class="has-submenu">
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Chairs</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Table</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Wardrobes</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Metalic furniture <i class="fi-rs-angle-down"></i></a>
									<ul class="has-submenu">
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Calcitonin</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Echinocandins</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Handicraft</a></li>
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Suppositories</a></li>
									</ul>
								</li>
								<li>
									<a href="<?php echo base_url('home/aboutus')?>">About us <i class="fi-rs-angle-down"></i></a>
									
								</li>
								<li>
									<a href="<?php echo base_url('home/index')?>">Home <i class="fi-rs-angle-down"></i></a>
									
								</li>
								<li class="position-static">
									<a href="#">Mega Menu <i class="fi-rs-angle-down"></i></a>

									<ul class="mega-menu">
										<li class="sub-mega-menu sub-mega-menu-two">
											<div class="menu-banner-wrap">
												<div class="menu-banner-content">
													<p>WEEKEND DISCOUNT 20%</p>
													<h4>Blood Pressure</h4>
													<h3>Monitor Upper Arm</h3>
													<div class="menu-banner-price">
														<span class="new-price">Save to 20%</span>
													</div>
													<div class="menu-banner-btn">
														<a href="<?php echo base_url('assets/theme/cart.html')?>">Shop All</a>
													</div>
												</div>
											</div>
										</li>
										<li class="sub-mega-menu sub-mega-menu-one">
											<a class="menu-title" href="#">Shop Layouts</a>
											<ul class="dropdown">
												<li><a href="<?php echo base_url('assets/theme/shop-grid.html')?>">Shop Grid</a></li>
												<li><a href="<?php echo base_url('assets/theme/shop-list.html')?>">Shop List</a></li>
												<li><a href="<?php echo base_url('assets/theme/shop-grid-left.html')?>">Shop Left Sidebar</a></li>
												<li><a href="<?php echo base_url('assets/theme/shop-grid-right.html')?>">Shop Right Sidebar</a></li>
											</ul>
										</li>
										<li class="sub-mega-menu sub-mega-menu-one">
											<a class="menu-title" href="#">Product Layouts</a>
											<ul>
												<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">View Product</a></li>
												<li><a href="<?php echo base_url('assets/theme/product-left-sidebar.html')?>">Product Left Sidebar</a></li>
												<li><a href="<?php echo base_url('assets/theme/product-right-sidebar.html')?>">Product Right Sidebar</a></li>
											</ul>
										</li>
										<li class="sub-mega-menu sub-mega-menu-one">
											<a class="menu-title" href="#">Product Type</a>
											<ul>
												<li><a href="<?php echo base_url('assets/theme/store-listing.html')?>">Store Listing</a></li>
												<li><a href="<?php echo base_url('assets/theme/store-single.html')?>">Store Single</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Pages <i class="fi-rs-angle-down"></i></a>
									<ul class="has-submenu">
										<li><a href="<?php echo base_url('assets/theme/account.html')?>">My Account</a></li>
										<li><a href="<?php echo base_url('assets/theme/profile.html')?>">Profile</a></li>
										<li><a href="<?php echo base_url('assets/theme/orders.html')?>">Orders</a></li>
										<li><a href="<?php echo base_url('assets/theme/address-book.html')?>">Address Book </a></li>
										<li><a href="<?php echo base_url('assets/theme/wishlist.html')?>">Wishlist</a></li>
										<li><a href="<?php echo base_url('assets/theme/vendor.html')?>">Vendor</a></li>
										<li><a href="<?php echo base_url('assets/theme/cart.html')?>">Cart</a></li>
										<li><a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a></li>
										<li><a href="<?php echo base_url('assets/theme/error-404.html')?>">Error404</a></li>
										<li><a href="<?php echo base_url('assets/theme/error-500.html')?>">Error500</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="header-inner-icon d-block d-lg-none">
					<div class="bar-icon">
						<span class="bar-icon-one"></span>
						<span class="bar-icon-two"></span>
						<span class="bar-icon-three"></span>
					</div>
				</div>
				<div class="header-details d-block d-lg-none">
					<div class="header-inner">
						<div class="header-inner-icon">
							<a class="small-cart-icon " href="javascript:;">
								<i class="feather-heart"></i>
								<span class="pro-count blue">0</span>
							</a>
							<div class="cart-dropdown-wrap cart-dropdown-two">
								<ul>
									<li>
										<div class="shopping-cart-img">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-02.jpg')?>" alt=""></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Liver Detox Pills </a></h4>
											<h4>(x 10)</h4>
										</div>
										<div class="shopping-cart-value">
											<h2>$15.00</h2>
										</div>
									</li>
									<li>
										<div class="shopping-cart-img">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-03.jpg')?>" alt=""></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Heat Meter </a></h4>
											<h4>(x 10)</h4>
										</div>
										<div class="shopping-cart-value">
											<h2>$18.00</h2>
										</div>
									</li>
								</ul>
								<div class="shopping-cart-footer">
									<div class="shopping-cart-total">
										<h4>Total <span>$3000.00</span></h4>
									</div>
									<div class="shopping-cart-btn">
										<a href="<?php echo base_url('assets/theme/cart.html')?>">View cart</a>
										<a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a>
									</div>
								</div>
							</div>
						</div>
						<div class="header-inner-icon">
							<a class="small-cart-icon " href="javascript:;">
								<i class="feather-shopping-bag"></i>
								<span class="pro-count blue">1</span>
							</a>
							<div class="cart-dropdown-wrap cart-dropdown-two">
								<ul>
									<li>
										<div class="shopping-cart-img">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-01.jpg')?>" alt=""></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Antiseptic Spray</a></h4>
											<h4>(x 10)</h4>
										</div>
										<div class="shopping-cart-value">
											<h2>$32.00</h2>
										</div>
									</li>
									<li>
										<div class="shopping-cart-img">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-02.jpg')?>" alt=""></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Liver Detox Pills </a></h4>
											<h4>(x 10)</h4>
										</div>
										<div class="shopping-cart-value">
											<h2>$32.00</h2>
										</div>
									</li>
									<li>
										<div class="shopping-cart-img">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/shop/cart-img-03.jpg')?>" alt=""></a>
										</div>
										<div class="shopping-cart-title">
											<h4><a href="<?php echo base_url('assets/theme/view-product.html')?>">Heat Meter </a></h4>
											<h4>(x 10)</h4>
										</div>
										<div class="shopping-cart-value">
											<h2>$32.00</h2>
										</div>
									</li>
								</ul>
								<div class="shopping-cart-footer">
									<div class="shopping-cart-total">
										<h4>Total <span>$383.00</span></h4>
									</div>
									<div class="shopping-cart-btn">
										<a href="<?php echo base_url('assets/theme/cart.html')?>">View cart</a>
										<a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="main-menu-wrapper">
	<div class="mobile-header-inner">
		<div class="mobile-header-top">
			<div class="mobile-header-logo">
				<a href="<?php echo base_url('assets/theme/index.html')?>"><img src="<?php echo base_url('assets/theme/assets/img/logo.png')?>" alt="logo" /></a>
			</div>
			<div class="mobile-menu-close close-col menu-close-position">
				<button class="close-style">
					<i class="icon-top"></i>
					<i class="icon-bottom"></i>
				</button>
			</div>
		</div>
		<div class="mobile-header-content">
			<div class="mobile-search mobile-search-three mobile-header-border">
				<form action="<?php echo base_url('assets/theme/product-category-list.html')?>">
					<input type="text" placeholder="Search for items…" />
					<button type="submit"><i class="fi-rs-search"></i></button>
				</form>
			</div>
			<div class="mobile-menu-col mobile-header-border">

				<!-- Mobile Menu -->
				<nav>
					<ul class="main-nav">
						<li class="mobile-menu-item">
							<a href="<?php echo base_url('assets/theme/index.html')?>">Home</a>
						</li>
						<li class="mobile-menu-item">
							<a href="#">All Furnitures</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Wooden furniture</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Wicker or rattan furniture
</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Metal furniture</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Plastic furniture</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Glass furniture</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">blackwood furniture</a></li>
							</ul>
						</li>
						<li class="mobile-menu-item">
							<a href="#">Wooden furniture</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Chairs</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Tables</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Wardrobes</a></li>
							</ul>
						</li>
						<li class="mobile-menu-item">
							<a href="#">Wicker or rattan furniture
</a></li></a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Calcitonin</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Echinocandins</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Handicraft</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Suppositories</a></li>
							</ul>
						</li>
						<li class="mobile-menu-item">
							<a href="#">Metal furniture</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Medical Supplies</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Pulse Oximeters</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Examination Gloves</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Baby Care</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Respiratory</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Medical Equipment</a></li>
							</ul>
						</li>
						<li class="mobile-menu-item">
							<a href="#">Plastic furniture</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>"> Digital Glucose Meter</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Digital Thermometer</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Cotton Mask</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Kids Thermometer</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Face Mask</a></li>
								<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">Digital Meter</a></li>
							</ul>
						</li>
						<li class="mobile-menu-item">
							<a href="#">Mega Menu</a>
							<ul class="dropdown">
								<li class="mobile-menu-item">
									<a href="#">Shop Layout</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url('assets/theme/shop-grid.html')?>">Shop Grid</a></li>
										<li><a href="<?php echo base_url('assets/theme/shop-list.html')?>">Shop List</a></li>
										<li><a href="<?php echo base_url('assets/theme/shop-grid-left.html')?>">Shop Left Sidebar</a></li>
										<li><a href="<?php echo base_url('assets/theme/shop-grid-right.html')?>">Shop Right Sidebar</a></li>
									</ul>
								</li>
								<li class="mobile-menu-item">
									<a href="#">Product Layout</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url('assets/theme/view-product.html')?>">View Product</a></li>
										<li><a href="<?php echo base_url('assets/theme/product-left-sidebar.html')?>">Product Left Sidebar</a></li>
										<li><a href="<?php echo base_url('assets/theme/product-right-sidebar.html')?>">Product Right Sidebar</a></li>
									</ul>
								</li>
								<li class="mobile-menu-item">
									<a href="#">Product Type</a>
									<ul class="dropdown">
										<li><a href="<?php echo base_url('assets/theme/store-listing.html')?>">Store Listing</a></li>
										<li><a href="<?php echo base_url('assets/theme/store-single.html')?>">Store Single</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Pages <i class="fi-rs-angle-down"></i></a>
							<ul class="has-submenu">
								<li><a href="<?php echo base_url('assets/theme/account.html')?>">My Account</a></li>
								<li><a href="<?php echo base_url('assets/theme/profile.html')?>'">Profile</a></li>
								<li><a href="<?php echo base_url('assets/theme/orders.html')?>">Orders</a></li>
								<li><a href="<?php echo base_url('assets/theme/address-book.html')?>">Address Book </a></li>
								<li><a href="<?php echo base_url('assets/theme/wishlist.html')?>">Wishlist</a></li>
								<li><a href="<?php echo base_url('assets/theme/vendor.html')?>">Vendor</a></li>
								<li><a href="<?php echo base_url('assets/theme/cart.html')?>">Cart</a></li>
								<li><a href="<?php echo base_url('assets/theme/checkout.html')?>">Checkout</a></li>
								<li><a href="<?php echo base_url('assets/theme/error-404.html')?>">Error404</a></li>
								<li><a href="<?php echo base_url('assets/theme/error-500.html')?>">Error500</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /Mobile Menu -->

			</div>
		</div>
	</div>
</div>
<!-- /Header -->
