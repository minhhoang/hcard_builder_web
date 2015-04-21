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
</head>

<div class="site-wrapper">
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
						<input type="text" id="given_name" name="given_name">
					</div>
					<div class="col">
						<label for="surname">Surname</label>
						<input type="text" id="surname" name="surname">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="email">Email</label>
						<input type="text" id="email" name="email">
					</div>
					<div class="col">
						<label for="phone">Phone</label>
						<input type="text" id="phone" name="phone">
					</div>
				</div>
				<div class="info-title">
					Address	
				</div>
				<div class="row">
					<div class="col">
						<label for="house_name">House Name or #</label>
						<input type="text" id="house_name" name="house_name">
					</div>
					<div class="col">
						<label for="street">Street</label>
						<input type="text" id="street" name="street">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="suburb">Suburb</label>
						<input type="text" id="suburb" name="suburb">
					</div>
					<div class="col">
						<label for="state">State</label>
						<input type="text" id="state" name="state">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="postcode">Postcode</label>
						<input type="text" id="postcode" name="postcode">
					</div>
					<div class="col">
						<label for="country">Country</label>
						<input type="text" id="country" name="country">
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
				<h2>John Fairfax</h2>
				<div class="content-preview clearfix">
					<div class="row">
						<div class="title">Email</div><div class="value email">john.fairfax@fairfaxmedia.com.au</div>
					</div>
					<div class="row">
						<div class="title">Phone</div><div class="value phone">02 9282 2833</div>
					</div>
					<div class="row">
						<div class="title">Address</div><div class="value address">1 Darling Island Road</div>
					</div>
					<div class="row">
						<div class="title">&nbsp;</div><div class="value suburb">Pyrmont, NSW</div>
					</div>
					<div class="row">
						<div class="title">Postcode</div><div class="value postcode">2009</div>
						<div class="title country-name">Country</div><div class="value country">Australia</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<script type="text/javascript" src="js/compiled.js"></script>
</body>
</html>