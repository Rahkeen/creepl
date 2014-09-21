<!DOCTYPE html>
<html ng-app='creepl'>

	<head>
		<title>Creepl Profile</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
		
		<script src="app/search.js"></script>
		<script>
			jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
	</head>
	<body>
		<script src="app/app.js"></script>
		<!--home start-->
		<div id="home">
			<div class="headerLine">
				<div id="menuF" class="default">
					<div class="container">
						<div class="row">
							<div class="logo col-md-4">
								<div>
									<a href="#"><img src="images/logo.png"></a>
								</div>
							</div>
							<div class="col-md-8">
								<div class="navmenu"style="text-align: center;">
									<ul id="menu">
										<li class="active" >
											<a href="#home">Home</a>
										</li>
										<li>
											<a href="#about">About</a>
										</li>
										<li>
											<a href="#project">Projects</a>
										</li>
										<li>
											<a href="#news">News</a>
										</li>
										<li class="last">
											<a href="#contact">Contact</a>
										</li>
										<!--li><a href="#features">Features</a></li-->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--contact start-->

		<div id="contact">
			
			<div class="container" ng-controller="ProfileController as profileCtrl">
				<!--{{profileCtrl.loadProfile(profileCtrl.profile.viewer)}}-->
				<div>
					<div >
						
						
						
						<p>{{profileCtrl.profile.prim_user.FNAME}}</p><br>
						<p>{{profileCtrl.profile.prim_user.LNAME}}</p><br>
						<p>{{profileCtrl.profile.prim_user.EMAIL}}</p>
					</div>
					
					<!-- Reviews -->
					<div style="position: relative;">
		
						<div class="container">
							<div class="row about" ng-repeat="review in profileCtrl.profile.reviews">
								<p>{{10 + 6}}</p>
								<script>
									console.log(profileCtrl);
									var reviewer = profileCtrl.loadProfile(review);
									console.log(reviewer);
								</script>
								
								<div class="col-md-6">
									<div class="about2" ng-switch on="review.RATING">
									<img class="pic2Ab" src="images/picAbout/aboutP2.png">
										<img src="images/1star.png" ng-switch-when="1">
										<img src="images/2star.png" ng-switch-when="2">
										<img src="images/3star.png" ng-switch-when="3">
										<img src="images/4star.png" ng-switch-when="4">
										<img src="images/5star.png" ng-switch-when="5">
										<h3>{{review.FNAME}}, {{review.LNAME}}</h3>
										<p>{{review.REVIEW}}</p>
										<div>
											<p>votes</p>
										</div>
										
										</div>
								</div>
							</div>
						</div>
					</div>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					<!-- Add Review -->
					<form ng-controller="ReviewController as reviewCtrl" 
							ng-show="profileCtrl.canReview()" ng-submit="reviewCtrl.addReview(profileCtrl.profile)" >
						<div class="container">
							<div class="row about">
								<div class="col-md-6">
									
								</div>
							</div>
							
						</div>
						
						<div>
							<fieldset class="rating">
	    						<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
	    						<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
	    						<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
	    						<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
	    						<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
							</fieldset>
						</div>
						
						<textarea>
							
						</textarea>
						
						<label>by:</label>
						
						<input type="submit" value="Submit" />
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
	</body>
</html>

