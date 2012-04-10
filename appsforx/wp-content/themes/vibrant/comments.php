<?php // Do not delete these lines

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

<?php
return;
}
}

$oddcomment = 'class="alt" ';
?>

<div id="combox">

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ Begin the formatting of OL list for comments display ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('Geen reacties', '1 Reactie', '% Reacties' );?> op &#8220;<?php the_title(); ?>&#8221;</h3>

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">

<div class="avatar"><?php echo get_avatar( $comment, 32 ); ?></div>
<div class="commentbody">
<p class="comment_author"><?php comment_author_link() ?> zegt:</p>
<p class="comment_time"><?php comment_date('d/m/Y') ?> - <?php comment_time() ?> <?php edit_comment_link('Bewerk','&nbsp;&nbsp;',''); ?></p>
<div class="comment_text"><?php comment_text() ?></div>
<?php if ($comment->comment_approved == '0') : ?>
<br /><em>Je reactie wacht op goedkeuring.</em>
<?php endif; ?>
</div>
<div class="clear"></div>

</li>
<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
<?php endforeach; ?>
</ol>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ End the formatting of OL list for comments display ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ Begin Leave A Reply Form ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<?php else : ?>
<!-- this is displayed if there are no comments so far -->

<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed ?>
<!-- If comments are closed. -->

<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">Reageer</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p>Je moet <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">ingelogd</a> zijn om te reageren.</p>

<?php else : ?>

<div class="reply">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<fieldset>

<?php if ( $user_ID ) : ?>
<p>Ingelogd als <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Logout">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="replytext" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author">Naam <?php if ($req) echo "(vereist)"; ?></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="replytext" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">E-mail (niet zichtbaar) <?php if ($req) echo "(vereist)"; ?></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="replytext" />
<label for="url">Website</label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" tabindex="4" class="replyarea"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Reageren" class="replybutton" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</fieldset>
</form>
</div>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ End Leave A Reply Form ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

</div>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>