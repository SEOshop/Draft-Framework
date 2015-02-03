<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{{ shop.language }}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{{ shop.language }}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{{ shop.language }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ shop.language }}"> <!--<![endif]-->
    <head>
        <!--{% include 'blocks/head.rain' %}-->
        <title>Local theme</title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="shortcut icon" href="" type="image/x-icon" />
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>        
	    <link rel="Stylesheet" href="assets/bootstrap.css" type="text/css" />  
	    <link rel="Stylesheet" href="assets/style.css" type="text/css" /> 

		<script type="text/javascript" src="http://static.webshopapp.com/assets/jquery-1-9-1.js"></script>
		<script type="text/javascript" src="http://static.webshopapp.com/assets/jquery-ui-1-10-1.js"></script>
		<script type="text/javascript" src="http://static.webshopapp.com/assets/jquery-migrate-1-1-1.js"></script>
		
		<script type="text/javascript" src="assets/global.js"></script>

		<!--[if lt IE 9]>
		    <link rel="stylesheet" href="{{ 'style-ie.css' | url_asset }}" />
		<![endif]-->
    </head>
	
	<body>  
		<header class="container">
			<nav class="row">
				<ul class="col-md-12 no-underline">
					<li class="item">
						<a class="itemLink" href="?index">Home</a>
					</li>
					<li class="item">
					    <a class="itemLink" href="?textpage">Textpage</a>
					</li>
					<li class="item sub">
					    <a class="itemLink" href="?catalog">Category</a>
						<ul class="subnav">
					        <li class="subitem">
						        <a class="subitemLink" href="?collection">Collection</a>
				                <ul class="subnav" style="display: none;">
				                    <li class="subitem"><a class="subitemLink" href="?collection">Collection 1</a></li>
				                    <li class="subitem"><a class="subitemLink" href="?collection">Collection 1</a></li>	                   
				                    <li class="subitem"><a class="subitemLink" href="?collection">Collection 2</a></li>
				                </ul>
				            </li>
		                    <li class="subitem">
		                    	<a class="subitemLink" href="?product">Product</a>
		                    </li>	                   
					        <li class="subitem">
						        <a class="subitemLink" href="?tagspage">Tags</a>
				            </li>
						</ul> 
					</li>
					<li class="item">
					    <a class="itemLink" href="?brands">Brands</a>
					</li>
				</ul> 	
			</nav>
		</header>
		<div class="container content">

		<?php
		if(isset($_GET['brands'])){
			include('brand-page.php');
		}
		else if(isset($_GET['catalog'])){
			include('catalog-page.php');
		}
		else if(isset($_GET['collection'])){
			include('collection-page.php');
		}
		else if(isset($_GET['index'])){
			include('index-page.php');
		}
		else if(isset($_GET['product'])){
			include('product-page.php');
		}
		else if(isset($_GET['tagspage'])){
			include('tags-page.php');
		}
		else if(isset($_GET['textpage'])){
			include('text-page.php');
		}
		?>	
		</div>
		
		<footer class="container">
			<div class="row">
				<small class="col-md-12">Footer</small>
			</div>			
		</footer>
	</body>
</html>
