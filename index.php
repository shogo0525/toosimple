<?php get_header(); ?>
<div class="wrap">
  <main>
    <div class="top-post-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
            <div class="entry-left">
              <figure class="eyecatch">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png">
                <?php endif; ?>
              </figure>
            </div>
            <div class="entry-right">
              <h3 class="entry-title"><?php the_title(); ?></h3>
              <div class="date"><?php the_time('Y/m/d') ?></div>
            </div>
          </a>
        </article>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php
        $big = 9999999999;
        $args = array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'current' => max( 1, get_query_var('paged') ),
            'total'   => $wp_query->max_num_pages,
            'mid_size' => 1,
            'type' => 'list'
        );
        echo paginate_links($args);
        //var_dump(paginate_links($args));
        //echo (paginate_links($args)[0]);
      ?>
    </div>
  </main>

</div>
<?php get_footer(); ?>
