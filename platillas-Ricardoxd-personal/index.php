<!doctype html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<!-- http://bit.ly/18VB51x -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">

<!-- CSS Para todos los navegadores -->
<title>
    <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
</title>
 <meta name="description" content="<?php bloginfo( 'description' ); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/vendor/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.6.2-min.js"></script>


<!-- Iconos -->

<!-- 16x16 -->
<link rel="shortcut icon" href="/favicon.ico">
<!-- 32x32 -->
<link rel="shortcut icon" href="/favicon.png">
<!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
<!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
<!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
<!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

<!--iOS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Windows 8 / RT http://bit.ly/HHkt7m -->
<meta name="msapplication-TileImage" content="img/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#000">
<meta http-equiv="cleartype" content="on">
</head>

<body>
<header id="header" class="">
	<h1 class="h1"><?php bloginfo('name'); ?> <small>Programación y Diseño</small></h1>
		 
			<nav>

				<ul class="nav nav--fit">

						<li><a title="Inicio" href="#inico" style="
background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/inicio.png);
background-repeat: no-repeat;" class="flash">Inicio</a></li>
						<li><a href="<?php echo home_url(); ?>/acerca-de-mi/" style="
background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/perfil.png);
background-repeat: no-repeat;">Sobre mi</a></li>
						<li><a href="#!" style="
background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/productos.png);
background-repeat: no-repeat;">Productos</a></li>
						<li><a href="#!services.html" style="
background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/servicios.png);
background-repeat: no-repeat;">Servicios</a></li>
						<li><a href="<?php echo home_url(); ?>/contactame/" style="
background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/contactar.png);
background-repeat: no-repeat;">Contactos</a></li>
					</ul>
			</nav>
	 
</header><!-- /header -->
<div id="presentacion">
<span id="arriba"></span>
		<div class="efecto">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/inicio.png" alt="">

			<?php
				if ( is_category() ) {
				
foreach((get_the_category()) as $category) { 
	echo '<h2>'.$category->cat_name.'</h2>';
}
	
					// show an optional category description
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

 

					} elseif ( is_tag() ) {
						// show an optional tag description
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
					} else {
				?>
<h2>Inicio</h2>		
			<p>
			<?php bloginfo('description'); ?>
				<a href="<?php echo home_url(); ?>" title="" class="btn">ir</a>
			</p>

			<?php					}
							?>
			

		</div>
<span class="abajo"></span>	
</div>

<div id="tabla">
	<section class="centro">




		<article>
			<div id="papel">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'contenido', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>	

			</div>
		</article>	

		


		
	<!--	<article>
			<div id="papel">
				<h2>Titulo</h2>
					<p>contenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi web
					contenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi web
					contenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi webcontenio de mi web </p>
				
					
			</div>
		</article>	-->

</section>

<aside align="center" style="max-width: 200px;">
	<h3 >Menu</h3>
	<?php wp_nav_menu(); ?>
		<!-- Facebook Badge START --><a href="https://www.facebook.com/ricardoxd" target="_TOP" title="Ricardo Ordo&#xf1;ez"><img src="https://badge.facebook.com/badge/1614780440.716.715429682.png" style="border: 0px;" /></a><!-- Facebook Badge END -->	
	
<br>
  <a class="twitter-timeline"  href="https://twitter.com/RicardoOrdonezO"  data-widget-id="416771009371324416">Tweets por @RicardoOrdonezO</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<br>
</aside>
</div>

<footer>
	<p>Copyright 2014</p>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.8.3-min.js"><\/script>')</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>


<script>
var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>



</body>
</html>