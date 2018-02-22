			<?php
			if(have_posts()) :
				while (have_posts()) : the_post();
					if(has_post_thumbnail()): ?>
						<article class="post">
							<div class="post-img-wrapper">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="post-content-wrapper">
								<div> <?php the_title(); ?> </div>
								<div class="post-content"> <?php the_content(); ?> </div>
							</div>
						</article>
					<?php else:?>
						<article class="simple-post">
							<div class="post-content-wrapper">
								<div> <?php the_title(); ?> </div>
								<div class="post-content"> <?php the_content(); ?> </div>
							</div>
						</article>
					<?php endif;
				endwhile;

				else:
					echo '<p> no content found </p>';
				endif;
			?>