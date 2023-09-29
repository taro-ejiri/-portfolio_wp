<?php get_header(); ?>
<!-- [page .p] -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post content" id="post-<?php the_ID(); ?>">
    <div class="l-page">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</div>
<!-- //[page .p] -->
<?php get_footer(); ?>