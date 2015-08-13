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
<html>
	<head>
		<title>Sportle.tv</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-select.css" />
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
	<body class="home">
		<?php include 'header.php'; ?>
		<div class="main">
			<div id="homepageFilters">
				<h3>All Events</h3>
				<label for="sportsFilter">Show only:</label>
				<div class="sportleSelect">
					<select class="sportsFilter selectpicker">
						<option selected="true">All Sports</option>
						<option>MLB</option>
						<option>NBA</option>
						<option>NFL</option>
						<option>NHL</option>
						<option>Soccer</option>
						<option>Tennis</option>
						<option>Volleyball</option>
					</select>
				</div>
				<label for="streamBtns">Show only Free Streams</label>
				<div class="streamBtns btn-group" data-toggle="buttons">
				  <label class="streamBtn btn btn-primary active">
				    <input type="radio" name="streaming" id="streamOn" autocomplete="off" checked> ON
				  </label>
				  <label class="streamBtn btn btn-primary">
				    <input type="radio" name="streaming" id="streamOff" autocomplete="off"> OFF
				  </label>
				</div>
			</div>
			<hr />
			<div id="eventContent">
				<div class="whatsOnNow">
					<h2>WHAT'S ON NOW</h2>
					<div class="programListingsScroll">
						<div class="programListings">
							<?php
								showProgramListings( $whatsOn );
							?>
						</div>
						<div class="leftArrow"><a ref="#"><i class="fa fa-angle-left"></i></a></div>
						<div class="rightArrow"><a ref="#"><i class="fa fa-angle-right"></i></a></div>
					</div>
				</div>
				<div class="featured">
					<h2>FEATURED</h2>
					<div class="programListingsScroll">
						<div class="programListings">
							<?php
								showProgramListings( $featured );
							?>
						</div>
						<div class="leftArrow"><a ref="#"><i class="fa fa-angle-left"></i></a></div>
						<div class="rightArrow"><a ref="#"><i class="fa fa-angle-right"></i></a></div>
					</div>
				</div>
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
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>