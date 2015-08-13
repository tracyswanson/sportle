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
<?php include 'search_data.php'; ?>
<?php
	$searchType = $_GET['type'];
?>
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
	<body class="search">
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

			<?php if ( "team" == $searchType ) : ?>

				<?php
					echo '<h3 class="resultsTitle">Showing results for <span class="teamName">' . $clippers_name . "</span></h3>";
				?>
				<h4>Teams</h4>
				<?php
					showSearchDataTeams( $clippers_teams );
				?>
				<h4 class="eventsTitle">Events</h4>
				<h5>WHATS ON NOW</h5>
				<?php
					showSearchDataEvents( $clippers_events );
				?>
				<h5>UPCOMING</h5>
				<?php
					showSearchDataUpcoming( $clippers_upcoming );
				?>

			<?php else : ?>

				<?php
					echo '<h3>Showing results for</h3>';
					echo "<h2>" . $la_name . "</h2>";
				?>
				<h4>Teams</h4>
				<?php
					showSearchDataTeams( $la_teams );
				?>
				<h4 class="eventsTitle">Events</h4>
				<h5>WHATS ON NOW</h5>
				<?php
					showSearchDataEvents( $la_events );
				?>
				<h5>UPCOMING</h5>
				<?php
					showSearchDataUpcoming( $la_upcoming );
				?>

			<?php endif; ?>

		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>