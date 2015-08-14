<?php
	 $la_teams[] = array ( "logo" => "/images/clippers-logo.png",
						 "favorite" => false,
						 "team" => "Los Angeles Clippers",
						 "league" => "NBA"
	 );
	 $la_teams[] = array ( "logo" => "/images/lakers.png",
						 "favorite" => false,
						 "team" => "Los Angeles Lakers",
						 "league" => "NBA"
	 );
	 $la_teams[] = array ( "logo" => "/images/dodgers-logo.jpg",
						 "favorite" => false,
						 "team" => "Los Angeles Dodgers",
						 "league" => "MLB"
	 );
	 $la_teams[] = array ( "logo" => "/images/kings-logo.png",
						 "favorite" => false,
						 "team" => "Los Angeles Kings",
						 "league" => "NHL"
	 );

	 $my_favorites[] = array ( "logo" => "/images/rockets-logo.png",
						 "favorite" => true,
						 "team" => "Houston Rockets",
						 "league" => "NBA"
	 );
	 $my_favorites[] = array ( "logo" => "/images/magic-logo.png",
						 "favorite" => true,
						 "team" => "Orlando Magic",
						 "league" => "NBA"
	 );
	 $my_favorites[] = array ( "logo" => "/images/heat-logo.jpg",
						 "favorite" => true,
						 "team" => "Miami Heat",
						 "league" => "NBA"
	 );
	 $my_favorites[] = array ( "logo" => "/images/golden-state-warriors-logo.png",
						 "favorite" => true,
						 "team" => "Golden State Warriors",
						 "league" => "NBA"
	 );
	 $my_favorites[] = array ( "logo" => "/images/49rs-logo.png",
						 "favorite" => true,
						 "team" => "San Francisco 49ers",
						 "league" => "NFL"
	 );
	 $my_favorites[] = array ( "logo" => "/images/giants-logo.png",
						 "favorite" => true,
						 "team" => "New York Giants",
						 "league" => "NFL"
	 );
	 $my_favorites[] = array ( "logo" => "/images/angels-logo.png",
						 "favorite" => true,
						 "team" => "Los Angeles Angels",
						 "league" => "MLB"
	 );

	 $nfl[] = array ( "logo" => "/images/colts-logo.png",
						 "favorite" => true,
						 "team" => "Indianapolis Colts",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/bengals-logo.png",
						 "favorite" => true,
						 "team" => "Cincinatti Bengals",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/bills-logo.png",
						 "favorite" => true,
						 "team" => "Buffalo Bills",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/jaguars-logo.png",
						 "favorite" => true,
						 "team" => "Jacksonville Jaguars",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/ravens-logo.png",
						 "favorite" => true,
						 "team" => "Baltimore Ravens",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/dolphins-logo.png",
						 "favorite" => true,
						 "team" => "Miami Dolphins",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/titans-logo.png",
						 "favorite" => true,
						 "team" => "Tennessee Titans",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/browns-logo.png",
						 "favorite" => true,
						 "team" => "Cleveland Browns",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/patriots-logo.png",
						 "favorite" => true,
						 "team" => "New England Patriots",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/texans-logo.png",
						 "favorite" => true,
						 "team" => "Houston Texans",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/steelers-logo.png",
						 "favorite" => true,
						 "team" => "Pittsburgh Steelers",
						 "league" => "NFL"
	 );
	 $nfl[] = array ( "logo" => "/images/jets-logo.png",
						 "favorite" => true,
						 "team" => "New York Jets",
						 "league" => "NFL"
	 );


     function showFavoriteTeams( $searchDatas ) {
     	$count = 0;
		echo '<div class="teamContainer">' . PHP_EOL;
     	foreach ( $searchDatas as $searchData ) {
     		$isFavorite = $searchData['favorite'] == true ? ' favorite' : '';
     		echo '	<div class="teamInfo">' . PHP_EOL;
			echo '		<div class="logo"><img src="' . $searchData['logo'] . '" /></div>' . PHP_EOL;
			echo '		<div class="teamInfoTitles">' . PHP_EOL;
			echo '			<div class="favorited"><i class="fa fa-star' . $isFavorite . '"></i></div>' . PHP_EOL;
			echo '			<div class="teamName">' . $searchData['team'] . '</div>' . PHP_EOL;
			echo '			<div class="league">' . $searchData['league'] . '</div>' . PHP_EOL;
			echo '		</div>' . PHP_EOL;
			echo '	</div>' . PHP_EOL;
			if ( 0 == ( ++$count % 3 ) ) {
				if ( $searchData !== end(  $searchDatas) ) {
					echo '</div><div class="teamContainer">' . PHP_EOL;
				}
			}
		}
		echo '</div>' . PHP_EOL;
     }

