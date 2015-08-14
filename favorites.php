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
<?php include 'favorites_data.php'; ?>
<?php
	$showDiv = $_GET['div'];
	$tab = $_GET['tab'];
	$tabClass1 = '';
	$tabClass2 = '';
	$tabClass3 = '';
	$tabClass4 = '';
	$tabClass5 = '';
	$tabClass6 = '';
	$tabClass7 = '';
	$tabClass8 = '';

	switch ($tab) {
		case 'Suggested':
			$tabClass1 = ' class="selected"';
			break;
		case 'NFL':
			$tabClass2 = ' class="selected"';
			break;
		case 'MLB':
			$tabClass3 = ' class="selected"';
			break;
		case 'NHL':
			$tabClass4 = ' class="selected"';
			break;
		case 'NBA':
			$tabClass5 = ' class="selected"';
			break;
		case 'NCAA':
			$tabClass6 = ' class="selected"';
			break;
		case 'CFB':
			$tabClass7 = ' class="selected"';
			break;
		case 'MLS':
			$tabClass8 = ' class="selected"';
			break;
		default:
			$tabClass1 = ' class="selected"';
			break;
	}
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
	<body class="favorites">
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

			<?php if ( "banners" == $showDiv ) : ?>
				<div class="topBanners">
					<div class="topBanner"><span class="bannerIcon"><img src="/images/stars.png" /></span>Favorites bacon ipsum dolor color turkey gravy lorem bacon ipsum ipsum dolor color<div class="closeBanner">X</div></div>
					<div class="topBanner"><span class="bannerIcon"><span class="textBox">New</span></span>We’ve updated our lorem ipsum bacon turkey gravy. <a>Check it out</a><div class="closeBanner">X</div></div>
					<div class="topBanner"><span class="bannerIcon"><span class="glyphicon glyphicon-cog"></span></span>Misc lorem bacon ipsum dolor color turkey gravy bacon ipsum dolor color turkey gravy lorem bacon ipsum ipsum dolor color<div class="closeBanner">X</div></div>
				</div>
				<div class="manageFavoritesHeader">
					<div class="quickAddSearch">
						<div class="quickAdd"><i class="fa fa-star"></i><i class="fa fa-plus"></i><div class="addText">QUICK ADD</div></div>
						<div id="searchContent"><form action="search.php"><input type="text" id="favoritesSearchContentField" autocomplete="off" placeholder="Search Teams" /><button type="submit" class="searchIcon icon-search"></button></form></div>
						<ul id="favoritesSearchResults" class="dropDownMenu">
							<li class="league">NBA</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">MLB</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">NHL</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
						</ul>
					</div>
					<h3>Manage Favorites</h3>
				</div>
				<div id="favoritesTabs">
					<a href="favorites.php?div=banners&tab=Suggested"><h2<?php echo $tabClass1; ?>>Suggested</h2></a>
					<a href="favorites.php?div=banners&tab=NFL"><h2<?php echo $tabClass2; ?>>NFL</h2></a>
					<a href="favorites.php?div=banners&tab=MLB"><h2<?php echo $tabClass3; ?>>MLB</h2></a>
					<a href="favorites.php?div=banners&tab=NHL"><h2<?php echo $tabClass4; ?>>NHL</h2></a>
					<a href="favorites.php?div=banners&tab=NBA"><h2<?php echo $tabClass5; ?>>NBA</h2></a>
					<a href="favorites.php?div=banners&tab=NCAA"><h2<?php echo $tabClass6; ?>>NCAA</h2></a>
					<a href="favorites.php?div=banners&tab=CFB"><h2<?php echo $tabClass7; ?>>CFB</h2></a>
					<a href="favorites.php?div=banners&tab=MLS"><h2<?php echo $tabClass8; ?>>MLS</h2></a>
					<div class="moreCategories">
						<h2 id="more">...
						<div id="moreTriangle"><img src="/images/more-arrow.png" /></div>
							<ul id="otherCategories">
								<li><a>Euro Soccer</a></li>
								<li><a>Women's Soccer</a></li>
								<li><a>Australian Rugby</a></li>
								<li><a>UFC</a></li>
							</ul>
						</h2>
					</div>
				</div>
				<h4>Teams</h4>
				<?php
					showFavoriteTeams( $la_teams );
				?>
				<div class="myFavoritesHeader">
					<h4 class="myFavorites">My Favorites</h4>
					<div class="favoriteSelect">
						<label for="favoriteFilter">Show only:</label>
						<select class="favoriteFilter selectpicker">
							<option selected="true">ALL</option>
							<option>MLB</option>
							<option>NBA</option>
							<option>NFL</option>
							<option>NHL</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
				</div>
				<div class="noFavoritesMessage">You Currently Have 0 Favorites</div>
			<?php elseif ( "interactions" == $showDiv ) : ?>
				<div class="manageFavoritesHeader">
					<div class="quickAddSearch">
						<div class="quickAdd"><i class="fa fa-star"></i><i class="fa fa-plus"></i><div class="addText">QUICK ADD</div></div>
						<div id="searchContent"><form action="search.php"><input type="text" id="favoritesSearchContentField" autocomplete="off" placeholder="Search Teams" /><button type="submit" class="searchIcon icon-search"></button></form></div>
						<ul id="favoritesSearchResults" class="dropDownMenu">
							<li class="league">NBA</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">MLB</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">NHL</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
						</ul>
					</div>
					<h3>Manage Favorites</h3>
				</div>
				<div id="favoritesTabs">
					<a href="favorites.php?div=interactions&tab=Suggested"><h2<?php echo $tabClass1; ?>>Suggested</h2></a>
					<a href="favorites.php?div=interactions&tab=NFL"><h2<?php echo $tabClass2; ?>>NFL</h2></a>
					<a href="favorites.php?div=interactions&tab=MLB"><h2<?php echo $tabClass3; ?>>MLB</h2></a>
					<a href="favorites.php?div=interactions&tab=NHL"><h2<?php echo $tabClass4; ?>>NHL</h2></a>
					<a href="favorites.php?div=interactions&tab=NBA"><h2<?php echo $tabClass5; ?>>NBA</h2></a>
					<a href="favorites.php?div=interactions&tab=NCAA"><h2<?php echo $tabClass6; ?>>NCAA</h2></a>
					<a href="favorites.php?div=interactions&tab=CFB"><h2<?php echo $tabClass7; ?>>CFB</h2></a>
					<a href="favorites.php?div=interactions&tab=MLS"><h2<?php echo $tabClass8; ?>>MLS</h2></a>
					<div class="moreCategories">
						<h2 id="more">...
						<div id="moreTriangle"><img src="/images/more-arrow.png" /></div>
							<ul id="otherCategories">
								<li><a>Euro Soccer</a></li>
								<li><a>Women's Soccer</a></li>
								<li><a>Australian Rugby</a></li>
								<li><a>UFC</a></li>
							</ul>
						</h2>
					</div>
				</div>
				<h4>Teams</h4>
				<?php
					showFavoriteTeams( $la_teams );
				?>
				<div class="myFavoritesHeader">
					<h4 class="myFavorites">My Favorites</h4>
					<div class="favoriteSelect">
						<label for="favoriteFilter">Show only:</label>
						<select class="favoriteFilter selectpicker">
							<option selected="true">ALL</option>
							<option>MLB</option>
							<option>NBA</option>
							<option>NFL</option>
							<option>NHL</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
				</div>
				<?php
					showFavoriteTeams( $my_favorites );
				?>
			<?php elseif ( "zero" == $showDiv ) : ?>
				<div class="manageFavoritesHeader">
					<div class="quickAddSearch">
						<div class="quickAdd"><i class="fa fa-star"></i><i class="fa fa-plus"></i><div class="addText">QUICK ADD</div></div>
						<div id="searchContent"><form action="search.php"><input type="text" id="favoritesSearchContentField" autocomplete="off" placeholder="Search Teams" /><button type="submit" class="searchIcon icon-search"></button></form></div>
						<ul id="favoritesSearchResults" class="dropDownMenu">
							<li class="league">NBA</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">MLB</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">NHL</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
						</ul>
					</div>
					<h3>Manage Favorites</h3>
				</div>
				<div id="favoritesTabs">
					<a href="favorites.php?div=zero&tab=Suggested"><h2<?php echo $tabClass1; ?>>Suggested</h2></a>
					<a href="favorites.php?div=zero&tab=NFL"><h2<?php echo $tabClass2; ?>>NFL</h2></a>
					<a href="favorites.php?div=zero&tab=MLB"><h2<?php echo $tabClass3; ?>>MLB</h2></a>
					<a href="favorites.php?div=zero&tab=NHL"><h2<?php echo $tabClass4; ?>>NHL</h2></a>
					<a href="favorites.php?div=zero&tab=NBA"><h2<?php echo $tabClass5; ?>>NBA</h2></a>
					<a href="favorites.php?div=zero&tab=NCAA"><h2<?php echo $tabClass6; ?>>NCAA</h2></a>
					<a href="favorites.php?div=zero&tab=CFB"><h2<?php echo $tabClass7; ?>>CFB</h2></a>
					<a href="favorites.php?div=zero&tab=MLS"><h2<?php echo $tabClass8; ?>>MLS</h2></a>
					<div class="moreCategories">
						<h2 id="more">...
						<div id="moreTriangle"><img src="/images/more-arrow.png" /></div>
							<ul id="otherCategories">
								<li><a>Euro Soccer</a></li>
								<li><a>Women's Soccer</a></li>
								<li><a>Australian Rugby</a></li>
								<li><a>UFC</a></li>
							</ul>
						</h2>
					</div>
				</div>
				<h4>Teams</h4>
				<?php
					showFavoriteTeams( $la_teams );
				?>
				<div class="myFavoritesHeader">
					<h4 class="myFavorites">My Favorites</h4>
					<div class="favoriteSelect">
						<label for="favoriteFilter">Show only:</label>
						<select class="favoriteFilter selectpicker">
							<option selected="true">ALL</option>
							<option>MLB</option>
							<option>NBA</option>
							<option>NFL</option>
							<option>NHL</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
				</div>
				<div class="noFavoritesMessage">You Currently Have 0 Favorites</div>
			<?php elseif ( "multiple" == $showDiv ) : ?>
				<div class="manageFavoritesHeader">
					<div class="quickAddSearch">
						<div class="quickAdd"><i class="fa fa-star"></i><i class="fa fa-plus"></i><div class="addText">QUICK ADD</div></div>
						<div id="searchContent"><form action="search.php"><input type="text" id="favoritesSearchContentField" autocomplete="off" placeholder="Search Teams" /><button type="submit" class="searchIcon icon-search"></button></form></div>
						<ul id="favoritesSearchResults" class="dropDownMenu">
							<li class="league">NBA</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">MLB</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">NHL</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
						</ul>
					</div>
					<h3>Manage Favorites</h3>
				</div>
				<div id="favoritesTabs">
					<a href="favorites.php?div=multiple&tab=Suggested"><h2<?php echo $tabClass1; ?>>Suggested</h2></a>
					<a href="favorites.php?div=multiple&tab=NFL"><h2<?php echo $tabClass2; ?>>NFL</h2></a>
					<a href="favorites.php?div=multiple&tab=MLB"><h2<?php echo $tabClass3; ?>>MLB</h2></a>
					<a href="favorites.php?div=multiple&tab=NHL"><h2<?php echo $tabClass4; ?>>NHL</h2></a>
					<a href="favorites.php?div=multiple&tab=NBA"><h2<?php echo $tabClass5; ?>>NBA</h2></a>
					<a href="favorites.php?div=multiple&tab=NCAA"><h2<?php echo $tabClass6; ?>>NCAA</h2></a>
					<a href="favorites.php?div=multiple&tab=CFB"><h2<?php echo $tabClass7; ?>>CFB</h2></a>
					<a href="favorites.phpdiv=multiple&tab=MLS"><h2<?php echo $tabClass8; ?>>MLS</h2></a>
					<div class="moreCategories">
						<h2 id="more">...
						<div id="moreTriangle"><img src="/images/more-arrow.png" /></div>
							<ul id="otherCategories">
								<li><a>Euro Soccer</a></li>
								<li><a>Women's Soccer</a></li>
								<li><a>Australian Rugby</a></li>
								<li><a>UFC</a></li>
							</ul>
						</h2>
					</div>
				</div>
				<div class="col col1"><h5>AFC SOUTH</h5></div>
				<div class="col col2"><h5>AFC NORTH</h5></div>
				<div class="col col3"><h5>AFC EAST</h5></div>
				<?php
					showFavoriteTeams( $nfl );
				?>
				<div class="myFavoritesHeader">
					<h4 class="myFavorites">My Favorites</h4>
					<div class="favoriteSelect">
						<label for="favoriteFilter">Show only:</label>
						<select class="favoriteFilter selectpicker">
							<option selected="true">ALL</option>
							<option>MLB</option>
							<option>NBA</option>
							<option>NFL</option>
							<option>NHL</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
				</div>
				<?php
					showFavoriteTeams( $my_favorites );
				?>
			<?php else : ?>
				<div class="manageFavoritesHeader">
					<div class="quickAddSearch">
						<div class="quickAdd"><i class="fa fa-star"></i><i class="fa fa-plus"></i><div class="addText">QUICK ADD</div></div>
						<div id="searchContent"><form action="search.php"><input type="text" id="favoritesSearchContentField" autocomplete="off" placeholder="Search Teams" /><button type="submit" class="searchIcon icon-search"></button></form></div>
						<ul id="favoritesSearchResults" class="dropDownMenu">
							<li class="league">NBA</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/lakers.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Lakers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/clippers-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Clippers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">MLB</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/dodgers-logo.jpg" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Dodgers</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
							<li class="league">NHL</li>
							<li class="result"><span class="image"><div class="logo"><img src="/images/kings-logo.png" /></div></span><span class="teams"><a href="search.php?type=team"><span class="typed">Los A</span>ngeles Kings</span><span class="favorite"><i class="fa fa-star"></i></span></a></li>
						</ul>
					</div>
					<h3>Manage Favorites</h3>
				</div>
				<div id="favoritesTabs">
					<a href="favorites.php?tab=Suggested"><h2<?php echo $tabClass1; ?>>Suggested</h2></a>
					<a href="favorites.php?tab=NFL"><h2<?php echo $tabClass2; ?>>NFL</h2></a>
					<a href="favorites.php?tab=MLB"><h2<?php echo $tabClass3; ?>>MLB</h2></a>
					<a href="favorites.php?tab=NHL"><h2<?php echo $tabClass4; ?>>NHL</h2></a>
					<a href="favorites.php?tab=NBA"><h2<?php echo $tabClass5; ?>>NBA</h2></a>
					<a href="favorites.php?tab=NCAA"><h2<?php echo $tabClass6; ?>>NCAA</h2></a>
					<a href="favorites.php?tab=CFB"><h2<?php echo $tabClass7; ?>>CFB</h2></a>
					<a href="favorites.php?tab=MLS"><h2<?php echo $tabClass8; ?>>MLS</h2></a>
					<div class="moreCategories">
						<h2 id="more">...
						<div id="moreTriangle"><img src="/images/more-arrow.png" /></div>
							<ul id="otherCategories">
								<li><a>Euro Soccer</a></li>
								<li><a>Women's Soccer</a></li>
								<li><a>Australian Rugby</a></li>
								<li><a>UFC</a></li>
							</ul>
						</h2>
					</div>
				</div>
				<h4>Teams</h4>
				<?php
					showFavoriteTeams( $la_teams );
				?>
				<div class="myFavoritesHeader">
					<h4 class="myFavorites">My Favorites</h4>
					<div class="favoriteSelect">
						<label for="favoriteFilter">Show only:</label>
						<select class="favoriteFilter selectpicker">
							<option selected="true">ALL</option>
							<option>MLB</option>
							<option>NBA</option>
							<option>NFL</option>
							<option>NHL</option>
							<option>Soccer</option>
							<option>Tennis</option>
							<option>Volleyball</option>
						</select>
					</div>
				</div>
				<?php
					showFavoriteTeams( $my_favorites );
				?>
			<?php endif; ?>

		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>