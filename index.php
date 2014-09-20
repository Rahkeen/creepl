<?php session_start ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app>
	<!--
	Modified from the Debian original for Ubuntu
	Last updated: 2014-03-19
	See: https://launchpad.net/bugs/1288690
	-->  

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
  		<script src="bower_components/angular/angular.js"></script>
  		
		<title>Creepl</title>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		  <link rel="stylesheet" href="/resources/demos/style.css">
		  <script>
		  $(function() {
		    var availableTags = [
		      "ActionScript",
		      "AppleScript",
		      "Asp",
		      "BASIC",
		      "C",
		      "C++",
		      "Clojure",
		      "COBOL",
		      "ColdFusion",
		      "Erlang",
		      "Fortran",
		      "Groovy",
		      "Haskell",
		      "Java",
		      "JavaScript",
		      "Lisp",
		      "Perl",
		      "PHP",
		      "Python",
		      "Ruby",
		      "Scala",
		      "Scheme"
		    ];
		    $( "#tags" ).autocomplete({
		      source: availableTags
		    });
		  });
		  </script>
	</head>
	<body>
		<div class="main_page">
			<div class="page_header floating_element">
				<span class="floating_element"> Welcome to Creepl </span>
			</div>

		 <div class="ui-widget">
		  <label for="tags">Tags: </label>
		  <input id="tags">
  </div>
	</body>
</html>

