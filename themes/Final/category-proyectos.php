<?php/*
<?php get_header();?>
	<h1>Hola Proyectos</h1>
<?php get_footer();?>
*/?>

<?php/*THE LOOP*/?>

<?php get_header();?>

<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<title> Cereal | Info </title>
	</head>
	<body>
		<div class="wrapper">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				
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
