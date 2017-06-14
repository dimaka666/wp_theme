<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <link rel="stylesheet" type="text/css" href="style/main.css"> -->
	<script src="https://use.fontawesome.com/f687cd8fa3.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header>
		<div class="logo">
			<a href="https://mycyblog.000webhostapp.com/"><img src="<?php bloginfo('template_url'); ?>/images/logo-w.png" alt="" class="positive">
			<img src="<?php bloginfo('template_url'); ?>/images/logo-b.png" alt="" class="negative"></a>
		</div>

		<div class="nav_links">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_class' => '',
					'menu_id' => ''
					));
			?>		
		</div>
		<div class="hmb_menu">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>
		
			<!-- <a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a href="post.html">Sample Post</a>
			<a href="contact.html">Contact</a>
		 -->
	</header>