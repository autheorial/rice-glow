<div id="sidebar">

<?php if (is_home()) { ?>
<h2>Welcome</h2>
<p>'sup? I like fandom, writing, and the internet. I complain about life and think about things, as well.</p>
<?php } ?>

<?php if (is_single()) { if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="box">
<?php previous_post('%', '&laquo; PREVIOUS', 'no'); ?>   
<?php next_post('%', '<span style="float:right;">NEXT &raquo;</span>', 'no'); ?> 
<div class="details">
<h2>Post Details</h2>
Category: <?php the_category(' &bull; ') ?>.
<br /><br /><?php the_tags( 'Tag(s): ', ', ', ''); ?>
<br /><br /><?php edit_post_link('Edit this post.', ' '); ?>
</div></div>
<?php endwhile; ?>
<?php endif; ?>
<?php } ?>


<?php if (is_page('')) { ?>
<div class="box">
<a href="javascript: history.go(-1)">&laquo; Go Back</a>
<span style="float:right"><a href="javascript: history.go(+1)">Go Forward &raquo;</a></span>
</div>
<?php } ?>

<?php
if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>

<?php endif; ?>


</div>