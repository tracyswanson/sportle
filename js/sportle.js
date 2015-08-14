/*
 * Description: Sportle.tv HTML/CSS markup to be adapted for Laravel Framework
 *
 * @author     	Tracy Swanson <tracy@freyadigital.com>
 * @uri     	http://freyadigital.com/
 *
 */

if (typeof jQuery === 'undefined') {
  throw new Error('JavaScript requires jQuery');
}

function hideDivs( index ) {
	switch ( index ) {
	    case 0: // searchResults
	        $( "#notifications" ).hide();
			$( ".notificationsTriangle" ).hide();
			$( "#userSettings" ).hide();
			$( ".userTriangle" ).hide();
			$( ".whatsOnDropDown" ).hide();
			$( ".whatsOnDropDownTriangle" ).hide();
			$( ".quickPicks" ).hide();
			$( ".quickPicksTriangle" ).hide();
			$( ".opaqueBackdrop" ).hide();
	        break;
	    case 1: // notifications
	        $( "#searchResults" ).hide();
			$( "#userSettings" ).hide();
			$( ".userTriangle" ).hide();
			$( ".whatsOnDropDown" ).hide();
			$( ".whatsOnDropDownTriangle" ).hide();
			$( ".quickPicks" ).hide();
			$( ".quickPicksTriangle" ).hide();
			$( ".opaqueBackdrop" ).hide();
	        break;
	    case 2: // userSettings
	        $( "#searchResults" ).hide();
	        $( "#notifications" ).hide();
			$( ".notificationsTriangle" ).hide();
			$( ".whatsOnDropDown" ).hide();
			$( ".whatsOnDropDownTriangle" ).hide();
			$( ".quickPicks" ).hide();
			$( ".quickPicksTriangle" ).hide();
			$( ".opaqueBackdrop" ).hide();
	        break;
	    case 3: // whatsOn
	        $( "#searchResults" ).hide();
	        $( "#notifications" ).hide();
			$( ".notificationsTriangle" ).hide();
			$( "#userSettings" ).hide();
			$( ".userTriangle" ).hide();
			$( ".quickPicks" ).hide();
			$( ".quickPicksTriangle" ).hide();
			$( ".opaqueBackdrop" ).hide();
	        break;
	    case 4: // quickPicks
	        $( "#searchResults" ).hide();
	        $( "#notifications" ).hide();
			$( ".notificationsTriangle" ).hide();
			$( "#userSettings" ).hide();
			$( ".userTriangle" ).hide();
			$( ".whatsOnDropDown" ).hide();
			$( ".whatsOnDropDownTriangle" ).hide();
	        break;
	    case 5: // quickPicks
	    	$( "#searchResults" ).hide();
	        $( "#notifications" ).hide();
			$( ".notificationsTriangle" ).hide();
			$( "#userSettings" ).hide();
			$( ".userTriangle" ).hide();
			$( ".whatsOnDropDown" ).hide();
			$( ".whatsOnDropDownTriangle" ).hide();
			$( ".quickPicks" ).hide();
			$( ".quickPicksTriangle" ).hide();
			$( ".opaqueBackdrop" ).hide();
	        $( "#choosePackage" ).hide();
	        $( "#leaguePackages" ).hide();
	        break;
	}
}

jQuery(document).ready(function() {
	// Clear Notifications
    $( ".markAllRead" ).click( function() {
		$( ".notificationsNumber" ).toggle();
		$( ".markAllRead" ).toggle();
		$( "#notifications li" ).removeClass( "unread ");
	});
	// Search Drop Down Menu Show/Hide
    $( "#searchContentField" ).click( function() {
    	hideDivs(0);
		$( "#searchResults" ).slideToggle( "slow", function() {
			// Animation complete.
		});
	});
	// Favorites Page Search Drop Down Menu Show/Hide
    $( "#favoritesSearchContentField" ).click( function() {
		$( "#favoritesSearchResults" ).slideToggle( "slow", function() {
			// Animation complete.
		});
	});
	// Favorites Page Search Drop Down Menu Show/Hide
    $( ".closeBanner" ).click( function() {
		$( this ).parent().hide();
	});
	// Notifications Drop Down Menu Show/Hide
    $( ".userNotifications" ).click( function() {
    	hideDivs(1);
		$( "#notifications" ).slideToggle( "slow", function() {
			// Animation complete.
			$( ".notificationsTriangle" ).toggle();
		});
	});
	// User Settings Drop Down Menu Show/Hide
    $( "#userProfile" ).click( function() {
    	hideDivs(2);
		$( "#userSettings" ).slideToggle( "slow", function() {
			// Animation complete.
			$( ".userTriangle" ).toggle();
		});
	});
	// Add League Package
    $( "#addLeaguePackage" ).click( function() {
    	hideDivs(5);
		$( "#choosePackage" ).slideToggle( "slow", function() {
			// Animation complete.
		});
	});
	// Show League Package
    $( "#choosePackage .chooseColumn" ).click( function() {
    	hideDivs(5);
		$( "#leaguePackages" ).slideToggle( "slow", function() {
			// Animation complete.
		});
	});
	// Reset League Package and Add League Package divs to hidden
	$( "#onBoardingLinkButton" ).click( function() {
    	hideDivs(5);
	});
	// Free Streams On/Off
    $( ".streamBtn" ).click( function() {
	  if ( $( this ).hasClass( "active" ) ) {

	  } else {
	  	$( ".streamBtn" ).removeClass( "active" );
	  	$( this ).addClass( "active" );
	  }
	});
	// Reminder On/Off
    $( ".reminder" ).click( function() {
	  if ( $( this ).hasClass( "on" ) ) {
		$( this ).removeClass( "on" );
	  } else {
	  	$( this ).addClass( "on" );
	  }
	});
	// Show/Hide Play Video Button on Hover
	$( ".screenOverlay" ).hover( function(){
	    $( this ).find( ".playVideoOverlay" ).css("visibility", "visible");
	},function(){
	    $( this ).find( ".playVideoOverlay" ).css("visibility", "hidden");
	});
	// Change Pull Down Button color state on rollover
	$( "#sportleSelect" ).hover( function(){
	    $( this ).find( ".sportsFilter .btn" ).css("background-image", "url(../images/select-sports-bkgd-hover.jpg)");
	},function(){
	    $( this ).find( ".sportsFilter .btn" ).css("background-image", "url(../images/select-sports-bkgd.jpg)");
	});
	var savedTeamName;
	// Favorites Team Name changes to UNFAVORITE on Hover
	$( ".favorites .teamName" ).hover( function(){
	    savedTeamName = $( this ).html();
	    $( this ).html( "UNFAVORITE" );
	},function(){
	    $( this ).html( savedTeamName );
	});
	// Favorites More Categories revealed on hover
	$( ".favorites #more" ).hover( function(){
	    $( "#otherCategories" ).show();
	    $( "#moreTriangle" ).show();
	},function(){
	    $( "#otherCategories" ).hide();
	    $( "#moreTriangle" ).hide();
	});
	// Reminder rollover change color and show tool tip
	$( ".reminder" ).hover( function(){
	    $( this ).parent().parent().find( ".reminderTip" ).show();
	},function(){
	    $( this ).parent().parent().find( ".reminderTip" ).hide();
	});
	// Scroll Up/Down
	// What's On Drop Down
	$( ".whatsOnNowLink" ).click( function() {
		hideDivs(3);
		if ( $( ".whatsOnDropDown" ).is( ":hidden" ) ) {
			$( ".search #eventContent" ).show();
			$( ".settings #eventContent" ).show();
		}
		$( ".whatsOnDropDown" ).slideToggle( "slow", function() {
			// Animation complete.
			$( ".whatsOnDropDownTriangle" ).toggle();
			if ( $( ".whatsOnDropDown" ).is( ":hidden" ) ) {
				$( ".search #eventContent" ).hide();
				$( ".settings #eventContent" ).hide();
			}
		});
	});
	// Scroll Up/Down
	// Quick Picks
	$( ".quickPicksLink" ).click( function() {
		hideDivs(4);
		if ( $( ".quickPicks" ).is( ":hidden" ) ) {
			$( ".search #eventContent" ).show();
			$( ".settings #eventContent" ).show();
		}
		$( ".quickPicks" ).slideToggle( "slow", function() {
			// Animation complete.
			$( ".quickPicksTriangle" ).toggle();
			$( ".opaqueBackdrop" ).toggle();
			if ( $( ".quickPicks" ).is( ":hidden" ) ) {
				$( ".search #eventContent" ).hide();
				$( ".settings #eventContent" ).hide();
			}
		});
	});
	// Scroll Right/Left
	// What's On Now
	$( ".whatsOnNow .rightArrow" ).click( function() {
		var childWidth = $( ".whatsOnNow .programListings" ).width();
		var parentWidth = $( ".whatsOnNow" ).width();
		var travelDistance = childWidth - parentWidth;
		travelDistance = "-" + travelDistance + "px";
		$( ".whatsOnNow .programListings" ).animate({
            marginLeft : travelDistance
        }, 1000 );
        $( ".whatsOnNow .rightArrow" ).hide();
        $( ".whatsOnNow .leftArrow" ).show();
	});
	$( ".whatsOnNow .leftArrow" ).click( function() {
		$( ".whatsOnNow .programListings" ).animate({
            marginLeft : "0"
        }, 1000 );
        $( ".whatsOnNow .leftArrow" ).hide();
        $( ".whatsOnNow .rightArrow" ).show();
	});
	// Scroll Right/Left
	// Featured
	$( ".featured .rightArrow" ).click( function() {
		var childWidth = $( ".featured .programListings" ).width();
		var parentWidth = $( ".featured" ).width();
		var travelDistance = childWidth - parentWidth;
		travelDistance = "-" + travelDistance + "px";
		$( ".featured .programListings" ).animate({
            marginLeft : travelDistance
        }, 1000 );
        $( ".featured .rightArrow" ).hide();
        $( ".featured .leftArrow" ).show();
	});
	$( ".featured .leftArrow" ).click( function() {
		$( ".featured .programListings" ).animate({
            marginLeft : "0"
        }, 1000 );
        $( ".featured .leftArrow" ).hide();
        $( ".featured .rightArrow" ).show();
	});
	// Scroll Right/Left
	// Quick Picks
	$( ".quickPicks .rightArrow" ).click( function() {
		var childWidth = $( ".quickPicks .programListings" ).width();
		var parentWidth = $( ".quickPicks" ).width();
		var travelDistance = childWidth - parentWidth;
		travelDistance = "-" + travelDistance + "px";
		$( ".quickPicks .programListings" ).animate({
            marginLeft : travelDistance
        }, 1000 );
        $( ".quickPicks .rightArrow" ).hide();
        $( ".quickPicks .leftArrow" ).show();
	});
	$( ".quickPicks .leftArrow" ).click( function() {
		$( ".quickPicks .programListings" ).animate({
            marginLeft : "0"
        }, 1000 );
        $( ".quickPicks .leftArrow" ).hide();
        $( ".quickPicks .rightArrow" ).show();
	});
});
