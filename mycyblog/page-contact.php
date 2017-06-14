<?php get_header(); ?>
		<div class="content">
		<div class="section hero contact">
			<div class="headliner">
				<h1>Contact Me</h1>
				<p>Have question? I have answers (maybe).</p>
			</div>
		</div>
		<div class="section">
			<div class="post_body">
				<?php 

			if( have_posts() ):
				while( have_posts() ): the_post(); ?>

				<?php the_title('<h2>','</h2>')?>
				<p>
					<?php the_content(); ?>
				</p>
				<?php if( has_post_thumbnail() ): ?>
					<div><?php the_post_thumbnail('thumbnail'); ?></div>
				<?php endif ?>

				<?php endwhile;

			endif;

			?>


			</div>
		</div>
	</div>
<?php get_footer(); ?>