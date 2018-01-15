<?php get_header(); ?>

<main>
<?php 
if( have_posts() ):
	while (have_posts() ): the_post(); ?> 
		<h3><a href="<?php the_permalink(); ?>"> <?php the_title();  ?> </a></h3>
		<p>  <?php echo get_the_excerpt(); ?> 
			<a href="<?php the_permalink() ?>">Selengkapnya...</a>
		</p>

		<p class="info_meta">
			<?php echo 'diposting oleh '; ?>
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
			<?php the_author(); ?>
			</a>
			<?php 
				echo ' , '; the_time('F j, Y'); ?> <?php echo ' | kategori: ';the_category(', ');
			?>
		</p>
<?php
	endwhile;
else:
	echo 'tidak ada post';
endif;
?>
</main>

<?php get_footer(); ?>