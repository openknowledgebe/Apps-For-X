<?php get_header(); ?>

<div id="column">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->
<div class="navigation">
<div class="navleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="navright"><?php next_post_link('%link &raquo;') ?></div>
<div class="clear"></div>
</div>
<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->


<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->
<div class="post" id="post-<?php the_ID(); ?>">
<div class="post-top"></div>
<div class="entry">

<h2><?php the_title(); ?></h2>
<span class="date"><?php the_time('d/m/Y'); ?> - <?php the_time('H:i'); ?></span>

<div class="info">
<div class="cat">In categorie(ën) <?php the_category(', ') ?></div>
<div class="comments"><?php comments_popup_link('Geen reacties', '1 Reactie', '% Reacties'); ?></div>
<div class="clear"></div>
</div>

<div class="content">
<?php the_content('Lees verder &raquo;'); ?><div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Paginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="follow">Volg reacties op dit bericht via de <?php post_comments_feed_link('RSS 2.0'); ?> feed.</div>

<div class="state">
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
Je kunt een <a href="#respond">reactie</a> of een <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> van je eigen website achterlaten.

<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
Reacties zijn gesloten, maar je kunt wel een <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> van je eigen website achterlaten.

<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
Je kunt een reactie achterlaten, maar trackbacks zijn niet toegestaan.

<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
Reacties en trackbacks zijn gesloten.

<?php } ?>
</div>

<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" style="left;display: inline;margin:0 15px;"></div>

<div class="tags"><?php edit_post_link('Bewerk', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?></div>

<?php comments_template(); ?>

</div>
<div class="post-bottom"></div>
</div>
<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->

<?php endwhile; ?>

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
