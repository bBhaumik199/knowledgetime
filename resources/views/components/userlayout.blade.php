<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Knowledge Time - Stylish Way to Obtain Knowledge</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/user/css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('/user/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/user/css/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('/user/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('/user/css/colors.css') }}" rel="stylesheet">

    <!-- Version Garden CSS for this template -->
    <link href="{{ asset('/user/css/garden.css') }}" rel="stylesheet">


</head>
<body>

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                           

                            <a href="#" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('images/KnowledgeTime.png') }}" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu" aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-category.html">Gardening</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-category.html">Outdoor Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-category.html">Indoor Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-category.html">Shopping Guides</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        {{ $slot }}

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar">
                <div class="widget">
                    <h2 class="widget-title">Search</h2>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search on the site">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end widget -->

                <div class="widget">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="upload/garden_sq_09.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                    <small>12 Jan, 2016</small>
                                </div>
                            </a>

                            <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 justify-content-between">
                                    <img src="upload/garden_sq_06.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                    <small>11 Jan, 2016</small>
                                </div>
                            </a>

                            <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="w-100 last-item justify-content-between">
                                    <img src="upload/garden_sq_02.jpg" alt="" class="img-fluid float-left">
                                    <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                    <small>07 Jan, 2016</small>
                                </div>
                            </a>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->

                <div class="widget">
                    <h2 class="widget-title">Advertising</h2>
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="upload/banner_04.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end widget -->

                {{-- <div class="widget">
                    <h2 class="widget-title">Instagram Feed</h2>
                    <div class="instagram-wrapper clearfix">
                        <a href="#"><img src="upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                        <a href="#"><img src="upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                    </div><!-- end Instagram wrapper -->
                </div><!-- end widget --> --}}

                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            <li><a href="#">Gardening <span>(21)</span></a></li>
                            <li><a href="#">Outdoor Living <span>(15)</span></a></li>
                            <li><a href="#">Indoor Living <span>(31)</span></a></li>
                            <li><a href="#">Shopping Guides <span>(22)</span></a></li>
                            <li><a href="#">Pool Design <span>(66)</span></a></li>
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end sidebar -->
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->
</section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                                <a href="/"><img src="{{ asset('images/KnowledgeTimeFooter.png') }}" alt="" class="img-fluid"></a>
                                <p>Knowledge Time - a personal blog for gaining knowledge and answers to the most basic questions that are fundamental to understand any technology</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-center">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Forest Time. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        {{-- <div class="dmtop">Scroll to Top</div> --}}
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{ asset('/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/user/js/tether.min.js') }}"></script>
    <script src="{{ asset('/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/user/js/custom.js') }}"></script>
    <script src="{{ asset('/user/js/postjs.js') }}"></script>

</body>
</html>