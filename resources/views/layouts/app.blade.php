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
    <title>TobaNest</title>
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
    {{-- <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" /> --}}
    <link rel="stylesheet" href="{{url('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/datepicker.css')}}" />
    {{-- <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}" /> --}}
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    {{-- <link rel="stylesheet" href="{{url('css/colors/color.css')}}" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Favicons
	================================================== -->
    <link rel="icon" type="image/png" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('img/logo.png')}}">


</head>

<body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <svg class="hidden">
        <svg id="icon-nav" viewBox="0 0 152 63">
            <title>navarrow</title>
            <path d="M115.737 29L92.77 6.283c-.932-.92-1.21-2.84-.617-4.281.594-1.443 1.837-1.862 2.765-.953l28.429 28.116c.574.57.925 1.557.925 2.619 0 1.06-.351 2.046-.925 2.616l-28.43 28.114c-.336.327-.707.486-1.074.486-.659 0-1.307-.509-1.69-1.437-.593-1.442-.315-3.362.617-4.284L115.299 35H3.442C2.032 35 .89 33.656.89 32c0-1.658 1.143-3 2.552-3H115.737z" />
        </svg>
    </svg>


    <!-- Nav and Logo
	================================================== -->

    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu-top background-black">
            <div class="container">
                <div class="row">
                    <div class="col-6 px-0 px-md-3 pl-1 py-3">
                        {{-- <span class="call-top">call us:</span> <a href="#" class="call-top">085270676454</a> --}}
                    </div>
                    <div class="col-6 px-0 px-md-3 py-3 text-right">
                        @if (Auth()->check())
                        @if (Auth()->user()->role == 'owner' && Auth()->user()->verified == 'true')
                        <a href="{{ route('create.homestay') }}" class="social-top">Create Homestay</a>
                        <a href="{{ route('pay') }}" class="social-top">History Pemesanan</a>
                        @endif
                        @if (Auth()->user()->role == 'admin')
                        <a href="{{ route('verify.owner') }}" class="social-top">Verify Owner</a>
                        <a href="{{ route('DataHapus') }}" class="social-top">Data Homestay</a>
                        <a href="{{ route('create.news') }}" class="social-top">Create News</a>
                        @endif
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
            <a href="{{route('home')}}">
                <div class="logo">
                    <img src="{{url('img/logo.png')}}" alt="">
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('home')}}"><span>Home</span></a>
                </li>
                <li>
                    <a href=" {{route('news')}}">News</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Primary Page Layout
	================================================== -->

    @yield('content')

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