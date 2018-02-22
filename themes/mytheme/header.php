
			<!--site-header -->
			<header class="site-header">
				<!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
				<img src="<?php header_image(); ?>" height="auto" width="100%" alt="" />
				<div class=site-title-wrapper>
					<h1 class=site-title> <?php bloginfo('name'); ?></h1>
					<h5 class=site-subtitle> <?php bloginfo('description')?> </h5>
				</div>
				<nav class="site-nav">
					<?php wp_nav_menu($args = array(
					'theme_location' => 'primary'  
					)); ?>  
				</nav>
			</header>
	
		