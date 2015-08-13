<?php
/*
 * Description: Sportle.tv HTML/CSS markup to be adapted for Laravel Framework
 *
 * @author     	Tracy Swanson <tracy@freyadigital.com>
 * @uri     	http://freyadigital.com/
 *
 */
 ?>
<div class="header">
	<a href="/"><img src="/images/sportle-logo.png" alt="Sportle Logo" id="headerLogo" /></a>
	<div class="whatsOnNowLink headerLink">What's On Now</div>
	<div class="quickPicksLink headerLink">Quick Picks</div>
	<div id="userProfile">
		<div id="userName">Jenny Davidson<i class="settingsDownArrow glyphicon glyphicon-triangle-bottom"></i></div>
		<div id="userPic" style="background-image: url('/images/jenny-davidson.jpg')"></div>
	</div>
	<div class="userNotifications"><i class="fa fa-bell"></i>
		<div class="notificationsNumber">1</div>
	</div></a>
	<div id="searchContent"><form action="search.php"><input type="text" id="searchContentField" autocomplete="off" placeholder="Search Team, Network, Event, League..." /><button type="submit" class="searchIcon icon-search"></button></form></div>
	<div class="whatsOnDropDownTriangle glyphicon glyphicon-triangle-top"></div>
	<div class="quickPicksTriangle glyphicon glyphicon-triangle-top"></div>
	<div class="notificationsTriangle glyphicon glyphicon-triangle-top"></div>
	<div class="userTriangle glyphicon glyphicon-triangle-top"></div>
	<ul id="searchResults" class="dropDownMenu">
		<li class="resultsHeader"><h3>WHATS ON NOW</h3><div class="viewAll"><a href="search.php?type=city">View All</a></div></li>
		<li class="result"><span class="image"><div class="screenShot"><img src="/images/lakers-vs-bucks.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers<br>vs Milwaukee Bucks</span><span class="gameTime">7:00 PST</span></a></li>
		<li class="result"><span class="image"><div class="screenShot"><img src="/images/clippers-vs-warriors.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers<br>vs Golden State Warriors</span><span class="gameTime">7:00 PST</span></a></li>
		<li class="league">NBA</li>
		<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star favorite"></i></span></a></li>
		<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"></span></a></li>
		<li class="league">MLB</li>
		<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star favorite"></i></span></a></li>
		<li class="league">NHL</li>
		<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"></span></a></li>
	</ul>
	<ul id="notifications" class="dropDownMenu">
		<li class="notificationsHeader"><h3>Notifications</h3><div class="markAllRead">Mark All as Read</div></li>
		<li class="unread"><span><div class="notificationIcon orange">CFB</div></span><span class="notificationMessage">Justin, the <b>Florida Gators’</b> football game is about to start at <b>x time</b>. <a href="">Watch now!</a></span><span class="notificationTime">22m ago</span></a></li>
		<li><span><div class="notificationIcon orange">CFB</div></span><span class="notificationMessage">Justin, this is your reminder for the <b>Florida Gators</b> football game. <a href="">Watch now!</a></span><span class="notificationTime">1h ago</span></a></li>
		<li><span><div class="croppedLogo" style="background-image: url('/images/sportle-logo.png');" /></div></span><span class="notificationMessage">Your DirecTV credentials no longer work, please reenter in order to have access to more games. <a href="settings.php">Edit Settings </a></span><span class="notificationTime">2h ago</span></a></li>
	</ul>
	<ul id="userSettings" class="dropDownMenu">
		<li><a href="settings.php?tab=profile">Edit Profile</a></li>
		<li><a href="settings.php?tab=notifications">Settings</a></li>
		<li><a href="settings.php?tab=subscriptions">Manage Subscriptions</a></li>
		<li class="emptyMenu"><div class="spacer"></div></li>
		<li><a href="">Sign Out</a></li>
	</ul>
</div>