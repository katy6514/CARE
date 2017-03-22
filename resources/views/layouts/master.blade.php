<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Yield the title if one is specified in a child view, otherwise use default below -->
    <title>@yield('title','Animal Rescue')</title>

    <!-- Maybe meta tags and css links belong in @head to be yielded? -->
    <meta http-equiv="content-language" content="en-US"/>
    <meta name="keywords" content="" />
    <meta name="creator" content=""/>
    <meta name="description" content=""/>
    <meta name="subject" content=""/>

    <!-- Normalize -->
    <link rel='stylesheet' href='/css/normalize.css' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Bootstrap, switch to min.css when finished -->
    <link rel='stylesheet' href='/css/bootstrap.css' type='text/css'>
    <!-- Bootstrap IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="/css/ie10-viewport-bug-workaround.css" type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Yield any page specific CSS files or anything else you might want in the <head> -->
    @stack('head')

    <link rel='stylesheet' href='css/responsive.css' type='text/css'>
    <link rel='stylesheet' href='css/carecats.css' type='text/css'>
    <script src="{{ URL::asset('js/modernizr.js') }}"></script>



</head>
<body>
    <header>
        <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">Animal Rescue</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meet the Animals <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bobcats</a></li>
                                        <li><a href="#">Coatis</a></li>
                                        <li><a href="#">Cougars</a></li>
                                        <li><a href="#">Lemurs</a></li>
                                        <li><a href="#">Leopards</a></li>
                                        <li><a href="#">Lions</a></li>
                                        <li><a href="#">Llamas/Guanacos</a></li>
                                        <li><a href="#">Tigers</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">In Memory</li>
                                        <li><a href="#">Those we miss...</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">About CARE</a></li>
                                        <li><a href="#">Meet the People</a></li>
                                        <li><a href="#">Appreciation</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programs <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Internships</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="#">Partnerships and Fundraisers</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help Us<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Donate</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Volunteer</a></li>
                                        <li><a href="#">Adopt or Sponsor</a></li>
                                        <li><a href="#">CARE Shop</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Recent News</a></li>
                                        <li><a href="#">Newsletter Sign Up</a></li>
                                        <li><a href="#">Newsletter Archive</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer>
        <div class="section group"><!-- footer_content  -->
        	<div class="col span_1_of_4">
                <h3>Contact</h3>
                <p>Big and Little Cat Rescue</p>
                <p>Street Address</p>
                <p>City, State, Zip</p>
                <p>Phone number</p>
        	</div>
        	<div class="col span_1_of_4 right">
                <h3>Learn More</h3>
                <a href="#">News</a><br />
                <a href="#">Newsletter Archive</a><br />
                <a href="#">Newsletter Signup</a><br />
        	</div>
        	<div class="col span_1_of_4 right">
                <h3>Support</h3>
                <a href="#">Donate</a><br />
                <a href="#">Wish List</a><br />
                <a href="#">Volunteer</a><br />
                <a href="#">Adopt or Sponsor</a><br />
                <a href="#">CARE Shop</a><br />
        	</div>
        	<div class="col span_1_of_4 right">
                <h3>Participate</h3>
                <a href="#">Visit</a><br />
                <a href="#">Volunteer</a><br />
                <a href="#">Internships</a><br />
                <a href="#">Careers</a><br />
                <a href="#">Partnerships</a><br />

        	</div>
        </div>
        <div class="section group">
            <div class="col span_4_of_4">
                <div id="social-links">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>


                <form id="site-search" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </footer>



    <!-- Yield any page specific JS files or anything else you might want at the end of the body -->
    @yield('scripts')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>

</body>
</html>
