<!DOCTYPE html>
<html lang="en">
	<head>
		<!--jquery scripts included at end of body-->
		<meta charset="UTF-8"/>
		
		<!--viewport to specify to broser web page optimised for mobile devices-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"/>
		<title>Eventovate Wedding Guest App</title>
		
		<!--non cdn for development so net connection dependncy-->
		<link href="jq/jquery.mobile-1.3.1.min.css" rel="stylesheet" type="text/css"/><!---include css-->
		<script type="text/javascript" src="jq/jquery-1.10.1.min.js"></script><!--include jquery-->
		<script type="text/javascript" src="jq/jquery.mobile-1.3.1.min.js"></script><!--include jquery mobile-->
		<script type="text/javascript" src="cordova.js"></script><!--include phonegap js-->
		
		<!--cdn for post development so that local libraries load faster if cached on servers and latest version
			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
			<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
			<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->
		
		<!-- links to overwrites for jq-->
		<link href="css/stylep.css" rel="stylesheet" type="text/css"/> <!--include overwrite jq css file-->
		<script src="js/myjs.js"></script>
		<script> 
			$( document ).bind( 'deviceready', function(){
				
				$( '#btnCamera' ).bind( 'touchstart' , function() {
					 navigator.camera.getPicture( function( data ) {
						$( '.capture')
						     .attr('src', 'data:image/jpeg;base64,' + data )			
							 .css('visibility','visible');
					}, function ( error ) {
							console.log( 'Error' );
					}, {
						destinationType: Camera.DestinationType.DATA_URL,
						SourceType: Camera.PictureSourceType.CAMERA,
						allowEdit: false,
						targetWidth: 135,
						targetHeight: 200
					} );
								
				} );
				
				$( '#btnGallery' ).bind( 'touchstart', function() {
					navigator.camera.getPicture( function ( data ) {
						$( '.capture' )
						.attr('src', 'data:image/jpeg;base64,' + data )			
						.css('visibility','visible');
					}, function ( error ) {
							console.log( 'Error' );
					}, {
						destinationType: Camera.DestinationType.DATA_URL,
						SourceType: Camera.PictureSourceType.PHOTOLIBRARY,
						allowEdit: false,
						targetWidth: 135,
						targetHeight: 200,
						mediaType: Camera.MediaType.Picture
					} );
				} );
				
				$( '.capture' ).load( function() {
					$( this )
						.css( 'left', Math.round( ( $( ' .panel' ).outerWidth() - $(this).outerWidth() ) /
						.css( 'top', Math.round( (270 -$(this).outerHeight() ) / 2) + 'px' );
				} );
			} );
		</script>
		
	</head>
	
	<body>
<!------------------Test Login Page-------------------------->
<div data-role="page" id="login"> 
	
	<div data-role="header">
		<h1>Login Guest App</h1>
	</div>
	
	
	<div data-role="content" position="absolute">
		<img src="images/logoMoposa.jpg" alt="moposa" width="340" height="" align="" style="">
 	</div> <!--end of image div-
	
	<div><!--beginning of sample form1 with basic valdation taken from javascript kit which will allow user on access to divert to 
		another page with correct login details-->
		<h3>Login to Moposa Guest App</h3>
		<form name = "myform" data-theme="a">
		<p>Please enter your user name <input type="text" name="username"> 
			<br />Please enter your password <input type="password" name="pword">
		<input type="button" data-theme="a" value="Sign in to Moposa" name="Submit" onclick= "validate()">
		<!--the on click event calls a function which will check user has inputted correct login details and 
		can then leave and enter assigned site-->
		</p>
		</form><!--end form1-->

	<!--<div data-role="content">	
		<ul data-role="listview" data-inset="true">
			<li><a href="#page2">RSVP</a></li>
            <li><a href="#page3">GuestBook</a></li>
			<li><a href="#page4">Take Photo</a></li>
         	<li><a href="#page5">Quiz</a></li>
		</ul>		
	</div>-->

	<!--<div data-role="footer">
		<h4>Page Footer</h4>
	</div>-->
	
</div>
		
<!--------------End Test Login page ------------------->	
<!--------------page one----------------->		

<div data-role="page" id="page"> 
	
	<div data-role="header">
		<h1>Guest App</h1>
	</div>
	
	
	<div data-role="content" position="absolute">
		<img src="images/logoMoposa.jpg" alt="moposa" width="340" height="" align="" style="">
 	</div> <!--end of image div-->
	
	<div data-role="content">	
		<ul data-role="listview" data-inset="true">
			<li><a href="#page2">RSVP</a></li>
            <li><a href="#page3">GuestBook</a></li>
			<li><a href="#page4" id="btnCamera">Take Photo</a></li>
         	<li><a href="#page5">Quiz</a></li>
		</ul>		
	</div>

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
	
</div>

<!------------page two --------------------->
		
	<div data-role="page" id="page2">
	
		<div data-role="header" id="page2Header">
			<a href="#page" data-icon="home" data-iconpos="notext">Home</a>
		<h1>RSVP</h1>
		</div>
    	
    <div data-role="content">	
		<ul data-role="listview">
			<li><a href="http://www.eventovate.com/" data-icon="arrow-r" data-theme="a">Invite and Menu Link</a></li>
            <li><a href="#page6">Map</a></li>
			<li><a href="http://www.moposa.com/Wedding/User/Login.aspx">Couples Moposa Website</a></li>
		</ul>		
	</div>	
	
		<div data-role="footer">
		<h4>Page Footer</h4>
		</div>
	
	
	</div>
		
<!------------page three --------------------------->		
		<div data-role="page" id="page3">
			
			<div data-role="header">
				<a href="#page" data-icon="home" data-iconpos="notext">Home</a>
				<h1>GuestBook</h1>
			</div>
	
			<div data-role="content">	
			<p>Live Feed</p>
			</div>
	
			<div data-role="footer" data-id="guestbookfooter" data-role="fixed">
	 		<div data-role="navbar">
	 			<ul>
	 				<li><a href="#">Write Comment</a></li>
					<li><a href="#" id="btnGallery">Add Photo</a></li>
					<li><a href="#" id="btnCamera">Take Photo</a></li>
	 	 		</ul><!--end of unordered list for nav bar-->
	 		</div><!--end of navbar for footer-->
		</div><!--end of data-role footer-->
		
		</div>
		
<!--------------page four--------------------->
		<div data-role="page" id="page4">
	
			<div data-role="header">
				<a href="#page" data-icon="home" data-iconpos="notext">Home</a>
			<h1>take Photo</h1>
			</div>
	
		<div data-role="content">
      		<p>will bring you to viewfinder and native photo functionality</p>
		</div>
	
		<div data-role="footer">
		<h4>Page Footer</h4>
		</div>
	
	</div>
<!-----------------------Page Five --------------->		

<div data-role="page" id="page5">
	
	<div data-role="header">
		<a href="#page" data-icon="home" data-iconpos="notext">Home</a>
		<h1>Quiz</h1>
	</div>

	<div data-role="content">
    	<p>Enter Name To take quiz</p>
	</div>
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
	
</div>
		
<!-------------------Page six ----------------------->

<div data-role="page" id="page6">
	
	<div data-role="header">
		<a href="#page" data-icon="home" data-iconpos="notext">Home</a>
		<h1>MAP</h1>
	</div>

	<div data-role="content">
    	<p>Map placeholder</p>
	</div>
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>

</div>

<!------------ end pages at the moment ---------------->		
			<!--<div>placeholder for link from page one</div> potential first page link
			<div>placeholder for link from page 2</div> potential second page link
			<div>placeholder for link from page 3</div> potential third page link
			<div>placeholder for link from page 4</div> potential fourth page link-->
			
			
		<!--including jquery at the base so it does not effect the loading of the page as advised by Alex from phpAcademy.org-->	
		<script type="text/javascript" src="js/jquery-1.10.1.min.js">
		</script><!--include jquery-->
		
		<script type="text/javascript" src="js/jquery.mobile-1.3.1.min.js">
		</script><!--include jquery mobile-->
		
	</body><!--end body-->
</html><!--end html-->