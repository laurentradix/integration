<?php
get_header();
?>
<main class="container">

	<?php if (have_posts() ) : ?>
		
		<h2><?php single_cat_title(); ?></h2>
		<?php the_archive_description('<p>','</p>');?>
	<?php endif; ?>

	<section class="flex">
	<?php
	//pour chacun des serveur a afficher
	while (have_posts()):
		the_post();
	?>
		<article>

		
			<!--titre du serveur-->
			<h3 class="option"><?php the_title();?></h3>
			
			<!--contenu textuel du serveur-->
			<?php the_content(); ?>
			
			<!--Prix-->
			<h3><?=get_field('prix') ?></h3>
			

			<!--Lien-->
			<a href="<?php the_permalink(); ?>">Commander</a>
		
		</article>
	<?php
		endwhile;
	?>
		
	</section>

</main>

<?php
get_footer();