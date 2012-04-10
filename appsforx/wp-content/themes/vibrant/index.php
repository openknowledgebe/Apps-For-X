<?php get_header(); ?>



<div id="column">



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->

<div class="post" id="post-<?php the_ID(); ?>">

<div class="post-top"></div>

<div class="entry">



<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanente link naar <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<span class="date"><?php the_time('d/m/Y'); ?> - <?php the_time('H:i'); ?></span>



<div class="info">

<div class="cat">In categorie(ën) <?php the_category(', ') ?></div>

<div class="comments"><?php comments_popup_link('Geen reacties', '1 Reactie', '% Reacties'); ?></div>

<div class="clear"></div>

</div>



<div class="content">

<?php the_content('Lees verder &raquo;'); ?><div class="clear"></div>

</div>



<div class="tags"><?php edit_post_link('Bewerk', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?></div>



</div>

<div class="post-bottom"></div>

</div>

<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->



<?php endwhile; ?>



<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->

<div class="navigation">

<div class="navleft"><?php next_posts_link('&laquo; Oudere berichten') ?></div>

<div class="navright"><?php previous_posts_link('Nieuwere berichten &raquo;') ?></div>

<div class="clear"></div>

</div>

<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->



<?php else : ?>



<!-- ^^^^^^^^^^^^^^ page not found + search form ^^^^^^^^^^^^^^ -->

<div class="post">

<div class="post-top"></div>

<div class="entry">



<div class="content">

<h1>Pagina niet gevonden</h1>

<p>Sorry, de pagina die je zocht werd niet gevonden.</p>

<h3>Zoeken</h3>

<?php include(TEMPLATEPATH."/searchform.php"); ?>

</div>



</div>

<div class="post-bottom"></div>

</div>

<!-- ^^^^^^^^^^^^^^ page not found + search form ^^^^^^^^^^^^^^ -->



<?php endif; ?>



</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>