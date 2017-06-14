<?php get_header(); ?>
	<div class="content">
		<div class="section hero">
			<div class="headliner">
				<h1>Blog</h1>
				Test Assignment Blog.
			</div>
		</div>
		<div class="section">

		<?php
			if( have_posts() ):

				while( have_posts() ):the_post();?>
					<div class="post_item">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<h3><?php the_excerpt();?></h3>
						<p>Posted by <a href="about.php"><?php the_author(); ?> </a> on <?php the_date('F d, Y'); ?></p>
					</div>

					<?php endwhile;

				endif;
				?>

			<div class="paginator">
				<div href="#" class="new_posts"><?php next_posts_link( 'Older posts' ); ?></div>
				<div href="#" class="old_posts"><?php previous_posts_link( 'Newer posts' ); ?></div>
			</div>
		</div>

	</div>
<?php get_footer(); ?>