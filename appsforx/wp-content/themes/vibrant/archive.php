<?php get_header(); ?>

<div id="column">

<?php if (have_posts()) : ?>

<div class="post">
<div class="post-top"></div>
<div class="entry">

<div class="content">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2>Archief voor de categorie &#8216;<?php single_cat_title(); ?>&#8217;</h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2>Posts met de tag &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2>Archief voor <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2>Archief voor <?php the_time('F, Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2>Archief voor <?php the_time('Y'); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2>Archief per auteur</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Archief</h2>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>

<!-- ^^^^^^^^^^^^^^ search result ^^^^^^^^^^^^^^ -->
<div class="result">

<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanente link naar <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

<span class="rdate"><?php the_time('d/m/Y'); ?> - <?php the_time('H:i'); ?></span>
<span class="rcomment"><?php comments_popup_link('Geen reacties', '1 Reactie', '% Reacties'); ?></span>
<div class="clear"></div>

<div class="rsummary"><?php the_excerpt(); ?></div>

<span class="rcat">In categorie(ën): <?php the_category(', ') ?></span>
<span class="rtags"><?php the_tags('Tags: ', ', ', ''); ?></span>
<div class="clear"></div>

</div>
<!-- ^^^^^^^^^^^^^^ search result ^^^^^^^^^^^^^^ -->

<?php endwhile; ?>
</div>

</div>
<div class="post-bottom"></div>
</div>

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