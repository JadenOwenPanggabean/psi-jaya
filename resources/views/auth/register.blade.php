<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
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

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/colors/color.css')}}" />

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('img/logo.png')}}">

    <!-- Custom CSS -->
    <style>
        .role-select {
            margin-top: 20px;
            text-align: center;
        }
        .role-select label {
            display: block;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            background-color: rgb(0, 0, 0);
            color: #fff;
            cursor: pointer;
        }
        .role-select input[type="radio"] {
            display: none;
        }
        .role-select input[type="radio"]:checked + label {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <div class="section mt-3 z-bigger">
        <div class="container">
            <form class="row justify-content-center padding-bottom-smaller" method="POST" action="{{ route('register') }}" id="registrationForm">
                @csrf
                <div class="col-md-8">
                    <h3 class="text-center padding-bottom-small">Register</h3>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-4 ajax-form">
                    <input name="name" type="text" placeholder="Nama:" autocomplete="off" />
                    @error('name')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                    <input name="email" type="email" placeholder="Email:" autocomplete="off" />
                    @error('email')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="section mt-5 clearfix"></div>
                <div class="col-md-4 ajax-form">
                    <input name="no_hp" type="text" placeholder="No Hp: (628...)" autocomplete="off" />
                    @error('no_hp')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="section mt-5 clearfix"></div>
                <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                    <input name="password" type="password" placeholder="Password" autocomplete="off" />
                    @error('password')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-4 mt-4 mt-md-0 ajax-form">
                    <input name="password_confirmation" type="password" placeholder="Konfirmasi Password" autocomplete="off" />
                </div>

                <!-- Math problem section -->
                <div class="section mt-5 clearfix"></div>
                <div class="col-md-8 mt-4 ajax-form text-center">
                    <p id="mathProblem"></p>
                    <input type="text" id="mathAnswer" placeholder="Jawaban:" autocomplete="off" />
                    <strong id="mathError" style="color: red; display: none;">Jawaban salah, coba lagi.</strong>
                </div>

                <div class="section mt-5 clearfix"></div>
                <div class="col-md-8 mt-4 ajax-form role-select text-center">
                    <input type="radio" id="roleUser" name="role" value="user" checked>
                    <label for="roleUser">User</label>
                    <input type="radio" id="roleOwner" name="role" value="owner">
                    <label for="roleOwner">Owner</label>
                    @error('role')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="section clearfix mt-5"></div>
                <div class="col-md-8 mt-3 ajax-form text-center">
                    <button type="submit" class="send_message" id="send"><span>submit</span></button>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-8 mt-5">
                    <div class="subtitle text-center mb-4">Sudah punya akun?</div>
                    <a class="subtitle with-line text-center mb-4" href="{{ route('login') }}">
                        Masuk Sekarang
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/plugins.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Generate a random math problem
            const num1 = Math.floor(Math.random() * 10) + 1;
            const num2 = Math.floor(Math.random() * 10) + 1;
            const correctAnswer = num1 + num2;
            document.getElementById("mathProblem").innerText = `Berapa ${num1} + ${num2}?`;

            // Validate the math problem answer on form submit
            document.getElementById("registrationForm").addEventListener("submit", function(event) {
                const userAnswer = parseInt(document.getElementById("mathAnswer").value, 10);
                if (userAnswer !== correctAnswer) {
                    event.preventDefault();
                    document.getElementById("mathError").style.display = "block";
                } else {
                    document.getElementById("mathError").style.display = "none";
                }
            });
        });
    </script>
    <!-- End Document -->
</body
