<?php get_header(); ?>

<div id="column">

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

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>