<?php get_header(); ?>

<div class="wrapper">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="single-title oswaldbook">
		<?php 
			the_title();
		?>
	</div>
	<div class="posts-single">	

		<div class="proyectosingle oswaldlight">
			<?php
				the_content();

			?>
			<div id="display">
				<?php	
					$url = wp_get_attachment_url(get_the_post_video($post->ID));
				?>
			</div> <!-- cierra display -->
					
		</div> <!-- cierra proyectos-single-->
			<!-- <div class="content-wrap">
				<div id="single">
					<?php 
							$args = array(
								'post_type' => 'attachment',
								'numberposts' => -1,
								'post_status' => published,
								'post_parent' => $post->ID
							); 

							$attachments = get_posts($args);
							if ($attachments) {
								foreach ($attachments as $attachment) {
									$url = wp_get_attachment_url($attachment->ID);
							?>
								<img src="<?php echo $url; ?>">
							<?php
								}
							}
					?>
				</div> -->
					
		</div><!-- cierra post single-->
	</div> <!--cierra proyectosingle-->

	<?php endwhile; endif; ?>
</div><!--cierra wrapper-->

<?php get_footer(); ?>