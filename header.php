<?php

/** Man, procedural PHP? What a bummer. Feels like the 90s. Oh well, it'll
get the framework treamtment next time I guess **/

// Array of pages
$pages = array (
        'Home'          => 'index.html',
        'Community'	    => 'community.html',
        'About'         => 'about.html',
        'Get Started'   => 'get_started.html',
        'Who?'          => 'who.html',
        'Code'          => 'code.html',
    );
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Thimbl - Free Open Source Distributed Micro-blogging</title>
	<meta name="description" content="Welcome to thimbl, the free, open source, distributed micro-blogging platform. If you're tired of being locked in to one micro-blogging platform, or a single social network. Or you're weary of corporations hi-jacking your updates in the pursuit of money, then thimbl is for you." />
	<link rel="image_src" type="image/png" href="presentation.png" />
	 <link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.2.0/build/cssreset/reset-min.css">
	<link rel="stylesheet" type="text/css" href="base.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body id="sub-page">

<header>
	<nav>
		<div class="wrapper">
			<ul>
			    <?php
			        foreach($pages AS $name => $url):
			            echo '<li class="'. ($name == $page ? 'active' : '') .'">';
			            echo '<a href="'. $url .'">'. $name .'</a>';
			            echo '</li>';
			        endforeach;
			    ?>
			</ul>
		</div>
	</nav>
</header>
