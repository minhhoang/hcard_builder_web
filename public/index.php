<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<title>Hcard Builder</title>
  	<meta name="description" content="Using HTML, CSS and Javascript code up the hCard builder to the specified design.">
  	<meta name="author" content="Nguyen Quang Minh Hoang">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0"/>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,800|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/hcard.css">
    <!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie8.css">
	<![endif]-->
</head>

<div class="site-wrapper" ng-app="" id="ng-app" class="ng-app">
    <div class="main-content clearfix">
		<div class="panel form">
			<h1>hCard Builder</h1>
			<form method="post" action="#">
				<div class="info-title">
					Personal Details	
				</div>
				<div class="row">
					<div class="col">
						<label for="given_name">Given Name</label>
						<input type="text" id="given_name" name="given_name" ng-model="givenName">
					</div>
					<div class="col">
						<label for="surname">Surname</label>
						<input type="text" id="surname" name="surname" ng-model="surName">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" ng-model="email">
					</div>
					<div class="col">
						<label for="phone">Phone</label>
						<input type="text" id="phone" name="phone" ng-model="phone">
					</div>
				</div>
				<div class="info-title">
					Address	
				</div>
				<div class="row">
					<div class="col">
						<label for="house_name">House Name or #</label>
						<input type="text" id="house_name" name="house_name" ng-model="houseName">
					</div>
					<div class="col">
						<label for="street">Street</label>
						<input type="text" id="street" name="street" ng-model="street">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="suburb">Suburb</label>
						<input type="text" id="suburb" name="suburb" ng-model="suburb">
					</div>
					<div class="col">
						<label for="state">State</label>
						<input type="text" id="state" name="state" ng-model="state">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="postcode">Postcode</label>
						<input type="text" id="postcode" name="postcode" ng-model="postcode">
					</div>
					<div class="col">
						<label for="country">Country</label>
						<input type="text" id="country" name="country" ng-model="country">
					</div>
				</div>
				<div class="row"><button>Create hCard</button></div>
			</form>
		</div>
		<div class="panel preview">
			<div class="hcard-preview-inner-wrapper">
				<div class="hcard-preview-title">
					hcard Preview
				</div>
				<h2>{{ givenName }} {{ surName }} &nbsp;</h2>
				<div class="content-preview clearfix">
					<div class="row">
						<div class="title">Email</div><div class="value email">{{ email }}&nbsp;</div>
					</div>
					<div class="row">
						<div class="title">Phone</div><div class="value phone">{{ phone }}&nbsp;</div>
					</div>
					<div class="row">
						<div class="title">Address</div><div class="value address">{{ houseName }} {{ street }}&nbsp;</div>
					</div>
					<div class="row">
						<div class="title hide-on-phone">&nbsp;</div><div class="value suburb">{{ suburb }}<span class="comma">,</span> {{ state }}&nbsp;</div>
					</div>
					<div class="row">
						<div class="title">Postcode</div><div class="value postcode">{{ postcode }}&nbsp;</div>
						<div class="title country-name">Country</div><div class="value country">{{ country }}&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<!--[if IE 8]>
	<script type="text/javascript" src="https://code.angularjs.org/1.2.0/angular.min.js"></script>
<![endif]-->
<script type="text/javascript" src="js/compiled.js"></script>
</body>
</html>