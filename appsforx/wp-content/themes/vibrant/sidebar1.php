<div class="sidebar">
<ul>

<!-- ^^^^^^^^^^^^^^ widgetize sidebar ^^^^^^^^^^^^^^ -->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

<li><h2>Categories</h2>
<ul>
<?php wp_list_categories('orderby=name&title_li='); ?>
</ul>
</li>

<li><h2>Meta</h2>
<ul>
<li><?php wp_register('', ''); ?></li>
<li><?php wp_loginout(); ?></li>
<li><a href="<?php bloginfo('rss2_url'); ?>">Entries RSS</a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a></li>
<li><a href="http://wordpress.org/">WordPress.org</a></li>
</ul>
</li>

<li><h2>Blogroll</h2>
<ul>
<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
</ul>
</li>

<?php endif; ?>
<!-- ^^^^^^^^^^^^^^ widgetize sidebar ^^^^^^^^^^^^^^ -->

</ul>
</div>