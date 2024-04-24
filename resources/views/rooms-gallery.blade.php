<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Thalia</title>
	<meta name="description"  content="Professional Creative Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Professional Creative Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Professional Creative Template" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Professional Creative Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/ionicons.min.css"/>
	<link rel="stylesheet" href="css/datepicker.css"/>
	<link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/owl.transitions.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/colors/color.css"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	
</head>
<body>	

	<div class="loader">
		<div class="loader__figure"></div>
	</div>

	<svg class="hidden">
		<svg id="icon-nav" viewBox="0 0 152 63">
			<title>navarrow</title>
			<path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z"/>
		</svg>
	</svg>

	
	<!-- Nav and Logo
	================================================== -->

	<nav id="menu-wrap" class="menu-back cbp-af-header">
		<div class="menu-top background-black">
			<div class="container">
				<div class="row">
					<div class="col-6 px-0 px-md-3 pl-1 py-3">
						<span class="call-top">call us:</span> <a href="#" class="call-top">085270676454</a>
					</div>
					<div class="col-6 px-0 px-md-3 py-3 text-right">
						@if (Auth()->check())
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="social-top">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
							@else
							<a href="{{ route('login') }}" class="social-top">Login</a>
						@endif
					</div>
				</div>	
			</div>		
		</div>
		<div class="menu">
			<a href="index.html" >
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
			</a>
			<ul>
				<li>
					<a class="curent-page" href="/" >Home</a>
				</li>
				<li>
					<a href="#" >pages</a>
				</li>
				<li>
					<a href="about.html">about us</a>
				</li>
				<li>
					<a href="blog.html">news</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
				<li>
					<a href="search.html"><span>book now</span></a>
				</li>
			</ul>
		</div>
	</nav>
		
	<!-- Primary Page Layout
	================================================== -->

	<div class="section big-55-height over-hide">
	
		<div class="parallax parallax-top" style="background-image: url('img/rooms.jpg')"></div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Martogi Homestay</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom z-bigger">
		<div class="section z-bigger">		
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="section">
							<div class="customNavigation rooms-sinc-1-2">
								<a class="prev-rooms-sync-1"></a>
								<a class="next-rooms-sync-1"></a>
							</div>		
							<div id="rooms-sync1" class="owl-carousel">
								<div class="item">
									<img src="img/gallery/2.jpg" alt="">						
								</div>
								<div class="item">	
									<img src="img/gallery/3.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/4.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/5.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/6.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/7.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/8.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/9.jpg" alt="">					
								</div>
							</div>
						</div>
						<div class="section">
							<div id="rooms-sync2" class="owl-carousel">
								<div class="item">
									<img src="img/gallery/2-s.jpg" alt="">						
								</div>
								<div class="item">	
									<img src="img/gallery/3-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/4-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/5-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/6-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/7-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/8-s.jpg" alt="">					
								</div>
								<div class="item">	
									<img src="img/gallery/9-s.jpg" alt="">					
								</div>
							</div>
						</div>
						<div class="section pt-5">
							<h5>discription</h5>
							<p class="mt-3"></p>
						</div>Selamat datang di Martogi Homestay, oase tenang di tengah kota Balige yang ramah dan hangat. Terletak strategis, kami menawarkan satu rumah utuh yang nyaman dan dilengkapi dengan fasilitas lengkap untuk memenuhi kebutuhan Anda. Nikmati kenyamanan seperti di rumah sendiri dengan suasana yang tenang dan pemandangan alam yang indah. Dengan akses mudah ke berbagai atraksi lokal, Martogi Homestay adalah pilihan sempurna untuk wisatawan dan pelancong bisnis. Raih momen berharga Anda di Balige dengan menginap bersama kami di Martogi Homestay!.
						<div class="section pt-4">
							<div class="row">
								<div class="col-12">
									<h5 class="mb-3">Overview</h5>
								</div>
								<div class="col-lg-6">
									<p><strong class="color-black">Room size:</strong> 20 X 40 m</p>	
									<p><strong class="color-black">Occupancy:</strong> Up to 8 Adults </p>	
									<p><strong class="color-black">View:</strong> City View</p>	
									<p><strong class="color-black">Smoking:</strong> Yes </p>	
								</div>	
								<div class="col-lg-6">
									<p><strong class="color-black">Bed size:</strong> King and regular</p>	
									<p><strong class="color-black">Location:</strong> Huta Simangunsong, pantai, Lumban Bulbul, Kec. Balige, Sumatera Utara </p>	
									<p><strong class="color-black">Room service:</strong> No</p>	
									<p><strong class="color-black">Swimming pool:</strong> No</p>	
								</div>	
							</div>		
						</div>
						<div class="section pt-4">
							<h5>Features</h5>
							<p class="mt-3">
Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih.
Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum.
Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau.
Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman.
Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap.
Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik..</p>
						</div>
					</div>
					<div class="col-lg-4 order-first order-lg-last">
						<div class="section background-dark p-4">	
							<div class="row">
								<div class="col-12">
									<div class="input-daterange input-group" id="flight-datepicker">
										<div class="row">	
											<div class="col-12">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>
													<span class="date-text date-depart"></span>
												</div>
											</div>
											<div class="col-12 pt-4">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>
													<span class="date-text date-return"></span>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-12 pt-4">
											<select name="adults" class="wide">
												<option data-display="adults">adults</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-12 pt-4">
											<select name="children" class="wide">
												<option data-display="children">children</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-12 pt-4">
									<a class="booking-button" href="search.html">book now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
	
	

	
	
	<div class="scroll-to-top"></div>
	
	
	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>  
	<script src="js/custom.js"></script> 
<!-- End Document
================================================== -->
</body>
</html>