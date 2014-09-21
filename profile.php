<!DOCTYPE html>
<html ng-app="creepl">

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
		
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->

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
				{{profileCtrl.init()}}
				<div>
					<h1>{{profileCtrl.person.prim_user.FNAME}}</h1><br>
					<h1>{{profileCtrl.person.prim_user.LNAME}}</h1><br>
					<h1>{{profileCtrl.person.EMAIL}}</h1>
					<div id="profile reviews">
						<div ng-repeat="review in profileCtrl.person.reviews">
							<p>{{review.reviewer}}</p><br>
							<p>{{review.rating}}</p><br>
							<p>{{review.body}}</p><br>
							<p>{{review.upvotes}}</p><br>
							<p>{{review.downvotes}}</p><br>
							<p>{{review.funny}}</p><br>
						</div>
						<form ng-controller="ReviewController as reviewCtrl" 
						ng-show="profileCtrl.canReview()" ng-submit="reviewCtrl.addReview(profileCtrl.person)" >
							<blockquote>
								<b>Stars: {{review.stars}}</b><br>
								{{review.body}}<br>
								<cite>by: {{review.author}}</cite>
							</blockquote>
							
							<select ng-model="review.starts">
								<option value="1">1 star</option>
								<option value="2">2 star</option>
								<option value="3">3 star</option>
								<option value="4">4 star</option>
								<option value="5">5 star</option>
							</select>
							
							<textarea ng-model="review.body">
								
							</textarea>
							
							<label ng-model="review.author">by:</label>
							
							<input type="submit" value="Submit" />
						</form>
					</div>
				</div>
				<div id="friends">
					
				</div>
			</div>
			
		</div>

		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script>
$(document).ready(function(){
$(".bhide").click(function(){
$(".hideObj").slideDown();
$(this).hide(); //.attr()
return false;
});
$(".bhide2").click(function(){
$(".container.hideObj2").slideDown();
$(this).hide(); // .attr()
return false;
});

$('.heart').mouseover(function(){
$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
}).mouseout(function(){
$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
});


});
		</script>
		

		<script type="text/javascript">
$(document).ready(function(){

var $menu = $("#menuF");

$(window).scroll(function(){
if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
$menu.fadeOut('fast',function(){
$(this).removeClass("default")
.addClass("fixed transbg")
.fadeIn('fast');
});
} else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
$menu.fadeOut('fast',function(){
$(this).removeClass("fixed transbg")
.addClass("default")
.fadeIn('fast');
});
}
});
});
//jQuery
		</script>
		
		<script type="text/javascript" charset="utf-8">

jQuery(document).ready(function(){
jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});

});
		</script>
	</body>
</html>

