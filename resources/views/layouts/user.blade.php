<!DOCTYPE html>
<html lang="en">

    <head>
    <title>@yield('Title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">

    <link rel="stylesheet" href="{{asset('user_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user_assets/css/mo.css')}}">
    <link rel="stylesheet" href="{{asset('user_assets/css/custom.css')}}">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="{{route('home')}}">
                <img src="{{asset('img/apple-touch-icon.png')}}" alt="Logo" width="80" height="80">
            </a>    

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item {{ request()->routeIs('user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item{{ request()->routeIs('user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('category')}}">Category</a>
                        </li>
                        <li class="nav-item{{ request()->routeIs('user') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('product')}}">Product</a>
                        </li>
                    </ul>
                </div>
                
                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <div class="navbar align-self-center d-flex">                                    
                                    <a class="nav-icon position-relative text-decoration-none" href="#">
                                        <i class="bi bi-cart text-dark mr-1"></i>
                                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                                    </a>
                                    <a class="nav-icon position-relative text-decoration-none" href="{{route('dashboard')}}">
                                        <i class="bi bi-person-circle text-dark mr-3"></i>
                                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                                     </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-warning rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]" style="border-radius: 45px;"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-outline-warning   rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] ml-2" style="border-radius: 45px;"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->


    <main>
    @yield('homemain')
    </main>


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                     <a class="navbar-brand text-success logo h1 align-self-center" href="{{route('home')}}">
                <img src="{{asset('img/apple-touch-icon.png')}}" alt="Logo" width="80" height="80">
                    </a>
                    <ul class="list-unstyled text-light footer-link-list">
                        
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Categories</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                   
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>