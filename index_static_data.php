<?php
/*
 * Description: Sportle.tv HTML/CSS markup to be adapted for Laravel Framework
 *
 * @author     	Tracy Swanson <tracy@freyadigital.com>
 * @uri     	http://freyadigital.com/
 *
 */
 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sportle.tv</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!-- link rel="stylesheet/less" type="text/css" href="less/main.less" / -->
		<!-- todo: remove less.min.js, compile main.less, add main.css include -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/sportle.js" ></script>
	</head>

	<body>
		<?php include 'header.php'; ?>
		<div class="main">
			<div id="homepageFilters">
				<h3>All Events</h3>
				<form class="pageFilters">
					<label for="sportsFilter">Show only</label>
					<div class="sportleSelect">
						<select class="sportsFilter">
							<option selected="true">All Sports</option>
							<option>Baseball</option>
							<option>Basketball</option>
							<option>Football</option>
							<option>Hockey</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
					<label for="streamOn">Show only Free Streams</label>
					<a href="#" class="streamOn">ON</a>
					<a href="#" class="streamOff">OFF</a>
				</form>
			</div>
			<hr />
			<div id="homeContent">
				<div class="whatsOnNow">
					<h2>WHAT'S ON NOW</h2>
					<div class="programListing">
						<div class="screenShot"><img src="/images/heat-vs-hornets.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">LIVE:<div class="airTime">4:00PM PST</div></div>
							<div class="channelLogo"><img src="/images/fox-sports-logo.png" /></div>
							<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category blue">NBA</div>
							</div>
							<div class="title">
								<div class="team"><span class="smallTitlePart">Miami</span>Heat</div>
								<div class="versus">VS</div>
								<div class="team"><span class="smallTitlePart">Charlotte</span>Bobcats</div>
							</div>
						</div>
						<div class="infoBox">
							<div class="eventStatus">
								<div class="team">
									<img class="teamLogo" src="/images/heat-logo.jpg" />
									<div class="teamName ahead">Heat</div>
									<div class="score ahead">28</div>
								</div>
								<div class="team">
									<img class="teamLogo" src="/images/bobcats-logo.png" />
									<div class="teamName">Bobcats</div>
									<div class="score">24</div>
								</div>
								<div class="timePeriod">1st Qtr<span class="timeElapsed">1:10</span></div>
							</div>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/kobalt-400.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">LIVE:<div class="airTime">4:20PM PST</div></div>
							<div class="channelLogo"><img src="/images/abc-logo.png" /></div>
							<div class="reminder"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category darkPurple">NASCAR</div>
							</div>
							<div class="title">
								<div class="event">Kobalt 400</div>
							</div>
						</div>
						<div class="infoBox withHeader">
							<h4>Las Vegas Motor Speedway</h4>
							<p>30 Laps Remaining</p>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/maryland-vs-michigan.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">LIVE:<div class="airTime">4:00PM PST</div></div>
							<div class="channelLogo"><img src="/images/cbs-sports-logo.png" /></div>
							<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category orange">NCAA</div>
							</div>
							<div class="title">
								<div class="team"><span class="smallTitlePart">Maryland</span>Tarrapins</div>
								<div class="versus">VS</div>
								<div class="team"><span class="smallTitlePart">Michigan State</span>Spartans</div>
							</div>
						</div>
						<div class="infoBox">
							<div class="eventStatus">
								<div class="team">
									<img class="teamLogo" src="/images/maryland-logo.png" />
									<div class="teamName ahead">Maryland</div>
									<div class="score ahead">71</div>
								</div>
								<div class="team">
									<img class="teamLogo" src="/images/michigan-state-logo.png" />
									<div class="teamName">Michigan State</div>
									<div class="score">63</div>
								</div>
								<div class="timePeriod">3rd Qtr<span class="timeElapsed">5:15</span></div>
							</div>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/heat-vs-hornets.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">LIVE:<div class="airTime">4:00PM PST</div></div>
							<div class="channelLogo"><img src="/images/abc-logo.png" /></div>
							<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
							<div class="logo"><img src="/images/nba-logo.png" /></div>
							<div class="title">
								<div class="team"><span class="smallTitlePart">Miami</span>Heat</div>
								<div class="versus">VS</div>
								<div class="team"><span class="smallTitlePart">Charlotte</span>Bobcats</div>
							</div>
						</div>
						<div class="infoBox">
							<div class="eventStatus">
								<div class="team">
									<img class="teamLogo" src="/images/heat-logo.jpg" />
									<div class="teamName ahead">Heat</div>
									<div class="score ahead">28</div>
								</div>
								<div class="team">
									<img class="teamLogo" src="/images/bobcats-logo.png" />
									<div class="teamName">Bobcats</div>
									<div class="score">24</div>
								</div>
								<div class="timePeriod">1st Qtr<span class="timeElapsed">1:10</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="featured">
					<h2>FEATURED</h2>
					<div class="programListing">
						<div class="screenShot"><img src="/images/yankees-vs-orioles.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">TONIGHT<div class="airTime">4:00PM PST</div></div>
							<div class="reminder"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category green">MLB</div>
							</div>
							<div class="title">
								<div class="team"><span class="smallTitlePart">New York</span>Yankees</div>
								<div class="versus">VS</div>
								<div class="team"><span class="smallTitlePart">Baltimore</span>Orioles</div>
							</div>
						</div>
						<div class="infoBox">
							<p>This is the place where additional editorial content can live. It can be long or short.</p>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/kentucky-derby.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">MAY O2<div class="airTime">1:20PM PST</div></div>
							<div class="channelLogo"></div>
							<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category lightBlue twoLine">Horse Racing</div>
							</div>
							<div class="title">
								<div class="event"><span class="smallTitlePart">2015</span>Kentucky Derby</div>
							</div>
						</div>
						<div class="infoBox">
							<p>Since 1875 at Churchill Downs Racetrack in Louisville, KY.</p>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/mayweather-vs-pacquiao.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">MAY O2<div class="airTime">8:20PM PST</div></div>
							<div class="reminder on"><img src="/images/reminder-icon.png" /></div>
							<div class="categoryContainer">
								<div class="category red">Boxing</div>
							</div>
							<div class="title">
								<div class="titleWide">
									<div class="team"><span class="smallTitlePart">Floyd</span>Mayweather</div>
									<div class="versus">VS</div>
									<div class="team"><span class="smallTitlePart">Manny</span>Pacquiao</div>
								</div>
							</div>
						</div>
						<div class="infoBox">
							<p>LIVE from the MGM Grand in Las Vegas</p>
						</div>
					</div>
					<div class="programListing">
						<div class="screenShot"><img src="/images/flyers-vs-bruins.jpg" /><img class="gradientOverlay" src="/images/gradient-mask.png" /></div>
						<div class="screenOverlay">
							<div class="airDate">MAY 02<div class="airTime">9:00PM PST</div></div>
							<div class="reminder"><img src="/images/reminder-icon.png" /></div>
							<div class="logo"><img src="/images/nhl-logo.png" /></div>
							<div class="title">
								<div class="titleWide">
									<div class="team"><span class="smallTitlePart">Philadelphia</span>Flyers</div>
									<div class="versus">VS</div>
									<div class="team"><span class="smallTitlePart">Boston</span>Bruins</div>
								</div>
							</div>
						</div>
						<div class="infoBox">
							<p>This is the place where additional editorial content can live. It can be long or short.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>