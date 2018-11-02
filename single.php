<?php get_header(); ?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog"><?php if(the_title( '', '', false ) !='') the_title(); else echo '(untitled)';?> </a></h6>
<h3>Posted on <?php the_time('F jS, Y') ?> at <?php the_time('h:i a') ?>.</h3>
<div id="entry">

<?php the_content(); ?>


</div>

<br />


<?php comments_template(''); ?>

<?php endwhile; ?>










<?php else : ?>
<h1>Aw, hamburgers!</h1>

<div id="entry">
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>

</div>

<?php endif; ?>


</div>
<?php get_footer(); ?>