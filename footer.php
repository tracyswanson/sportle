<?php
/*
 * Description: Sportle.tv HTML/CSS markup to be adapted for Laravel Framework
 *
 * @author     	Tracy Swanson <tracy@freyadigital.com>
 * @uri     	http://freyadigital.com/
 *
 */
 ?>
<div class="footer">

	<!-- Event Modal Live Alt -->
	<div class="modal fade" id="liveEventAlt" tabindex="-2" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<div class="topOverlay">
	      		<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
	      		<div class="airDate airDateLive">LIVE:<div class="airTime">4:00PM PST</div></div>
				<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
				<div class="logo"><img src="/images/nba-logo.png" /></div>
				<div class="title">
					<div class="team"><span class="smallTitlePart">Miami</span>Heat</div>
					<div class="versus">VS</div>
					<div class="team"><span class="smallTitlePart">Charlotte</span>Bobcats</div>
				</div>
				<div class="infoBox">
					<div class="eventStatus">
						<div class="team">
							<div class="teamName ahead">Heat</div>
							<div class="score ahead">29</div>
						</div>
						<div class="team">
							<div class="teamName">Bobcats</div>
							<div class="score">22</div>
						</div>
						<div class="timePeriod">1st Qtr<span class="timeElapsed">2:03</span></div>
					</div>
				</div>
				<div class="infoBox">
					<div class="viewership">
						<div class="whosWatching friends">
							<div class="who">Friends watching</div>
							<div class="count">9</div>
						</div>
						<div class="whosWatching fans">
							<div class="who">Fans watching</div>
							<div class="count">53</div>
						</div>
					</div>
				</div>
	      	</div>
	      	<div class="bottomOverlay">
				<h4>GAME PROVIDERS:</h4>
				<hr class="watchSection" />
				<button type="button" class="watchNowBtn btn btn-primary">WATCH NOW</button>
				<div class="watchLogo"></div>
				<hr class="subscribeSection" />
				<button type="button" class="subscribeBtn btn btn-primary">SUBSCRIBE</button>
				<div class="subscribeLogo"></div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Event Modal Live -->
	<div class="modal fade" id="liveEvent" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	      	<div class="topOverlay">
	      		<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
	      		<div class="eventImage">
	      			<img class="eventPic" src="/images/miami-heat.jpg" />
	      			<div class="airDate airDateLive">LIVE</div>
					<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
	      		</div>
	      		<div class="airTime">7:00PM EST / 4:00PM PST</div>
				<div class="logo"><img src="/images/nba-logo.png" /></div>
				<div class="title">
					<div class="team"><span class="smallTitlePart">Miami</span>Heat</div>
					<div class="versus">VS</div>
					<div class="team"><span class="smallTitlePart">Charlotte</span>Bobcats</div>
				</div>
				<div class="infoBox">
					<div class="eventStatus">
						<div class="team">
							<div class="teamName ahead">Heat</div>
							<div class="score ahead">29</div>
						</div>
						<div class="team">
							<div class="teamName">Bobcats</div>
							<div class="score">22</div>
						</div>
						<div class="timePeriod">1st Qtr<span class="timeElapsed">1:10</span></div>
					</div>
					<div class="viewership">
						<div class="whosWatching friends">
							<div class="who">Friends watching</div>
							<div class="count">9</div>
						</div>
						<div class="whosWatching fans">
							<div class="who">Fans watching</div>
							<div class="count">53</div>
						</div>
					</div>
				</div>
	      	</div>
	      	<div class="bottomOverlay">
				<h4>GAME PROVIDERS:</h4>
				<hr class="watchSection" />
				<button type="button" class="watchNowBtn btn btn-primary">WATCH NOW</button>
				<div class="watchLogo"></div>
				<hr class="subscribeSection" />
				<button type="button" class="subscribeBtn btn btn-primary">SUBSCRIBE</button>
				<p class="subscribeMessage">Are you an NBA LEAGUE PASS subscriber? Click on “Subscribe” to enter your information or to purchase a subscription.</p>
				<div class="subscribeLogo"></div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- OnBoarding Sign-Up -->
	<div class="modal fade onBoarding" id="onBoardingSignUp" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h1>Welcome to Sportle <sup>BETA</sup></h1>
					<p class="intro">Watch your favorite games at anytime, on any device, anywhere.</p>
					<button class="socialLoginButton facebook">Signin with <span class="icon-facebook"></span></button>
					<button class="socialLoginButton twitter">Signin with <span class="icon-twitter"></span></button>
					<button class="socialLoginButton google">Signin with <span class="icon-google"></span></button>
					<p>We’d love your feedback during our BETA period to make Sportle lorem ipsum dolor color asit lorem ipsum</p>
					<h2>Sign Up below to start watching:</h2>
					<div class="emailContainer">
						<input type="text" id="email" name="email" placeholder="Email Address (i.e john@webmail.com)" />
						<i class="fa fa-check"></i>
					</div>
					<input class="fullname" type="text" id="fullname" name="fullname" placeholder="Full name" />
					<div class="passwordLengthMessage">*Must be at least 6 characters</div>
					<input class="password" type="password" id="password" name="password" placeholder="Password*" />
					<input class="password2" type="password" id="password2" name="password2" placeholder="Confirm Password*" />
					<input class="betaInvite" type="text" id="betaInvite" name="betaInvite" placeholder="Beta Invite Code*" />
					<button class="modalButton">Sign In</button>
					<p>Already a Beta member? <a>Login now</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- OnBoarding Login -->
	<div class="modal fade onBoarding" id="onBoardingLogin" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h1>Welcome to Sportle <sup>BETA</sup></h1>
					<p class="intro">Watch your favorite games at anytime, on any device, anywhere.</p>
					<button class="socialLoginButton facebook">Signin with <span class="icon-facebook"></span></button>
					<button class="socialLoginButton twitter">Signin with <span class="icon-twitter"></span></button>
					<button class="socialLoginButton google">Signin with <span class="icon-google"></span></button>
					<h4>or</h4>
					<h2>Sign in with Email:</h2>
					<div class="emailContainer">
						<input type="text" id="email" name="email" placeholder="Email Address (i.e john@webmail.com)" />
						<i class="fa fa-check"></i>
					</div>
					<input type="password" id="password" name="password" placeholder="Password" />
					<button class="modalButton">Sign In</button>
					<div class="signInAux">
						<input type="checkbox" name="remember" value="remember" /><label>Remember Me</label>
						<a>Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- OnBoarding Link Accounts -->
	<div class="modal fade onBoarding" id="onBoardingLinkAccounts" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h2>Link Accounts</h2>
					<p>Would you like to link any pre-existing<br>cable providers or sports league packages?</p>
					<div class="tvProviders">
						<div class="tvProvider xfinity"></div>
						<div class="tvProvider directTV"></div>
						<div class="tvProvider dish"></div>
						<div class="tvProvider twc"></div>
						<div class="tvProvider att"></div>
					</div>
					<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> More Providers</div>
					<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> Add League Package</div>
					<button class="modalButton">Link Accounts</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger event modal live -->
	<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#liveEventAlt">
	  Modal Live Alt
	</button>
	<!-- Button trigger event modal live -->
	<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#liveEvent">
	  Modal Live
	</button>
	<!-- Button trigger OnBoarding Sign-Up -->
	<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingSignUp">
	  OnBoarding Sign Up
	</button>
	<!-- Button trigger OnBoarding Login -->
	<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLogin">
	  OnBoarding Login
	</button>
	<!-- Button trigger OnBoarding Link Accounts -->
	<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLinkAccounts">
	  OnBoarding Link Accounts
	</button>

	<div style="clear:both; margin-bottom: 20px;"></div>

</div>