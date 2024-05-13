<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Thalia</title>
    <meta name="description" content="Professional Creative Template" />
    <meta name="author" content="IG Design">
    <meta name="keywords"
        content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
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
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts 
	================================================== -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/colors/color.css')}}" />

    <!-- Favicons
	================================================== -->
    <link rel="icon" type="image/png" href="{{url('favicon.png')}}">
    <link rel="apple-touch-icon" href="{{url('apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('apple-touch-icon-114x114.png')}}">


</head>

<body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <svg class="hidden">
        <svg id="icon-nav" viewBox="0 0 152 63">
            <title>navarrow</title>
            <path
                d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z" />
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
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="social-top">Logout</a>
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
            <a href="/">
                <div class="logo">
                    <img src="{{url('img/logo.png')}}" alt="">
                </div>
            </a>
            <ul>
                <li>
                    <a class="curent-page" href="/">Home</a>
                </li>
                <li>
                    <a href="#">pages</a>
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
                        <div class="hero-text">{{$homestay->name}}</div>
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
                                @foreach ($homestay_images as $img)
                                <div class="item">
                                    <img src="{{url('/storage/'. $img->image_location)}}" alt=""
                                        style="aspect-ratio: 3 / 2; object-fit: cover;">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="section">
                            <div id="rooms-sync2" class="owl-carousel">
                                @foreach ($homestay_images as $img)
                                <div class="item">
                                    <img src="{{url('/storage/'. $img->image_location)}}" alt=""
                                        style="aspect-ratio: 3 / 2; object-fit: cover;">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="section pt-5">
                            <h5>discription</h5>
                            <p class="mt-3"></p>
                        </div>
                        {{$homestay->description}}
                        <div class="section pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-3">Overview</h5>
                                </div>
                                <div class="col-lg-6">
                                    <p><strong class="color-black">Room size: </strong>{{$homestay->room_size}}</p>
                                    <p><strong class="color-black">Occupancy: </strong>{{$homestay->occupancy}}</p>
                                    <p><strong class="color-black">View: </strong>{{$homestay->view}}</p>
                                    <p><strong class="color-black">Smoking: </strong>{{$homestay->smoking}}</p>
                                </div>
                                <div class="col-lg-6">
                                    <p><strong class="color-black">Bed size: </strong>{{$homestay->bed_size}}</p>
                                    <p><strong class="color-black">Location: </strong>{{$homestay->location}}</p>
                                    <p><strong class="color-black">Room service: </strong>{{$homestay->room_service}}
                                    </p>
                                    <p><strong class="color-black">Swimming pool: </strong>{{$homestay->swimming_pool}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="section pt-4">
                            <h5>Features</h5>
                            <p class="mt-3">
                                {{$homestay->features}}</p>
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
                                                    <input class="input-sm" type="text" autocomplete="off"
                                                        id="start-date-1" name="start" placeholder="chech-in date"
                                                        data-date-format="DD, MM d" />
                                                    <span class="date-text date-depart"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-4">
                                                <div class="form-item">
                                                    <span class="fontawesome-calendar"></span>
                                                    <input class="input-sm" type="text" autocomplete="off"
                                                        id="end-date-1" name="end" placeholder="check-out date"
                                                        data-date-format="DD, MM d" />
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
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <!-- End Document
================================================== -->
</body>

</html>