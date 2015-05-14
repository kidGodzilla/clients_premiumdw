<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
    <h2><?php if (function_exists('bcn_display')) { bcn_display(); } ?></h2>
    <p>Premium Design Works specializes in delivering the brand of your business, organization or artistic endeavor to new clientele via: <a title="Logo Portfolio" href="http://www.premiumdw.com/portfolio/logos/">logos</a>, <a title="Print Portfolio" href="http://www.premiumdw.com/portfolio/print/">print</a>, and <a title="Websites Portfolio" href="http://www.premiumdw.com/portfolio/websites/">websites</a>.</p>
    <?php while (have_posts()) : the_post(); ?>
    <section class="blog-excerpt">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Posting &raquo;</a></p>
    </section>
    <?php endwhile; ?>
    <div class="post-navigation">
    <span class="post-navigation-previous"><?php previous_posts_link('&laquo; Newer Postings'); ?></span>
    <span class="post-navigation-next"><?php next_posts_link('Older Postings &raquo;'); ?></span>
	</div>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
