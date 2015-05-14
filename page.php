<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar(); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div id="content" class="page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php bcn_display(); // display page title & breadcrumb ?></h2>
        <?php get_spotlights(); // get gateway page spotlights ?>
        <?php the_content(''); // get written page content ?>
	<?php endwhile; endif; ?>
    <?php $page_excerpts = array('post_type' => 'page','numberposts' => -1,'post_status' => null,'post_parent' => $post->ID,'order' => ASC,'orderby' => title); $child_pages = get_posts($page_excerpts); ?>
    <?php foreach ($child_pages as $post) : setup_postdata($post); ?>
        <section class="page-excerpt">
        <h3><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); // get child page excerpts ?>
        <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
        </section>
	<?php endforeach; ?> 
       
	<?php get_portfolio(); // get portfolio page attachments ?>
    <?php get_team(); // get team page attachments ?>
    
 </div>
<!-- END CONTENT -->

<?php get_footer(); ?>