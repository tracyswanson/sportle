<?php
/*
 * Description: Sportle.tv HTML/CSS markup to be adapted for Laravel Framework
 *
 * @author     	Tracy Swanson <tracy@freyadigital.com>
 * @uri     	http://freyadigital.com/
 *
 */
?>
<?php include 'data.php'; ?>
<?php
	$tab = $_GET['tab'];
	$tabClass1 = $tab == 'profile' ? ' class="selected"' : '';
	$tabClass2 = $tab == 'notifications' ? ' class="selected"' : '';
	$tabClass3 = $tab == 'subscriptions' ? ' class="selected"' : '';
	$div = $_GET['div'];
	$divAdd = $div == 'add' ? 'style="display:block;"' : 'style="display:none;"';
	$divInteractions = $div == 'interactions' ? true : false;
	$divConfirmation = $div == 'confirmation' ? 'style="display:block;"' : 'style="display:none;"';
	$divSaved = $div == 'saved' ? 'style="display:block;"' : 'style="display:none;"';
	$divConnect = $div == 'connect' ? true : false;
	$divDisconnect = $div == 'disconnect' ? true : false;
	$divSuccess = $div == 'success' ? 'style="display:block;"' : 'style="display:none;"';
	$divFail = $div == 'fail' ? 'style="display:block;"' : 'style="display:none;"';
	$divFailClass = $div == 'fail' ? ' class="validateFailed"' : '';
?>
<html>
	<head>
		<title>Sportle.tv</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-select.css" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-checkbox.css" />
		<link rel="stylesheet" type="text/css" href="/css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<!-- link rel="stylesheet/less" type="text/css" href="less/main.less" / -->
		<!-- script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="/js/sportle.js" ></script>
		<script type="text/javascript" src="/js/bootstrap.js" ></script>
		<script type="text/javascript" src="/js/bootstrap-select.js" ></script>
	</head>
	<body class="settings">
		<?php include 'header.php'; ?>
		<div class="main">
			<div id="eventContent">
				<div class="quickPicks">
					<div class="programListingsScroll">
						<div class="programListings">
							<?php
								showProgramListings( $quickPicks );
							?>
						</div>
						<div class="leftArrow"><a ref="#"><i class="fa fa-angle-left"></i></a></div>
						<div class="rightArrow"><a ref="#"><i class="fa fa-angle-right"></i></a></div>
					</div>
				</div>
				<div class="whatsOnDropDown">
					<div class="programListingsScroll">
						<div class="programListings">
							<?php
								showDropDownBlue( $whatsOnDropDown );
							?>
						</div>
						<!--div class="leftArrow"><a ref="#"><i class="fa fa-angle-left"></i></a></div>
						<div class="rightArrow"><a ref="#"><i class="fa fa-angle-right"></i></a></div-->
					</div>
				</div>
				<div class="opaqueBackdrop"></div>
			</div>
			<div id="settingsTabs">
				<a href="settings.php?tab=profile"><h2<?php echo $tabClass1; ?>>Edit Profile</h2></a>
				<a href="settings.php?tab=notifications"><h2<?php echo $tabClass2; ?>>Notifications Settings</h2></a>
				<a href="settings.php?tab=subscriptions"><h2<?php echo $tabClass3; ?>>Manage Subscriptions</h2></a>
			</div>
			<?php if ( !empty( $tabClass1 ) ) : ?>
				<div class="subscriptionForm">
					<div class="formInput">
						<label for="username">First Name</label><input type="text" id="firstName" name="firstName" />
					</div>
					<div class="formInput">
						<label for="username">Edit Username</label><input type="text" id="userName" name="userName" <?php echo $divFailClass; ?>/>
						<div class="validated" <?php echo $divSuccess; ?>><i class="fa fa-check"></i></div>
						<div class="validateErrorMessage" <?php echo $divFail; ?>>Sorry that username is taken</div>
					</div>
					<div class="formInput">
						<label for="username">Last Name</label><input type="text" id="lastName" name="lastName" />
					</div>
					<div class="formInput">
						<label for="username">Edit Password*</label><input type="text" id="editPassword" name="editPassword" />
					</div>
					<div class="formInput">
						<label for="username">Email Address</label><input type="text" id="email" name="email" />
					</div>
					<div class="formInput">
						<label for="username">Confirm Password*</label><input type="text" id="username" name="username" />
					</div>
					<button class="saveButton">Save Changes</button>
					<!--button class="cancelButton">Cancel</button-->
				</div>
				<div class="accountLogins">
					<h3>Sign Out/Switch Accounts</h3>
					<div id="userPhoto">
						<img src="/images/user-pic.png" class="userPic" />
						<div><a>Upload profile photo</a></div>
						<div><a>Remove profile photo</a></div>
					</div>
					<?php if ( $divConnect ) : ?>
		 				<div class="logIn logInOnly">
		 					<p>Connecting your social media accounts allows a quick & easy way for you to import your favorite sports teams and customize your Sportle experience.</p>
		 					<div class="facebookBlock">
			 					<div class="connectLabel facebook">Connect with Facebook</div>
				 				<button class="socialLoginButton facebook">Sign in with <span class="icon-facebook"></span></button>
			 				</div>
		 					<div class="twitterBlock">
			 					<div class="connectLabel twitter">Connect with Twitter</div>
				 				<button class="socialLoginButton twitter">Sign in with <span class="icon-twitter"></span></button>
			 				</div>
			 				<div class="googleBlock">
			 					<div class="connectLabel google">Connect with Google</div>
			 					<button class="socialLoginButton google">Sign in with <span class="icon-google"></span></button>
			 				</div>
		 				</div>
					<?php elseif ( $divDisconnect ) : ?>
						<div class="logOut logOutFirst">
							<p>Your Sportle account is currently connected to Facebook and you are logged in as:
		 <br><span class="userName">Justin LaBaw Rivers</span></p>
		 					<div class="connectLabel facebook">Disconnect Facebook</div>
		 					<button class="socialLoginButton facebook">Sign out with <span class="icon-facebook"></span></button>
		 				</div>
		 				<div class="logOut logOutOnly">
							<p>Your Sportle account is currently connected to Twitter and you are logged in as:
		 <br><span class="userName">Justin LaBaw Rivers</span></p>
		 					<div class="connectLabel twitter">Disconnect Twitter</div>
		 					<button class="socialLoginButton twitter">Sign out with <span class="icon-twitter"></span></button>
		 				</div>
		 				<div class="logOut logOutOnly">
							<p>Your Sportle account is currently connected to Google and you are logged in as:
		 <br><span class="userName">Justin LaBaw Rivers</span></p>
		 					<div class="connectLabel google">Disconnect Google</div>
		 					<button class="socialLoginButton google">Sign out with <span class="icon-google"></span></button>
						</div>
					<?php else : ?>
						<div class="logOut">
							<p>Your Sportle account is currently connected to Facebook and you are logged in as:
		 <br><span class="userName">Justin LaBaw Rivers</span></p>
		 					<div class="connectLabel facebook">Disconnect Facebook</div>
		 					<button class="socialLoginButton facebook">Sign out with <span class="icon-facebook"></span></button>
						</div>
		 				<div class="logIn">
		 					<p>Connecting your social media accounts allows a quick & easy way for you to import your favorite sports teams and customize your Sportle experience.</p>
		 					<div class="twitterBlock">
			 					<div class="connectLabel twitter">Connect with Twitter</div>
				 				<button class="socialLoginButton twitter">Sign in with <span class="icon-twitter"></span></button>
			 				</div>
			 				<div class="googleBlock">
			 					<div class="connectLabel google">Connect with Google</div>
			 					<button class="socialLoginButton google">Sign in with <span class="icon-google"></span></button>
			 				</div>
		 				</div>
					<?php endif; ?>
				</div>
				<div class="confirmationBox" <?php echo $divConfirmation; ?>>
					<h2>Are you sure you want to change your username?</h2>
					<p>Changing your username lorem ipsum dolor color and my require you lorem ipsum etc.</p>
					<button class="modalButton cancelButton">Cancel</button>
					<button class="modalButton yesButton">Yes, please</button>
				</div>
				<div class="successModal" <?php echo $divSaved; ?>>
					<div class="closeNotice">X</div>
					<p><i class="fa fa-check"></i> Your profile has been saved succesfully!</p>
				</div>
			<?php endif; ?>
			<?php if ( !empty( $tabClass2 ) ) : ?>
				<div class="notificationCheckboxes">
					<div class="notificationCheckbox checkbox"><input type="checkbox" name="email" value="email"> <label>Email Notification lorem ipsum dolor color asit</label></div>
					<div class="notificationCheckbox checkbox"><input type="checkbox" name="email" value="email"> <label>Email Notification lorem ipsum dolor color asit</label></div>
					<div class="notificationCheckbox checkbox newLine"><input type="checkbox" name="email" value="email"> <label>Email Notification lorem ipsum dolor color asit</label></div>
					<div class="notificationCheckbox checkbox"><input type="checkbox" name="email" value="email"> <label>Email Notification lorem ipsum dolor color asit</label></div>
				</div>
			<?php endif; ?>
			<?php if ( !empty( $tabClass3 ) ) : ?>
				<div class="providers">
					<h3 class="providerTitle">First Select your TV Provider:</h3>
					<div class="tvProviders">
						<div class="tvProvider xfinity"></div>
						<div class="tvProvider directTV"></div>
						<div class="tvProvider dish"></div>
						<div class="tvProvider twc"></div>
						<div class="tvProvider att"></div>
					</div>
				</div>
				<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> More Providers</div>
				<h3 class="leaguePackagesTitle">My League Packages</h3>
				<?php if ( $divInteractions ) : ?>
				<table class="leaguePackages">
					<tr>
						<td class="logoColumn"><img src="/images/college-sports-live.png" class="packageLogo" /></td>
						<td class="titleColumn">College Sports Live</td>
						<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" /></td>
						<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" /></td>
						<td class="signInColumn"><button class="signInButtonSuccess"><i class="fa fa-check"></i> Login Successful</button></td>
					</tr>
					<tr>
						<td class="logoColumn"><img src="/images/center-ice.png" class="packageLogo" /></td>
						<td class="titleColumn">NHL Center Ice</td>
						<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" class="error" /><div class="errorMessage">Username is incorrect</div></td>
						<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" class="error" /><div class="errorMessage">Password is incorrect</div></td>
						<td class="signInColumn"><button class="signInButton">Login</button></td>
					</tr>
				</table>
				<?php else : ?>
				<table class="leaguePackages">
					<tr>
						<td class="logoColumn"><img src="/images/college-sports-live.png" class="packageLogo" /></td>
						<td class="titleColumn">College Sports Live</td>
						<td class="messageColumn failed"><i class="fa fa-circle"></i> Your credentials are not working</td>
						<td class="editColumn"><i class="fa fa-pencil"></i> Edit credentials</td>
						<td class="deleteColumn"><i class="fa fa-times-circle"></i> Remove package</td>
					</tr>
					<tr>
						<td class="logoColumn"><img src="/images/center-ice.png" class="packageLogo" /></td>
						<td class="titleColumn">NHL Center Ice</td>
						<td class="messageColumn"><i class="fa fa-circle"></i> Last test successful <span><a>Test again</a></span></td>
						<td class="editColumn"><i class="fa fa-pencil"></i> Edit credentials</td>
						<td class="deleteColumn"><i class="fa fa-times-circle"></i> Remove package</td>
					</tr>
				</table>
				<?php endif; ?>
				<table class="choosePackage" <?php echo $divAdd; ?>>
					<tr>
						<td class="labelColumn">Choose Package:</td>
						<td class="chooseColumn">
							<select class="sportsFilter selectpicker">
								<option selected>Select From List</option>
								<option>College Sports Live</option>
								<option>NHL Center Ice</option>
							</select>
						</td>
						<td class="usernameColumn"><label for="username">Username:</label><input type="text" id="username" name="username" /></td>
						<td class="passwordColumn"><label for="password">Password:</label><input type="text" id="password" name="password" /></td>
						<td class="signInColumn"><button class="signInButton">Sign In</button></td>
					</tr>
				</table>
				<div class="addBlock"><img src="/images/circle-plus.png" class="circlePlus" /> Add Package</div>
			<?php endif; ?>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>