<!-- ^^^^^^^^^^^^^^ search form code ^^^^^^^^^^^^^^ -->
<form method="get" action="<?php bloginfo('url'); ?>/" id="srcform">
<fieldset>
<label class="hidden" for="s"></label>
<input type="text" value="<?php the_search_query(); ?>" name="s" id="srcinput" />
<input type="submit" value="Zoek" id="srcbutton" />
</fieldset>
</form>
<!-- ^^^^^^^^^^^^^^ search form code ^^^^^^^^^^^^^^ -->