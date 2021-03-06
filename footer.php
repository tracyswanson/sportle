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

	<!-- OnBoarding Sign Up -->
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
					<input class="username" type="text" id="username" name="username" placeholder="Username" />
					<input class="firstname" type="text" id="firstname" name="firstname" placeholder="First Name" />
					<input class="lastname" type="text" id="lastname" name="lastname" placeholder="Last Name" />
					<div class="passwordLengthMessage">*Must be at least 6 characters</div>
					<input class="password" type="password" id="password" name="password" placeholder="Password*" />
					<input class="password2" type="password" id="password2" name="password2" placeholder="Confirm Password*" />
					<!--input class="betaInvite" type="text" id="betaInvite" name="betaInvite" placeholder="Beta Invite Code*" /-->
					<input type="checkbox" name="remember" value="remember" /><label for="remember">I agree to the <a>Terms of Service</a> and <a>Privacy Policy</a> lorem ipsum</label>
					<button class="modalButton">Sign up</button>
					<p>Already a Beta member? <a>Login now</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- OnBoarding Sign Up Social Connect -->
	<div class="modal fade onBoarding" id="onBoardingSignUpSocial" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h2>Just a couple more items and you’re all set</h2>
					<div id="userPhoto">
						<img src="/images/user-pic.png" class="userPic" />
						<div><a>Change picture</a></div>
					</div>
					<div class="firstNameContainer">
						<label for="firstname">First Name</label>
						<input class="firstname" type="text" id="firstname" name="firstname" />
					</div>
					<div class="lastNameContainer">
						<label for="lastname">Last Name</label>
						<input class="lastname" type="text" id="lastname" name="lastname" />
					</div>
					<div class="emailContainer">
						<label for="email">Email Address</label>
						<input type="text" id="email" name="email" />
						<i class="fa fa-check"></i>
					</div>
					<div class="usernameContainer">
						<label for="username">Username</label>
						<input class="username" type="text" id="username" name="username" />
					</div>
					<div class="passwordContainer">
						<label for="password">Password*</label>
						<div class="passwordLengthMessage">*min 6 characters</div>
						<input class="password" type="password" id="password" name="password" />
					</div>
					<div class="password2Container">
						<label for="password2">Confirm Password*</label>
						<input class="password2" type="password" id="password2" name="password2" />
					</div>
					<!--input class="betaInvite" type="text" id="betaInvite" name="betaInvite" placeholder="Beta Invite Code*" /-->
					<div class="checkboxContainer">
						<input type="checkbox" name="remember" value="remember" /><label for="remember">I agree to the <a>Terms of Service</a> and <a>Privacy Policy</a> lorem ipsum</label>
					</div>
					<button class="modalButton">Sign up</button>
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
						<input type="checkbox" name="remember" value="remember" /><label for="remember">Remember Me</label>
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
					<p>Would you like to link any pre-existing<br />cable providers or sports league packages?</p>
					<div class="tvProviders">
						<div class="tvProvider xfinity"></div>
						<div class="tvProvider directTV"></div>
						<div class="tvProvider dish"></div>
						<div class="tvProvider twc"></div>
						<div class="tvProvider att"></div>
					</div>
					<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">More Providers</span></div>
					<table id="leaguePackages">
						<tr>
							<td class="logoColumn"><img src="/images/college-sports-live.png" class="packageLogo" /></td>
							<td class="titleColumn">College Sports Live</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
						<tr>
							<td class="logoColumn"><img src="/images/center-ice.png" class="packageLogo" /></td>
							<td class="titleColumn">NHL Center Ice</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
					</table>
					<table id="choosePackage">
						<tr>
							<td class="chooseColumn" colspan="2">
								<select class="sportsFilter selectpicker">
									<option selected>Select Your Package</option>
									<option>College Sports Live</option>
									<option>NHL Center Ice</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" /></td>
							<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" /><div class="signInText">Press "Enter" to Sign In</div></td>
						</tr>
					</table>
					<div class="addBlock" id="addLeaguePackage"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">Add League Package</span></div>
					<div class="bottomBlock">
						<button class="modalButton">Link Accounts</button>
						<p>Skip, I’ll do this later</p>
						<p class="subText">**Some events may not be available to watch until you link your accounts,<br /><b>Please visit  Settings > Manage Subscriptions to add your providers</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- OnBoarding Link Accounts 2 -->
	<div class="modal fade onBoarding" id="onBoardingLinkAccounts2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h2>Link Accounts</h2>
					<p>Would you like to link any pre-existing<br />cable providers or sports league packages?</p>
					<div class="tvProviders">
						<div class="tvProvider xfinity"></div>
						<div class="tvProvider directTV"></div>
						<div class="tvProvider dish"></div>
						<div class="tvProvider twc"></div>
						<div class="tvProvider att"></div>
					</div>
					<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">More Providers</span></div>
					<table id="leaguePackages">
						<tr>
							<td class="logoColumn"><img src="/images/college-sports-live.png" class="packageLogo" /></td>
							<td class="titleColumn">College Sports Live</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
						<tr>
							<td class="logoColumn"><img src="/images/center-ice.png" class="packageLogo" /></td>
							<td class="titleColumn">NHL Center Ice</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
					</table>
					<table id="choosePackage">
						<tr>
							<td class="chooseColumn" colspan="2">
								<select class="sportsFilter selectpicker">
									<option selected>Select Your Package</option>
									<option>College Sports Live</option>
									<option>NHL Center Ice</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" /></td>
							<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" /><div class="signInText">Press "Enter" to Sign In</div></td>
						</tr>
					</table>
					<div class="addBlock" id="addLeaguePackage"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">Add League Package</span></div>
					<div class="bottomBlock">
						<button class="modalButton">Link Accounts</button>
						<p>Skip, I’ll do this later</p>
						<p class="subText">**Some events may not be available to watch until you link your accounts,<br /><b>Please visit  Settings > Manage Subscriptions to add your providers</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- OnBoarding Link Accounts 3 -->
	<div class="modal fade onBoarding" id="onBoardingLinkAccounts3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="onboarding-content">
				<div class="modal-body">
					<div class="logo"><img src="/images/sportle-logo.png" alt="Sportle Logo" class="headerLogo" /></div>
					<h2>Link Accounts</h2>
					<p>Would you like to link any pre-existing<br />cable providers or sports league packages?</p>
					<div class="tvProviders">
						<div class="tvProvider xfinity"></div>
						<div class="tvProvider directTV"></div>
						<div class="tvProvider dish"></div>
						<div class="tvProvider twc"></div>
						<div class="tvProvider att"></div>
					</div>
					<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">More Providers</span></div>
					<table id="leaguePackages">
						<tr>
							<td class="logoColumn"><img src="/images/college-sports-live.png" class="packageLogo" /></td>
							<td class="titleColumn">College Sports Live</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
						<tr>
							<td class="logoColumn"><img src="/images/center-ice.png" class="packageLogo" /></td>
							<td class="titleColumn">NHL Center Ice</td>
							<td class="messageColumn"><i class="fa fa-circle"></i> Verified</td>
						</tr>
					</table>
					<table id="choosePackage">
						<tr>
							<td class="chooseColumn" colspan="2">
								<select class="sportsFilter selectpicker">
									<option selected>Select Your Package</option>
									<option>College Sports Live</option>
									<option>NHL Center Ice</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" /></td>
							<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" /><div class="signInText">Press "Enter" to Sign In</div></td>
						</tr>
					</table>
					<div class="addBlock" id="addLeaguePackage"><img src="/images/circle-plus.png" class="circlePlus" /> <span class="blockLabel">Add League Package</span></div>
					<div class="bottomBlock">
						<button class="modalButton">Link Accounts</button>
						<p>Skip, I’ll do this later</p>
						<p class="subText">**Some events may not be available to watch until you link your accounts,<br /><b>Please visit  Settings > Manage Subscriptions to add your providers</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<table id="footerButtons" style="border: 1px #999 solid;">
		<tr>
			<th colspan="3">&nbsp;</th>
			<th colspan="3">Settings Page Tabs & Alternate States from Layer Comps</th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<th>Event Modals</th>
			<th>On Boarding</th>
			<th>Search Pages</th>
			<th>Edit Profile</th>
			<th>Notification Settings</th>
			<th>Manage Subscriptions</th>
			<th>Favorites Page</th>
		</tr>
		<tr>
			<td class="firstRow">
				<!-- Button trigger event modal live -->
				<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#liveEvent">
				  Modal Live
				</button>
			</td>
			<td class="firstRow">
				<!-- Button trigger OnBoarding Sign Up -->
				<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingSignUp">
				  Sign Up
				</button>
			</td>
			<td class="firstRow">
				<!-- Button Search Results City -->
				<a href="/search.php?type=city">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Search Results City
					</button>
				</a>
			</td>
			<td class="firstRow">
				<!-- Edit Profile -->
				<a href="/settings.php?tab=profile">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Edit Profile
					</button>
				</a>
			</td>
			<td class="firstRow">
				<!-- Notification Settings -->
				<a href="/settings.php?tab=notifications">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Notification Settings
					</button>
				</a>
			</td>
			<td class="firstRow">
				<!-- Manage Subscriptions -->
				<a href="/settings.php?tab=subscriptions">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Manage Subscriptions
					</button>
				</a>
			</td>
			<td class="firstRow">
				<!-- Favorites -->
				<a href="/favorites.php">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Favorites
					</button>
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<!-- Button trigger event modal live alt -->
				<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#liveEventAlt">
				  Modal Live Alt
				</button>
			</td>
			<td>
				<!-- Button trigger OnBoarding Sign Up Social -->
				<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingSignUpSocial">
				  Social Connect
				</button>
			</td>
			<td>
				<!-- Button Search Results Team -->
				<a href="/search.php?type=team">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Search Results Team
					</button>
				</a>
			</td>
			<td>
				<!-- Edit Profile - Confirmation -->
				<a href="/settings.php?tab=profile&div=confirmation">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Confirmation
					</button>
				</a>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Interactions / Errors -->
				<a href="/settings.php?tab=subscriptions&div=interactions">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Interactions / Errors
					</button>
				</a>
			</td>
			<td>
				<!-- Favorites Banners -->
				<a href="/favorites.php?div=banners">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Banners
					</button>
				</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<!-- Button trigger OnBoarding Sign In -->
				<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLogin">
				  Sign In
				</button>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Edit Profile - Saved Success Modal -->
				<a href="/settings.php?tab=profile&div=saved">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Saved Success Modal
					</button>
				</a>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Add Subscription -->
				<a href="/settings.php?tab=subscriptions&div=add">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Add Subscription
					</button>
				</a>
			</td>
			<td>
				<!-- Favorites Interactions
				<a href="/favorites.php?div=interactions">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Interactions / Drop Downs
					</button>
				</a> -->
				<!-- Favorites Zero -->
				<a href="/favorites.php?div=zero">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Zero Favorites
					</button>
				</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<!-- Button trigger OnBoarding Link Accounts -->
				<button type="button" id="onBoardingLinkButton" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLinkAccounts">
				  Link Accounts
				</button>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Edit Profile - Connect All -->
				<a href="/settings.php?tab=profile&div=connect">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Connect All
					</button>
				</a>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>
				<!-- Favorites Multiple -->
				<a href="/favorites.php?div=multiple">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Multiple
					</button>
				</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<!-- Button trigger OnBoarding Link Accounts -->
				<button type="button" id="onBoardingLinkButton" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLinkAccounts2">
				  Add Subscription
				</button>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Edit Profile - Disconnect All -->
				<a href="/settings.php?tab=profile&div=disconnect">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Disconnect All
					</button>
				</a>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<!-- Button trigger OnBoarding Link Accounts -->
				<button type="button" id="onBoardingLinkButton" class="eventModalLiveBtn btn btn-primary btn-lg" data-toggle="modal" data-target="#onBoardingLinkAccounts3">
				  Subscriptions Added
				</button>
			</td>
			<td>&nbsp;</td>
			<td>
				<!-- Edit Profile - Validation Success -->
				<a href="/settings.php?tab=profile&div=success">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Validation Success
					</button>
				</a>
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="lastRow">&nbsp;</td>
			<td class="lastRow">&nbsp;</td>
			<td class="lastRow">&nbsp;</td>
			<td class="lastRow">
				<!-- Edit Profile - Validation Fail -->
				<a href="/settings.php?tab=profile&div=fail">
					<button type="button" class="eventModalLiveBtn btn btn-primary btn-lg">
					  Validation Fail
					</button>
				</a>
			<td class="lastRow">&nbsp;</td>
			<td class="lastRow">&nbsp;</td>
			<td class="lastRow">&nbsp;</td>
		</tr>
	</table>

</div>