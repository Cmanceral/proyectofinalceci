<?php 
/*
//Primero hicimos un array con todos los parametros. Despues le pasamos este array a la funcion.
	$args = array(
		'post_type' => 'post',
		'category' => 2,
		'numberposts' => 2
		);

		$resultados = get_posts($args);
		foreach($resultados as $proyecto): setup_postdata($proyecto);
			print $proyecto->post_title;
			echo'<br/>';
		endforeach; wp_reset_postdata();

?>



<?php
if(have_posts()): while(have_posts()): the_post();
echo $post->post_title;
echo'<br/>';
endwhile; endif;
*/?>



<?php get_header();?>

<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<title> Cereal | Info </title>
	</head>
	<body>
		<div class="wrapper">

			<?php if(have_posts()): while(have_posts()): the_post(); 
				// echo '<pre>';
				// print_r($post);
				// echo '</pre>';
			?>
				
				<div class="posts-proyectos">	

					<div class="descripcion oswaldlight">
									<?php 
									ob_start();
									the_content('read full post', true);
									$postOutput = preg_replace('/<img[^>]+./','',ob_get_contents());
									ob_end_clean();
									echo $postOutput;
									?>
					</div><!--cierra descripcion-->
							
					<div id="play">
						<?php 
							$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
						?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>"></a>
					</div> <!-- cierra fotodisplay -->

					<div id="thetitle" class="oswaldbook">
						<?php the_title();?>
					</div>

				</div> <!-- cierra posts-proyectos-->

			<?php endwhile; endif; ?>
		</div> <!-- cierra wrapper-->

	</body>
	
					

 					

 <?php get_footer();?>
