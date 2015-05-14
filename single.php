<?php get_header(); ?>
	
<!-- START CONTENT -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?php if (function_exists('bcn_display')) { bcn_display(); } ?></h2>
    <p><small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></p>
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
