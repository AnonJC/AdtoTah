<!DOCTYPE html>
<html lang="en">
<head>
<title>AdtoTah! - Offers</title>
<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{\asset('css/bootstrap4/bootstrap.min.css')}}">
<link href="{{\asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{\asset('css/offers_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{\asset('css/offers_responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="{{\route('site.home')}}">Home</a></li>
								<li class="main_nav_item"><a href="{{\route('site.about')}}">About us</a></li>
								<li class="main_nav_item active"><a href="{{\route('site.offers')}}">Offers</a></li>
								<li class="main_nav_item"><a href="{{\route('site.news')}}">News</a></li>
								<li class="main_nav_item"><a href="{{\route('site.contact')}}">Contact</a></li>
							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<form action="#" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.blade.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.blade.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="#">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.blade.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.blade.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/offers.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Offers</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.blade.php">Home</a></li>
									<li class="home_breadcrumb">Offers</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
		</div>
		<!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Iligan City</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row filtering_row">
				<div class="col">
					<div class="sorting_group_1">
						<ul class="item_sorting">
							<li>
								<span class="sorting_text">Filter by</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Stars</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_filter_btn" data-filter="*"><span>Show All</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Ascending</span></li>
									<li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
									<li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
									<li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
									<li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
									<li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Price</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Facility</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li><span>Facility</span></li>
									<li><span>Facility</span></li>
									<li><span>Facility</span></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="sorting_group_2 clearfix">
						<ul>
							<li>Airplane X</li>
							<li>5 stars X</li>
							<li>Romantic X</li>
						</ul>
						<div class="sorting_icons clearfix">
							<div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="items item_grid clearfix">

						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src="images/tinago.jpg" width="300" height="200" alt=""></div>
							<div class="item_content">
								<div class="item_title"> Tinago Falls</div>
								<ul>
									<li>5 star rating</li>
									<li>Waterfall</li>
								</ul>
								<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Tinago Falls “hidden” is a waterfall on the Agus River, located in between the town of Linamon and Iligan City, Lanao del Norte in the southern Philippine island of Mindanao. Legend has it that there once lived an influential and powerful Sultan Agok and his wife. They were appointed by their people as their king and queen. But they became too proud of themselves and became selfish rulers of their kingdom. When the sultan's wife was pregnant, an enchantress, disguised as a beggar, begged for their help but instead they exiled and rejected her. Because of this, the enchantress cursed the couple that the child will become ugly but they did not take it seriously and permanently banished the enchantress.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_3">
							<div class="item_image"><img src="images/paseo.jpg" width="300" height="200" alt=""></div>
							<div class="item_content">
								<div class="item_title">Paseo De Santiago</div>
								<ul>
									<li>4 rating</li>
									<li>Boulevard</li>
								</ul>
								<div class="rating rating_3" data-rating="3">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Paseo De Santiago Balite Drive, Iligan City, Lanao del Norte</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_4">
							<div class="item_image"><img src="images/maria.jpg" width="300" height="200"alt=""></div>
							<div class="item_content">
								<div class="item_title">Maria Christina Falls</div>
								<ul>
									<li>5 star rating</li>
									<li>Waterfall</li>
								</ul>
								<div class="rating rating_4" data-rating="4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text"> Maria Cristina is a waterfall of the Agus River on the island of Mindanao in the Philippines. It is sometimes called the "twin falls" as the flow is separated by a rock at the brink of the waterfall. It is a landmark of Iligan City, nicknamed the City of Majestic Waterfalls, because of the presence of more than 20 waterfalls in the city. It is located 9.3 kilometers away southwest of the city proper at the boundaries of Barangays Maria Cristina, Ditucalan, and Buru-un. Known for its natural grandeur, the 320 - feet (98 meters) high waterfall is also the primary source of electric power for the city's industries, being harnessed by the Agus VI Hydroelectric Plant.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src="images/dodiongan.jpg" width="300" height="200" alt=""></div>
							<div class="item_content">
								<div class="item_title">Dodiongan Falls</div>
								<ul>
									<li>3 star rating</li>
									<li>waterfall</li>
								</ul>
								<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text"> Dodiongan Falls is a 20-metre (65.5 ft) high waterfall located in Barangay Bonbonon</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="pages">
						<ul class="pages_list">
							<li class="page active"><a href="#">01.</a></li>
							<li class="page"><a href="#">02.</a></li>
							<li class="page"><a href="#">03.</a></li>
							<li class="page"><a href="#">04.</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

<!-- 	<div class="newsletter"> -->
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<!-- <div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Adto Tah</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
		<!-- 				<div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div> -->
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title">Latest News</div>
						<div class="footer_latest_content">

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.blade.php">Diyandi Festival</a></div>
									<div class="footer_latest_item_date">September 28, 2018</div>
								</div>
							</div>

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.blade.php">A perfect vacation</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title">Tags</div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">travel</a></li>
							<li class="tag"><a href="#">summer</a></li>
							<li class="tag"><a href="#">cruise</a></li>
							<li class="tag"><a href="#">beach</a></li>
							<li class="tag"><a href="#">offer</a></li>
							<li class="tag"><a href="#">vacation</a></li>
							<li class="tag"><a href="#">trip</a></li>
							<li class="tag"><a href="#">city break</a></li>
							<li class="tag"><a href="#">adventure</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="{{\asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{\asset('css/bootstrap4/popper.js')}}"></script>
<script src="{{\asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{\asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{\asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{\asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{\asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{\asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{\asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{\asset('plugins/easing/easing.js')}}"></script>
<script src="{{\asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{\asset('js/offers_custom.js')}}"></script>
</body>
</html>