<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/tipso.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/chosen.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/color.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/transitions.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">
	<script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">
			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-headervtwo wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<!-- <strong class="wt-logo"><a href="index-2.html"><img src="images/logo.png" alt="company logo here"></a></strong> -->
								<strong class="wt-logo"><a href="{{ url('/') }}"><h4>EmpowerHer Market</h4></a></strong>
                                <form class="wt-formtheme wt-formbanner wt-formbannervtwo">
									<fieldset>
										<div class="form-group">
											<input type="text" name="job" class="form-control" placeholder="I’m looking for">
											<div class="wt-formoptions">
												<div class="wt-dropdown">
													<span>In: <em class="selected-search-type">Freelancers </em><i class="lnr lnr-chevron-down"></i></span>
												</div>
												<div class="wt-radioholder">
													<span class="wt-radio">
														<input id="wt-freelancers" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" checked="">
														<label for="wt-freelancers">Freelancers</label>
													</span>
													<span class="wt-radio">
														<input id="wt-jobs" data-title="Jobs" type="radio" name="searchtype" value="job">
														<label for="wt-jobs">Jobs</label>
													</span>
													<span class="wt-radio">
														<input id="wt-companies" data-title="Companies" type="radio" name="searchtype" value="job">
														<label for="wt-companies">Companies</label>
													</span>
												</div>
												<a href="javascrip:void(0);" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</div>
									</fieldset>
								</form>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Home</a>
															<ul class="sub-menu">
																<li><a href="index-2.html">Home v1</a></li>
																<li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Article</a>
															<ul class="sub-menu">
																<li><a href="articlelist.html">Article List</a></li>
																<li><a href="articlegrid.html">Article Grid</a></li>
																<li><a href="articlesingle.html">Article Single</a></li>
																<li><a href="articleclassic.html">Article Classic</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Company</a>
															<ul class="sub-menu">
																<li><a href="companygrid.html">Company Grid</a></li>
																<li><a href="companysigle.html">Company Sigle</a></li>
															</ul>
														</li>
														<li>
															<a href="about.html">About</a>
														</li>
														<li>
															<a href="privacypolicy.html">Privacy Policy</a>
														</li>
														<li>
															<a href="comingsoon.html">Coming Soon</a>
														</li>
														<li>
															<a href="404page.html">404page</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.html">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="joblisting.html">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="jobsingle.html">Job Single</a>
														</li>
														<li>
															<a href="jobproposal.html">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">View Freelancers</a>
													<ul class="sub-menu">
														<li>
															<a href="userlisting.html">User Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="usersingle.html">User Single</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="images/user-login.png" alt="img description">
										</figure>
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Login</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
												<form class="wt-formtheme wt-loginform do-login-form">
													<fieldset>
														<div class="form-group">
															<input type="text" name="username" class="form-control" placeholder="Username">
														</div>
														<div class="form-group">
															<input type="password" name="password" class="form-control" placeholder="Password">
														</div>
														<div class="wt-logininfo">
															<a href="javascript:;" class="wt-btn do-login-button">Login</a>
															<span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Keep me logged in</label>
															</span>
														</div>
													</fieldset>
													<div class="wt-loginfooterinfo">
														<a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
														<a href="register.html">Create account</a>
													</div>
												</form>
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
											            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>
											           
											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>     
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Login</a>
											            <a href="register.html">Create account</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="register.html" class="wt-btn">Join Now</a>
									</div>
									<div class="wt-userlogedin">
                                        @auth
										<figure class="wt-userimg">
											<img src="{{asset('assets/images/user-img.jpg') }}" alt="image description">
										</figure>
										<div class="wt-username">
											<h3>Louanne Mattioli</h3>
											<span>Amento Tech</span>
										</div>
										@else
										<div class="wt-username">
											<!-- <h3>Louanne Mattioli</h3> -->
											<span>Access Site Features</span>
										</div>
										@endauth

										<nav class="wt-usernav">
											<ul>
                                            @if (Route::has('login'))
												<!-- <nav class="-mx-3 flex flex-1 justify-end"> -->
													@auth
														<li>
														<a
															href="{{ url('/home') }}"
															class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
														>
															Dashboard
														</a>
														</li>

														<!-- <li class="menu-item-has-children page_item_has_children">
															<a href="javascript:void(0);">
																<span>Insights</span>
															</a>
															<ul class="sub-menu children">
																<li><a href="dashboard-insights.html">Insights</a></li>
																<li><a href="dashboard-insightsuser.html">Insights User</a></li>
															</ul>
														</li> -->
														<li>
															<a href="dashboard-profile.html">
																<span>My Profile</span>
															</a>
														</li>
														<!-- <li class="menu-item-has-children">
															<a href="javascript:void(0);">
																<span>All Jobs</span>
															</a>
															<ul class="sub-menu">
																<li><a href="dashboard-completejobs.html">Completed Jobs</a></li>
																<li><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
																<li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
																<li><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
															</ul>
														</li> -->
														<!-- <li>
															<a href="dashboard-managejobs.html">
																<span>Manage Jobs</span>
															</a>
														</li> -->
														<!-- <li class="wt-notificationicon menu-item-has-children">
															<a href="javascript:void(0);">
																<span>Messages</span>
															</a>
															<ul class="sub-menu">
																<li><a href="dashboard-messages.html">Messages</a></li>
																<li><a href="dashboard-messages2.html">Messages V 2</a></li>
															</ul>
														</li> -->
														<!-- <li>
															<a href="dashboard-saveitems.html">
																<span>My Saved Items</span>
															</a>
														</li> -->
														<!-- <li>
															<a href="dashboard-invocies.html">
																<span>Invoices</span>
															</a>
														</li> -->
														<!-- <li>
															<a href="dashboard-category.html">
																<span>Category</span>
															</a>
														</li> -->
														<!-- <li>
															<a href="dashboard-packages.html">
																<span>Packages</span>
															</a>
														</li> -->
														<!-- <li>
															<a href="dashboard-proposals.html">
																<span>Proposals</span>
															</a>
														</li> -->
														<li>
															<a href="dashboard-accountsettings.html">
																<span>Account Settings</span>
															</a>
														</li>
														<li>
															<a href="dashboard-helpsupport.html">
																<span>Help &amp; Support</span>
															</a>
														</li>
														<li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
														</li>
														
													@else
														<li>
														<a
															href="{{ route('login') }}"
															class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
														>
															Log in
														</a>
														</li>

														@if (Route::has('register'))
															<li>
															<a
																href="{{ route('register') }}"
																class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
															>
																Register
															</a>
															</li>
														@endif
													@endauth
												<!-- </nav> -->
											@endif

											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Header End-->
            <!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>New Articles</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li class="wt-active">Articles</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->


                <div class="col-10">
                    <main class="py-4">
                        @yield('content')
                    </main>				
                </div>

				
				<!--Footer Start-->
			<footer id="wt-footer" class="wt-footer wt-haslayout">
				<div class="wt-footerholder wt-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6">
								<div class="wt-footerlogohold">
									<!-- <strong class="wt-logo"><a href="index-2.html"><img src="images/flogo.png" alt="company logo here"></a></strong> -->
									<strong class="wt-logo"><a href="{{ url('/') }}"><h5>EmpowerHer Market</h5></a></strong>
                                    <div class="wt-description">
										<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce <a href="javascript:void(0);">more...</a></p>
									</div>
									<ul class="wt-socialiconssimple wt-socialiconfooter">
										<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
										<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="wt-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
										<li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
										<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetcompany">
									<div class="wt-fwidgettitle">
										<h3>Company</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">About Us</a></li>
										<li><a href="javascript:void(0);">How It Works</a></li>
										<li><a href="javascript:void(0);">Careers</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetexplore">
									<div class="wt-fwidgettitle">
										<h3>Explore More</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">Freelancers in USA</a></li>
										<li><a href="javascript:void(0);">Freelancers in Canada</a></li>
										<li><a href="javascript:void(0);">Freelancers in Australia</a></li>
										<li><a href="javascript:void(0);">Jobs in USA</a></li>
										<li><a href="javascript:void(0);">Find Jobs</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-joininfo">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
								<div class="wt-companyinfo">
									<span><a href="javascript:void(0);">New @ Worktern?</a> Dotem eiusmod tempor incune utnaem labore etdolore.</span>
								</div>
								<div class="wt-fbtnarea">
									<a href="javascript:void(0)" class="wt-btn">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-footerbottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="wt-copyrights"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
								<nav class="wt-addnav">
									<ul>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Privacy Policy</a></li>
										<li><a href="javascript:void(0);">Career</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--Footer End-->
		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
	<!-- <script src="{{asset('assets/js/vendor/jquery-3.3.1.js') }}"></script>
	<script src="{{asset('assets/js/vendor/jquery-library.js') }}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset('assets/js/chosen.jquery.js') }}"></script>
	<script src="{{asset('assets/js/tilt.jquery.js') }}"></script>
	<script src="{{asset('assets/js/scrollbar.min.js') }}"></script>
	<script src="{{asset('assets/js/prettyPhoto') }}"></script>
	<script src="{{asset('assets/js/jquery-ui.js') }}"></script>
	<script src="{{asset('assets/js/readmore.js') }}"></script>
	<script src="{{asset('assets/js/countTo.js') }}"></script>
	<script src="{{asset('assets/js/appear.js') }}"></script>
	<script src="{{asset('assets/js/tipso.js') }}"></script>
	<script src="{{asset('assets/js/jRate.js') }}"></script> -->
	<!-- <script src="{{asset('assets/js/main.js') }}"></script> -->
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.js') }}"></script>
	<script src="{{asset('assets/js/vendor/jquery-library.js') }}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset('assets/js/chosen.jquery.js') }}"></script>
	<script src="{{asset('assets/js/scrollbar.min.js') }}"></script>
	<script src="{{asset('assets/js/tilt.jquery.js') }}"></script>
	<script src="{{asset('assets/js/prettyPhoto.js') }}"></script>
	<script src="{{asset('assets/js/jquery-ui.js') }}"></script>
	<script src="{{asset('assets/js/readmore.js') }}"></script>
	<script src="{{asset('assets/js/countTo.js') }}"></script>
	<script src="{{asset('assets/js/appear.js') }}"></script>
	<script src="{{asset('assets/js/tipso.js') }}"></script>
	<script src="{{asset('assets/js/jRate.js') }}"></script>
	<script src="{{asset('assets/js/main.js') }}"></script>
</body>


</html>