
<?php get_header();?>
	
	<div id="slide">	
	
		<?php 
			$queryfeatured = new WP_Query('category_name=featured');
			if( $queryfeatured -> have_posts() ):
			while($queryfeatured -> have_posts() ):
			$queryfeatured -> the_post();
		?>

		<div class="swap">
			<?php 
				$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>"></a>
		
		</div> <!-- cierra slide-->

		<?php endwhile; endif; ?>
	</div><!-- cierra slide-->


<?php get_footer();?>
