<!-- Main -->
<main class="main">
	<section class="banner-section position-relative">
		<div class="container">
			<div class="banner-slider">
				<div class="banner-slider-one pagination-square align-pagination-square">
					<div class="banner-slider-single banner-animation-col">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-6">
								<div class="banner-content">
									<h1 class="banner-title mb-25">
										Wooden  <span>Furniture</span>
									</h1>
									<p>Our wood products are made up from mahogany wood </p>
									<a href="<?php echo base_url('assets/theme/shop-grid.html')?>" class="shop-now">Shop Now <i class="feather-arrow-right ml-5"></i></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="single-banner-slider">
									<img  src="<?php echo base_url('assets/theme/assets/img/slider/slide-01.jpg')?>" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="banner-slider-single banner-animation-col">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-6">
								<div class="banner-content">
									<h1 class="banner-title mb-25">
										Metalic  <span>Furniture</span>
									</h1>
									<p>Metal furniture is a type of furniture that uses metal parts in its construction. There are various types of metal that can be used, such as iron, Carbon steel, aluminium, and stainless steel.</p>
									<a href="<?php echo base_url('assets/theme/shop-grid.html')?>" class="shop-now">Shop Now <i class="feather-arrow-right ml-5"></i></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="single-banner-slider" >
									<img  src="<?php echo base_url('assets/theme/assets/img/slider/slide-03.jpg')?>" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="banner-slider-single banner-animation-col">
						<div class="row align-items-center">
							<div class="col-md-6 col-lg-6">
								<div class="banner-content">
									<h1 class="banner-title mb-25">
										Plastic <span>Furniture</span>
									</h1>
									<p>Plastic furniture is designed using various types of plastics, including polymers, polyvinyl chloride, and polypropylene. Their prolonged durability and economic nature have made them ideal materials to be used in outdoor settings and for indoor purposes.</p>
									<a href="<?php echo base_url('assets/theme/shop-grid.html')?>" class="shop-now">Shop Now <i class="feather-arrow-right ml-5"></i></a>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="single-banner-slider" >
									<img  src="<?php echo base_url('assets/theme/assets/img/slider/slide-02.jpg')?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End hero slider-->

	

	<!-- Category -->
	 <!--  -->
	<!-- /Category -->

	<!-- Featured Products -->
	<section class="feature-products">
		<div class="container">
			<div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
				<h3>Featured Products</h3>
				<p>A highly efficient Furniture product</p>
			</div>
			
			<div class="row">
				<div class="col-xl-12">
					<div class="feature-product-slider arrow-center position-relative">
						<div class="slider-arrow slider-arrow-two carousel-4-columns-arrow" id="carousel-4-columns-arrows"></div>
						<div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">
						<?php
            foreach ($all_featured_products as $single_feature_product) {
                ?>
							<div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
								<div class="product-img-col">
									<div class="product-img product-img-zoom">
										<a href="<?php echo base_url('home/products')?>">
											<img  src="<?php echo base_url('assets/images/products/' . $single_feature_product->pDp)?>" alt="">
										</a>
									</div>
									<div class="product-badge">
										<span class="best">-10%</span>
									</div>
								</div>
								<div class="product-content">
									<div class="sold-group mb-15">
										<p>Sold By <span> Global Store</span></p>
									</div>
									<h2><a href="<?php echo base_url('assets/theme/view-product.html')?>"><?php echo $single_feature_product->pName; ?></a></h2>
									<div class="product-card-bottom ">
										<div class="rating d-inline-block">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star filled"></i>
											<span class="ml-5"> (3.5)</span>
										</div>
									</div>
									<div class="product-card-bottom ">
										<div class="product-price">
											<span>$ 350.00</span>
											<span class="old-price">$ 450.00</span>
										</div>
									</div>
									<div class="add-feature">
										<a href="<?php echo base_url('assets/theme/cart.html')?>" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
										<div class="product-details-inner">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>" class="product-btn" ><i class="fi-rs-eye"></i></a>
											<a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
											<a aria-label="Add To Wishlist" class="product-btn" href="<?php echo base_url('assets/theme/wishlist.html')?>"><i class="fi-rs-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product box -->

							<!-- Product box -->
							<!-- <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
								<div class="product-img-col">
									<div class="product-img product-img-zoom">
										<a href="<?php echo base_url('assets/theme/view-product.html')?>">
											<img  src="<?php echo base_url('assets/theme/assets/img/shop/product-12.jpg')?>" alt="">
										</a>
									</div>
									<div class="product-badge">
										<span class="best">-20%</span>
									</div>
								</div>
								<div class="product-content">
									<div class="sold-group mb-15">
										<p>Sold By <span> Global Store</span></p>
									</div>
									<h2><a href="<?php echo base_url('assets/theme/view-product.html')?>">Digital Stethoscope</a></h2>
									<div class="product-card-bottom ">
										<div class="rating d-inline-block">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star filled"></i>
											<span class="ml-5"> (3.5)</span>
										</div>
									</div>
									<div class="product-card-bottom ">
										<div class="product-price">
											<span>$ 550.00</span>
											<span class="old-price">$ 350.00</span>
										</div>
									</div>
									<div class="add-feature">
										<a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
										<div class="product-details-inner">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>" class="product-btn" ><i class="fi-rs-eye"></i></a>
											<a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
											<a aria-label="Add To Wishlist" class="product-btn" href="<?php echo base_url('assets/theme/wishlist.html')?>"><i class="fi-rs-heart"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Product box -->

							<!-- Product box -->
							<!-- <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
								<div class="product-img-col">
									<div class="product-img product-img-zoom">
										<a href="<?php echo base_url('assets/theme/view-product.html')?>">
											<img  src="<?php echo base_url('assets/theme/assets/img/shop/product-13.jpg')?>" alt="">
										</a>
									</div>
									<div class="product-badge">
										<span class="best">-10%</span>
									</div>
								</div>
								<div class="product-content">
									<div class="sold-group mb-15">
										<p>Sold By <span> Global Store</span></p>
									</div>
									<h2><a href="<?php echo base_url('assets/theme/view-product.html')?>">Cosmetic Containers</a></h2>
									<div class="product-card-bottom ">
										<div class="rating d-inline-block">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star filled"></i>
											<span class="ml-5"> (3.5)</span>
										</div>
									</div>
									<div class="product-card-bottom ">
										<div class="product-price">
											<span>$ 350.00</span>
											<span class="old-price">$ 450.00</span>
										</div>
									</div>
									<div class="add-feature">
										<a href="cart.html" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
										<div class="product-details-inner">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>" class="product-btn" ><i class="fi-rs-eye"></i></a>
											<a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
											<a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Product box -->

							<!-- Product box -->
							<!-- <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
								<div class="product-img-col">
									<div class="product-img product-img-zoom">
										<a href="<?php echo base_url('assets/theme/view-product.html')?>">
											<img  src="<?php echo base_url('assets/theme/assets/img/shop/product-10.jpg')?>" alt="">
										</a>
									</div>
									<div class="product-badge">
										<span class="best">-20%</span>
									</div>
								</div>
								<div class="product-content">
									<div class="sold-group mb-15">
										<p>Sold By <span> Global Store</span></p>
									</div>
									<h2><a href="<?php echo base_url('assets/theme/view-product.html')?>">Blue Hand Gloves</a></h2>
									<div class="product-card-bottom ">
										<div class="rating d-inline-block">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star filled"></i>
											<span class="ml-5"> (3.5)</span>
										</div>
									</div>
									<div class="product-card-bottom ">
										<div class="product-price">
											<span>$ 250.00</span>
											<span class="old-price">$ 150.00</span>
										</div>
									</div>
									<div class="add-feature">
										<a href="<?php echo base_url('assets/theme/cart.html')?>" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
										<div class="product-details-inner">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>" class="product-btn" ><i class="fi-rs-eye"></i></a>
											<a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
											<a aria-label="Add To Wishlist" class="product-btn" href="<?php echo base_url('assets/theme/wishlist.html')?>"><i class="fi-rs-heart"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Product box -->

							<!-- Product box -->
							<!-- <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
								<div class="product-img-col">
									<div class="product-img product-img-zoom">
										<a href="<?php echo base_url('assets/theme/view-product.html')?>">
											<img  src="<?php echo base_url('assets/theme/assets/img/shop/product-13.jpg')?>" alt="">
										</a>
									</div>
									<div class="product-badge">
										<span class="best">-15%</span>
									</div>
								</div>
								<div class="product-content">
									<div class="sold-group mb-15">
										<p>Sold By <span> Global Store</span></p>
									</div>
									<h2><a href="<?php echo base_url('assets/theme/view-product.html')?>">Cosmetic Containers</a></h2>
									<div class="product-card-bottom ">
										<div class="rating d-inline-block">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star filled"></i>
											<span class="ml-5"> (3.5)</span>
										</div>
									</div>
									<div class="product-card-bottom ">
										<div class="product-price">
											<span>$ 350.00</span>
											<span class="old-price">$ 450.00</span>
										</div>
									</div>
									<div class="add-feature">
										<a href="<?php echo base_url('assets/theme/cart.html')?>" class="btn btn-primary"><i class="feather-shopping-bag me-1"></i>Add</a>
										<div class="product-details-inner">
											<a href="<?php echo base_url('assets/theme/view-product.html')?>" class="product-btn" ><i class="fi-rs-eye"></i></a>
											<a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
											<a aria-label="Add To Wishlist" class="product-btn" href="<?php echo base_url('assets/theme/wishlist.html')?>"><i class="fi-rs-heart"></i></a>
										</div>
									</div>
								</div>
							</div> -->
							<!-- /Product box -->
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			 
		</div>
		
	</section>
	<!-- /Featured Products -->

	

	
	

	<!-- Book Consultation -->
	<!-- <section class="book-consultation">
		<div class="container">
			<div class="book-consult-img">
				<img  src="<?php echo base_url('assets/theme/assets/img/consult.png')?>" alt="">
			</div>
			<div class="row">
				<div class="col-xl-4 col-md-6 d-flex">
					<div class="consult-box d-flex align-items-center">
						<div class="consult-img mr-15">
							<img  src="<?php echo base_url('assets/theme/assets/img/icons/book-01.svg')?>" alt="">
						</div>
						<p>Speak to any Seller you want</p>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 d-flex">
					<div class="consult-box d-flex align-items-center">
						<div class="consult-img mr-15">
							<img  src="<?php echo base_url('assets/theme/assets/img/icons/book-02.svg')?>" alt="">
						</div>
						<p>Book Virtual Appointment</p>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 d-flex">
					<div class="consult-box d-flex align-items-center">
						<div class="consult-img mr-15">
							<img  src="<?php echo base_url('assets/theme/assets/img/icons/book-03.svg')?>" alt="">
						</div>
						<p>Book virtual Appointments with AYUSH doctors</p>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="book-btn-show text-center">
						<a href="javascript:;" class="btn btn-primary">Book Your Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- /Book Consultation -->

</main>
<!-- /Main -->
