@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->

  <!-- Template CSS -->
  <link href="{{ asset('css/style-starter.css') }}" rel="stylesheet">

  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>
    <!-- promotion area start -->
@if($coupon)
<div class="p-1 text-white text-center"
     style="background-image: url('{{ asset('frontend/img/bg/12.jpg') }}')">
    {{ $coupon->value }}{{ $coupon->type == 'percentage' ? '%' : '' }} off use ({{ $coupon->code }})
</div>
@endif
<!-- promotion area end -->
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
	
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="http://localhost:8000/shop" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="http://localhost:8000/shop" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Women's
										Fashion
										<br>50% Off</h3>
									<a href="http://localhost:8000/shop" class="shop-button btn">
										Shop Now
									</a>

								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Men's
										Fashion
										<br>60% Off</h3>
									<a href="http://localhost:8000/shop" class="shop-button btn">
										Shop Now
									</a>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--//banner-slider-->
			<!--//banner-slider-->
			<div class="right-banner">
				<div class="right-1">
					<h4>
						Men's
						Fashion
						<br>50% Off</h4>
				</div>
			</div>

		</div>

</section>
<!-- //w3l-banner-slider-main -->
<section class="w3l-grids-hny-2">
	<!-- /content-6-section -->
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">
				
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="mb-4 text-center">Handpicked Favourites just for you</p>
			<div class="welcome-grids row mt-5">
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
                            <a class="category-item" href="{{ route('shop.index', $categories[0]->slug ?? '') }}">
                                @if($categories[0]->cover ?? '')
                                <img class="img-fluid"
                                     src="{{ asset('storage/images/categories/' . $categories[0]->cover ?? '') }}"
                                     alt="{{ $categories[0]->name ?? '' }}">
                            @else
                                <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                            @endif
								<div class="boxhny-content">
									<h3 class="title">Product
								</div>
							</a>
						</div>
						<h4><a class="category-item" href="{{ route('shop.index', $categories[0]->slug ?? '') }}"> 
                            {{ $categories[0]->name ?? '' }}</a></h4>

				</div>
				
                <div class="col-lg-2 col-md-4 col-6 welcome-image">
                    <div class="boxhny13">
                        <a class="category-item" href="{{ route('shop.index', $categories[1]->slug ?? '') }}">
                            @if($categories[1]->cover ?? '')
                            <img class="img-fluid"
                                 src="{{ asset('storage/images/categories/' . $categories[1]->cover ?? '') }}"
                                 alt="{{ $categories[1]->name ?? '' }}">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                        @endif
                            <div class="boxhny-content">
                                <h3 class="title">Product
                            </div>
                        </a>
                    </div>
                    <h4><a class="category-item" href="{{ route('shop.index', $categories[1]->slug ?? '') }}"> 
                        {{ $categories[1]->name ?? '' }}</a></h4>

            </div>
            <div class="col-lg-2 col-md-4 col-6 welcome-image">
                <div class="boxhny13">
                    <a class="category-item" href="{{ route('shop.index', $categories[2]->slug ?? '') }}">
                        @if($categories[2]->cover ?? '')
                        <img class="img-fluid"
                             src="{{ asset('storage/images/categories/' . $categories[2]->cover ?? '') }}"
                             alt="{{ $categories[2]->name ?? '' }}">
                    @else
                        <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                    @endif
                        <div class="boxhny-content">
                            <h3 class="title">Product
                        </div>
                    </a>
                </div>
                <h4><a class="category-item" href="{{ route('shop.index', $categories[2]->slug ?? '') }}"> 
                    {{ $categories[2]->name ?? '' }}</a></h4>

        </div>
        <div class="col-lg-2 col-md-4 col-6 welcome-image">
            <div class="boxhny13">
                <a class="category-item" href="{{ route('shop.index', $categories[3]->slug ?? '') }}">
                    @if($categories[3]->cover ?? '')
                    <img class="img-fluid"
                         src="{{ asset('storage/images/categories/' . $categories[3]->cover ?? '') }}"
                         alt="{{ $categories[3]->name ?? '' }}">
                @else
                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                @endif
                    <div class="boxhny-content">
                        <h3 class="title">Product
                    </div>
                </a>
            </div>
            <h4><a class="category-item" href="{{ route('shop.index', $categories[3]->slug ?? '') }}"> 
                {{ $categories[3]->name ?? '' }}</a></h4>

    </div>
    <div class="col-lg-2 col-md-4 col-6 welcome-image">
        <div class="boxhny13">
            <a class="category-item" href="{{ route('shop.index', $categories[4]->slug ?? '') }}">
                @if($categories[4]->cover ?? '')
                <img class="img-fluid"
                     src="{{ asset('storage/images/categories/' . $categories[4]->cover ?? '') }}"
                     alt="{{ $categories[4]->name ?? '' }}">
            @else
                <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
            @endif
                <div class="boxhny-content">
                    <h3 class="title">Product
                </div>
            </a>
        </div>
        <h4><a class="category-item" href="{{ route('shop.index', $categories[4]->slug ?? '') }}"> 
            {{ $categories[4]->name ?? '' }}</a></h4>

</div>
<div class="col-lg-2 col-md-4 col-6 welcome-image">
    <div class="boxhny13">
        <a class="category-item" href="{{ route('shop.index', $categories[5]->slug ?? '') }}">
            @if($categories[5]->cover ?? '')
            <img class="img-fluid"
                 src="{{ asset('storage/images/categories/' . $categories[5]->cover ?? '') }}"
                 alt="{{ $categories[5]->name ?? '' }}">
        @else
            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
        @endif
            <div class="boxhny-content">
                <h3 class="title">Product
            </div>
        </a>
    </div>
    <h4><a class="category-item" href="{{ route('shop.index', $categories[5]->slug ?? '') }}"> 
        {{ $categories[5]->name ?? '' }}</a></h4>

</div>
			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->

<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-lg-6">
								<h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
								<p>Visit our shop to see amazing creations from our designers.</p>
								<a href="http://127.0.0.1:8000/shop/men-clothes" class="read-more btn">
										Shop Now
								</a>
						</div>
						<div class="photo-6-inf-left col-lg-6">
								<img src="assets/images/1.jpg" class="img-fluid" alt="">
						</div>
					</div>
				 </div>
			 </div>
	 </section>
   <!-- //specification-6-->
     
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
												<iframe src="https://player.vimeo.com/video/246139491" frameborder="0"
												allow="autoplay; fullscreen" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					      </div>
				  </div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">All Branded Women's Bags are Flat <span>30% Discount</span>
						</h3>
						<p>Visit our shop to see amazing creations from our designers.</p>
						<a href="http://127.0.0.1:8000/shop/women-clothes" class="read-more btn">
							Shop Now
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //video-6-->
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			
			<!-- /row-->
			{{-- <div class="ecom-products-grids row mt-lg-5 mt-3">
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-1.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-11.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<input type="hidden" name="amount" value="899.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Women Maroon Top </a></h3>
							<span class="price"><del>$975.00</del>$899.99</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-2.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-22.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
											<input type="hidden" name="amount" value="599.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
							<span class="price"><del>$775.00</del>$599.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-3.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-33.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Dark Blue Top">
											<input type="hidden" name="amount" value="799.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Dark Blue Top </a></h3>
							<span class="price"><del>$875.00</del>$799.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-4.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-44.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Women Tunic">
											<input type="hidden" name="amount" value="399.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Women Tunic </a></h3>
							<span class="price"><del>$475.00</del>$399.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-5.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-55.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
											<input type="hidden" name="amount" value="299.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
							<span class="price"><del>$575.00</del>$299.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-6.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-66.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Straight Kurta">
											<input type="hidden" name="amount" value="699.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Straight Kurta </a></h3>
							<span class="price"><del>$775.00</del>$699.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-7.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-77.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="White T-Shirt">
											<input type="hidden" name="amount" value="599.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">White T-Shirt </a></h3>
							<span class="price"><del>$675.00</del>$599.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-8.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-88.jpg">
							</a>
							<ul class="social">
									<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Blue Sweater">
											<input type="hidden" name="amount" value="499.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</form>
									</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Blue Sweater</a></h3>
							<span class="price"><del>$575.00</del>$499.99</span>
						</div>
					</div>

				</div>


			</div> --}}
            <livewire:frontend.product.top-trending-products />
			<!-- //row-->
		</div>
	</div>
</section>
<!-- //products-->
<section class="w3l-content-5">
	<!-- /content-6-section -->
	<div class="content-5-main">
		<div class="container">
			<div class="content-info-in row">
				<div class="content-gd col-md-6 offset-lg-3 text-center">
					<h3 class="hny-title two">
						Tons of Products & Options to
						<span>change</span></h3>
					<p>Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
						animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere
						aperiam sequi optio consectetur adipisicing elit..</p>
					<a href="http://localhost:8000/shop" class="read-more-btn2 btn">
						Shop Now
					</a>

				</div>

			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="w3l-post-grids-6">
	<!-- /post-grids-->
	{{-- <div class="post-6-mian py-5">
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
				<p class="mb-5 text-center">Handpicked Favourites just for you</p>
			<div class="post-hny-grids row mt-5">
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="assets/images/bg1.jpg" alt="blog-image">
						</figure>
					</a>

					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="assets/images/bg2.jpg" alt="blog-image">
						</figure>
					</a>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="assets/images/bg3.jpg" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="assets/images/bg4.jpg" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>

			</div>
		</div>
	</div> --}}
</section>
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
	<div class="customers-sec-6-cintent py-5">
		<!-- /customers-->
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
				<p class="mb-5 text-center">What People Say</p>
			<div class="row customerhny my-lg-5 my-4">
				<div class="col-md-12">
					<div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#customerhnyCarousel" data-slide-to="1"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c1.jpg" class="img-fluid" alt="">
												<h5>Smith Roy</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c2.jpg" class="img-fluid" alt="">
														<h5>Lora Grill</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

							<div class="carousel-item">
								<div class="row">
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
												<div class="feedback-hny">
													<span class="fa fa-quote-left"></span>
													<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
												</div>
												<div class="feedback-review mt-4">
													<img src="assets/images/c1.jpg" class="img-fluid" alt="">
													<h5>Smith Roy</h5>
	
												</div>
											</div>
										</div>
										<div class="col-md-3">
												<div class="customer-info text-center">
														<div class="feedback-hny">
															<span class="fa fa-quote-left"></span>
															<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
																adipisicing elit. Labore rem, dicta assumenda mollitia molestias
																quas nihil quasis.</p>
														</div>
														<div class="feedback-review mt-4">
															<img src="assets/images/c2.jpg" class="img-fluid" alt="">
															<h5>Lora Grill</h5>
			
														</div>
													</div>
										</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

						</div>
						<!--.carousel-inner-->
					</div>
					<!--.Carousel-->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
	<!--/customers -->
	<div class="subscription-infhny">
		<div class="container-fluid">

			<div class="subscription-grids row">

				<div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
					<div class="p-lg-5 py-md-0 py-3">
						<h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
							<p>Subscribe and get notified at first on the latest update and offers!</p>

						<form action="#" method="post" class="signin-form mt-lg-5 mt-4">
							<div class="forms-gds">
								<div class="form-input">
									<input type="email" name="" placeholder="Your email here" required="">
								</div>
								<div class="form-input"><button class="btn">Join</button></div>
							</div>
						</form>
					</div>
				</div>
				<div class="subscription-left forms-25-info col-lg-6 ">

				</div>
			</div>

			<!--//customers -->
		</div>
</section>
<!-- //customers-6-->


  <section class="w3l-footer-22">
      <!-- footer-22 -->
      {{-- <div class="footer-hny py-5">
          <div class="container py-lg-5">
              <div class="text-txt row">
                  <div class="left-side col-lg-4">
                      <h3><a class="logo-footer" href="index.html">
                            Spry<span class="lohny">S</span>tore</a></h3>
                      <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                      <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.Vivamus
                          a ligula quam. Ut blandit eu leo non suscipit. </p>
                      <ul class="social-footerhny mt-lg-5 mt-4">

                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-lg-8 pl-lg-5">
                      <h4>Women's Day Special Offer
                        All Branded Sandals are Flat 50% Discount</h4>
                      <div class="sub-columns">
                          <div class="sub-one-left">
                              <h6>Useful Links</h6>
                              <div class="footer-hny-ul">
                                  <ul>
                                      <li><a href="index.html">Home</a></li>
                                      <li><a href="about.html">About</a></li>
                                      <li><a href="#">Blog</a></li>
                                      <li><a href="contact.html">Contact</a></li>
                                  </ul>
                                  <ul>
                                      <li><a href="#">Careers</a></li>
                                      <li><a href="#">Privacy Policy</a></li>
                                      <li><a href="#">Terms and Conditions</a></li>
                                      <li><a href="contact.html">Support</a></li>
                                  </ul>
                              </div>

                          </div>
                          <div class="sub-two-right">
                              <h6>Our Store</h6>
                              <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States of America</p>

                              <h6>We accept:</h6>
                              <ul>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                              aria-hidden="true"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="below-section row">
                  <div class="columns col-lg-6">
                      <ul class="jst-link">
                          <li><a href="#">Privacy Policy </a> </li>
                          <li><a href="#">Term of Service</a></li>
                          <li><a href="contact.html">Customer Care</a> </li>
                      </ul>
                  </div>
                  <div class="columns col-lg-6 text-lg-right">
                      <p>© 2020 SpryStore. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank">
                              W3Layouts</a>
                      </p>
                  </div>
                  <button onclick="topFunction()" id="movetop" title="Go to top">
                      <span class="fa fa-angle-double-up"></span>
                  </button>
              </div>
          </div>
      </div> --}}
      <!-- //titels-5 -->
      <!-- move top -->

      <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
              scrollFunction()
          };

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("movetop").style.display = "block";
              } else {
                  document.getElementById("movetop").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>


  </body>

  </html>
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
    </script>
 <!-- cart-js -->
 <script src="{{ asset('js/minicart.js') }}"></script>

 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
  </script>
<!-- disable body scroll which navbar is in active -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection
