<?php
get_header();
?>

<h1>Serveur RADIX</h1>
<?php
	if(have_posts()) :
	while (have_posts()):
		the_post();

?>
<?php 
   the_content();
?>
<?php

	endwhile;
	the_posts_pagination(array(
		'prev_text'=>'page precedente',
		'next_text' =>'page suivante',
		'before_page_number'=>'pages'));
	
	else:
?>
	<h2>Désolé, pas de contenu à afficher</h2>
<?php
	endif;
?>


<?php
get_footer();
?>			