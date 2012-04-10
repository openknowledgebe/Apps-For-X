<div class="sidebar" style="margin-right:0">
<ul>

<!-- ^^^^^^^^^^^^^^ widgetize sidebar ^^^^^^^^^^^^^^ -->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

<li><h2>Pages</h2>
<ul>
<?php wp_list_pages('title_li='); ?>
</ul>
</li>

<li><h2>Archives</h2>
<ul>
<?php wp_get_archives('type=monthly&limit=12'); ?>
</ul>
</li>

<?php endif; ?>
<!-- ^^^^^^^^^^^^^^ widgetize sidebar ^^^^^^^^^^^^^^ -->

</ul>
</div>