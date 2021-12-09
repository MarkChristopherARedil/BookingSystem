<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('css/fontawesome.css')}}">
		<link rel="stylesheet" href="{{url('./css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/bulma.css')}}">
        <title>@yield('title')</title> 
    </head>
    <body>

        <!------------------------------------------------------- 1st Section ------------------------------------------------------->
		<section class="hero">
			<div class="hero-head">
				<nav class="navbar has-background-grey">
					<div class="container">
						<div class="navbar-menu is-active has-background-grey">
						    <div class="navbar-start">
						      	<p class="navbar-item has-text-weight-semibold has-text-white has-background-grey">
								  	&nbsp;
									<span class="icon is-small">
										<i class="fas fa-phone-alt"></i>
									</span>
									&nbsp;
									<a class="has-text-white" href="tel:0921 483 1276">0921-4831276</a>
									<span class="has-text-white">&nbsp;|&nbsp;</span>
									<a class="has-text-white" href="tel:0921 483 1276">8519-6588</a>
						      	</p>
						      	<p class="navbar-item has-text-weight-semibold has-text-white has-background-grey">
								  	&nbsp;
								  	<span class="icon is-small is-left">
										<i class="fas fa-envelope"></i>
									</span>
									&nbsp;
									<a class="has-text-white" href="mailto:mmyssa@gmail.com">mmyssa@gmail.com</a>
						      	</p>
						      	<p class="navbar-item has-text-weight-semibold has-text-white has-background-grey">
								  	&nbsp;
								 	<span class="icon is-small is-left">
										<i class="fas fa-clock"></i>
									</span>
									&nbsp;
									<span>Open daily from 9am - 9pm</span>
						      	</p>
						    </div>
					    	<div class="navbar-end">
					      		<div class="navbar-item">
									<div class="tabs is-toggle is-fullwidth">
										<ul>
											<li class="is-active">
												<a class="has-background-grey-light is-radiusless" style="border: none;">
													<span class="icon is-small">
														<i class="fas fa-sign-in-alt"></i>
													</span>
													<span>SIGN IN</span> 
												</a>
											</li>
											<li>
												<a class="has-text-white has-background-grey is-radiusless" style="border: none;">
													<span class="icon is-small">
														<i class="fas fa-shopping-cart"></i>
														<span class="tag is-black is-rounded" style="width: 20px; height: 15px;">0</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
					        	</div>
					    	</div>
						</div>
					</div>
				</nav>
			</div>
		</section>
		<!------------------------------------------------------- 1st Section ------------------------------------------------------->


		<!------------------------------------------------------- 2nd Section ------------------------------------------------------->
		<section class="hero">
			<div class="hero-head">
				<nav class="navbar has-background-light is-transparent">
					<div class="container">
						<div class="navbar-brand">
						 	<a class="navbar-item">
						   		<img src="{{url('./img/logo1.svg')}}" width="114" height="30">
						 	</a>
						 	<a role="button" class="navbar-burger">
						   		<span aria-hidden="true"></span>
						   		<span aria-hidden="true"></span>
						   		<span aria-hidden="true"></span>
						 	</a>
						</div>
						<div id="navbar-menu" class="navbar-menu">
						   	<div class="navbar-start">
						     	<a class="navbar-item has-text-weight-bold has-text-grey">Home</a>
						     	<a class="navbar-item has-text-weight-bold has-text-grey">Services</a>
						     	<a class="navbar-item has-text-weight-bold has-text-grey">Packages</a>
						     	<a class="navbar-item has-text-weight-bold has-text-grey">Promotions</a>
						   	</div>
						    <div class="navbar-end">
						      	<div class="navbar-item">
							        <a class="button has-background-grey has-text-light is-size-7">
							        	&nbsp;&nbsp;BOOK AN APPOINTMENT&nbsp;&nbsp;
							    	</a>
						      	</div>
						    </div>
						</div>
					</div>
				</nav>
			</div>
		</section>
		<!------------------------------------------------------- 2nd Section ------------------------------------------------------->


		<!------------------------------------------------------- 3rd Section ------------------------------------------------------->
		<section class="hero has-background-light">
			<div id="section3" class="hero-body">
				<div class="container">
					<div class="columns">
						<div class="column">
							<h1 class="title has-text-white has-text-right-desktop has-text-centered-mobile">
								BOOKING
							</h1>
						</div>
						<div class="column mr-2-desktop">
							<p class="has-text-weight-bold has-text-white has-text-left-desktop has-text-centered-mobile mt-2">
								Booking / Account Information
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------------------------------------------- 3rd Section ------------------------------------------------------->

@yield('content')

        <!------------------------------------------------------- Footer Section ------------------------------------------------------->
		<footer id="section5" class="footer">
			<div class="container">
				<div class="columns">
					<div class="column is-3">
						<img width="150" height="150" src="{{url('./img/logo1.svg')}}">
						<h1 class="has-text-white">Follow us on our social media:</h1>
						<h1 class="has-text-white">fb.com/mmmysaaa IG: myyysssa</h1>
						<br />
						<h1 class="has-text-white">
							<span class="icon is-small is-left">
								<i class="fas fa-phone-alt"></i>
							</span>
							&nbsp;
							0921-4831276 | 8519-6588
						</h1>
						<h1 class="has-text-white">
							<span class="icon is-small is-left">
								<i class="fas fa-envelope"></i>
							</span>
							&nbsp;
							mmyssa@gmail.com
						</h1>
						<h1 class="has-text-white">
							<span class="icon is-small is-left">
								<i class="fas fa-clock"></i>
							</span>
							&nbsp;
							Open daily from 9am - 9pm
						</h1>
						<h1 class="has-text-white">
							<span class="icon is-small is-left">
								<i class="fas fa-home"></i>
							</span>
							&nbsp;
							2/F #66 Doña Soledad Ave. corner Canada St. Betterliving, Parañaque
						</h1>
					</div>
					<div class="column is-2">
						<h1 class="title has-text-white">QUICK LINKS</h1>
						<a class="has-text-white">Home</a><br><br>
						<a class="has-text-white">Promotions</a><br><br>
						<a class="has-text-white">Packages</a><br><br>
						<a class="has-text-white">Contact Us</a><br><br>
					</div>
					<div class="column is-2">
						<h1 class="title has-text-white">FAQS</h1>
					</div>
					<div class="column is-5">
						<h1 class="title has-text-white">SUBCRIBE TO NEWSLETTER</h1>
						<h1 class="subtitle is-6 has-text-white">Get updates on latest promos and articles</h1>
						<div class="field">
						  	<div class="control">
						    	<input class="input is-medium" type="text" placeholder="Enter Email Address">
						  	</div>
						</div>
						<button class="button has-background-grey has-text-white" style="border: none;">
							&nbsp;&nbsp;
						    <span class="icon is-small">
						    	<i class="fas fa-paper-plane"></i>
						    </span>
						    &nbsp;
						    <span>SEND</span>
						    &nbsp;&nbsp;
						</button>
					</div>
				</div>
			</div>
		</footer>
		<!------------------------------------------------------- Footer Section ------------------------------------------------------->

    </body>
    <script defer src="{{url('js/jquery.js')}}"></script>
    <script defer src="{{url('js/main.js')}}"></script>
</html>
