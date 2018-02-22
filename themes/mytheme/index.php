<! DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo(charset); ?>">
		<meta name="viewport" content="width=device-width">
		<title> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class()?>> 
		<div class=container>
			<?php
			get_header();
			get_template_part('posts');
			get_footer();
			?>
		</div>
	</body>
</html>