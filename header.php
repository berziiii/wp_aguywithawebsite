<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Nozama
 * @since Nozama 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->

<html lang="en">

<head>
    <title>Just a Guy with a Website</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Caribbean Doctor Mon adventures">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js" type="text/javascript">
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav>
			<div id="main-menu" class="side-menu">
				<a href="/#home"><img src="<?php bloginfo('template_directory'); ?>/images/beard-logo.png" alt="Beard Logo"></a>
				<ul>
					<a href="/#home">
						<li class="nav-item">
							<h6>
								Home
							</h6>
						</li>
					</a>
					<a href="/#about">
						<li class="nav-item">
							<h6>
								About
							</h6>
						</li>
					</a>
					<a href="/#blog">
						<li class="nav-item">
							<h6>
								Blog
							</h6>
						</li>
					</a>
				</ul>
				<p class="social-container">
					<a href="https://www.facebook.com/joeyp.rossmed" target="_blank"><span class="social social-facebook"></span></a>
					<a href="https://www.linkedin.com/pub/joey-pietropaoli/b6/740/521" target="_blank"><span class="social social-linked-in"></span></a>
					<a href="mailto:jwpietro@gmail.com"><span class="social social-e-mail"></span></a>
				</p>
			</div>
			<div class="nav-menu">
				<a href="/#home"><img src="<?php bloginfo('template_directory'); ?>/images/beard-logo.png" alt="Dr. Mon Logo"></a>
				<a id="nav-hamburger"><span class="glyphicons glyphicons-menu-hamburger"></span></a>
			</div>
			<div  id="responsive-menu" class="nav-menu-container hide">
				<p id="nav-menu-container-close" ><a id="close-responsive"><span>+</span></a></p>
				<ul class="nav-content">
					<a href="/#home">
						<li class="nav-item">
							<h6>
								Home
							</h6>
						</li>
					</a>
					<a href="/#about">
						<li class="nav-item">
							<h6>
								About
							</h6>
						</li>
					</a>
					<a href="/#blog">
						<li class="nav-item">
							<h6>
								Blog
							</h6>
						</li>
					</a>
				</ul>
				<p class="social-container">
					<a href="https://www.facebook.com/joeyp.rossmed" target="_blank"><span class="social social-facebook"></span></a>
					<a href="https://www.linkedin.com/pub/joey-pietropaoli/b6/740/521" target="_blank"><span class="social social-linked-in"></span></a>
					<a href="mailto:jwpietro@gmail.com"><span class="social social-e-mail"></span></a>
				</p>
			</div>
		</nav>
	</header>