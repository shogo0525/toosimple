<?php get_header(); ?>
<div class="wrap">
  <main>
    <div class="single-post">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="header">
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="date"><?php the_time('Y/m/d') ?></div>
          </div>

          <div class="body">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>

</div>
<?php get_footer(); ?>
