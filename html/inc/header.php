<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blysty</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
</head>

<body>
	<main class="main">
		<header id="header">
			<div class="header-section">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo.png" alt="Rlysty">
					</a>
				</div>
				<div class="add">
					<a href="#" data-toggle="modal" data-target="#addBlysty">
						<span>
							<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="37px" height="37px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
								<path fill="#6c9e72" d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
							</svg>
						</span>
					</a>
				</div>
			</div>
			<div class="header-section">
				<div class="search">
					<form>
						<span class="magnifier">
							<svg version="1.1" id="magnifier" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="26px" height="26px" viewBox="4.588 1.488 21.824 21.824" enable-background="new 4.588 1.488 21.824 21.824" xml:space="preserve">
								<g transform="translate(0,-952.36218)">
									<path d="M13.02,953.85c-4.639,0-8.432,3.792-8.432,8.431c0,4.639,3.792,8.431,8.432,8.431c1.785,0,3.445-0.556,4.813-1.511 l6.036,6.037c0.581,0.58,1.526,0.58,2.108,0c0.58-0.582,0.58-1.52,0-2.101l-6.045-6.045c0.955-1.366,1.52-3.027,1.52-4.812 C21.451,957.642,17.658,953.85,13.02,953.85z M13.02,956.826c3.03,0,5.455,2.425,5.455,5.456c0,3.03-2.425,5.456-5.455,5.456 c-3.031,0-5.456-2.425-5.456-5.456C7.564,959.251,9.989,956.826,13.02,956.826z" ></path>
								</g>
							</svg>
						</span>
						<input type="search" placeholder="Search">
					</form>
				</div>
			</div>
			<div class="header-section">
				<div class="categories">
					<div class="btn-group">
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="categories.php">categories1</a></li>
							<li><a href="categories.php">categories2</a></li>
							<li><a href="categories.php">categories3</a></li>
						</ul>
					</div>
				</div>
				<div class="global">
					<a href="#" data-toggle="modal" data-target="#blystyList">
						<svg version="1.1" class="global-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="41px" height="52px" viewBox="22.173 18.006 47.167 57.827" enable-background="new 22.173 18.006 47.167 57.827" xml:space="preserve">
							<g>
								<path d="M33.783,53.473c3.699,3.698,8.618,5.735,13.85,5.735c5.232,0,10.15-2.037,13.852-5.735 c7.635-7.637,7.634-20.062-0.002-27.699c-3.699-3.698-8.619-5.735-13.85-5.735c-5.231,0-10.15,2.037-13.85,5.735 C26.147,33.41,26.147,45.835,33.783,53.473z M36.201,28.165c2.019,0.408,4.099,1.177,6.158,2.236 c-0.646,0.764-1.324,1.515-2.049,2.24c-0.761,0.76-1.549,1.473-2.354,2.148c-1.051-2.044-1.813-4.108-2.223-6.111 c0.153-0.166,0.293-0.34,0.453-0.501C36.191,28.173,36.197,28.169,36.201,28.165z M59.079,51.066 c-0.157,0.158-0.329,0.297-0.491,0.445c-1.977-0.402-4.004-1.134-6.016-2.156c0.668-0.797,1.373-1.576,2.126-2.328 c0.718-0.717,1.46-1.386,2.214-2.025c1.033,2.027,1.77,4.071,2.171,6.063C59.082,51.064,59.08,51.064,59.079,51.066z M45.346,32.14 c1.423,0.946,2.802,2.041,4.123,3.242l-6.525,6.526c-1.205-1.325-2.303-2.71-3.252-4.139c1.04-0.846,2.052-1.753,3.023-2.724 C43.65,34.108,44.527,33.137,45.346,32.14z M49.582,47.632c-1.458-0.963-2.875-2.084-4.232-3.32l6.523-6.523 c1.232,1.354,2.35,2.766,3.311,4.219c-0.992,0.814-1.957,1.687-2.89,2.617C51.328,45.591,50.425,46.598,49.582,47.632z M42.934,46.727c1.475,1.354,3.026,2.569,4.623,3.635c-1.129,1.68-2.084,3.414-2.856,5.173c-2.654-0.483-5.134-1.615-7.244-3.328 L42.934,46.727z M50.48,52.109c1.479,0.789,2.975,1.44,4.467,1.945c-2.035,1.033-4.275,1.617-6.606,1.719 C48.953,54.532,49.666,53.307,50.48,52.109z M59.66,42.897c1.34-0.922,2.715-1.722,4.107-2.387c-0.134,2.463-0.824,4.895-2.074,7.1 C61.176,46.037,60.493,44.457,59.66,42.897z M57.909,39.978c-1.062-1.592-2.274-3.137-3.621-4.605l5.927-5.928 c1.783,2.201,2.893,4.766,3.35,7.423C61.639,37.682,59.742,38.731,57.909,39.978z M51.873,32.979 c-1.436-1.315-2.943-2.517-4.502-3.563c1.256-1.852,2.311-3.768,3.127-5.713c2.68,0.477,5.186,1.611,7.313,3.339L51.873,32.979z M44.45,27.665c-1.603-0.862-3.224-1.562-4.837-2.091c2.201-1.261,4.672-1.979,7.257-2.1C46.199,24.896,45.389,26.299,44.45,27.665 z M35.215,36.868c-1.219,0.828-2.467,1.552-3.732,2.171c0.084-2.324,0.654-4.632,1.73-6.751 C33.73,33.816,34.4,35.351,35.215,36.868z M31.744,42.667c1.774-0.773,3.524-1.736,5.219-2.876 c1.051,1.566,2.256,3.079,3.577,4.521l-5.489,5.49C33.331,47.68,32.229,45.222,31.744,42.667z"></path>
								<path d="M64.334,58.859l2.602,2.602l2.404-2.404l-4.967-4.966l-1.201,1.202c-4.161,4.162-9.693,6.453-15.579,6.453 s-11.419-2.291-15.579-6.453c-8.59-8.59-8.59-22.567,0-31.159l1.201-1.203l-4.926-4.925l-2.404,2.404l2.563,2.562 c-8.738,9.979-8.35,25.213,1.162,34.726c4.018,4.018,9.145,6.519,14.689,7.231v7.504h-7.47v3.399h18.34v-3.399h-7.47v-7.291 C53.884,65.116,59.725,62.902,64.334,58.859z"></path>
							</g>
						</svg>
					</a>
				</div>
				<div class="user">
					<a href="#" data-toggle="modal" data-target="#usermod">
						<svg version="1.1" class="user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="41px" height="48px" viewBox="2.563 2.583 25.875 25.833" enable-background="new 2.563 2.583 25.875 25.833" xml:space="preserve">
							<g id="info"></g>
							<g id="icons">
								<g id="user">
									<ellipse cx="15.5" cy="10.334" rx="6.459" ry="7.75"/>
									<path d="M28.158,24.671c-1.162-2.325-3.358-4.263-6.199-5.425c-0.775-0.259-1.68-0.259-2.326,0.129 c-1.291,0.775-2.583,1.162-4.133,1.162s-2.842-0.387-4.133-1.162c-0.646-0.258-1.55-0.388-2.325,0 c-2.841,1.162-5.037,3.1-6.2,5.425c-0.904,1.679,0.517,3.616,2.454,3.616h20.408C27.642,28.416,29.063,26.479,28.158,24.671z"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
				<div class="menus">
					<a href="pop.php">
						<span class="bars">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
				</div>
			</div>
		</header>