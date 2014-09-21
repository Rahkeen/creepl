<!DOCTYPE html>
<html ng-app='creepl'>

	<head>
		<title>Creepl</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
        
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
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
        <script>
            $(document).ready(function(){
                $("#searchPattern").autocomplete({
                    source: function(request, response){
                        $.get("/search_ajax.php", {
                            query: request.term
                        }, function(data){
                            response(data);
                        });
                    }
                });
            });
        </script>
    <a href="fbaccess.php">Login with Facebook</a>
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							<img src="images/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<input  id="searchPattern" type="search" placeholder="Find People"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
                                
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row wrap">
				<div class="col-md-12 gallery"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>We listen.</h2>
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>We discuss.</h2>
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>We develop.</h2>
								</div>
							</div>
						</div><!-- #camera_wrap_1 -->
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 project">
					<h3 id="counter">0</h3>
					<h4>Awesome Projects</h4>
					<p>Dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et lorem a laoreet phasellus ut nisi id leo molestie. </p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter1">0</h3>
					<h4>Happy Customers</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus eget diam et. laoreet phasellus ut nisi id leo.  </p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter2" style="margin-left: 20px;">0</h3>
					<h4 style="margin-left: 20px;">Professional Awards</h4>
					<p>Consectetur adipiscing elit quisque tempus eget diam et laoreet phasellus ut nisi id leo molestie adipiscing vitae a vel. </p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>The Best Way to Create Business Site &ndash; Attractive One Page</h3>
					<h4>Discover elegant solution for your online business fast, reliable, affordable.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 centPic">
					<img class="img-responsive"  src="images/bizPic.png"/>
				</div>
			</div>
		</div>   
    </div>
    
    <!--about start-->    
    
    <div id="about">
    	<div class="line2">
			<div class="container">
				<div class="row Fresh">
					<div class="col-md-4 Des">
						<i class="fa fa-heart"></i>
						<h4>Fresh & Clean Design</h4>
						<p>Nulla consectetur ornare nibh, a auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor. feugiat </p>
					</div>
					<div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4>Very Flexible</h4>
						<p>Nulla consectetur ornare nibh, a auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor. feugiat </p>
					</div>
					<div class="col-md-4 Fully">
						<i class="fa fa-tablet"></i>
						<h4>Fully Responsive</h4>
						<p>Nulla consectetur ornare nibh, a auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor. feugiat </p>
					</div>		
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3>Who We Are? Meet Our Team!</h3>
					<h4>We listen, we discuss, we advise and develop. We love to learn and use the latest technologies.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row team">
				<div class="col-md-4 b1">
						<img class="img-responsive" src="images/picTeam/picT1.png">
						<h4>Tom Simpson</h4>
						<h5>CEO</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br/>quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
			
			
				<div class="col-md-4">
						<img class="img-responsive" src="images/picTeam/picT2.png">
						<h4>John Doe</h4>
						<h5>Project Manager</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
		
			
				<div class="col-md-4 b3">
						<img class="img-responsive" src="images/picTeam/picT3.png">
						<h4>Anna White</h4>
						<h5>Developer</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br/> quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hr1">
					<hr/>
				</div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="64"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="64">
							  <span class="percent">64</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>WordPress</h3>
						<p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
					</div>
				</div>
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="22"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="22">
							  <span class="percent">22</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>HTML5</h3>
						<p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="84"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="22">
							  <span class="percent">84</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>CSS3</h3>
						<p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="45"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="45">
							  <span class="percent">45</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Woocommerce</h3>
						<p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
					</div>
				</div>
			</div>
		</div>	
		
		
		<div class="container">
			<div class="row aboutUs">
				<div class="col-md-12 ">
					<h3>What Our Customers Say About Us?</h3>
				</div>
			</div>
		</div>
		
		<div style="position: relative;">
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<img class="pic1Ab" src="images/picAbout/aboutP1.png">
							<h3>Anna Smith, Company Inc.</h3>
							<p>Nulla consectetur ornare nibh, a auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra, felis et venenatis. aliquam, nulla nisi lobortis elit ac.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about2">
						<img class="pic2Ab" src="images/picAbout/aboutP2.png">
							<h3>John Doe, Company Inc.</h3>
							<p>Consectetur ornare nibh, a auctor mauris scelerisque eu proin nec urna quis justo, adipiscing auctor, ut auctor feugiat fermentum nec quisque eget pharetra, felis et venenatis aliquam, nulla nisi lobortis elit, ac luctus.</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="horL"></div>
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
						<img class="pic1Ab" src="images/picAbout/aboutP3.png">
							<h3>Tom Sawyer, Company Inc.</h3>
							<p>A auctor mauris scelerisque eu proin nec urna quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra, felis et venenatis aliquam, nulla nisi lobortis elit, acnterdum ante feugiat vitae.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about2">
						<img class="pic2Ab" src="images/picAbout/aboutP4.png">
							<h3>Sarah White, Company Inc.</h3>
							<p>Ornare nibh a auctor, mauris scelerisque eu proin nec urna nec a quis justo adipiscing auctor ut auctor feugiat fermentum quisque eget pharetra felis et venenatis aliquam, nulla nisi lobortis elit, ac eleifend nisl ante nec lorem. </p>
						</div>
					</div>
				</div>
			</div>
		
		</div>
    </div>
    
    <!--contact start-->
    
    <div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Got a Question? We&rsquo;re Here to Help!</h3>
					<p>Get in touch with us</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Name *'/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Subject'/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Message *'></textarea>
						<div class="cBtn col-xs-12">
							<ul>
								<li class="clear"><a href="#"><i class="fa fa-times"></i>clear form</a></li>
								<li class="send"><a href="#"><i class="fa fa-share"></i>Send Message</a></li>
							</ul>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<li><i class="fa fa-home"></i>5512 Lorem Ipsum Vestibulum 666/13</li>
						<li><i class="fa fa-phone"></i>+1 800 789 50 12, +1 800 450 6935</li>
						<li><a href="#"><i class="fa fa-envelope"></i>mail@compname.com</li></a>
						<li><i class="fa fa-skype"></i>compname</li>
						<li><a href="#"><i class="fa fa-twitter"></i>Twitter</li></a>
						<li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</li></a>
						<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</li></a>
						<li><a href="#"><i class="fa fa-flickr"></i>Flickr</li></a>
						<li><a href="#"><i class="fa fa-youtube-play"></i>YouTube</li></a>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row ftext">
				<div class="col-md-12">
				<a id="features"></a>
				<h3>We Care About Our Clients and Can Make Their Life Easier!</h3>
				<p>The main peculiarity of template is the striking presentation when visitors just need to use the scrolling option to find all necessary information about your web project. </p>
				</div>
				<div class="cBtn">
					<ul style="margin-top: 23px; margin-bottom: 0px; padding-left: 26px;">
						<li class="dowbload"><a href="#"><i class="fa fa-star"></i>View All Features</a></li>
						<li class="buy"><a href="#"><i class="fa fa-download"></i>Buy This Template</a></li>
					</ul>
			</div>
			</div>
		</div>
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>Subscribe for Our Newsletter!</h3>
						<p>Subscribe to our newsletter email to get notification about fresh news, latest promos, giveaways and free stuff from Skew. Stay always up-to-date!</p>
						<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='Enter Your Email'/>
							<a href="#" class="subS">Subscribe!</a>
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
						<ul>
							<li class="soc1"><a href="#"></a></li>
							<li class="soc2"><a href="#"></a></li>
							<li class="soc3"><a href="#"></a></li>
							<li class="soc4"><a href="#"></a></li>
							<li class="soc5"><a href="#"></a></li>
							<li class="soc6"><a href="#"></a></li>
							<li class="soc7"><a href="#"></a></li>
							<li class="soc8"><a href="#"></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-12 text-right">
						<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
						
					</div>
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; 2014 Timber HTML Template. All Rights Reserved.</p>
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#project1">Projects</a></li>
							<li><a href="#news">News</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>

<div class="main_page">
			<div class="page_header floating_element">
				<span class="floating_element"> Welcome to Creepl </span>
			</div>

	</body>
</html>

