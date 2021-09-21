<!doctype html>
<html lang="en">
  <head>
  	<title>Trial Laravel | Unofficial Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('icon/Icon_Laravel.ico') }}">
  </head>
  <body>
        <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
                        <img src="{{ asset('images/logo.jpg') }}" href="#" class="img logo rounded-circle mb-5">
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="/user/products">Product 1</a>
                            </li>
                            <li>
                                <a href="#">Product 2</a>
                            </li>
                            <li>
                                <a href="#">Product 3</a>
                            </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">News</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="/news/news">News 1</a>
                                    </li>
                                    <li>
                                        <a href="/news/news2">News 2</a>
                                    </li>
                                    <li>
                                        <a href="/news/news3">News 3</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Programs</a>
                                <ul class="collapse list-unstyled" id="pagesSubmenu">
                                    <li>
                                        <a href="/news/program">Program 1</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="/about">About Us</a>
                        </li>
                        <li>
                            <a href="/contact/show">Contact us</a>
                        </li>
                    </ul>
                    <div class="footer">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
	            </div>
    	    </nav>
            @yield('content')
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
