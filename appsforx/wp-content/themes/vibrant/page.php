<?php get_header(); ?>



<div id="column">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<!-- ^^^^^^^^^^^^^^ page code ^^^^^^^^^^^^^^ -->

<div class="post" id="post-<?php the_ID(); ?>">

<div class="post-top"></div>

<div class="entry">



<div class="content">

<h1><?php the_title(); ?></h1>

<?php the_content('Lees verder &raquo;'); ?><div class="clear"></div>

<?php wp_link_pages(array('before' => '<p><strong>Paginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<?php edit_post_link('Bewerk', '<p>', '</p>'); ?>

</div>



</div>

<div class="post-bottom"></div>

</div>

<!-- ^^^^^^^^^^^^^^ page code ^^^^^^^^^^^^^^ -->



<?php endwhile; endif; ?>



</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>