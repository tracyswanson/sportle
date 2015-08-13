<?php
	 $la_name = "Los Angeles";
	 $clippers_name = "Clippers";

	 $la_teams[] = array ( "logo" => "/images/clippers-logo.png",
						 "favorite" => true,
						 "team" => "Los Angeles Clippers",
						 "league" => "NBA"
	 );
	 $la_teams[] = array ( "logo" => "/images/lakers.png",
						 "favorite" => false,
						 "team" => "Los Angeles Lakers",
						 "league" => "NBA"
	 );
	 $la_teams[] = array ( "logo" => "/images/dodgers-logo.jpg",
						 "favorite" => true,
						 "team" => "Los Angeles Dodgers",
						 "league" => "MLB"
	 );
	 $la_teams[] = array ( "logo" => "/images/kings-logo.png",
						 "favorite" => false,
						 "team" => "Los Angeles Kings",
						 "league" => "NHL"
	 );
	 $clippers_teams[] = array ( "logo" => "/images/clippers-logo.png",
						 "favorite" => true,
						 "team" => "Los Angeles Clippers",
						 "league" => "NBA"
	 );

     function showSearchDataTeams( $searchDatas ) {
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
				echo '</div><div class="teamContainer">' . PHP_EOL;
			}
		}
		echo '</div>' . PHP_EOL;
     }

	 $la_events[] = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "LIVE:",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => true,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "71",
						 "favorite1" => true,
						 "teamLogo2" => "/images/cavaliers-logo.png",
						 "teamName2" => "Cleveland",
						 "score2" => "63",
						 "favorite2" => false,
						 "timePeriod" => "3rd Qtr",
						 "timeElapsed" => "5:15",
						 "timeElapsedWeight" => "",
						 "button" => "WATCH NOW"
	 );
	 $la_events[] = array ( "screenShot" => "/images/lakers-wide-thumb.jpg",
						 "airDate" => "LIVE:",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => true,
						 "channelLogo" => "/images/fox-sports-logo.png",
						 "reminder" => "",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team2",
						 "teamLogo1" => "/images/lakers.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "64",
						 "favorite1" => false,
						 "teamLogo2" => "/images/magic-logo.png",
						 "teamName2" => "Orlando",
						 "score2" => "70",
						 "favorite2" => false,
						 "timePeriod" => "3rd Qtr",
						 "timeElapsed" => "10:04",
						 "timeElapsedWeight" => "",
						 "button" => "WATCH NOW"
	 );
	 $la_events[] = array ( "screenShot" => "/images/dodgers-wide-thumb.jpg",
						 "airDate" => "LIVE:",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => true,
						 "channelLogo" => "/images/abc-logo.png",
						 "reminder" => "",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/dodgers-logo.jpg",
						 "teamName1" => "Los Angeles",
						 "score1" => "12",
						 "favorite1" => true,
						 "teamLogo2" => "/images/giants.jpg",
						 "teamName2" => "San Francisco",
						 "score2" => "5",
						 "favorite2" => false,
						 "timePeriod" => "2nd",
						 "timeElapsed" => "Inning",
						 "timeElapsedWeight" => " bold",
						 "button" => "WATCH SHOW"
	 );
	 $clippers_events[] = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "LIVE:",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => true,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "71",
						 "favorite1" => true,
						 "teamLogo2" => "/images/cavaliers-logo.png",
						 "teamName2" => "Cleveland",
						 "score2" => "63",
						 "favorite2" => false,
						 "timePeriod" => "3rd Qtr",
						 "timeElapsed" => "5:15",
						 "timeElapsedWeight" => "",
						 "button" => "WATCH NOW"
	 );

	 function showSearchDataEvents( $searchDatas ) {
	 	echo '<table class="whatsOnNowEvent">' . PHP_EOL;
	 	foreach ( $searchDatas as $searchData ) {
	 		$team1Ahead = $searchData['ahead'] == 'team1' ? ' ahead' : '';
			$team2Ahead = $searchData['ahead'] == 'team2' ? ' ahead' : '';
			$airDateLive = $searchData['airDateLive'] == true ? ' airDateLive' : '';
			echo '	<tr class="topRow">' . PHP_EOL;
	 		echo '		<td rowspan="2" class="screenView doubleHeight">' . PHP_EOL;
			echo '			<div class="screenShot"><img src="' . $searchData['screenShot'] . '" />' . PHP_EOL;
			echo '			<div class="airDate' . $airDateLive . '">' . $searchData['airDate'] . '<div class="airTime">' . $searchData['airTime'] . '</div></div></div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '		<td class="teamLogoCol">' . PHP_EOL;
			if ( !empty( $searchData['teamLogo1'] ) ) {
				echo '				<div class="teamLogo"><img src="' . $searchData['teamLogo1'] . '" /></div>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="teamNameCol">' . PHP_EOL;
			if ( !empty( $searchData['teamName1'] ) ) {
				$isFavorite = $searchData['favorite1'] == true ? '<i class="fa fa-star favorite"></i>' : '';
				echo '				<span class="teamName' . $team1Ahead . '">' . $isFavorite . '<a href="#">' . $searchData['teamName1'] . '</a></span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="scoreCol">' . PHP_EOL;
			if ( !empty( $searchData['score1'] ) ) {
				echo '				<span class="score' . $team1Ahead . '">' . $searchData['score1'] . '</span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="timePeriodCol">' . PHP_EOL;
			echo '			<div class="timePeriod">' . $searchData['timePeriod'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '		<td rowspan="2" class="doubleHeight channelLogoCol">' . PHP_EOL;
			if ( !empty( $searchData['channelLogo'] ) ) {
				echo '		<div class="channelLogo"><img src="' . $searchData['channelLogo'] . '" /></div>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td rowspan="2" class="doubleHeight watchButtonCol">' . PHP_EOL;
			echo '			<div class="watchButton">' . $searchData['button'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '	</tr>' . PHP_EOL;
			echo '	<tr class="bottomRow">' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['teamLogo2'] ) ) {
				echo '				<div class="teamLogo"><img src="' . $searchData['teamLogo2'] . '" /></div>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['teamName2'] ) ) {
				$isFavorite = $searchData['favorite2'] == true ? '<i class="fa fa-star favorite"></i>' : '';
				echo '				<span class="teamName' . $team2Ahead . '">' . $isFavorite . '<a href="#">' . $searchData['teamName2'] . '</a></span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['score2'] ) ) {
				echo '				<span class="score' . $team2Ahead . '">' . $searchData['score2'] . '</span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			echo '			<div class="timeElapsed' . $searchData['timeElapsedWeight'] . '">' . $searchData['timeElapsed'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '	</tr>' . PHP_EOL;
		}
		echo '</table>' . PHP_EOL;
     }

	 $la_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 12",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "View Upcoming Clippers' Games",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/pacers-logo.png",
						 "teamName2" => "Indiana",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $la_upcoming[]  = array ( "screenShot" => "/images/lakers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 12",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/fox-sports-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "View Upcoming Lakers' Games",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/lakers.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => false,
						 "teamLogo2" => "/images/warriors-logo.png",
						 "teamName2" => "Golden State",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $la_upcoming[]  = array ( "screenShot" => "/images/dodgers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 12",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/fox-sports-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "View Upcoming Dodgers' Games",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/dodgers-logo.jpg",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/braves-logo.png",
						 "teamName2" => "Atlanta",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $la_upcoming[]  = array ( "screenShot" => "/images/kings-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 12",
						 "airTime" => "4:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/fox-sports-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "View Upcoming Kings' Games",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/kings-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => false,
						 "teamLogo2" => "/images/ducks-logo.png",
						 "teamName2" => "Anaheim",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $clippers_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 12",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/pacers-logo.png",
						 "teamName2" => "Indiana",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $clippers_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 14",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/suns-logo.png",
						 "teamName2" => "Phoenix",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $clippers_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 17",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/bucks-logo.png",
						 "teamName2" => "Milwaukee",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $clippers_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 19",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/bulls-logo.png",
						 "teamName2" => "Chicago",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );
	 $clippers_upcoming[]  = array ( "screenShot" => "/images/clippers-wide-thumb.jpg",
						 "airDate" => "Sun, Apr 23",
						 "airTime" => "7:00PM PST",
						 "airDateLive" => false,
						 "channelLogo" => "/images/ballstreams-logo.png",
						 "reminder" => "Add Reminder",
						 "category" => "",
						 "categoryColor" => "",
						 "logo" => "",
						 "smallTitlePart1" => "",
						 "team1" => "",
						 "versus" => "",
						 "smallTitlePart2" => "",
						 "team2" => "",
						 "eventSmallTitlePart" => "",
						 "event" => "",
						 "title" => "",
						 "paragraph" => "",
						 "ahead" => "team1",
						 "teamLogo1" => "/images/clippers-logo.png",
						 "teamName1" => "Los Angeles",
						 "score1" => "",
						 "favorite1" => true,
						 "teamLogo2" => "/images/spurs-logo.png",
						 "teamName2" => "San Antonio",
						 "score2" => "",
						 "favorite2" => false,
						 "timePeriod" => "",
						 "timeElapsed" => ""
	 );

	 function showSearchDataUpcoming( $searchDatas ) {
	 	echo '<table class="upcomingEvents">' . PHP_EOL;
	 	foreach ( $searchDatas as $searchData ) {
	 		$team1Ahead = $searchData['ahead'] == 'team1' ? ' ahead' : '';
			$team2Ahead = $searchData['ahead'] == 'team2' ? ' ahead' : '';
			$airDateLive = $searchData['airDateLive'] == true ? ' airDateLive' : '';
			echo '	<tr class="topRow">' . PHP_EOL;
	 		echo '		<td rowspan="2" class="screenView doubleHeight">' . PHP_EOL;
			echo '			<div class="screenShot"><img src="' . $searchData['screenShot'] . '" /></div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '		<td class="teamLogoCol">' . PHP_EOL;
			if ( !empty( $searchData['teamLogo1'] ) ) {
				echo '				<div class="teamLogo"><img src="' . $searchData['teamLogo1'] . '" /></div>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="teamNameCol">' . PHP_EOL;
			if ( !empty( $searchData['teamName1'] ) ) {
				$isFavorite = $searchData['favorite1'] == true ? '<i class="fa fa-star favorite"></i>' : '';
				echo '				<span class="teamName' . $team1Ahead . '">' . $isFavorite . '<a href="#">' . $searchData['teamName1'] . '</a></span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="scoreCol">' . PHP_EOL;
			if ( !empty( $searchData['score1'] ) ) {
				echo '				<span class="score' . $team1Ahead . '">' . $searchData['score1'] . '</span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td class="timePeriodCol">' . PHP_EOL;
			echo '			<div class="timePeriod">' . $searchData['airDate'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '		<td rowspan="2" class="doubleHeight channelLogoCol">' . PHP_EOL;
			if ( !empty( $searchData['channelLogo'] ) ) {
				echo '		<div class="channelLogo"><img src="' . $searchData['channelLogo'] . '" /></div>' . PHP_EOL;
			}
			if ( !empty( $searchData['paragraph'] ) ) {
				$viewLinkImg = '<img src="/images/view-icon-blue.png" />';
			} else {
				$viewLinkImg = '';
			}
			echo '		</td>' . PHP_EOL;
			if ( !empty( $searchData['reminder'] ) ) {
				$reminderIcon = '<img src="/images/reminder-icon-blue.png" />';
			} else {
				$reminderIcon = '';
			}
			echo '		<td rowspan="2" class="doubleHeight reminderCol">' . PHP_EOL;
			echo '			<div class="reminderLink">' . $reminderIcon . $searchData['reminder'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '		<td rowspan="2" class="doubleHeight viewCol">' . PHP_EOL;
			echo '			<div class="viewLink">' . $viewLinkImg . $searchData['paragraph'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '	</tr>' . PHP_EOL;
			echo '	<tr class="bottomRow">' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['teamLogo2'] ) ) {
				echo '				<div class="teamLogo"><img src="' . $searchData['teamLogo2'] . '" /></div>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['teamName2'] ) ) {
				$isFavorite = $searchData['favorite2'] == true ? '<i class="fa fa-star favorite"></i>' : '';
				echo '				<span class="teamName' . $team2Ahead . '">' . $isFavorite . '<a href="#">' . $searchData['teamName2'] . '</a></span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			if ( !empty( $searchData['score2'] ) ) {
				echo '				<span class="score' . $team2Ahead . '">' . $searchData['score2'] . '</span>' . PHP_EOL;
			}
			echo '		</td>' . PHP_EOL;
			echo '		<td>' . PHP_EOL;
			echo '			<div class="timeElapsed">' . $searchData['airTime'] . '</div>' . PHP_EOL;
			echo '		</td>' . PHP_EOL;
			echo '	</tr>' . PHP_EOL;
		}
		echo '</table>' . PHP_EOL;
	 }
